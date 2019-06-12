# Build backend source
FROM composer as backend
WORKDIR /app

COPY composer.json composer.lock /app/
RUN composer install  \
    --ignore-platform-reqs \
    --no-ansi \
    --no-autoloader \
    --no-dev \
    --no-interaction \
    --no-scripts

COPY . /app/
RUN composer dump-autoload --optimize --classmap-authoritative

# Build frontend assets
FROM node:10 as frontend
WORKDIR /app

COPY package.json package-lock.json webpack.mix.js  /app/
RUN npm install

COPY resources/assets /app/resources/assets
RUN npm run prod

# Build app image
FROM weareflip/nginx-php as app
LABEL maintainer="We Are Flip <https://github.com/weareflip>"

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libmagickwand-dev \
    imagemagick \
    wget \
    gnupg \
&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
&& docker-php-ext-install \
    gd \
    mbstring \
    opcache \
    mysqli \
    pdo_mysql \
&& pecl install imagick \
&& docker-php-ext-enable imagick

WORKDIR /app

COPY --from=backend /app /app
COPY --from=frontend /app/public/dist /app/public/dist

# Run some commands
WORKDIR /app

RUN chgrp -R www-data /app/storage /app/bootstrap/cache && chmod -R ug+rwx /app/storage /app/bootstrap/cache
COPY .docker/build/host.conf /etc/nginx/conf.d/default.conf
COPY .docker/build/php.ini /usr/local/etc/php/php.ini
