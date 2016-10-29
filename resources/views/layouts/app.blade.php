<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- For IE 11, Chrome, Firefox, Safari, Opera --> 
    <link rel="icon" href="{{ asset('images/favicon-16.png') }}" sizes="16x16" type="image/png"> 
    <link rel="icon" href="{{ asset('images/favicon-32.png') }}" sizes="32x32" type="image/png"> 
    <link rel="icon" href="{{ asset('images/favicon-48.png') }}" sizes="48x48" type="image/png"> 
    <link rel="icon" href="{{ asset('images/favicon-62.png') }}" sizes="62x62" type="image/png"> 
    <link rel="icon" href="{{ asset('images/favicon-192.png') }}" sizes="192x192" type="image/png"> 

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @yield('header')
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>

    @yield('footer')
</body>
</html>
