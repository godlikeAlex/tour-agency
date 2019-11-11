<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@include('/components/head-settings')

<!--===============================================================================================-->
 <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--Footer-->

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="/fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->

    <title>Document</title>
</head>
<body style="background:white;">
    @include('/components/header', ['type' => 'city'])
    <div class="container">
        <div class="col-md-12" style="padding:0; padding-bottom: 50px;">
            <div class="row">
            <div style="margin-top: 50px;" class="col-md-12 section-name">
                    @if($category === 'what-to-see')
                        {{__('menu.where-to-see')}}
                    @elseif($category === 'history')
                        {{__('menu.history')}}
                    @elseif($category === 'things-to-do')
                        {{__('menu.things_to_do')}}
                    @elseif($category === 'where-to-buy')
                        {{__('menu.where_to_buy')}}
                    @elseif($category === 'where-to-eat')
                        {{__('menu.where_to_eat')}}
                    @elseif($category === 'where-to-stay')
                        {{__('menu.where_to_stay')}}
                    @elseif($category === 'how-to-get')
                        {{__('menu.how_to_get')}}
                    @elseif($category === 'useful-information')
                        {{__('menu.useful_information')}}
                @endif
            </div>

                @if($items[0]->category_price)
                    <div class="col-md-12 sub-category" style="font-size:25px; margin-top:50px; margin-bottom:20px;">Дешевый</div>
                    @foreach($items as $item)
                        @if($item->category_price === 'cheap')
                        <div class="col-md-4" style="    padding-bottom: 10px;">
                                <a class="link-block" href="{{Request::url()}}/{{$item->slug}}">
                                    <div class="big-blocks big-padding">
                                        <div class="block-img" style="background: url(/storage/{{$item->image}});" ></div>
                                        <div class="block-content">
                                            <div>
                                            @if($item->category_price === 'cheap')
                                                Дешевый
                                            @elseif($item->category_price === 'middle')
                                                Средний
                                            @elseif($item->category_price === 'expensive')
                                                Элитный
                                            @endif
                                            </div>
                                            <div class="block-title">{{str_limit($item ->name, $limit = 15, $end = '...')}}</div>
                                            <div class="block-desc">{{str_limit($item ->desc, $limit = 130, $end = '...')}}</div>
                                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                                        </div>
                                    </div>
                                </a>
                        </div>
                        @endif
                    @endforeach
                    <div class="col-md-12 sub-category" style="font-size:25px; margin-top:50px; margin-bottom:20px;">Средний</div>
                    @foreach($items as $item)
                        @if($item->category_price === 'middle')
                        <div class="col-md-4" style="    padding-bottom: 10px;">
                                <a class="link-block" href="{{Request::url()}}/{{$item->slug}}">
                                    <div class="big-blocks big-padding">
                                        <div class="block-img" style="background: url(/storage/{{$item->image}});" ></div>
                                        <div class="block-content">
                                            <div>
                                            @if($item->category_price === 'cheap')
                                                Дешевый
                                            @elseif($item->category_price === 'middle')
                                                Средний
                                            @elseif($item->category_price === 'expensive')
                                                Элитный
                                            @endif
                                            </div>
                                            <div class="block-title">{{str_limit($item ->name, $limit = 15, $end = '...')}}</div>
                                            <div class="block-desc">{{str_limit($item ->desc, $limit = 130, $end = '...')}}</div>
                                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                                        </div>
                                    </div>
                                </a>
                        </div>
                        @endif
                    @endforeach
                    <div class="col-md-12 sub-category" style="font-size:25px; margin-top:50px; margin-bottom:20px;">Дорогой</div>
                    @foreach($items as $item)
                        @if($item->category_price === 'expensive')
                        <div class="col-md-4" style="    padding-bottom: 10px;">
                                <a class="link-block" href="{{Request::url()}}/{{$item->slug}}">
                                    <div class="big-blocks big-padding">
                                        <div class="block-img" style="background: url(/storage/{{$item->image}});" ></div>
                                        <div class="block-content">
                                            <div>
                                            @if($item->category_price === 'cheap')
                                                Дешевый
                                            @elseif($item->category_price === 'middle')
                                                Средний
                                            @elseif($item->category_price === 'expensive')
                                                Элитный
                                            @endif
                                            </div>
                                            <div class="block-title">{{str_limit($item ->name, $limit = 15, $end = '...')}}</div>
                                            <div class="block-desc">{{str_limit($item ->desc, $limit = 130, $end = '...')}}</div>
                                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                                        </div>
                                    </div>
                                </a>
                        </div>
                        @endif
                    @endforeach
                @else
                    @foreach($items as $item)
                        <div class="col-md-4" style="    padding-bottom: 10px;">
                                <a class="link-block" href="{{route('city.item', ['city'=> $city, 'category' => $category, 'slug' => $item->slug, 'language' => app()->getLocale()] )}}">
                                    <div class="big-blocks big-padding">
                                        <div class="block-img" style="background: url(/storage/{{$item->image}});" ></div>
                                        <div class="block-content">
                                            <div class="block-title">{{str_limit($item ->name, $limit = 15, $end = '...')}}</div>
                                            <div class="block-desc">{{str_limit($item ->desc, $limit = 130, $end = '...')}}</div>
                                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                                        </div>
                                    </div>
                                </a>
                        </div>
                    @endforeach
                @endif
            </div>
         {{$items->links()}}
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
