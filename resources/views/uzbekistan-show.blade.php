<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('/components/head-settings')

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
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">

<!--Footer-->

<link rel="stylesheet" type="text/css" href="/css/footer.css">
<link href="/fonts/ionicons.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <title>Document</title>
</head>
<body style="background: white;">
@include('/components/header', ['type' => 'uzbekistan'])
    <div class="container">
    <div style="padding-bottom: 20px; padding-top: 20px;padding-left: 0;" class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="/" class="breadcrumb-item f1-s-3 cl9">
					{{__('menu.main')}}
				</a>

				<a href="{{route('index.uzbekistan', app()->getLocale())}}" class="breadcrumb-item f1-s-3 cl9">
                    {{__('menu.uzbekistan')}}
				</a>
				<a href="{{route('uzb.category', ['category' => $item->category, 'language' => app()->getLocale()])}}" class="breadcrumb-item f1-s-3 cl9">
                    @if(Request::segment(3) === 'geo')
                        {{__('menu.geo')}}
                    @elseif(Request::segment(3) === 'history')
                        {{__('menu.history')}}
                    @elseif(Request::segment(3) === 'peoples')
                        {{__('menu.peoples')}}
                    @elseif(Request::segment(3) === 'art')
                        {{__('menu.art')}}
                    @elseif(Request::segment(3) === 'fashion')
                        {{__('menu.moda')}}
                    @elseif(Request::segment(3) === 'painting')
                        {{__('menu.painting')}}
                    @elseif(Request::segment(3) === 'culture')
                        {{__('menu.culture')}}
                    @elseif(Request::segment(3) === 'kitchen')
                        {{__('menu.kitchen')}}
                    @elseif(Request::segment(3) === 'tradition')
                        {{__('menu.tradition')}}
                    @endif
				</a>
                <a href="{{route('uzb.sub', ['category'=>Request::segment(3) ,'subcategory' => $item->category, 'language' => app()->getLocale()])}}" class="breadcrumb-item f1-s-3 cl9">
                    {{$subcategory->name}}
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					 {{$item -> name}}
				</span>
			</div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div style="padding-left:0px; margin-top:0px;" class="col-md-12 title-item">{{$item->name}}
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="display:flex;align-items:center; justify-content: flex-end;width: 27%;">
                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                <a class="a2a_button_facebook"></a>
                <a class="a2a_button_email"></a>
                <a class="a2a_button_telegram"></a>
                <a class="a2a_button_whatsapp"></a>
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>
            </div>
            <div class="col-md-12" style="margin-top: 35px; padding-left:0;"><img src="/storage/{{$item->image}}" alt="" srcset=""></div>
            <div class="col-md-12 main-content-text" style="margin-top:25px; margin-bottom:50px; padding-left:0">{!! $item->about !!}</div>
            <div style="margin-top: 50px;" class="section-name col-md-12">{{__('menu.blogmore')}}</div>
            @foreach($randomFromCategory as $rec)
                    <div class="col-md-4" style="    padding-bottom: 50px;">
                            <a class="link-block" href="{{route('uzb.show', ['category'=>$category, 'subcategory' => $subcategory->slug, 'uzb' => $rec->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks big-padding">
                                    <div class="block-img" style="background: url(/storage/{{$rec->image}});" ></div>
                                    <div class="block-content">
                                        <div class="block-title">{{str_limit($rec ->name, $limit = 30, $end = '...')}}</div>
                                        <div class="block-desc">{{str_limit($rec ->desc, $limit = 130, $end = '...')}}</div>
                                        <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                                    </div>
                                </div>
                            </a>
                    </div>
            @endforeach
            <p style="text-align:center; width: 100%; margin-bottom: 50px;">
                        <img src="/images/ads.png" alt="">
        </div>
    </div>

</div>
@include('/components/footer')



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
