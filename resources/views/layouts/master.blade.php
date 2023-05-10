<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <!-- start google font link -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <!-- end google font link -->
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('css/form.css') }}">
        <link rel="stylesheet" href="{{ asset('css/headerStyle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
        
        <title>Form</title>
    </head>

    <body>
        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
        
        <script src="{{ asset('js/main.js') }}"></script> 
    </body>

</html>





