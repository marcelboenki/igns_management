<!doctype html>
<html lang="de" data-bs-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('libs/font-awesome/css/font-awesome.css') }}">
        <link href="{{ asset('css/igns.css') }}" rel="stylesheet">
        @yield('customCSS')
    </head>
    <body>
        @empty($moduleNav)
            @include('navigation.navigation')
        @endempty
        @yield('moduleNav')
        <div class="container-fluid">

            @yield('header')

            @yield('content')
        </div>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
        @yield('customJS')
    </body>
</html>
