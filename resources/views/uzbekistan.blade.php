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
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/card.css"> 
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
</head>
<body>
@include('/components/header', ['type' => 'uzbekistan'])
    <div class="container">
    
        <div style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;">Узбекистан</div>
        <div class="row container_uzb" >
                <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'geo'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'geo'])}}">География</a>
                        </div>
                </article>
                <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'history'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'history'])}}">История</a>
                        </div>
                </article>
                <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'history'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'history'])}}">Люди</a>
                        </div>
                </article>
        </div>
        
    </div>

    <div class="mapouter" style="width:100%; width: 100%; margin-bottom: 70px; margin-top: 70px; ><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=uzbekistan&t=&z=5&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
        <div class="container">
    
        <div id='turizm' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;">Туризм</div>
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
                            <a href="{{route('uzb.category', ['category' => 'transport'])}}">Транспорт</a>
                        </div>
            </article>
            <article class="col-md-4 block_main__item" >
                        <div class="content-block__img">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}"></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.category', ['category' => 'eco'])}}">Экология</a>
                        </div>
            </article>
        </div>
        <div id='iskustva' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;">Искуства</div>
        <div class="row container_uzb" >
            <article class="col-md-4 block_main__item" >
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'literature'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'literature'])}}">Литература</a>
                </div>
            </article>
            <article class="col-md-4 block_main__item" >
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'architecture'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'architecture'])}}">Архитиктура</a>
                </div>
            </article>
            <article class="col-md-4 block_main__item" >
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'music'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'music'])}}">Музыка</a>
                </div>
            </article>
            <article class="col-md-4 block_main__item" style="margin-top:50px;">
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'teatr'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'teatr'])}}">Театр</a>
                </div>
            </article>
            <article class="col-md-4 block_main__item" style="margin-top:50px;">
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'painting'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'painting'])}}">Живопись</a>
                </div>
            </article>
            <article class="col-md-4 block_main__item" style="margin-top:50px;">
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'poetry'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'poetry'])}}">Поэзия</a>
                </div>
            </article>
        </div>
        <div id='culura' style="font-size: 25px;font-weight: 700;margin-top: 55px;text-align: center;">Культура</div>
        <div class="row container_uzb" >
        <article class="col-md-4 block_main__item" >
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'kitchen'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'kitchen'])}}">Кухня</a>
                </div>
        </article>
        <article class="col-md-4 block_main__item" >
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'clothing'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'clothing'])}}">Одежда</a>
                </div>
        </article>
        <article class="col-md-4 block_main__item" >
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'religion'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'religion'])}}">Религия</a>
                </div>
        </article>
        <article class="col-md-4 block_main__item" style="margin-top:50px;">
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'holidays'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'holidays'])}}">Праздники</a>
                </div>
        </article>
        <article class="col-md-4 block_main__item" style="margin-top:50px;">
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'sufism'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'sufism'])}}">Суфизм</a>
                </div>
        </article>
        <article class="col-md-4 block_main__item" style="margin-top:50px;">
                <div class="content-block__img">
                    <a href="{{route('uzb.category', ['category' => 'lang'])}}"></a>
                </div>
                <div class="content-block__title">
                    <a href="{{route('uzb.category', ['category' => 'lang'])}}">Язык</a>
                </div>
        </article>
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