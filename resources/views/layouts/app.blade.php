<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('/dist/media/brands/favicon.ico') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('/dist/css/app.css') }}">
    <title>{{ (isset($title) ? $title . ' - ' : '') . "Wolff" }}</title>

    {{ wp_head() }}

</head>
<body>
  <div class="site">
    @include('layouts.partials.header')
    <div class="site-content">
      @yield('content')
    </div>
    @include('layouts.partials.footer')
  </div>
  {{ wp_footer() }}
  <script type="text/javascript" src="{{ asset('/dist/js/manifest.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/dist/js/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/dist/js/app.js') }}"></script>
  @stack('scripts')

</body>
</html>