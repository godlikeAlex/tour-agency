<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('components/head-settings')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common-offers.css">
    <link rel="stylesheet" type="text/css" href="/css/desktop-offers.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">

    <!--Footer-->

    <link rel="stylesheet" type="text/css" href="/css/footer.css">

    <link href="/fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->

    <style>
        .slide-arrow {
            position: absolute;
            top: 50%;
            transform: translate(0%, -50%);
            border: none;
            width: 52px;
            height: 52px;
            color: white;
            background: #4c4c4c82;
        }

        .next-arrow {
            right: -3%;
        }

        .prev-arrow {
            left: -3%;
            z-index: 9999;
        }

        .next-arrow-big {
            right: 1%;
            background: none;
            font-size: 30px;
        }

        .prev-arrow-big {
            left: 1%;
            z-index: 9999;
            background: none;
            font-size: 30px;

        }

        .main-tours-slider:hover .prev-arrow-big {
            color: #050658;
        }

        .main-tours-slider:hover .next-arrow-big {
            color: #050658;
        }

        .slick-list {
            overflow-y: -webkit-paged-x;
        }

        ul {
            display: block;
            list-style-type: disc;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 40px;
        }

        .sitemap {
            position: relative;
            font-size: 16px;
        }

        .sitemap li {
            display: block;
            margin-bottom: 4px;
            position: relative;
            line-height: 25px;
        }

        .sitemap li::before {
            content: '';
    width: 10px;
    height: 10px;
    background: #050658;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: -25px;
    border-radius: 50%;
        }

    </style>
</head>

<body>
    <!-- Header -->
    @include('/components/header')
    <section class="second-sec">
        <div class="container">
            <ul class="sitemap">
                <li>Главная</li>
                <div style="padding-left: 25px">
                        <li>Узбекистан</li>
                        <div style="padding-left: 25px">
                            @foreach($geoCategories as $item)
                                <li><a href="{{route('uzb.sub', ['category'=>'geo', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                <div style="padding-left: 25px">
                                    <li><a href="{{route('uzb.category', ['category' => 'geography', 'language' => app()->getLocale()])}}">{{ __('menu.geo') }}</a></li>
                                </div>
                            @endforeach
                        </div>
                        <li><a href="{{route('uzb.category', ['category' => 'geography', 'language' => app()->getLocale()])}}">{{ __('menu.geo') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'peoples', 'language' => app()->getLocale()])}}">{{ __('menu.peoples') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'art', 'language' => app()->getLocale()])}}">{{ __('menu.art') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'fashion', 'language' => app()->getLocale()])}}">{{ __('menu.moda') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'painting', 'language' => app()->getLocale()])}}">{{ __('menu.painting') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'culture', 'language' => app()->getLocale()])}}">{{ __('menu.culture') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'kitchen', 'language' => app()->getLocale()])}}">{{ __('menu.kitchen') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'tradition', 'language' => app()->getLocale()])}}">{{ __('menu.tradicii') }}</a></li>
                </div>
            </ul>
        </div>
    </section>
    <!-- Footer -->
    @include('/components/footer')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.main-tours-slider').slick({
                infinite: true,
                speed: 300,
                dots: false,
                prevArrow: '<button class="slide-arrow prev-arrow prev-arrow-big"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow next-arrow-big"><i class="fas fa-chevron-right"></i></button>',
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.cities-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.bazar').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
            });

        });

    </script>
</body>

</html>
