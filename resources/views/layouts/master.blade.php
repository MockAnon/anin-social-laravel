<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('c')">
        <meta name="author" content="Jaron D Evans">

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" defer="defer">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
    </head>   
    <body>
      @include('includes.header')
      <!-- @include('component.message') -->
      

      @yield('content02')
      <div class="container">
        @yield('content')
      </div>

      @include('component.footer')
      @yield('javascript')
    </body>
    
</html>


