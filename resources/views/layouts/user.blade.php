<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>La Molisana - @yield('titolo')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://kit.fontawesome.com/a51364b666.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include ('partials.header')
        <main>
            @yield('main')
        </main>
        @include ('partials.footer')
        @yield('script')
    </body>
</html>
