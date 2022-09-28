<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cobra.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.cdnfonts.com/css/gellatio-personal-use" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" /> --}}
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href={{url('css/main.css')}}>
        <link rel="stylesheet" type="text/css" href={{url('css/home.css')}}>
        <link rel="stylesheet" type="text/css" href={{url('css/about.css')}}>
        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/0ad76f9f0e.js" crossorigin="anonymous"></script>
    </head>
    <body >
        <x-navbar/>
        <main>
            {{$slot}}
        </main>
        <x-footer/>
    </body>
    
</html>
