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
       
    <title>Document</title>
</head>
<body>
    @include('/components/header')
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 name-sec">{{$content->name}}</div>
                <div class="col-md-12">{!!$content->about!!}</div>
                <a class="col-md-4" href="">
                    <div class="a_card card_big" style="background-size: cover;">
                        <div class="skewed_category">
                            <p>История</p>
                        </div>
                    </div>
                </a>
                <a class="col-md-4" href="">
                    <div class="a_card card_big" style="background-size: cover;">
                        <div class="skewed_category">
                                <p>Что смотреть</p>
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
                <div class="col-md-12 name-sec">История</div>
                <div class="responsive col-md-12">
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                            История
                        </div>
                    </a>   
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                            История
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                            История
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                            История
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                            История
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                            История
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                            История
                        </div>
                    </a> 
                </div>  
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where_to_eat']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Вся история</a>
                <div class="col-md-12 name-sec">Что смотреть</div>
                <div class="responsive col-md-12">
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Что смотреть
                        </div>
                    </a>   
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Что смотреть
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Что смотреть
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Что смотреть
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Что смотреть
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Что смотреть
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Что смотреть
                        </div>
                    </a> 
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where_to_eat']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Все достопримечательности</a>
                <div class="col-md-12 name-sec">Чем заняться</div>
                <div class="responsive col-md-12">
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Чем заняться
                        </div>
                    </a>   
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Чем заняться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Чем заняться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Чем заняться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Чем заняться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Чем заняться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Чем заняться
                        </div>
                    </a> 
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where_to_eat']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Все развлечения</a>
                <div class="col-md-12 name-sec">Где покупать</div>
                <div class="responsive col-md-12">
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Где покупать
                        </div>
                    </a>   
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Где покупать
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Где покупать
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Где покупать
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Где покупать
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Где покупать
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Чем заняться
                        </div>
                    </a> 
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where_to_eat']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Все маркеты</a>
                <div class="col-md-12 name-sec">Где поесть</div>
                <div class="responsive col-md-12">
                    @foreach($restaurants as $cafe)
                        <a class="col-md-12" href="{{Illuminate\Support\Str::lower($content->name)}}/where_to_eat/{{$cafe->id}}">
                            <div class="a_card" style="background:url(/storage/{{$cafe->image}});background-size: cover;">
                                
                                <div class="skewed_category">
                                    <p>{{$cafe -> name}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where_to_eat']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Все рестораны</a>
                <div class="col-md-12 name-sec">Где остановиться</div>
                <div class="responsive col-md-12">
                    @foreach($hotels as $hotel)
                        <a class="col-md-12" href="{{Illuminate\Support\Str::lower($content->name)}}/where_to_stay/{{$hotel->id}}">
                            <div class="a_card" style="background:url(/storage/{{$hotel->image}});background-size: cover;">
                                {{$hotel -> name}}
                            </div>
                        </a>
                    @endforeach
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where_to_eat']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Все отели</a>
                <div class="col-md-12 name-sec">Как добраться</div>
                <div class="responsive col-md-12">
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Как добраться
                        </div>
                    </a>   
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Как добраться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Как добраться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Как добраться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Как добраться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Как добраться
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Как добраться
                        </div>
                    </a> 
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where_to_eat']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Все пути</a>
                <div class="col-md-12 name-sec">Полезная информация</div>
                <div class="responsive col-md-12">
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Полезная информация
                        </div>
                    </a>   
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Полезная информация
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Полезная информация
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Полезная информация
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Полезная информация
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Полезная информация
                        </div>
                    </a> 
                    <a class="col-md-12" href="">
                        <div class="a_card" style="background-size: cover;">
                        Полезная информация
                        </div>
                    </a> 
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where_to_eat']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Вся полезная информация</a>
            </div>
        </div>
 
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
            speed: 500,
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