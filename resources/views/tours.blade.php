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
    <div class="tours">
            <div class="title-tours">Популярные тур пакеты</div>
            <div class="row">
                <div class="col-md-3 tour-item-slide">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'eco_tours'])}}">Эко туры</a></div>
                    <ul class="item-slide__tours">
                        @foreach($ecoTours as $eco)
                            <li><a href="{{route('tour.show', ['tourname' => $eco->slug])}}">{{$eco->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 tour-item-slide">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'history_tours'])}}">Исторические туры</a></div>
                    <ul class="item-slide__tours">
                        @foreach($historyTours as $history)
                            <li><a href="{{route('tour.show', ['tourname' => $history->slug])}}">{{$history->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 tour-item-slide">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'buisnes_tours'])}}">Бизнес туры</a></div>
                    <ul class="item-slide__tours">
                        @foreach($buisnesTours as $buisnes)
                            <li><a href="{{route('tour.show', ['tourname' => $buisnes->slug])}}">{{$buisnes->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 tour-item-slide">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'econom_tours'])}}">Эконом туры</a></div>
                    <ul class="item-slide__tours">
                        @foreach($economTours as $econom)
                            <li><a href="{{route('tour.show', ['tourname' => $economTours->slug])}}">{{$economTours->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
    </div>
    <a class="show-more-link" href="#">
        <div class="button-show-more" style="margin-bottom:50px;">
            Показать еще
        </div>
    </a>
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