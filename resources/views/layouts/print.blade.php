<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/paper.css')    }}" rel="stylesheet">
        <link href="{{ asset('css/print.css')    }}" rel="stylesheet">
        <style>@page { size: @yield('paper-size') }</style>
    </head>
    <body class="@yield('paper-size')">
        @yield('contents')
    </body>
</html>