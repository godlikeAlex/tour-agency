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
    <link rel="stylesheet" href="/css/main-page.css">
    <link rel="stylesheet" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <style>
        .main-content-block {
            border-bottom: none;
        }
    </style>
</head>
<body>
    @include('/components/header', ['type' => 'tours'])
    <div class="container">
    <div class="tours">
            <div class="title-tours">Популярные тур пакеты</div>
            <div class="row">
                <div class="col-md-3 tour-item-slide">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'eco_tours'])}}">{{ __('menu.eco_tours') }}</a></div>
                    <ul class="item-slide__tours">
                        @foreach($ecoTours as $eco)
                            <li><a href="{{route('tour.show', ['tourname' => $eco->slug])}}">{{$eco->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 tour-item-slide">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'history_tours'])}}">{{ __('menu.history_tours') }}</a></div>
                    <ul class="item-slide__tours">
                        @foreach($historyTours as $history)
                            <li><a href="{{route('tour.show', ['tourname' => $history->slug])}}">{{$history->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 tour-item-slide">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'buisnes_tours'])}}">{{ __('menu.buisnes_tours') }}</a></div>
                    <ul class="item-slide__tours">
                        @foreach($buisnesTours as $buisnes)
                            <li><a href="{{route('tour.show', ['tourname' => $buisnes->slug])}}">{{$buisnes->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3 tour-item-slide">
                    <div class="item-slide__title"><a href="{{route('tour.category', ['category' => 'econom_tours'])}}">{{ __('menu.econom_tours') }}</a></div>
                    <ul class="item-slide__tours">
                        @foreach($economTours as $econom)
                            <li><a href="{{route('tour.show', ['tourname' => $economTours->slug])}}">{{$economTours->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                

                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.history_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($historyTours as $history)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $history->slug])}}"><img src="/storage/{{$history->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'history'])}}">
                                    {{ __('menu.history_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $history->slug])}}">{{$history -> name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'history-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.short_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($shortTours as $shortTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $shortTour->slug])}}"><img src="/storage/{{$shortTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'short-tour'])}}">
                                    {{ __('menu.short_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $shortTour->slug])}}">{{$shortTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'short-tour'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.group_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($groupTours as $groupTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $groupTour->slug])}}"><img src="/storage/{{$groupTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'group-tours'])}}">
                                    {{ __('menu.group_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $groupTour->slug])}}">{{$groupTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'group-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.individual_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($individualTours as $indTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $indTour->slug])}}"><img src="/storage/{{$indTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'individual-tours'])}}">
                                    {{ __('menu.individual_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $indTour->slug])}}">{{$indTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'individual-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.exclusive_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($exclusiveTours as $exTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $exTour->slug])}}"><img src="/storage/{{$exTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'individual-tours'])}}">
                                    {{ __('menu.exclusive_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $exTour->slug])}}">{{$exTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'exclusive-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.classic_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($classicTours as $classicTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $classicTour->slug])}}"><img src="/storage/{{$classicTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'individual-tours'])}}">
                                    {{ __('menu.classic_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $classicTour->slug])}}">{{$classicTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'classic-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.kombo_asia_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($komboAsiaTours as $kombAsiaTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $kombAsiaTour->slug])}}"><img src="/storage/{{$kombAsiaTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'individual-tours'])}}">
                                    {{ __('menu.kombo_asia_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $kombAsiaTour->slug])}}">{{$kombAsiaTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'kombo-asia-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.kombo_uz_kz_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($komboUzKzTours as $komboUzKzTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $komboUzKzTour->slug])}}"><img src="/storage/{{$komboUzKzTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'kombo-uz-kz-tours'])}}">
                                        {{ __('menu.kombo_uz_kz_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $komboUzKzTour->slug])}}">{{$komboUzKzTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'kombo-uz-kz-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.kombo_uz_kg_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($komboUzKgTours as $komboUzKgTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $komboUzKgTour->slug])}}"><img src="/storage/{{$komboUzKgTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'kombo-uz-kg-tours'])}}">
                                    {{ __('menu.kombo_uz_kg_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $komboUzKgTour->slug])}}">{{$komboUzKgTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'kombo-uz-kg-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.kombo_uz_tk_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($komboUzTmTours as $komboUzTmTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $komboUzTmTour->slug])}}"><img src="/storage/{{$komboUzTmTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'kombo-uz-tm-tours'])}}">
                                    {{ __('menu.kombo_uz_tk_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $komboUzTmTour->slug])}}">{{$komboUzTmTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'kombo-uz-tm-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.kombo_uz_tj_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($komboUzTjTours as $komboUzTjTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $komboUzTjTour->slug])}}"><img src="/storage/{{$komboUzTjTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'kombo-uz-tj-tours'])}}">
                                    {{ __('menu.kombo_uz_tj_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $komboUzTjTour->slug])}}">{{$komboUzTjTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'kombo-uz-tj-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.excursion') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($excursionCity as $excursionCityItem)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $excursionCityItem->slug])}}"><img src="/storage/{{$excursionCityItem->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'excursion-сity'])}}">
                                    {{ __('menu.excursion') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $excursionCityItem->slug])}}">{{$excursionCityItem->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'excursion-сity'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.palomn_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($pilgrimTours as $palTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $palTour->slug])}}"><img src="/storage/{{$palTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'pilgrim-tours'])}}">
                                    {{ __('menu.palomn_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $palTour->slug])}}">{{$palTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'pilgrim-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.econom_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($economTours as $economTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $economTour->slug])}}"><img src="/storage/{{$economTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'econom-tours'])}}">
                                    {{ __('menu.econom_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $economTour->slug])}}">{{$economTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'econom-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.velo_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($cyclingTours as $cyclingTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $cyclingTours->slug])}}"><img src="/storage/{{$cyclingTours->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'cycling-tours'])}}">
                                    {{ __('menu.velo_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $cyclingTours->slug])}}">{{$cyclingTours->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'cycling-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
                </div>
                <div class="main-content-block col-md-12">
                    <div class="main-content-block__nav row">
                        <span class="nav__title col-md-12">{{ __('menu.buisnes_tours') }}</span>
                    </div>  
                    <div class="row content-block_main">
                        @foreach($buisnesTours as $buisnesTour)
                            <article class="col-md-4 block_main__item">
                                <div class="content-block__img">
                                <a href="{{route('tour.show', ['tourname' => $buisnesTour->slug])}}"><img src="/storage/{{$buisnesTour->image}}" alt=""></a>
                                </div>
                                <div class="content-block__category">
                                    <a class="category-link" href="{{route('tour.category', ['category' => 'buisnes-tours'])}}">
                                    {{ __('menu.buisnes_tours') }}
                                    </a>
                                </div>
                                <div class="content-block__title">
                                    <a href="{{route('tour.show', ['tourname' => $buisnesTour->slug])}}">{{$buisnesTour->name}}</a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <a class="show-more-link" href="{{route('tour.category', ['category' => 'buisnes-tours'])}}">
                        <div class="button-show-more">
                            {{ __('mainpage.more') }}
                        </div>
                    </a>
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
</body>
</html>