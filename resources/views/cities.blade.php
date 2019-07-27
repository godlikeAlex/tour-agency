<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--===============================================================================================-->
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style-blog.css">
   <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="///images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--==============================================/=================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/css/card.css">    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <title>Document</title>
</head>
<body>
    @include('/components/header', ['type' => 'city'])
        <div class="container">
        @foreach($cities as $city)
        <div style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;"><a style="    font-size: 35px;
    font-weight: 700;
    color: #0460d9;" href="/city/{{Illuminate\Support\Str::lower($city->name)}}">{{$city->name}}</a></div>
        <div class="row container_uzb" >
                <a class="col-md-4" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'history'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                            <p>История</p>
                    </div>
                </a>
                <a class="col-md-4" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-do'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                        <p>Чем занятся</p>
                    </div>
                </a> 
                <a class="col-md-4" href="">
                        <div class="a_card card_big" style="background-size: cover;">
                            <p>Что смотреть</p>
                        </div>
                </a> 
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