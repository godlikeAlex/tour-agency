<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tours</title>
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/tour-all.css">
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
</head>
<body>
@include('/components/header')
    <div class="container">
    <div id='turizm' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;padding-bottom: 55px;">Общая информация</div>
        <div class="row container_uzb" >
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}">Общая информация</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"> Безопасность</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}">Прописка</a>
                        </div>
            </article>
        </div>
        <div id='turizm' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;padding-bottom: 55px;">Виза</div>
        <div class="row container_uzb" >
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}">Виза</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"> Посольства</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}">Консульства</a>
                        </div>
            </article>
        </div>
        <div id='turizm' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;padding-bottom: 55px;">Как добраться  
</div>
        <div class="row container_uzb" >
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}">Как добраться  </a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"> Границы</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}">Airlines of Uzbekistan‎ & Airports in Uzbekistan‎ </a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"> Uzbek Railways & Rail infrastructure </a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}">Дороги Узбекистана </a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}">  Аренда транспорта </a>
                        </div>
            </article>
        </div>
        <div id='turizm' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;padding-bottom: 55px;">Деньги</div>
        <div class="row container_uzb" >
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}">Цены</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}">Валюта и обмен</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}">Банки</a>
                        </div>
            </article>
        </div>
        <div id='turizm' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;padding-bottom: 55px;">Связь</div>
        <div class="row container_uzb" >
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}">Почта</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}">Связь</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}">Интернет</a>
                        </div>
            </article>
        </div>
        <div id='turizm' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;padding-bottom: 55px;">Мероприятия </div>
        <div class="row container_uzb" >
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}">Фестивали</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}">Выставки</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}">Праздники</a>
                        </div>
            </article>
        </div>
        <div id='turizm' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;padding-bottom: 55px;">Полезно </div>
        <div class="row container_uzb" >
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'visa'])}}">Сувениры</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}">Прописка</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}">Полезные номера</a>
                        </div>
            </article>
        </div>

    </div>
    </div>
    @include('/components/footer')
<!-- 20% Discount on Elegant Themes Divi Page Builder https://www.embedgooglemap.net/divi-sale/ -->
<!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>
</body>
</html>