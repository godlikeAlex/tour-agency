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
                            <a href="">Полезная информация</a>
                        </li>
                    </ul>
                </nav>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 title-item">{{$item->name}}<!-- AddToAny BEGIN -->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="display:flex;align-items:center; justify-content: flex-end;width: 27%;">  
					<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
					<a class="a2a_button_facebook"></a>
					<a class="a2a_button_email"></a>
					<a class="a2a_button_telegram"></a>
					<a class="a2a_button_whatsapp"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END --></div>
                <div class="col-md-12" style="margin-top: 35px;"><img src="/storage/{{$item->image}}" alt="" srcset=""></div>
                <div class="col-md-12" style="margin-top:25px;">{!! $item->about !!}</div>
                
                @if($next && $previous)
                <div style="display:flex; justify-content: space-between;" class="col-md-12">
                @elseif($next)
                    <div style="display:flex; justify-content: flex-end;" class="col-md-12">
                @elseif($previous)
                    <div style="display:flex; justify-content: flex-start;" class="col-md-12">
                @endif
                @if($previous)
                    <a href="{{ route('city.item', ['city'=>$city ,'category'=>$category, 'id' => $previous]) }}">Преведущие</a>
                @endif
                @if($next)
                    <a href="{{ route('city.item', ['city'=>$city ,'category'=>$category, 'id' => $next]) }}">Следующие</a>
                @endif
                </div>
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