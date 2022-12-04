<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>l2tops.fun</title>
    </head>
    <body>


        <div class="app">
            
            @yield('content')
        
        </div>
        
    </body>
</html>
