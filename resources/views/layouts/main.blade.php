<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="files/logo/portfolio_icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    @yield('custom_css')
</head>
<body translate="no">
<div class="wrapper">
    <div class="mobile-menu">
        <ul class="mobile-menu__links">
            <li class="mobile-menu__link">
                <a href="{{route('home')}}">Информация</a>
            </li>
            <li class="mobile-menu__link">
                <a href="{{route('portfolio')}}">Портфолио</a>
            </li>
            <li class="mobile-menu__link">
                <a href="{{route('order')}}">Заказать сайт</a>
            </li>
        </ul>
    </div>
    <header class="header">
        <div class="burger-menu">
            <span></span>
        </div>
        <div class="header__body">
            <div class="header__navigation">
                <div class="container">
                    <ul class="header__links">
                        <li class="header__link-1 {{$_isHome}}">
                            <a href="{{route('home')}}">Информация</a>
                            <div class="header__link-line-1 {{$_isHome}}"></div>
                        </li>
                        <li class="header__link-2 {{$_isPortfolio}}">
                            <a href="{{route('portfolio')}}">Портфолио</a>
                            <div class="header__link-line-2 {{$_isPortfolio}}"></div>
                        </li>
                        <li class="header__link-3 {{$_isOrder}}">
                            <a href="{{route('order')}}">Заказать сайт</a>
                            <div class="header__link-line-3 {{$_isOrder}}"></div>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('header_about')

            @if($_isHome == 'view')
                <a class="header__button" href="#contacts">
                    <span>&#8595;</span>
                </a>
            @endif
            <img class="bg-circles" src="files/img/circles.png">
        </div>
    </header>

    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
