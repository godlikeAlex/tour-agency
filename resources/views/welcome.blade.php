<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Home 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
</head>
<body>

<!-- Header -->
@include('/components/header')
<div class="articles-header">
    <div class="grid">
        <div class="span-row-2 main-news" style="background: url(https://images.unsplash.com/photo-1564941547204-08100f5db412?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=635&q=80); background-size:cover;     background-position: center;">WEBSTEAR Hell</div>
        <div class="span-row-2 main-news" style="background: url(https://images.unsplash.com/photo-1564945626404-5dcdae061c7a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80); background-size: cover;     background-position: center;">Budism hram</div>
        <div class="span-col-2 main-news" style="background: url(https://images.unsplash.com/photo-1564769230746-cb02d0ab8c73?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80); background-size: cover;     background-position: center;">Example 3</div>
        <div class="span-col-2 main-news" style="background: url(https://images.unsplash.com/photo-1564827077134-3252b917df8b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1190&q=80); background-size: cover;     background-position: center;">Example 4</div>
    </div>
</div>
<div class="container">
    <div class="tours">
            <div class="title-tours">{{ __('mainpage.tour_pacekts') }}</div>
            <div class="row container" style="padding: 0; margin: 0;">
                <div class="col-lg-3 col-md-6 col-sm-12 tour-item-slide">
                    <div class="item-slide__title">{{ __('mainpage.eco_tours') }}</div>
                    <ul class="item-slide__tours">
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tour-item-slide">
                    <div class="item-slide__title">{{ __('mainpage.group_tours') }}</div>
                    <ul class="item-slide__tours">
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tour-item-slide">
                    <div class="item-slide__title">{{ __('mainpage.buissnes_tours') }}</div>
                    <ul class="item-slide__tours">
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tour-item-slide">
                    <div class="item-slide__title">{{ __('mainpage.econom_tours') }}</div>
                    <ul class="item-slide__tours">
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                    </ul>
                </div>
            </div>
    </div>
    <div class="main-content-block">
        <div class="main-content-block__nav row">
            <span class="nav__title col-md-2">{{ __('menu.uzbekistan') }}</span>
            <ul class="nav__menu col-md-10">
                <li><a href="{{route('uzb.category', ['category' => 'geo'])}}">{{ __('menu.geo') }}</a></li>
                <li><a href="{{route('uzb.category', ['category' => 'history'])}}">{{ __('menu.history') }}</a></li>
                <li><a href="{{route('uzb.category', ['category' => 'people'])}}">{{ __('menu.peoples') }}</a></li>
                <li><a href="/uzbekistan/#turizm">{{ __('menu.toursim') }}</a></li>
                <li><a href="/uzbekistan/#iskustva">{{ __('menu.art') }}</a></li>
                <li><a href="/uzbekistan/#culura">{{ __('menu.culture') }}</a></li>
            </ul>
        </div>
        <div class="row content-block_main">
            <article class="col-md-4 block_main__item">
                <div class="col-md-12 block_main__item-content">
                    <div class="content-block__img"></div>
                    <div class="content-block__category">География</div>
                    <div class="content-block__title">«Я потерял глаз и даже рад, что это случилось»</div>
                </div>
            </article>
            <article class="col-md-4 block_main__item">
            <div class="col-md-12 block_main__item-content">
                    <div class="content-block__img"></div>
                    <div class="content-block__category">География</div>
                    <div class="content-block__title">«Я потерял глаз и даже рад, что это случилось»</div>
                </div>
            </article>
            <article class="col-md-4 block_main__item">
                <div class="col-md-12 block_main__item-content">
                    <div class="content-block__img"></div>
                    <div class="content-block__category">География</div>
                    <div class="content-block__title">«Я потерял глаз и даже рад, что это случилось»</div>
                </div>
            </article>
            <article class="col-md-4 block_main__item">
            <div class="col-md-12 block_main__item-content">
                    <div class="content-block__img"></div>
                    <div class="content-block__category">География</div>
                    <div class="content-block__title">«Я потерял глаз и даже рад, что это случилось»</div>
                </div>
            </article>
            <article class="col-md-4 block_main__item">
            <div class="col-md-12 block_main__item-content">
                    <div class="content-block__img"></div>
                    <div class="content-block__category">География</div>
                    <div class="content-block__title">«Я потерял глаз и даже рад, что это случилось»</div>
                </div>
            </article>*
            <article class="col-md-4 block_main__item">
            <div class="col-md-12 block_main__item-content">
                    <div class="content-block__img"></div>
                    <div class="content-block__category">География</div>
                    <div class="content-block__title">«Я потерял глаз и даже рад, что это случилось»</div>
                </div>
            </article>
        </div>
        <a class="show-more-link" href="#">
                <div class="button-show-more">
                    {{ __('mainpage.more') }}
                </div>
        </a>
    </div>
    <div class="main-content-block">
        <div class="main-content-block__nav row">
            <span class="nav__title col-md-2">Города</span>
            <ul class="nav__menu col-md-10">
                @foreach($cities as $cityNav)
                     <li><a href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($cityNav->name)])}}">{{$cityNav->name}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="row content-block_main">
            @foreach($cityContent as $city)
                <?php 
                    $curentUrlCity;
                    foreach($cities as $curCity) {
                        if($curCity->id == $city['city_id']) {
                            $curentUrlCity = $curCity->name;
                        }
                    }
                ?>
                <article class="col-md-4 block_main__item">
                    <div class="col-md-12 block_main__item-content">
                    <a href="{{route('city.item', ['city' => Illuminate\Support\Str::lower($curentUrlCity), 'category'=>$city->category, 'slug' => $city->slug])}}"><div class="content-block__img" style="background: url(storage/{{$city->image}})"></div></a>
                        <div class="content-block__category">
                            <a class="category-link" href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($curentUrlCity),'category'=>$city->category]) }}">
                                @if($city->category === 'where-to-eat')
                                    {{ __('mainpage.where_to_eat') }}
                                @elseif($city->category === 'where-to-stay')
                                    {{ __('mainpage.where_to_stay') }}
                                @elseif($city->category === 'history')
                                    {{ __('menu.history') }}
                                @elseif($city->category === 'where-to-see')
                                    {{ __('mainpage.where_to_see') }}
                                @elseif($city->category === 'things-to-do')
                                    {{ __('mainpage.things_to_do') }}
                                @elseif($city->category === 'where-to-buy')
                                    {{ __('mainpage.where_to_buy') }}
                                @elseif($city->category === 'how-to-get')
                                    {{ __('mainpage.how_to_get') }}
                                @elseif($city->category === 'useful-information')
                                    {{ __('mainpage.useful_information') }}
                                @endif
                            </a>
                        </div>
                        <div class="content-block__title">
                            <a class="content-block__title-link" href="{{route('city.item', ['city' => Illuminate\Support\Str::lower($curentUrlCity), 'category'=>$city->category, 'slug' => $city->slug])}}">{{$city->name}}</a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
        <a class="show-more-link" href="/city">
                    <div class="button-show-more">
                    {{ __('mainpage.more') }}
                    </div>
            </a>
    </div>
    
    <div class="main-content-block">
        <div class="main-content-block__nav row">
            <span class="nav__title col-md-2">{{ __('menu.peoples') }}</span>
            <ul class="nav__menu col-md-10">
                <li><a href="/people">{{ __('menu.all') }}</a></li>
                <li><a href="{{route('people.category', ['category' => 'drevniy_mir'])}}">{{ __('menu.drevniy_mir') }}</a></li>
                <li><a href="{{route('people.category', ['category' => 'srednie_veka'])}}">{{ __('menu.srednie_veka') }}</a></li>
                <li><a href="{{route('people.category', ['category' => 'novoe_vremya'])}}">{{ __('menu.novoe_vremya') }}</a></li>
                <li><a href="{{route('people.category', ['category' => 'sovremenost'])}}">{{ __('menu.sovremenost') }}</a></li>
            </ul>
        </div>  
        <div class="row content-block_main">
            @foreach($peoples as $people)
                <article class="col-md-4 block_main__item">
                <div class="col-md-12 block_main__item-content">
                <a href="{{route('people.show', ['categoy' => $people->category, 'slug' => $people->slug])}}"><div class="content-block__img" style="background: url(storage/{{$people->image}})"></div></a>
                    <div class="content-block__category">
                        <a class="category-link" href="{{ route('people.category',  ['category' => $people->category]) }}">
                            @if($people->category === 'drevniy-mir')
                                {{ __('menu.drevniy_mir') }}
                            @elseif($people->category === 'srednie-veka')
                                {{ __('menu.srednie_veka') }}
                            @elseif($people->category === 'novoe-vremy')
                                {{ __('menu.novoe_vremya') }}
                            @elseif($people->category === 'sovremenost')
                                {{ __('menu.sovremenost') }}
                            @endif
                        </a>
                    </div>
                    <div class="content-block__title">
                        <a  class="content-block__title-link" href="{{route('people.show', ['categoy' => $people->category, 'slug' => $people->slug])}}">{{$people->name}}</a>
                    </div>
                </div>
                </article>
            @endforeach
        </div>
        <a class="show-more-link" href="/people">
                    <div class="button-show-more">
                    {{ __('mainpage.more') }}
                    </div>
            </a>
    </div>
    <div class="ad-block">
        <img src="/images/ads2.png" alt="Ad banner">
    </div>
    <div class="tours">
            <div class="title-tours">{{ __('menu.shop') }}</div>
            <div class="row container" style="padding: 0; margin: 0;">
                <div class="col-lg-3 col-md-6 col-sm-12 tour-item-slide">
                    <div class="item-slide__title">Эко туры</div>
                    <ul class="item-slide__tours">
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tour-item-slide">
                    <div class="item-slide__title">Групповые туры</div>
                    <ul class="item-slide__tours">
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tour-item-slide">
                    <div class="item-slide__title">Бизнес туры</div>
                    <ul class="item-slide__tours">
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 tour-item-slide">
                    <div class="item-slide__title">Эконом туры</div>
                    <ul class="item-slide__tours">
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                        <li><a href="#">Example Tour #1</a></li>
                    </ul>
                </div>
            </div>
    </div>
    <div class="main-content-block">
        <div class="main-content-block__nav row">
            <span class="nav__title col-md-2">{{ __('menu.news') }}</span>
            <ul class="nav__menu col-md-10">
                <li><a href="/blog">{{ __('menu.all') }}</a></li>
                <li><a href="{{route('blog.category', ['category' => 'toursim'])}}">{{ __('menu.tourism') }}</a></li>
                <li><a href="{{route('blog.category', ['category' => 'uzbekistan'])}}">{{ __('menu.uzbekistan') }}</a></li>
                <li><a href="{{route('blog.category', ['category' => 'history'])}}">{{ __('menu.history') }}</a></li>
                <li><a href="{{route('blog.category', ['category' => 'tourists'])}}">{{ __('menu.tourists') }}</a></li>
            </ul>
        </div>  
        <div class="row content-block_main">
            @foreach($articles as $post)
                <article class="col-md-4 block_main__item">
                <div class="col-md-12 block_main__item-content">
                    <a href="{{route('blog.show', ['category' => $post->category, 'slug' => $post->slug])}}"><div class="content-block__img" style="background:url(storage/{{$post->image}})"></div></a>
                    <div class="content-block__category">
                        <a class="category-link" href="{{ route('blog.category', ['category'=>$post->category]) }}">
                            @if($post->category === 'toursim')
                                {{ __('menu.tourism') }}
                            @elseif($post->category === 'uzbekistan')
                                {{ __('menu.uzbekistan') }}
                            @elseif($post->category === 'history')
                                {{ __('menu.history') }}
                            @elseif($post->category === 'tourists')
                                {{ __('menu.tourists') }}
                            @endif
                        </a>
                    </div>
                    <div class="content-block__title">
                        <a class="content-block__title-link" href="{{route('blog.show', ['category' => $post->category,'slug' => $post->slug])}}">{{$post->title}}</a>
                    </div>
                </div>
                </article>
            @endforeach
        </div>
        <a class="show-more-link" href="/blog">
                    <div class="button-show-more">
                    {{ __('mainpage.more') }}
                    </div>
            </a>
    </div>
    <div class="ad-block">
        <img src="/images/ads.png" alt="Ad banner">
    </div>
</div>

<!-- Footer -->
@include('/components/footer')

</body>
</html>