<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

                 <title>SMART PARCELS</title>

                        <!-- Fonts -->
                    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

                         <!-- link for Styles -->
                    <link href="/css/main.css" rel="stylesheet">       
        </head>
    <body>
        @yield('content')
            <footer> 
                   copyright @  parcel service   
            </footer>

    </body>
</html>