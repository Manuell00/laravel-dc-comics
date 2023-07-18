<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Dc Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <!-- Includo il componente dell'header -->
    @include("components.header")

    <!-- Creo una yeld per le altre pagine -->
    <div class="container-fluid">
        @yield("content")
    </div>


    <!-- Includo il componente del footer -->
    @include("components.footer")

</body>

</html>