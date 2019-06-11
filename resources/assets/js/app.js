import "@webcomponents/webcomponentsjs";
import 'popper.js';
import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/collapse';
import 'bootstrap/js/dist/dropdown';
import 'slick-carousel';

import Navigation from './components/navigation';
import HeroCarousel from './components/hero-carousel';
import Carousel from './components/carousel';

window.customElements.define('app-navigation', Navigation);
window.customElements.define('hero-carousel', HeroCarousel);
window.customElements.define('app-carousel', Carousel);

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});
