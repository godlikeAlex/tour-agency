<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
@include('/components/head-settings')

<!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="///images/icons/favicon.png" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/tour-all.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/card.css">
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
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
            right: 0;
        }

        .prev-arrow {
            left: 0%;
            z-index: 9999;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="/fonts/ionicons.css" rel="stylesheet">
</head>

<body>
    @include('/components/header', ['type' => 'city'])
    <div class="container" style="margin-bottom: 50px;  ">
        <div class="row">
            <div class="container">
                <div style="margin-top: 50px;" class="section-name">{{$content->name}}</div>
            </div>
            <div class="col-md-12">{!!$content->about!!}</div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'history', 'language' => app()->getLocale()])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=800);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.history') }}</div>
                            <div class="block-desc">Здесь вы сможете найти интереснные фрагменты истории из жизни
                                {{$content->name}}</div>
                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block"
                    href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-see', 'language' => app()->getLocale()])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1559682289-d9cb5858235d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('mainpage.where_to_see') }}</div>
                            <div class="block-desc">Здесь вы можете найти для себя лучшие и красивые места в
                                {{$content->name}}</div>
                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block"
                    href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-do', 'language' => app()->getLocale()])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1563053457-d9d7ae11546d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('mainpage.things_to_do') }}</div>
                            <div class="block-desc">Здесь вы можете найти для себя лучшие развлечения в
                                {{$content->name}}</div>
                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block"
                    href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-buy', 'language' => app()->getLocale()])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1533900298318-6b8da08a523e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('mainpage.where_to_buy') }}</div>
                            <div class="block-desc">В этом разделе находятся все рынки, ТЦ и маркеты</div>
                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block"
                    href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-eat', 'language' => app()->getLocale()])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1521017432531-fbd92d768814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('mainpage.where_to_eat') }}</div>
                            <div class="block-desc">Отсортированные по цене заведения, где можно хорошо покушать и
                                провести время</div>
                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block"
                    href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-stay', 'language' => app()->getLocale()])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1444201983204-c43cbd584d93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('mainpage.where_to_stay') }}</div>
                            <div class="block-desc">Отсортированные по цене заведения, где можно хорошо провести время
                            </div>
                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="container">
                <div style="margin-top: 50px;" class="section-name">{{ __('menu.history')}}</div>
            </div>
            <div class="responsive col-md-12">
                @foreach($historys as $history)
                <div class="col-md-12" style="margin-bottom: 25px;">
                    <a class="link-block"
                        href="{{Illuminate\Support\Str::lower($content->name)}}/history/{{$history->slug}}">
                        <div class="big-blocks" style="height: 390px; display: block;">
                            <div class="block-mini-img" style="background: url(/storage/{{$history->image}});"></div>
                            <div class="block-content" style="margin-top:25px;">
                                <div class="block-title">{{$history->name}}</div>
                                <div class="block-desc">{{str_limit($history ->desc, $limit = 120, $end = '...')}}</div>
                                <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'history', 'language' => app()->getLocale()]) }}"
                style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
        </div>
    </section>
    <section class="second-sec">
        <div class="container">
            <div class="container">
                <div style="margin-top: 50px;" class="section-name">{{ __('mainpage.where_to_see') }}</div>
            </div>
            <div class="responsive col-md-12">
                @foreach($whatToSee as $whatSee)
                <div class="col-md-12" style="margin-bottom: 25px;">
                    <a class="link-block"
                        href="{{Illuminate\Support\Str::lower($content->name)}}/what-to-see/{{$whatSee->slug}}">
                        <div class="big-blocks" style="height: 390px; display: block;">
                            <div class="block-mini-img" style="background: url(/storage/{{$whatSee->image}});"></div>
                            <div class="block-content" style="margin-top:25px;">
                                <div class="block-title">{{$whatSee->name}}</div>
                                <div class="block-desc">{{str_limit($whatSee ->desc, $limit = 120, $end = '...')}}</div>
                                <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-see', 'language' => app()->getLocale()]) }}"
                style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>

        </div>
    </section>
    <section>
        <div class="container">
            <div class="container">
                <div style="margin-top: 50px;" class="section-name">{{ __('mainpage.things_to_do') }}</div>
            </div>

            <div class="responsive col-md-12">
                @foreach($whatToDo as $toDo)
                <div class="col-md-12" style="margin-bottom: 25px;">
                    <a class="link-block" href="{{Illuminate\Support\Str::lower($content->name)}}/what-to-do/{{$toDo->slug}}">
                        <div class="big-blocks" style="height: 390px; display: block;">
                            <div class="block-mini-img" style="background: url(/storage/{{$toDo->image}});"></div>
                            <div class="block-content" style="margin-top:25px;">
                                <div class="block-title">{{$toDo->name}}</div>
                                <div class="block-desc">{{str_limit($toDo ->desc, $limit = 120, $end = '...')}}</div>
                                <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'things-to-do', 'language' => app()->getLocale()]) }}"style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
        </div>
    </section>
    <section class="second-sec">
        <div class="container">
    <div class="container">
        <div style="margin-top: 50px;" class="section-name">{{ __('mainpage.where_to_buy') }}</div>
    </div>
    <div class="responsive col-md-12">
        @foreach($whereToBuy as $buy)
        <div class="col-md-12" style="margin-bottom: 25px;">
            <a class="link-block" href="{{Illuminate\Support\Str::lower($content->name)}}/where-to-buy/{{$buy->slug}}">
                <div class="big-blocks" style="height: 390px; display: block;">
                    <div class="block-mini-img" style="background: url(/storage/{{$buy->image}});"></div>
                    <div class="block-content" style="margin-top:25px;">
                        <div class="block-title">{{$buy->name}}</div>
                        <div class="block-desc">{{str_limit($buy ->desc, $limit = 120, $end = '...')}}</div>
                        <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-buy', 'language' => app()->getLocale()]) }}"
        style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
    </div>
    </section>
    <section>
        <div class="container">
            <div class="container">
                <div style="margin-top: 50px;" class="section-name">{{ __('mainpage.where_to_eat') }}</div>
            </div>

            <div class="responsive col-md-12">
                @foreach($restaurants as $cafe)
                <div class="col-md-12" style="margin-bottom: 25px;">
                    <a class="link-block" href="{{Illuminate\Support\Str::lower($content->name)}}/where-to-eat/{{$cafe->slug}}">
                        <div class="big-blocks" style="height: 390px; display: block;">
                            <div class="block-mini-img" style="background: url(/storage/{{$cafe->image}});"></div>
                            <div class="block-content" style="margin-top:25px;">
                                <div class="block-title">{{$cafe->name}}</div>
                                <div class="block-desc">{{str_limit($cafe ->desc, $limit = 120, $end = '...')}}</div>
                                <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-eat', 'language' => app()->getLocale()]) }}"
            style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
        </div>
    </section>
    <section class="second-sec">
        <div class="container">
    <div class="container">
        <div style="margin-top: 50px;" class="section-name">{{ __('mainpage.where_to_stay') }}</div>
    </div>
    <div class="responsive col-md-12">
        @foreach($hotels as $hotel)
        <div class="col-md-12" style="margin-bottom: 25px;">
            <a class="link-block"
                href="{{Illuminate\Support\Str::lower($content->name)}}/where-to-eat/{{$hotel->slug}}">
                <div class="big-blocks" style="height: 390px; display: block;">
                    <div class="block-mini-img" style="background: url(/storage/{{$hotel->image}});"></div>
                    <div class="block-content" style="margin-top:25px;">
                        <div class="block-title">{{$hotel->name}}</div>
                        <div class="block-desc">{{str_limit($hotel ->desc, $limit = 120, $end = '...')}}</div>
                        <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-stay', 'language' => app()->getLocale()]) }}"
        style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
        </div>
    </section>
    <section>
        <div class="container">
    <div class="container">
        <div style="margin-top: 50px;" class="section-name">{{ __('mainpage.how_to_get') }}</div>
    </div>
    <div class="responsive col-md-12">
        @foreach($howToGet as $get)
        <div class="col-md-12" style="margin-bottom: 25px;">
            <a class="link-block" href="{{Illuminate\Support\Str::lower($content->name)}}/how-to-get/{{$get->slug}}">
                <div class="big-blocks" style="height: 390px; display: block;">
                    <div class="block-mini-img" style="background: url(/storage/{{$get->image}});"></div>
                    <div class="block-content" style="margin-top:25px;">
                        <div class="block-title">{{$get->name}}</div>
                        <div class="block-desc">{{str_limit($get ->desc, $limit = 120, $end = '...')}}</div>
                        <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'how-to-get', 'language' => app()->getLocale()]) }}"
        style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
    </div>
    </section>
    <section class="second-sec">
        <div class="container">
    <div class="container">
        <div style="margin-top: 50px;" class="section-name">{{ __('mainpage.useful_information') }}</div>
    </div>
    <div class="responsive col-md-12">
        @foreach($usefulInformation as $info)
        <div class="col-md-12" style="margin-bottom: 25px;">
            <a class="link-block"
                href="{{Illuminate\Support\Str::lower($content->name)}}/useful-information/{{$info->slug}}">
                <div class="big-blocks" style="height: 390px; display: block;">
                    <div class="block-mini-img" style="background: url(/storage/{{$info->image}});"></div>
                    <div class="block-content" style="margin-top:25px;">
                        <div class="block-title">{{$info->name}}</div>
                        <div class="block-desc">{{str_limit($info ->desc, $limit = 120, $end = '...')}}</div>
                        <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'useful-information', 'language' => app()->getLocale()]) }}"
        style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
    </div>
        </div>
        </section>
    </div>

    </div>

    @include('/components/footer')

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
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
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
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
