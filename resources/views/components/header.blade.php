<div class="top-black-menu">
<script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <div class="container">
        <div class="row">
        <div class="col-md-5 main-links-nav-top"><a href="">About us</a> <a href="">Tours</a> <a href="">For Tourists</a> <a href="">F.A.Q</a></div>
        <div class="social-top col-md-7" style="text-align:right;">
            <?php 
                $routeParametes = function($lang) {
                    $params = Route::current()->parameters;
                    $params['language'] = $lang;
                    return $params;
                };
            ?>
            <a class="lang" data-menu-show="show-lang" href="{{ route(Route::currentRouteName(), $routeParametes('en') ) }}" >EN</a>
            <a class="lang active-lang" data-menu-show="show-lang" href="{{ route(Route::currentRouteName(), $routeParametes('ru') ) }}">РУС</a> 
            <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}" >ESP</a>
            <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}" >FRA</a>
            <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}" >DEU</a>
            <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}" >اللغة العربية</a>
            <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}" >漢語</a>
            <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}" >한국어</a>
            <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}" >日本語</a>
        </div>  
        </div>
    </div>
</div>
<div class="ad-banner-header" style="{{ (request()->is('/')) ? 'display:flex' : 'display:none' }}; height: 200px; background: white; align-items: center; justify-content: center;"><img src="images/head.svg" alt="" srcset=""></div>

