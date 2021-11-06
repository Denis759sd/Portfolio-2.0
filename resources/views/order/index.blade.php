@extends('layouts.main')

@section('title', 'Заказать сайт')

@section('custom_css')
    <link rel="stylesheet" href="css/order.css">
@endsection

@section('header_about')
    <div class="header__about">
        <div class="container">
            <div class="header__text">
                Здесь вы можете заказать у нас сайт.
            </div>
        </div>
    </div>
@endsection

@section('content')
    <main class="main">
        @for($i = 1; $i <= 6; $i++)
            <img class="bg-circles-{{$i}} bg-circles" src="files/img/circles.png">
        @endfor

        <div class="order">
            <div class="container">
                <div class="order__body">
                    <div class="order__title">
                        Оформить заявку
                    </div>
                    <form action="{{route('send')}}" method="post" class="order__form" spellcheck="false"> <!--Отправка заявки-->
                        @csrf
                        <p class="order__subtitle">Имя</p>
                        <input class="order__name-field field-focus" name="name" type="text" tabindex="1" autofocus required>
                        <p class="order__subtitle">Телефон</p>
                        <input class="order__phone-field field-focus" name="phone" type="tel" tabindex="2" required>
                        <p class="order__subtitle">E-mail</p>
                        <input class="order__mail-field field-focus" name="mail" type="email" tabindex="3" required>
                        <p class="order__subtitle">Подробные требования</p>
                        <textarea class="order__details-field field-focus" name="details" tabindex="4" required></textarea>
                        <button type="submit" tabindex="5" class="order__button">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="telegram">
            <div class="container">
                <div class="telegram__body">
                    <p class="telegram__title">
                        Или вы можете написать нам в Telegram:
                    </p>
                    <p class="telegram__phone">
                        +375333333333
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
