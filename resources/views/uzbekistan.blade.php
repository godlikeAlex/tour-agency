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
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/tour-all.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/card.css"> 
</head>
<body>
    @include('/components/header')
    <div class="container">
    
        <div style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;">Узбекистан</div>
        <div class="row container_uzb" >
        <a class="col-md-4" href="{{route('uzb.category', ['category' => 'geo'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                            <p>География</p>
                    </div>
                </a>
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'history'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                        <p>История</p>
                    </div>
                </a> 
                <a class="col-md-4" href="">
                        <div class="a_card card_big" style="background-size: cover;">
                            <p>Люди</p>
                        </div>
                </a> 
        </div>
        
    </div>

    <div class="mapouter" style="width:100%; width: 100%; margin-bottom: 70px; margin-top: 70px; ><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uzbekistan&t=&z=5&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
        <div class="container">
    
        <div style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;">Туризм</div>
        <div class="row container_uzb" >
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'visa'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                            <p>Виза</p>
                    </div>
                </a>
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'transport'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                        <p>Транспорт</p>
                    </div>
                </a> 
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'eco'])}}">
                        <div class="a_card card_big" style="background-size: cover;">
                            <p>Экология</p>
                        </div>
                </a> 
        </div>
        <div style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;">Искуства</div>
        <div class="row container_uzb" >
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'literature'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                            <p>Литература</p>
                    </div>
                </a>
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'architecture'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                        <p>Архитиктура</p>
                    </div>
                </a> 
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'music'])}}">
                        <div class="a_card card_big" style="background-size: cover;">
                            <p>Музыка</p>
                        </div>
                </a> 
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'teatr'])}}">
                        <div class="a_card card_big" style="background-size: cover;">
                            <p>Театр</p>
                        </div>
                </a> 
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'painting'])}}">
                        <div class="a_card card_big" style="background-size: cover;">
                            <p>Живопись</p>
                        </div>
                </a> 
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'poetry'])}}">
                        <div class="a_card card_big" style="background-size: cover;">
                            <p>Поэзия</p>
                        </div>
                </a> 
        </div>
        <div style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;">Культура</div>
        <div class="row container_uzb" >
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'kitchen'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                            <p>Кухня</p>
                    </div>
                </a>
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'clothing'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                        <p>Одежда</p>
                    </div>
                </a> 
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'religion'])}}">
                        <div class="a_card card_big" style="background-size: cover;">
                            <p>Религия</p>
                        </div>
                </a> 
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'holidays'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                            <p>Праздники</p>
                    </div>
                </a>
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'sufism'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                        <p>Суфизм</p>
                    </div>
                </a> 
                <a class="col-md-4" href="{{route('uzb.category', ['category' => 'lang'])}}">
                        <div class="a_card card_big" style="background-size: cover;">
                            <p>Язык</p>
                        </div>
                </a>
        </div>
        
    </div>
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