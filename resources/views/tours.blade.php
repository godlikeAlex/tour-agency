<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tours</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
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
            <a href="{{route('tour.show', ['tourname' => $slide->slug, 'language' => app()->getLocale()])}}" class="main-tous-slide">
                <div class="image-tour-slide" style="background: url(/storage/{{$slide->image}})"></div>
                <div class="tours-slider__title">{{$slide->name}}</div>
                <div style="text-transform: uppercase" class="tours-slider__sub">{{$slide->starts}} - {{$slide->ends}}</div>
            </a>
        @endforeach
    </div>
    <div class="container">
        <div class="tours">
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.history_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($historyTours as $history)
                        <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $history->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$history->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$history->name}}</div>
                                        <div class="block-desc">{{str_limit($history ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'history-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.short_tours') }}</div></div>
                  
                <div class="row content-block_main">
                    @foreach($shortTours as $shortTour)
                        <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $shortTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$shortTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$shortTour->name}}</div>
                                        <div class="block-desc">{{str_limit($shortTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'short-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.group_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($groupTours as $groupTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $groupTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$groupTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$groupTour->name}}</div>
                                        <div class="block-desc">{{str_limit($groupTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'group-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.individual_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($individualTours as $indTour)
                        <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $indTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$indTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$indTour->name}}</div>
                                        <div class="block-desc">{{str_limit($indTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'individual-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.exclusive_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($exclusiveTours as $exTour)
                        <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $exTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$exTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$exTour->name}}</div>
                                        <div class="block-desc">{{str_limit($exTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'exclusive-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.classic_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($classicTours as $classicTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $classicTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$classicTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$classicTour->name}}</div>
                                        <div class="block-desc">{{str_limit($classicTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'classic-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.kombo_asia_tours') }}</div></div>
                
                <div class="row content-block_main">
                    @foreach($komboAsiaTours as $kombAsiaTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $kombAsiaTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$kombAsiaTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$kombAsiaTour->name}}</div>
                                        <div class="block-desc">{{str_limit($kombAsiaTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'kombo-asia-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.kombo_uz_kz_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($komboUzKzTours as $komboUzKzTour)
                        <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $komboUzKzTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$komboUzKzTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$komboUzKzTour->name}}</div>
                                        <div class="block-desc">{{str_limit($komboUzKzTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'kombo-uz-kz-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.kombo_uz_kg_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($komboUzKgTours as $komboUzKgTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $komboUzKgTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$komboUzKgTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$komboUzKgTour->name}}</div>
                                        <div class="block-desc">{{str_limit($komboUzKgTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'kombo-uz-kg-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.kombo_uz_tk_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($komboUzTmTours as $komboUzTmTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $komboUzTmTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$komboUzTmTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$komboUzTmTour->name}}</div>
                                        <div class="block-desc">{{str_limit($komboUzTmTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'kombo-uz-tm-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block ">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.kombo_uz_tj_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($komboUzTjTours as $komboUzTjTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $komboUzTjTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$komboUzTjTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$komboUzTjTour->name}}</div>
                                        <div class="block-desc">{{str_limit($komboUzTjTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'kombo-uz-tj-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.excursion') }}</div></div>

                <div class="row content-block_main">
                    @foreach($excursionCity as $excursionCityItem)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $excursionCityItem->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$excursionCityItem->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$excursionCityItem->name}}</div>
                                        <div class="block-desc">{{str_limit($excursionCityItem ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'excursion-сity', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block ">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.palomn_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($pilgrimTours as $palTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $palTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$palTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$palTour->name}}</div>
                                        <div class="block-desc">{{str_limit($palTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'pilgrim-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block ">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.econom_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($economTours as $economTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $economTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$paleconomTourTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$palTour->economTour}}</div>
                                        <div class="block-desc">{{str_limit($economTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'conom-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.velo_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($cyclingTours as $cyclingTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $cyclingTour->slug, 'language' => app()->getLocale()])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$cyclingTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$cyclingTour->economTour}}</div>
                                        <div class="block-desc">{{str_limit($cyclingTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'cycling-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>
            </div>
            <div class="main-content-block">
                <div class="container"><div style="margin-top: 50px;" class="section-name">{{ __('menu.buisnes_tours') }}</div></div>

                <div class="row content-block_main">
                    @foreach($buisnesTours as $buisnesTour)
                    <div class="col-md-4" style="margin-bottom: 25px;">
                            <a class="link-block" href="{{route('tour.show', ['tourname' => $buisnesTour->slug])}}">
                                <div class="big-blocks" style="height: 390px; display: block;">
                                    <div class="block-mini-img" style="height:200px" style="background: url(/storage/{{$buisnesTour->image}});" ></div>
                                    <div class="block-content" style="margin-top:25px;">
                                        <div class="block-title">{{$buisnesTour->economTour}}</div>
                                        <div class="block-desc">{{str_limit($buisnesTour ->desc, $limit = 120, $end = '...')}}</div>
                                        <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <a href="{{route('tour.category', ['category' => 'cycling-tours', 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px;" class="show__more">{{ __('mainpage.more') }}</a>  
            </div>
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
        $(document).ready(function(){
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
