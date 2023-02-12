<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <div id="app"></div>
        <script src="{{ mix('js/manifest.js') }}" type="text/javascript"></script>
        <script src="{{ mix('js/vendor.js') }}" type="text/javascript"></script>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
