<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') | Ikatan Alumni STMIK Sumedang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link -->
    @include('layouts.dev.link')
    <!-- End Link -->

  </head>
  <body>

    <!-- Nav -->
    @include('layouts.header')
    <!-- End Nav -->

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

    <!-- Footer -->
    @include('layouts.footer')
    <!-- End Footer -->



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Script -->
  @include('layouts.dev.script')
  <!-- End Script -->

  </body>
</html>
