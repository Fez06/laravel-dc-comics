<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         @vite('resources/js/app.js')
    </head>


    <body>
        <h1>sei nella home</h1>

        <a href="{{ route('comics.index')}}">vai a index</a>
        
    </body>
</html>
