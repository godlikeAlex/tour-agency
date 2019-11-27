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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="/css/main-page.css">
    <link rel="stylesheet" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <link href="/fonts/ionicons.css" rel="stylesheet">
    <style>
        .main-content-block {
            border: none;
        }

        .section-name {
            font-size: 30px;
        }

    </style>
</head>

<body>
    @include('/components/header', ['type' => 'tours'])
    <div class="main-tours-slider">
        @foreach($slider as $slide)
        <a href="{{route('tour.show', ['tourname' => $slide->slug, 'language' => app()->getLocale()])}}"
            class="main-tous-slide">
            <div class="image-tour-slide" style="background: url(/storage/{{$slide->image}})"></div>
            <div class="tours-slider__title">{{$slide->name}}</div>
            <div style="text-transform: uppercase" class="tours-slider__sub">{{$slide->starts}} - {{$slide->ends}}</div>
        </a>
        @endforeach
    </div>
    <div class="tours" style="margin-top: 0">
        @foreach($categories as $category)
        <section class="main-content-block {{ $loop->iteration % 2 == 0 ? 'second-sec' : ''}}">
            <div class="container">
                <div style="margin-top: 50px;" class="section-name">{{$category->name}}</div>

                <div class="row content-block_main">
                    @foreach($category->tours as $tour)
                    <div class="col-md-6 col-lg-4 col-sm-12" style="margin-bottom: 25px;">
                        <a class="link-block"
                            href="{{route('tour.show', ['tourname' => $tour->slug, 'language' => app()->getLocale()])}}">
                            <div class="big-blocks" style="height: 390px; display: block;">
                                <div class="block-mini-img"
                                    style="background: url(/storage/{{$tour->image}}); height: 200px;"></div>
                                <div class="block-content" style="margin-top:25px;">
                                    <div class="block-title">{{$tour->name}}</div>
                                    <div class="block-desc">{{str_limit($tour ->desc, $limit = 120, $end = '...')}}
                                    </div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => $category->slug,'language' => app()->getLocale()])}}"
                    style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
        </section>
        @endforeach
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
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.main-tours-slider').slick({
                infinite: true,
                speed: 300,
                dots: false,
                prevArrow: false,
                nextArrow: false,
                slidesToShow: 4,
                slidesToScroll: 4
            });
        });

    </script>
</body>

</html>
