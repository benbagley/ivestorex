<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Investorex</title>

        <link rel="stylesheet" href="{{ asset('../css/app.css') }}">
    </head>
    <body>

        @include('layouts/header')
        @yield('content')

    </body>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/2ed7438b9d.js"></script>
    <script src="{{ asset('../js/all.js') }}"></script>
</html>
