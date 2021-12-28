<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('baseStyles')
    @include('sweetalert::alert')
    <title>Hello, world!</title>
  </head>
  <body>
    

    @yield('body')



    @yield('scriptStyles')
  </body>
</html>