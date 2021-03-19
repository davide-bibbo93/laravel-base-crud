<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>laravel-base-crud - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        {{-- in caso se la validazione fallisse --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
