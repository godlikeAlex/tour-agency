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
    <link rel="stylesheet" type="text/css" href="/css/card.css">    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/css/slick/custom-theme.css">
    <style>
    .sub-category{
        font-size: 35px;
        font-weight: 700;
        margin-top: 50px;
    }
    </style>
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <title>Document</title>
</head>
<body>
    @include('/components/header')
    <div class="container">
            
        <nav class="category_nav col-md-12" style="margin-top:50px;">
                    <ul class="row" style="    justify-content: space-between;"> 
                        <li>
                            <a href=""><i class="fas fa-history"></i> История</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-mosque"></i> Что смотреть</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-tree"></i> Чем заняться</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-shopping-cart"></i> Где покупать</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-utensils"></i> Где поесть</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-hotel"></i> Где остановиться</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-taxi"></i> Как добраться</a>
                        </li>
                        <li>
                            <a href=""><i class="fas fa-info"></i> Полезная информация</a>
                        </li>
                    </ul>
                </nav>
        <div class="col-md-10" style="padding:0;">
            <div class="row">
                @if($items[0]->category_price)
                    <div class="col-md-12 sub-category">Дешевый</div>
                    @foreach($items as $item)
                        @if($item->category_price === 'cheap')
                            <a class="col-md-12" href="{{Request::url()}}/{{$item->id}}">
                            <div class="col-md-12 row" style="margin-top:50px; height:200px;"> 
                                <div class="col-md-4" style="background:url(/storage/{{$item->image}}); background-size: cover; background-position: center;"></div>
                                <div class="col-md-8" style="background:#f7f7f7; padding:25px;">
                                    <div class="title-category">{{$item->name}}</div>
                                    <p>{{$item->preview}}</p>
                                </div>
                            </div>
                            </a>
                        @endif
                    @endforeach
                    <div class="col-md-12 sub-category">Средний</div>
                    @foreach($items as $item)
                        @if($item->category_price === 'middle')
                            <a class="col-md-12" href="{{Request::url()}}/{{$item->id}}">
                            <div class="col-md-12 row" style="margin-top:50px; height:200px;"> 
                                <div class="col-md-4" style="background:url(/storage/{{$item->image}}); background-size: cover; background-position: center;"></div>
                                <div class="col-md-8" style="background:#f7f7f7; padding:25px;">
                                    <div class="title-category">{{$item->name}}</div>
                                    <p>{{$item->preview}}</p>
                                </div>
                            </div>
                            </a>
                        @endif
                    @endforeach
                    <div class="col-md-12 sub-category">Дорогой</div>
                    @foreach($items as $item)
                        @if($item->category_price === 'expensive')
                            <a class="col-md-12" href="{{Request::url()}}/{{$item->id}}">
                            <div class="col-md-12 row" style="margin-top:50px; height:200px;"> 
                                <div class="col-md-4" style="background:url(/storage/{{$item->image}}); background-size: cover; background-position: center;"></div>
                                <div class="col-md-8" style="background:#f7f7f7; padding:25px;">
                                    <div class="title-category">{{$item->name}}</div>
                                    <p>{{$item->preview}}</p>
                                </div>
                            </div>
                            </a>
                        @endif
                    @endforeach
                @else
                    @foreach($items as $item)
                                <a class="col-md-12" href="{{Request::url()}}/{{$item->id}}">
                                <div class="col-md-12 row" style="margin-top:50px; height:200px;"> 
                                    <div class="col-md-4" style="background:url(/storage/{{$item->image}}); background-size: cover; background-position: center;"></div>
                                    <div class="col-md-8" style="background:#f7f7f7; padding:25px;">
                                        <div class="title-category">{{$item->name}}</div>
                                        <p>{{$item->preview}}</p>
                                    </div>
                                </div>
                                </a>
                    @endforeach
                @endif
            </div>
        </div>
    
        {{$items->links()}}
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
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.responsive').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
            });
            $('.selector').slick({
                nextArrow: '<i class="fa fa-arrow-right"></i>',
                prevArrow: '<i class="fa fa-arrow-left"></i>',
                // add the rest of your options here
            });
    </script>
</body>
</html>