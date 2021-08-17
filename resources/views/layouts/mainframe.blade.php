<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Keywords" content="ГБО, Тольятти, ГБО тольятти, установка гбо, гбо. установка, авто">
        <meta name="description" content="Установка и диагностика ГБО в Тольятти.">
        <meta name="google-site-verification" content="lRzdZFp9yfUbUNKmHXFpG_6IYnf8Yp_84C5N6ZSkego" />
        <title>@yield('title')</title>
        <!-- tab -->
        <link rel="icon" href="images/icon.png">

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <!-- bootstrap -->
        <link rel="stylesheet" href="../../bootstrap-4.6.0-dist/css/bootstrap.min.css"/>
        <script src="../../bootstrap-4.6.0-dist/js/bootstrap.min.js"></script>

        <!-- my css -->
        <link rel="stylesheet" type="text/css" href="../../css/main.css">
        <link rel="stylesheet" type="text/css" href="../../css/navbar.css">
        <link rel="stylesheet" type="text/css" href="../../css/cards.css">
        <link rel="stylesheet" type="text/css" href="../../css/pricelist.css">
        <link rel="stylesheet" type="text/css" href="../../css/footer.css">
        <link rel="stylesheet" type="text/css" href="../../css/map.css">
        <link rel="stylesheet" type="text/css" href="../../css/whall.css">
        <link rel="stylesheet" type="text/css" href="../../css/rec.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap');
            *{
                font-family: 'Montserrat', 'Roboto', sans-serif;
            }
            h1{
                font-size: 4vh;
            }
        </style>
    </head>
    <body>

        @include('inc.nav')

        @yield('content')

        @include('inc.foooter')

        <a id="call"  href="tel:+79270273293" role="button">
            <span  class="material-icons call">
                call
            </span>
        </a>
    </body>


</html>
