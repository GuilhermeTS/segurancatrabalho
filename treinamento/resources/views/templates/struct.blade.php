<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta name="viewport" content="height=device-height, initial-scale=1">
        <meta name="viewport" content="height=device-height, user-scalable=no">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}">
        @yield('css')
    </head>
    <body id="body">
        @yield('body')
        <script src="{{ asset('js/app.css') }}"></script>
    </body>
</html>