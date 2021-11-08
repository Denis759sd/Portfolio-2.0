@extends('layouts.main')

@section('title', 'О нас')

@section('custom_css')
    <link rel="stylesheet" href="css/index.css">
@endsection

@section('header_about')
    <div class="header__about">
        <div class="container">
            <div class="header__title">
                О нас
            </div>
            <div class="header__text">
                Привет! Мы небольшая веб-студия, занимающаяся созданием сайтов "под ключ"
                по самым доступным ценам. Наши сайты обладают адаптивом под все виды устройств
                и поисковые системы. В разработке каждого проекта используются последние технологии сайтостроения,
                что делает сайт максимально удобным и качественным.
            </div>
        </div>
    </div>
@endsection

@section('content')
    <main class="main">
        <div id="contacts" class="contacts">
            <div class="container">
                <div class="contacts__body">
                    <div class="contacts__item">
                        <div class="contacts__subtitle">
                            Наш дизайнер:
                        </div>
                        <div class="contacts__name">
                            Евгений
                        </div>
                        <div class="contacts__number">
                            <a href="tel:+375 (33) 688-59-34">+375 (33) 688-59-34</a>
                        </div>
                        <div class="contacts__mail">
                            <a href="mailto:zdezic@gmail.com">zdezic@gmail.com</a>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__subtitle">
                            Наш верстальщик:
                        </div>
                        <div class="contacts__name">
                            Данила
                        </div>
                        <div class="contacts__number">
                            <a href="tel:+375 (33) 325-92-24">+375 (33) 325-92-24</a>
                        </div>
                        <div class="contacts__mail">
                            <a href="mailto:zayko_danil@mail.ru">zayko_danil@mail.ru</a>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <div class="contacts__subtitle">
                            Наш back-end разработчик:
                        </div>
                        <div class="contacts__name">
                            Денис
                        </div>
                        <div class="contacts__number">
                            <a href="tel:+375 (33) 788-10-91">+375 (33) 788-10-91</a>
                        </div>
                        <div class="contacts__mail">
                            <a href="mailto:kotickpro@gmail.com">kotickpro@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            @for($i = 1; $i <= 3; $i++)
                <img class="bg-circles-{{$i}} bg-circles" src="files/img/circles.png">
            @endfor
        </div>
        <div class="price">
            <div class="container">
                <div class="price__body">
                    <div class="price__title">
                        Цены
                    </div>
                    <div class="price__items">
                        <div class="price__item">
                            Сайт визитка: от $70<br>
                            Сайт визитка + админ панель: от $100
                        </div>
                        <div class="price__item">
                            Лэндинг: от $90<br>
                            Лэндинг+админ панель: от $120
                        </div>
                        <div class="price__item">
                            Блог: от $120<br>
                            Блог + админ панель: от $150
                        </div>
                        <div class="price__item">
                            Интернет-магазин: от $300<br>
                            Интернет-магази + админ панель: от $350
                        </div>
                        <div class="price__item">
                            Админ панель: от $50<br>
                            (в зависимости от наполнения и возможностей)<br>
                            Каждый дополнительный модуль от $20
                        </div>
                    </div>
                    <div class="price__buttons">
                        <a href="{{route('portfolio')}}" class="price__button">
                            Портфолио
                        </a>
                        <a href="{{route('order')}}" class="price__button">
                            Заказать
                        </a>
                    </div>
                </div>
            </div>
            @for($i = 1; $i <= 3; $i++)
                <img class="bg-circles-{{$i}} bg-circles" src="files/img/circles.png">
            @endfor
        </div>
    </main>
@endsection
