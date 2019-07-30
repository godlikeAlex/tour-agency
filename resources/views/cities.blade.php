<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/card.css"> 
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
</head>
<body>
    @include('/components/header', ['type' => 'city'])
        <div class="container">
        @foreach($cities as $city)
        <div style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;"><a style="    font-size: 35px;
    font-weight: 700;
    color: #0460d9;" href="/city/{{Illuminate\Support\Str::lower($city->name)}}">{{$city->name}}</a></div>
        <div class="row container_uzb" >
                <article class="col-md-4 block_main__item" style="margin-top:50px;">
                        <div class="content-block__img">
                            <a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'history'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'history'])}}">История</a>
                        </div>
                </article>
                <article class="col-md-4 block_main__item" style="margin-top:50px;">
                        <div class="content-block__img">
                            <a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-do'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-do'])}}">Чем занятся</a>
                        </div>
                </article>
                <article class="col-md-4 block_main__item" style="margin-top:50px;">
                        <div class="content-block__img">
                            <a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-do'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-do'])}}">Что смотреть<</a>
                        </div>
                </article>
                <a href="/city/{{Illuminate\Support\Str::lower($city->name)}}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Подробнее</a>
        </div>
        @endforeach
    </div>
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>