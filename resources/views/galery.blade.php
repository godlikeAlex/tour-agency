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
    <link rel="stylesheet" href="/css/main-page.css">
    <link rel="stylesheet" href="/css/main-menu.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
</head>
<body>
    @include('/components/header')
    <div class="container">
    <div class="tours" style="margin-bottom:50px;">
            <div class="title-tours">Фотогаллерея</div>
            <div class="row">
                <div class="col-md-6 tour-item-slide" style="height:600px; padding:0; display:flex; justify-content: center; align-items:center;">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'eco_tours'])}}">Эко туры</a></div>
                </div>
                <div class="col-md-6 tour-item-slide" style="height:600px; padding:0; display:flex; justify-content: center; align-items:center;">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'history_tours'])}}">Исторические туры</a></div>
                </div>
                <div class="col-md-6 tour-item-slide" style="height:600px; padding:0; display:flex; justify-content: center; align-items:center;">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'buisnes_tours'])}}">Бизнес туры</a></div>
                </div>
                <div class="col-md-6 tour-item-slide" style="height:600px; padding:0; display:flex; justify-content: center; align-items:center;">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'econom_tours'])}}">Эконом туры</a></div>
                </div>
            </div>
    </div>
</div>
    @include('/components/footer')
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