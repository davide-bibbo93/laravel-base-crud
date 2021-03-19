<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>laravel-base-crud - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
