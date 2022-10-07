<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cobra.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lexend Mega' rel='stylesheet'>
        {{-- <link href="https://fonts.cdnfonts.com/css/gellatio-personal-use" rel="stylesheet"> --}}
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href={{url('css/soon.css')}}>
        @vite('resources/css/app.css')
        
    </head>
    <body>
        {{$slot}}
    </body>
</html>
