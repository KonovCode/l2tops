<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite('resources/css/app.css')

        <title>Анонсы Серверов Lineage 2|Рейтинги Топ Серверов л2|L2TOPS.NET</title>

        <meta name="description" content="Наш анонсер включает рейтинги серверов л2. Мы собрали для вас топ сервера л2 разной популярности.  С нами Вы не пропустите новые анонсы серверов, поскольку администрация круглосуточно мониторит всевозможные проекты. Только надежные проекты попадают в наш топ серверов l2." />

        <style>
           html,body {
                height: 100% !important;
                width: 100% !important;
            }
            #app {
                width: 100% !important;
                height: 100% !important;
                display: flex;
                flex-direction: column;
               
            }
        </style>

<link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
<link rel="manifest" href="favicon/site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<meta name="google-site-verification" content="YqLcLcC8mm9WFZQd-8NsyCjRGwXJdUnEj9vPb6O6108" />

    </head>

    <!-- Google tag (gtag.js) --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JGSCFZCC40"></script> 
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-JGSCFZCC40'); </script>

    <body>


        <div id="app">
            
            @yield('content')
        
        </div>
        
    </body>
</html>
