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
        <div class="row container_of_tours" >
        <a class="col-md-4" href="{{route('tour.category', ['category' => 'eco_tours'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                        <div class="skewed_category">
                            <p>Эко туры</p>
                        </div>
                    </div>
                </a>
                <a class="col-md-4" href="{{route('tour.category', ['category' => 'history_tours'])}}">
                    <div class="a_card card_big" style="background-size: cover;">
                        <div class="skewed_category">
                                <p>Исторические туры</p>
                            </div>
                    </div>
                </a> 
                <a class="col-md-4" href="">
                        <div class="a_card card_big" style="background-size: cover;">
                            <div class="skewed_category">
                                    <p>Чем заняться</p>
                            </div>
                        </div>
                </a> 
                <a class="col-md-4" href="">
                        <div class="a_card card_big" style="background-size: cover;">
                            <div class="skewed_category">
                                <p>Где покупать</p>
                            </div>
                        </div>
                </a> 
                <a class="col-md-4" href="">
                        <div class="a_card card_big" style="background-size: cover;">
                            <div class="skewed_category">
                                <p>Где поесть</p>
                            </div>
                        </div>
                </a> 
                <a class="col-md-4" href="">
                        <div class="a_card card_big" style="background-size: cover;">
                            <div class="skewed_category">
                                    <p>Где остановиться</p>
                            </div>
                        </div>
                </a> 
        </div>
        
    </div>
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