<nav class="main-menu-sticky">
    <div class="left-side-menu left-menu-hide">
        <div class="close-cont">
            <div><img class="logo-left-menu-main" style="width:150px;" src="images/head.svg" alt=""></div>
            <img src="images/close.png" class="close-slide-menu" alt="">
        </div>
        <ul class="left-menu-main">
            <li><div  class="left-menu-main-link" ><a href="{{route('index', app()->getLocale())}}">{{ __('menu.main') }}</a></div></li>
            <li>
                <div  class="left-menu-main-link" ><a href="{{route('index.uzbekistan', app()->getLocale())}}">{{ __('menu.uzbekistan') }}</a>  <img src="images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                        <li><a href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">{{ __('menu.geo') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.peoples') }}</a></li>
                        <li><a href="/uzbekistan#iskustva">{{ __('menu.art') }}</a></li>
                        <li><a href="/uzbekistan#iskustva">{{ __('menu.moda') }}</a></li>
                        <li><a href="/uzbekistan#culura">{{ __('menu.culture') }}</a></li>
                        <li><a href="/uzbekistan#culura">{{ __('menu.kitchen') }}</a></li>
                        <li><a href="/uzbekistan#culura">Традиции</a></li>
                        <li><a href="{{route('index.uzbekistan', app()->getLocale())}}" >{{ __('menu.alluzbekistan') }}</a></li>
                </ul>
            </li>
            <li>
                <div  class="left-menu-main-link" ><a href="{{route('index.city', app()->getLocale())}}">{{ __('menu.cities') }}</a> <img src="images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    @foreach($cities as $city)
                        <li><a href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name), 'language' => app()->getLocale()])}}">{{$city->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <div  class="left-menu-main-link" ><a href="{{route('index.people', app()->getLocale())}}">{{ __('menu.peoples') }}</a>  <img src="images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    <li><a href="{{route('index.people', app()->getLocale())}}">{{ __('menu.all') }}</a></li>
                    <li><a href="{{route('people.category', ['category' => 'drevniy-mir', 'language' => app()->getLocale()])}}">{{ __('menu.drevniy_mir') }}</a></li>
                    <li><a href="{{route('people.category', ['category' => 'srednie-veka', 'language' => app()->getLocale()])}}">{{ __('menu.srednie_veka') }}</a></li>
                    <li><a href="{{route('people.category', ['category' => 'novoe-vremya', 'language' => app()->getLocale()])}}">{{ __('menu.novoe_vremya') }}</a></li>
                </ul>
            </li>    
            <li>
                <div  class="left-menu-main-link" ><a href="{{route('index.galery', app()->getLocale())}}">{{ __('menu.photo') }}</a>  <img src="images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    <li><a href="{{route('show.galery', ['centuary' => 'khiva-khanate', 'language' => app()->getLocale()])}}">{{ __('menu.khiva-khanate') }}</a></li>
                    <li><a href="{{route('show.galery', ['centuary' => 'khanate-khanate', 'language' => app()->getLocale()])}}">{{ __('menu.kokand-khanate') }}</a></li>
                    <li><a href="{{route('show.galery', ['centuary' => 'bukhara-emirate', 'language' => app()->getLocale()])}}">{{ __('menu.bukhara-emirate') }}</a><</li>
                    <li><a href="{{route('show.galery', ['centuary' => 'turkestan-assr', 'language' => app()->getLocale()])}}">{{ __('menu.turkestan-assr') }}</a></li>
                    <li><a href="{{route('show.galery', ['centuary' => 'jadidism', 'language' => app()->getLocale()])}}">{{ __('menu.jadidism') }}</a></li>
                    <li>><a href="{{route('show.galery', ['centuary' => 'stalin-period', 'language' => app()->getLocale()])}}">{{ __('menu.stalin-period') }}</a></li>
                    <li><a href="{{route('show.galery', ['centuary' => 'khrushchevsky-period', 'language' => app()->getLocale()])}}">{{ __('menu.khrushchevsky-period') }}</a></li>
                    <li><a href="{{route('show.galery', ['centuary' => 'brezhnevsky-period', 'language' => app()->getLocale()])}}">{{ __('menu.brezhnevsky-period') }}</a></li>
                    <li><a href="{{route('show.galery', ['centuary' => 'restructuring', 'language' => app()->getLocale()])}}">{{ __('menu.restructuring') }}</a></li>
                    <li><a href="{{route('show.galery', ['centuary' => 'republic-of-uzbekistan', 'language' => app()->getLocale()])}}">{{ __('menu.republic-of-uzbekistan') }}</a></li>
                    <li><a href="{{route('show.galery', ['centuary' => 'present', 'language' => app()->getLocale()])}}">{{ __('menu.present') }}</a></li>

                </ul>
            </li>
            <li>
                <div  class="left-menu-main-link" ><a href="{{route('index.tour', app()->getLocale())}}">{{ __('menu.tours') }}</a>  <img src="images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'history_tours', 'language' => app()->getLocale()])}}">Исторические туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'short_tours', 'language' => app()->getLocale()])}}">Короткие туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'group_tours', 'language' => app()->getLocale()])}}">Групповые туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'individual_tours', 'language' => app()->getLocale()])}}">Индивидуальные туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'exclusive_tours', 'language' => app()->getLocale()])}}">Эксклюзивные туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'classic_tours', 'language' => app()->getLocale()])}}">Классические туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'eco_tours', 'language' => app()->getLocale()])}}">Эко туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'kombo_asia_tours', 'language' => app()->getLocale()])}}">Туры по Центральной Азии</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'excursion_сity', 'language' => app()->getLocale()])}}">Экскурсии по городам</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'pilgrim_tours', 'language' => app()->getLocale()])}}">Паломнические туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'economy_tours', 'language' => app()->getLocale()])}}">Эконом туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'cycling_tours', 'language' => app()->getLocale()])}}">Велотуры туры</a></li>
                    <li style="padding: 10px 0px;"><a href="{{route('tour.category', ['category' => 'buisnes_tours', 'language' => app()->getLocale()])}}">Бизнес туры</a></li>

                </ul>
            </li>
            <li><div  class="left-menu-main-link" ><a href="/fortourists">{{ __('menu.fortoursit') }}</a></div></li>
            <div  class="left-menu-main-link" ><a href="/city">Базар</a></div>
            <li>
                <div  class="left-menu-main-link" ><a href="{{route('index.blog', app()->getLocale())}}">{{ __('menu.news') }}</a>  <img src="images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    <li><a href="{{route('blog.category', ['category' => 'toursim', 'language' => app()->getLocale()])}}">Туризм</a></li>
                    <li><a href="{{route('blog.category', ['category' => 'uzbekistan', 'language' => app()->getLocale()])}}">Узбекистан</a></li>
                    <li><a href="{{route('blog.category', ['category' => 'history', 'language' => app()->getLocale()])}}">История</a></li>
                    <li><a href="{{route('blog.category', ['category' => 'tourists', 'language' => app()->getLocale()])}}">Туристы</a></li>
                </ul>
            </li>
            
        </ul>
        <ul class="left-menu-social"> 
            <li>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-vk"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-messenger"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i> </a>
            </li>
        </ul>
        <ul class="left-menu-network">
            <li><a href="">CONTACT</a></li>
            <li><a href="">ABOUT COMPANY</a></li>
            <li><a href="">PRIVACY POLICY</a></li>
            <li><a href="">LINK POLICY</a></li>
            <li><a href="">F.A.Q</a></li>
        </ul>
        <p class="terms">
        © 2019 UZBEKISTAN NOW. All rights reserved.
        Use of and/or registration on any portion of this site constitutes acceptance of our User Agreement (updated 5/25/19) and Privacy Policy and Cookie Statement (updated 5/25/18).  Your California Privacy Rights   The material on this site may not be reproduced, distributed, transmitted, cached, or otherwise used, except with the prior written permission of Condé Nast.
        UZBEKISTAN NOW may earn compensation on sales through affiliate programs.
        </p>
    </div>
    <div class="menu-border">
        <div class="container">
            <ul class="main-menu col-md-12">
                <li><img style="width:25px" class="open-left-bar" src="/images/menu.png" alt=""></li>
                <li><a href="/"><img style="width:150px" src="/images/head.svg" alt=""></a></li>
                <li class="{{ (request()->is('/')) ? 'active' : '' }} dektop-item"><a href="/">{{ __('menu.main') }}</a></li>
                <li class="{{ (request()->is('uzbekistan*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="uzb" href="{{route('index.uzbekistan', app()->getLocale())}}">{{ __('menu.uzbekistan') }}</a>
                    <div data-menu="uzb" class="sub-menu-header">
                        <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">{{ __('menu.geo') }}</a>
                        <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a>
                        <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.peoples') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#iskustva">{{ __('menu.art') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#iskustva">{{ __('menu.moda') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#culura">{{ __('menu.culture') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#culura">{{ __('menu.kitchen') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#culura">Традиции</a>
                        <a class="droped-menu-item" href="={{route('index.uzbekistan', app()->getLocale())}}" class="sub-menu-item">{{ __('menu.alluzbekistan') }}</a>
                    </div>
                </li>
                <li  class="{{ (request()->is('city*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="citys" href="{{route('index.city', app()->getLocale())}}">{{ __('menu.cities') }}</a>
                    <div data-menu="citys" class="sub-menu-header">
                        @foreach($cities as $city)
                            <a class="droped-menu-item" href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name), 'language' => app()->getLocale()])}}">{{$city->name}} </a>
                        @endforeach
                        <a class="droped-menu-item" href="{{route('index.city', app()->getLocale())}}" class="sub-menu-item">{{ __('menu.allcity') }}</a>
                    </div>
                </li>
                <li class="{{ (request()->is('people*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="peoples-menu" href="{{route('index.people', app()->getLocale())}}">{{ __('menu.peoples') }}</a>
                    <div data-menu="peoples-menu" class="sub-menu-header">
                        <a class="droped-menu-item" href="{{route('people.category', ['category' => 'drevniy_mir', 'language' => app()->getLocale()])}}">{{ __('menu.drevniy_mir') }}</a>
                        <a class="droped-menu-item" href="{{route('people.category', ['category' => 'srednie_veka', 'language' => app()->getLocale()])}}">{{ __('menu.srednie_veka') }}</a>
                        <a class="droped-menu-item" href="{{route('people.category', ['category' => 'novoe_vremya', 'language' => app()->getLocale()])}}">{{ __('menu.novoe_vremya') }}</a>
                        <a class="droped-menu-item" href="{{route('people.category', ['category' => 'sovremenost', 'language' => app()->getLocale()])}}">{{ __('menu.sovremenost') }}</a>
                        <a class="droped-menu-item" href="={{route('index.people', app()->getLocale())}}" class="sub-menu-item">{{ __('menu.allpeople') }}</a>
                    </div>
                </li>
                <li class="{{ (request()->is('galery*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="show-galery" href="{{route('index.galery', app()->getLocale())}}">{{ __('menu.photo') }}</a>
                    <div data-menu="show-galery" class="sub-menu-header">
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'khiva-khanate', 'language' => app()->getLocale()])}}">{{ __('menu.khiva-khanate') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'khanate-khanate', 'language' => app()->getLocale()])}}">{{ __('menu.kokand-khanate') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'bukhara-emirate', 'language' => app()->getLocale()])}}">{{ __('menu.bukhara-emirate') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'turkestan-assr', 'language' => app()->getLocale()])}}">{{ __('menu.turkestan-assr') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'jadidism', 'language' => app()->getLocale()])}}">{{ __('menu.jadidism') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'stalin-period', 'language' => app()->getLocale()])}}">{{ __('menu.stalin-period') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'khrushchevsky-period', 'language' => app()->getLocale()])}}">{{ __('menu.khrushchevsky-period') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'brezhnevsky-period', 'language' => app()->getLocale()])}}">{{ __('menu.brezhnevsky-period') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'restructuring', 'language' => app()->getLocale()])}}">{{ __('menu.restructuring') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'republic-of-uzbekistan', 'language' => app()->getLocale()])}}">{{ __('menu.republic-of-uzbekistan') }}</a>
                        <a class="droped-menu-item" href="{{route('show.galery', ['centuary' => 'present', 'language' => app()->getLocale()])}}">{{ __('menu.present') }}</a>
                        <a class="droped-menu-item" href="{{route('blog.category', ['category' => 'notes', 'language' => app()->getLocale()])}}" class="sub-menu-item">{{ __('menu.allphoto') }}</a>
                    </div>
                </li>
                <li class="{{ (request()->is('tours*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="show-tours-gal" href="{{route('index.tour', app()->getLocale())}}">{{ __('menu.tours') }}</a>
                    <div data-menu="show-tours-gal" class="sub-menu-header">
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'history-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.history_tours') }}</a>  
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'short-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.short_tours') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'group-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.group_tours') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'individual-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.individual_tours') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'exclusive-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.exclusive_tours') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'classic-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.classic_tours') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'classic-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.tourism') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'excursion-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.excursion') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'pilgrim-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.palomn_tours') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'economy-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.econom_tours') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'eco-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.eco_tours') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'cycling-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.velo_tours') }}</a>
                        <a class="droped-menu-item" href="{{route('tour.category', ['category' => 'buisnes-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.buisnes_tours') }}</a>
                        <a class="droped-menu-item" href="/tours" class="sub-menu-item">{{ __('menu.alltours') }}</a>
                        

                    </div>
                </li>
                <li class="{{ (request()->is('tours*')) ? 'active' : '' }} dektop-item"><a href="/tourism">{{ __('menu.fortoursit') }}</a></li>
                <li class="{{ (request()->is('bazar')) ? 'active' : '' }} dektop-item"><a href="">{{ __('menu.shop') }}</a></li>
                <li class="{{ (request()->is('blog*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="show-blog-gal" href="{{route('index.blog', app()->getLocale())}}">{{ __('menu.news') }}</a>
                    <div data-menu="show-blog-gal" class="sub-menu-header">
                        <a class="droped-menu-item" href="{{route('blog.category', ['category' => 'uzbekistan', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'uzbekistan') ? 'sub-menu-active' : ''}}">{{ __('menu.uzbekistan') }}</a>   
                        <a class="droped-menu-item" href="{{route('blog.category', ['category' => 'archeology', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'archeology') ? 'sub-menu-active' : ''}}">{{ __('menu.archeology') }}</a> 
                        <a class="droped-menu-item" href="{{route('blog.category', ['category' => 'tourism', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.tourism') }}</a>  
                        <a class="droped-menu-item" href="{{route('blog.category', ['category' => 'notes', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'notes') ? 'sub-menu-active' : ''}}">{{ __('menu.notes') }}</a>
                        <a class="droped-menu-item" href="/blog" class="sub-menu-item">{{ __('menu.allnews') }}</a>
                    </div>
                </li>    

                
                <!-- <li style="font-size:13px;"><i style="padding-right: 5px; font-size:28px" class="fas fa-globe-europe"></i> ES</li> -->
            </ul>
            
        </div>
    </div>   
    @if(isset($type))
        @if($type === 'uzbekistan') 
        <div class="sub-menu-main"> 
            <div class="container"> 
                <ul class="sub-menu-nav col-md-12">
                    <li class="dropdown" data-menu-show="geo">
                        <a href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}" data-menu-show="geo" class="sub-menu-item {{ (request()->segment(2) == 'geo') ? 'sub-menu-active' : ''}}">{{ __('menu.geo') }}</a>
                        <div data-menu="geo" class="sub-menu-header">
                            @foreach($geo as $g) 
                                <a class="droped-menu-item" href="{{route('uzb.show', ['category' => 'geo', 'uzb' => $g->slug, 'language' => app()->getLocale()])}}">{{$g->name}}</a>
                            @endforeach
                        </div>   
                    </li>
                    <li class="dropdown" data-menu-show="history">
                        <a href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}" data-menu-show="history" class="sub-menu-item {{ (request()->segment(2) == 'history') ? 'sub-menu-active' : ''}}">{{ __('menu.history') }}</a>
                        <div data-menu="history" class="sub-menu-header">
                            @foreach($history as $h) 
                                <a class="droped-menu-item" href="{{route('uzb.show', ['category' => 'history', 'uzb' => $h->slug, 'language' => app()->getLocale()])}}">{{$h->name}}</a>
                            @endforeach
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="people">
                        <a href="{{route('uzb.category', ['category' => 'peoples', 'language' => app()->getLocale()])}}" data-menu-show="people" class="sub-menu-item">{{ __('menu.peoples') }}</a>
                        <div data-menu="people" class="sub-menu-header">
                            @foreach($peoplesm as $p) 
                                <a class="droped-menu-item" href="{{route('uzb.show', ['category' => 'peoples', 'uzb' => $p->slug, 'language' => app()->getLocale()])}}">{{$p->name}}</a>
                            @endforeach
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="iskus">
                        <a href="{{route('uzb.category', ['category' => 'art', 'language' => app()->getLocale()])}}" data-menu-show="iskus" 
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.art') }}</a>
                        <div data-menu="iskus" class="sub-menu-header">
                            @foreach($art as $a) 
                                <a class="droped-menu-item" href="{{route('uzb.show', ['category' => 'art', 'uzb' => $a->slug, 'language' => app()->getLocale()])}}">{{$a->name}}</a>
                            @endforeach
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="moda">
                        <a href="{{route('uzb.category', ['category' => 'fashion', 'language' => app()->getLocale()])}}" data-menu-show="moda" 
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.moda') }}</a>
                        <div data-menu="moda" class="sub-menu-header">
                            @foreach($fashion as $f) 
                                <a class="droped-menu-item" href="{{route('uzb.show', ['category' => 'fashion', 'uzb' => $f->slug, 'language' => app()->getLocale()])}}">{{$f->name}}</a>
                            @endforeach
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="kartini">
                        <a href="{{route('uzb.category', ['category' => 'painting', 'language' => app()->getLocale()])}}" data-menu-show="kartini" 
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.painting') }}</a>
                        <div data-menu="kartini" class="sub-menu-header">
                            @foreach($painting as $pg) 
                                <a class="droped-menu-item" href="{{route('uzb.show', ['category' => 'painting', 'uzb' => $pg->slug, 'language' => app()->getLocale()])}}">{{$pg->name}}</a>
                            @endforeach                 
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="cult">
                        <a data-menu-show="cult" href="{{route('uzb.category', ['category' => 'culture', 'language' => app()->getLocale()])}}" 
                        class="sub-menu-item {{ (request()->segment(2) == 'kitchen' || request()->segment(2) == 'clothing' || request()->segment(2) == 'religion' || request()->segment(2) == 'holidays' || request()->segment(2) == 'sufism' || request()->segment(2) == 'lang') ? 'sub-menu-active' : ''}}">{{ __('menu.culture') }}</a>
                        <div data-menu="cult" class="sub-menu-header">
                            @foreach($culture as $cult) 
                                <a class="droped-menu-item" href="{{route('uzb.show', ['category' => 'culture', 'uzb' => $cult->slug, 'language' => app()->getLocale()])}}">{{$cult->name}}</a>
                            @endforeach
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="kitchen">
                        <a href="{{route('uzb.category', ['category' => 'kitchen', 'language' => app()->getLocale()])}}" data-menu-show="kitchen" 
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.kitchen') }}</a>
                        <div data-menu="kitchen" class="sub-menu-header">
                            @foreach($kitchen as $kit) 
                                <a class="droped-menu-item" href="{{route('uzb.show', ['category' => 'kitchen', 'uzb' => $kit->slug, 'language' => app()->getLocale() ])}}">{{$kit->name}}</a>
                            @endforeach
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="tradition">
                        <a href="{{route('uzb.category', ['category' => 'tradicii', 'language' => app()->getLocale()])}}" data-menu-show="tradition" 
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.tradicii') }}</a>
                        <div data-menu="tradition" class="sub-menu-header">
                            @foreach($tradition as $trad) 
                                <a class="droped-menu-item" href="{{route('uzb.show', ['category' => 'tradition', 'uzb' => $trad->slug, 'language' => app()->getLocale()])}}">{{$trad->name}}</a>
                            @endforeach
                        </div>  
                    </li>
                </ul>
            </div>
        </div>
        @elseif($type === 'city')         
        <div class="sub-menu-main"> 
            <div class="container"> 
                <ul class="sub-menu-nav col-md-12">
                    @foreach($cities as $city)
                        <li class="dropdown" data-menu-show="{{$city->name}}">
                            <a href="" data-menu-show="{{$city->name}}" class="sub-menu-item {{ (request()->segment(2) == Illuminate\Support\Str::lower($city->name)) ? 'sub-menu-active' : ''}}">{{$city->name}}</a>
                            <div  data-menu="{{$city->name}}" class="sub-menu-header">
                                <a class="droped-menu-item" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a>
                                <a class="droped-menu-item" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-eat', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_eat') }}</a>
                                <a class="droped-menu-item" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-stay', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_stay') }}</a>
                                <a class="droped-menu-item" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-see', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_see') }}</a>
                                <a class="droped-menu-item" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-do', 'language' => app()->getLocale()])}}">{{ __('mainpage.things_to_do') }}</a>
                                <a class="droped-menu-item" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-buy', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_buy') }}</a>
                                <a class="droped-menu-item" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'how-to-get', 'language' => app()->getLocale()])}}">{{ __('mainpage.how_to_get') }}</a>
                                <a class="droped-menu-item" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'useful-information', 'language' => app()->getLocale()])}}">{{ __('mainpage.useful_information') }}</a>
                            </div>   
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @elseif($type === 'people')
        <div class="sub-menu-main"> 
            <div class="container"> 
                <ul class="sub-menu-nav col-md-12">
                    <li>    
                        <a href="{{route('people.category', ['category' => 'drevniy-mir', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'drevniy-mir') ? 'sub-menu-active' : ''}}">{{ __('menu.drevniy_mir') }}</a>
                    </li>
                    <li>    
                        <a href="{{route('people.category', ['category' => 'srednie-veka', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'srednie-veka') ? 'sub-menu-active' : ''}}">{{ __('menu.srednie_veka') }}</a>
                    </li>
                    <li>    
                        <a href="{{route('people.category', ['category' => 'novoe-vremya', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'novoe-vremya') ? 'sub-menu-active' : ''}}">{{ __('menu.novoe_vremya') }}</a>
                    </li>
                    <li>    
                        <a href="{{route('people.category', ['category' => 'sovremenost', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'sovremenost') ? 'sub-menu-active' : ''}}">{{ __('menu.sovremenost') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        @elseif($type === 'news')
        <div class="sub-menu-main"> 
            <div class="container"> 
                <ul class="sub-menu-nav col-md-12">
                    <li>    
                        <a href="{{route('blog.category', ['category' => 'uzbekistan', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'uzbekistan') ? 'sub-menu-active' : ''}}">{{ __('menu.uzbekistan') }}</a>
                    </li>
                    <li>    
                        <a href="{{route('blog.category', ['category' => 'archeology', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'archeology') ? 'sub-menu-active' : ''}}">{{ __('menu.archeology') }}</a>
                    </li>
                    <li>    
                        <a href="{{route('blog.category', ['category' => 'tourism', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.tourism') }}</a>
                    </li>
                    <li>    
                        <a href="{{route('blog.category', ['category' => 'notes', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'notes') ? 'sub-menu-active' : ''}}">{{ __('menu.notes') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        @elseif($type === 'tours')
        <div class="sub-menu-main"> 
            <div class="container"> 
                <ul class="sub-menu-nav col-md-12" style="flex-wrap: wrap; justify-content:center;">
                    <li> <a href="{{route('tour.category', ['category' => '', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.history_tours') }}</a>  </li>
                    <li><a href="{{route('tour.category', ['category' => 'history-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.short_tours') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'short-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.group_tours') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'group-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.individual_tours') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'individual-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.exclusive_tours') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'exclusive-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.classic_tours') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'classic-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.tourism') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'excursion-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.excursion') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'pilgrim-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.palomn_tours') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'economy-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.econom_tours') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'eco-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.eco_tours') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'cycling-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.velo_tours') }}</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'buisnes-tours', 'language' => app()->getLocale()])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.buisnes_tours') }}</a></li>
                </ul>
            </div>
        </div>
        @endif
    @endif
    <script>
            document.addEventListener('mouseover', e => {
                const target = e.target;
                const attr = target.getAttribute('data-menu-show');
                const menus = document.querySelectorAll('div[data-menu]');
                if(!target.classList.contains('sub-menu-header') && !target.classList.contains("droped-menu-item") && !target.classList.contains('drop-image')) {
                    menus.forEach(droped => {
                        droped.style.display = 'none';
                    }); 
                }
                if(attr) {
                    menus.forEach(droped => {
                        droped.style.display = 'none';
                        const dropedAttr = droped.getAttribute('data-menu');
                        if(attr === dropedAttr) droped.style.display = 'block';
                    });
                }
            });
        </script>
    <script>
            window.addEventListener('scroll', e => {
            const position = window.scrollY;
            const menu = document.querySelector('.main-menu-sticky');
            if(position > 250 || position > 349) {
                menu.classList.add('main-menu-hide');
            } else if(position <= 250) {
                menu.classList.remove('main-menu-hide');
                menu.classList.remove('main-menu-fixed');
            }

            if(position >= 350) {
                menu.classList.remove('main-menu-hide');
                menu.classList.add('main-menu-fixed');
            }
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menu = document.querySelector('.main-menu-sticky');
            const dropDown = document.querySelectorAll('.drop-menu');
            const open     = document.querySelector('.open-left-bar');
            const close    = document.querySelector('.close-slide-menu');
            const leftMenu = document.querySelector('.left-side-menu');
            const site = document.querySelector('#main-content-web');

            dropDown.forEach(open => {
                open.addEventListener('click', e => {
                    const dropingMenu = e.target.parentNode.nextElementSibling;
                    const dropedMenuHeight = dropingMenu.scrollHeight;
                    if(dropingMenu.style.maxHeight) {
                        dropingMenu.style.maxHeight = null;
                        e.target.classList.remove('drop-menu-active');
                    } else {
                        dropingMenu.style.maxHeight = `${dropedMenuHeight}px`;
                        e.target.classList.add('drop-menu-active');
                    }
                });
            });

            open.addEventListener('click', () => openMenu(true) );
            close.addEventListener('click', () => openMenu(false) );
            document.body.addEventListener('click', e => {
                const target = e.target;
                if(!target.classList.contains('left-side-menu')  && !target.classList.contains('close-cont') && !target.classList.contains('drop-menu') && !target.classList.contains('left-menu-main-link') && !target.classList.contains('open-left-bar')){
                    leftMenu.classList.add('left-menu-hide')
                    document.body.style.left = '0%';
                    open.style.visibility = 'visible';
                    
                }
            })


            const openMenu = (isOpen) => {
                if(isOpen) {
                    leftMenu.classList.remove('left-menu-hide');
                    open.style.visibility = 'hidden';
                    document.body.style.overflowX  = 'hidden';
                    document.body.style.left = '15%';
                }
                else {
                    leftMenu.classList.add('left-menu-hide');
                    open.style.visibility = 'visible';
                    document.body.style.left = '0%';
                }
            }
        })
    </script>
</nav>