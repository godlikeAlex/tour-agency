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
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
    <link rel="stylesheet" type="text/css" href="/css/card.css"> 
    <link rel="stylesheet" type="text/css" href="/css/main.css"> 
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">

    <!--Footer-->

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="fonts/ionicons.css" rel="stylesheet">
</head>
<body>
    @include('/components/header', ['type' => 'uzbekistan'])
    <div class="container" style="margin-bottom: 50px;">
    <div style="margin-top: 50px;" class="section-name">
                    @if(request()->segment(2) === 'geo')
                        География
                    @elseif(request()->segment(2) === 'history')
                        История
                    @elseif(request()->segment(2) === 'visa')
                        Виза
                    @elseif(request()->segment(2) === 'transport')
                        Транспорт
                    @elseif(request()->segment(2) === 'eco')
                        Экология
                    @elseif(request()->segment(2) === 'literature')
                        Литература
                    @elseif(request()->segment(2) === 'architecture')
                        Архитиктура
                    @elseif(request()->segment(2) === 'music')
                        Музыка
                    @elseif(request()->segment(2) === 'teatr')
                        Театр
                    @elseif(request()->segment(2) === 'painting')
                        Живопись
                    @elseif(request()->segment(2) === 'poetry')
                        Поэзия
                    @elseif(request()->segment(2) === 'kitchen')
                        Кухня
                    @elseif(request()->segment(2) === 'clothing')
                        Одежда
                    @elseif(request()->segment(2) === 'religion')
                        Религия
                    @elseif(request()->segment(2) === 'holidays')
                        Праздники
                    @elseif(request()->segment(2) === 'sufism')
                        Суфизм
                    @elseif(request()->segment(2) === 'lang')
                        Язык
                    @endif
    </div>
        <div class="row container_of_tours" >
                @foreach($items as $item)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                        <a class="link-block" href="{{route('uzb.show', ['category'=>request()->segment(2) ,'uzb' => $item->slug])}}">
                            <div class="big-blocks" style="height: 390px; display: block;">
                                <div class="block-mini-img" style="background: url(/storage/{{$item->image}});" ></div>
                                <div class="block-content" style="margin-top:25px;">
                                    <div class="block-title">{{$item->name}}</div>
                                    <div class="block-desc">{{str_limit($item ->desc, $limit = 120, $end = '...')}}</div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                
        </div>
        
    </div>
    @include('/components/footer')
</body>
</html>