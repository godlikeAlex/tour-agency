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
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
</head>
<body>
    @include('/components/header', ['type' => 'tours'])
    <div class="container">
        @foreach($tours as $tour)
            <article class="col-md-4 block_main__item" style="margin-top:25px; margin-bottom:25px;">
                <div class="content-block__img"><a <a href="{{route('tour.show', ['tourname' => $tour->slug])}}"><img src="/storage/{{$tour->image}}" alt="{{$tour->name}}" srcset=""></a></div>
                <div class="content-block__category">
                    <a class="category-link" href="/tourists">
                        754 $
                    </a>
                </div>
                <div class="content-block__title"><a href="{{route('tour.show', ['tourname' => $tour->slug])}}">{{$tour->name}}</a></div>
            </article>
        @endforeach
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