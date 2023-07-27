<!doctype html>
<html class="no-js" lang="en">
    <head>
        @stack('title')
        <meta name="description" content="H-Code - A premium portfolio template from ThemeZaa">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="ThemeZaa">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
       
        @include('main/links')
    </head>
    <body>
        {{View::make('main/header')}}
        @yield('content')
        {{View::make('main/footer')}}
        @include('main/scripts')
    </body>
</html>