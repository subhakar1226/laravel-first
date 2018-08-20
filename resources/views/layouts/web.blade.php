<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>@yield('title')</title>
   </head>
   <body>
      @section('sidebar')
         This is the master sidebar.
      @show

      <div class="container">
         @yield('content')
      </div>
   </body>
</html>
