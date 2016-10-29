<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- For IE 11, Chrome, Firefox, Safari, Opera -->
        <link rel="icon" href="{{ asset('images/favicon-16.png') }}" sizes="16x16" type="image/png">
        <link rel="icon" href="{{ asset('images/favicon-32.png') }}" sizes="32x32" type="image/png">
        <link rel="icon" href="{{ asset('images/favicon-48.png') }}" sizes="48x48" type="image/png">
        <link rel="icon" href="{{ asset('images/favicon-62.png') }}" sizes="62x62" type="image/png">
        <link rel="icon" href="{{ asset('images/favicon-192.png') }}" sizes="192x192" type="image/png">

        <meta name="theme-color" content="#F4645F">

        @yield('header')

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="container">
            @yield('content')
        </div>

    </body>

    @yield('footer')

</html>
