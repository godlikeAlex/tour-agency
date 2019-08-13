<!DOCTYPE html>
<html lang="en">
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
            <div class="title-tours">Тур пакеты</div>
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
            <span class="nav__title col-md-2">Узбекистан</span>
            <ul class="nav__menu col-md-10">
                <li><a href="{{route('uzb.category', ['category' => 'geo'])}}">География</a></li>
                <li><a href="{{route('uzb.category', ['category' => 'history'])}}">История</a></li>
                <li><a href="{{route('uzb.category', ['category' => 'people'])}}">Люди</a></li>
                <li><a href="/uzbekistan/#turizm">Туризм</a></li>
                <li><a href="/uzbekistan/#iskustva">Искуства</a></li>
                <li><a href="/uzbekistan/#culura">Культура</a></li>
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
            </article>
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
                    Показать еще
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
                        if($curCity->id === $city->id) {
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
                                    Где поесть
                                @elseif($city->category === 'where-to-stay')
                                    Где остановиться
                                @elseif($city->category === 'history')
                                    История
                                @elseif($city->category === 'where-to-see')
                                    Что посмотреть
                                @elseif($city->category === 'things-to-do')
                                    Чем заняться
                                @elseif($city->category === 'where-to-buy')
                                    Где покупать
                                @elseif($city->category === 'how-to-get')
                                    Как добраться
                                @elseif($city->category === 'useful-information')
                                    Полезная информация
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
                        Показать еще
                    </div>
            </a>
    </div>
    
    <div class="main-content-block">
        <div class="main-content-block__nav row">
            <span class="nav__title col-md-2">Люди</span>
            <ul class="nav__menu col-md-10">
                <li><a href="/people">Все</a></li>
                <li><a href="/category/drevniy-mir">Древний мир</a></li>
                <li><a href="/category/srednie-veka">Средние века</a></li>
                <li><a href="/uzbekistan/novoe-vremy">Новое время</a></li>
            </ul>
        </div>  
        <div class="row content-block_main">
            @foreach($peoples as $people)
                <article class="col-md-4 block_main__item">
                <div class="col-md-12 block_main__item-content">
                <a href="{{route('people.show', ['categoy' => $people->category, 'slug' => $people->slug])}}"><div class="content-block__img" style="background: url(storage/{{$people->image}})"></div></a>
                    <div class="content-block__category">
                        <a class="category-link" href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($curentUrlCity),'category'=>$city->category]) }}">
                            @if($people->category === 'drevniy-mir')
                                Древний мир
                            @elseif($people->category === 'srednie-veka')
                                Средние века
                            @elseif($people->category === 'novoe-vremy')
                                Новое время
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
                        Показать еще
                    </div>
            </a>
    </div>
    <div class="ad-block">
        <img src="/images/ads2.png" alt="Ad banner">
    </div>
    <div class="tours">
            <div class="title-tours">Базар</div>
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
            <span class="nav__title col-md-2">Новости</span>
            <ul class="nav__menu col-md-10">
                <li><a href="/blog">Все</a></li>
                <li><a href="{{route('blog.category', ['category' => 'toursim'])}}">Туризм</a></li>
                <li><a href="{{route('blog.category', ['category' => 'uzbekistan'])}}">Узбекистан</a></li>
                <li><a href="{{route('blog.category', ['category' => 'history'])}}">История</a></li>
                <li><a href="{{route('blog.category', ['category' => 'tourists'])}}">Туристы</a></li>
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
                                Туризм
                            @elseif($post->category === 'uzbekistan')
                                Узбекистан
                            @elseif($post->category === 'history')
                                История
                            @elseif($post->category === 'tourists')
                                Туристы
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
                        Показать еще
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