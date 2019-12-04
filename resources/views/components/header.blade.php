<div class="top-black-menu">
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <div class="container">
        <div class="row">
            <div class="col-md-6 main-links-nav-top main-links-top"> <a href="http://" target="_blank"
                    rel="noopener noreferrer"><i class="fab fa-vk" aria-hidden="true"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram"
                        aria-hidden="true"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-messenger"
                        aria-hidden="true"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"
                        aria-hidden="true"></i> </a><a href="#">{{$data_for_client['email']}}</a><a
                    href="#">{{$data_for_client['phone']}}</a></div>
            <div class="social-top col-md-6" style="text-align:right;">
                <?php
                $routeParametes = function($lang) {
                    $params = Route::current()->parameters;
                    $params['language'] = $lang;
                    return $params;
                };
            ?>
                <a class="lang {{app()->getLocale() == 'en' ? 'active-lang' : ''}}" data-menu-show="show-lang"
                    href="{{ route(Route::currentRouteName(), $routeParametes('en') ) }}">ENG</a>
                <a class="lang {{app()->getLocale() == 'ru' ? 'active-lang' : ''}}" data-menu-show="show-lang"
                    href="{{ route(Route::currentRouteName(), $routeParametes('ru') ) }}">РУС</a>
                <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}">ESP</a>
                <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}">FRA</a>
                <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}">DEU</a>
                <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}">اللغة العربية</a>
                <a class="lang" data-menu-show="show-lang" href="{{ url('locale/en') }}">漢語</a>
            </div>
        </div>
    </div>
</div>
<div class="right-side-menu right-menu-hide">dsa</div>

<div class="ad-banner-header"
    style="{{request()->is('ru') || request()->is('en') ? 'display:flex' : 'display: none;'}} height: 200px; background: white; align-items: center; justify-content: center;">
    <img style="width:100%; height: 100%" src="/images/head.svg" alt="" srcset=""></div>

<nav class="main-menu-sticky">
    <div class="left-side-menu left-menu-hide">
        <div class="close-cont">
            <div><img class="logo-left-menu-main" style="width:150px;" src="/images/head.svg" alt=""></div>
            <img src="/images/close.png" class="close-slide-menu" alt="">
        </div>
        <ul class="left-menu-main">
            <li>
                <div class="left-menu-main-link"><a
                        href="{{route('index', app()->getLocale())}}">{{ __('menu.main') }}</a></div>
            </li>
            <li>
                <div class="left-menu-main-link"><a
                        href="{{route('index.uzbekistan', app()->getLocale())}}">{{ __('menu.uzbekistan') }}</a> <img
                        src="/images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    <li><a
                            href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">{{ __('menu.geo') }}</a>
                    </li>
                    <li><a
                            href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a>
                    </li>
                    <li><a
                            href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.peoples') }}</a>
                    </li>
                    <li><a href="/uzbekistan#iskustva">{{ __('menu.art') }}</a></li>
                    <li><a href="/uzbekistan#iskustva">{{ __('menu.moda') }}</a></li>
                    <li><a href="/uzbekistan#culura">{{ __('menu.culture') }}</a></li>
                    <li><a href="/uzbekistan#culura">{{ __('menu.kitchen') }}</a></li>
                    <li><a href="/uzbekistan#culura">Традиции</a></li>
                    <li><a href="{{route('index.uzbekistan', app()->getLocale())}}">{{ __('menu.alluzbekistan') }}</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="left-menu-main-link"><a
                        href="{{route('index.city', app()->getLocale())}}">{{ __('menu.cities') }}</a> <img
                        src="/images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    @foreach($cities as $city)
                    <li><a
                            href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name), 'language' => app()->getLocale()])}}">{{$city->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <div class="left-menu-main-link"><a
                        href="{{route('index.people', app()->getLocale())}}">{{ __('menu.peoples') }}</a> <img
                        src="/images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    <li><a href="{{route('index.people', app()->getLocale())}}">{{ __('menu.all') }}</a></li>
                    <li><a
                            href="{{route('people.category', ['category' => 'drevniy-mir', 'language' => app()->getLocale()])}}">{{ __('menu.drevniy_mir') }}</a>
                    </li>
                    <li><a
                            href="{{route('people.category', ['category' => 'srednie-veka', 'language' => app()->getLocale()])}}">{{ __('menu.srednie_veka') }}</a>
                    </li>
                    <li><a
                            href="{{route('people.category', ['category' => 'novoe-vremya', 'language' => app()->getLocale()])}}">{{ __('menu.novoe_vremya') }}</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="left-menu-main-link"><a
                        href="{{route('index.galery', app()->getLocale())}}">{{ __('menu.photo') }}</a> <img
                        src="/images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    @foreach($gallery_categories as $galery_category)
                    <li><a
                            href="{{route('show.galery', ['centuary' => $galery_category->slug, 'language' => app()->getLocale()])}}">{{$galery_category->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <div class="left-menu-main-link"><a
                        href="{{route('index.tour', app()->getLocale())}}">{{ __('menu.tours') }}</a> <img
                        src="/images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    @foreach($tour_categories as $tourCategory)
                    <li style="padding: 10px 0px;"><a
                            href="{{route('tour.category', ['category' => $tourCategory->slug, 'language' => app()->getLocale()])}}">{{$tourCategory->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <div class="left-menu-main-link"><a
                        href="{{route('index.tourism', app()->getLocale())}}">{{ __('menu.fortoursit') }}</a></div>
            </li>
            <!-- <div  class="left-menu-main-link" ><a href="/city">Базар</a></div> -->
            <li>
                <div class="left-menu-main-link"><a
                        href="{{route('index.blog', app()->getLocale())}}">{{ __('menu.news') }}</a> <img
                        src="/images/down.png" class="drop-menu" alt=""></div>
                <ul class="dropped-menu">
                    <li><a
                            href="{{route('blog.category', ['category' => 'toursim', 'language' => app()->getLocale()])}}">Туризм</a>
                    </li>
                    <li><a
                            href="{{route('blog.category', ['category' => 'uzbekistan', 'language' => app()->getLocale()])}}">Узбекистан</a>
                    </li>
                    <li><a
                            href="{{route('blog.category', ['category' => 'history', 'language' => app()->getLocale()])}}">История</a>
                    </li>
                    <li><a
                            href="{{route('blog.category', ['category' => 'tourists', 'language' => app()->getLocale()])}}">Туристы</a>
                    </li>
                </ul>
            </li>

        </ul>
        <ul class="left-menu-social">
            <li>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-vk"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-messenger"></i>
                </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> </a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i> </a>
            </li>
        </ul>
        <ul class="left-menu-network" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
            <a href="{{ route('about', app() -> getLocale()) }}">{{__('menu.about')}}</a> <a
                href="{{ route('team', app() -> getLocale()) }}">{{__('menu.team')}}</a> <a
                href="{{ route('faq', app() -> getLocale()) }}">{{__('menu.faq')}}</a> <a
                href="{{ route('contacts', app() -> getLocale()) }}">{{__('menu.contacts')}}</a>
        </ul>
        <p class="terms">
            © 2019 UZBEKISTAN NOW. All rights reserved.
        </p>
    </div>
    <div class="menu-border">
        <div class="container">
            <ul class="main-menu col-md-12">
                <li><img style="width:25px" class="open-left-bar" src="/images/menu.png" alt=""></li>
                <li><a href="{{route('index', app()->getLocale())}}"><img style="width:150px" src="/images/head.svg"
                            alt=""></a></li>
                <li class="{{ (request()->is('/')) ? 'active' : '' }} dektop-item"><a
                        href="{{route('index', app()->getLocale())}}">{{ __('menu.main') }}</a></li>
                <li class="{{ (request()->is('uzbekistan*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="uzb"
                        href="{{route('index.uzbekistan', app()->getLocale())}}">{{ __('menu.uzbekistan') }}</a>
                    <div data-menu="uzb" class="sub-menu-header">
                        <a class="droped-menu-item"
                            href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">{{ __('menu.geo') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.peoples') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#iskustva">{{ __('menu.art') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#iskustva">{{ __('menu.moda') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#culura">{{ __('menu.culture') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#culura">{{ __('menu.kitchen') }}</a>
                        <a class="droped-menu-item" href="/uzbekistan#culura">Традиции</a>
                        <a class="droped-menu-item" href="={{route('index.uzbekistan', app()->getLocale())}}"
                            class="sub-menu-item">{{ __('menu.alluzbekistan') }}</a>
                    </div>
                </li>
                <li class="{{ (request()->is('city*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="citys"
                        href="{{route('index.city', app()->getLocale())}}">{{ __('menu.cities') }}</a>
                    <div data-menu="citys" class="sub-menu-header">
                        @foreach($cities as $city)
                        <a class="droped-menu-item"
                            href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name), 'language' => app()->getLocale()])}}">{{$city->name}}
                        </a>
                        @endforeach
                        <a class="droped-menu-item" href="{{route('index.city', app()->getLocale())}}"
                            class="sub-menu-item">{{ __('menu.allcity') }}</a>
                    </div>
                </li>
                <li class="{{ (request()->is('people*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="peoples-menu"
                        href="{{route('index.people', app()->getLocale())}}">{{ __('menu.peoples') }}</a>
                    <div data-menu="peoples-menu" class="sub-menu-header">
                        <a class="droped-menu-item"
                            href="{{route('people.category', ['category' => 'drevniy_mir', 'language' => app()->getLocale()])}}">{{ __('menu.drevniy_mir') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('people.category', ['category' => 'srednie_veka', 'language' => app()->getLocale()])}}">{{ __('menu.srednie_veka') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('people.category', ['category' => 'novoe_vremya', 'language' => app()->getLocale()])}}">{{ __('menu.novoe_vremya') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('people.category', ['category' => 'sovremenost', 'language' => app()->getLocale()])}}">{{ __('menu.sovremenost') }}</a>
                        <a class="droped-menu-item" href="={{route('index.people', app()->getLocale())}}"
                            class="sub-menu-item">{{ __('menu.allpeople') }}</a>
                    </div>
                </li>
                <li class="{{ (request()->is('galery*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="show-galery"
                        href="{{route('index.galery', app()->getLocale())}}">{{ __('menu.photo') }}</a>
                    <div data-menu="show-galery" class="sub-menu-header">
                        @foreach($gallery_categories as $galery_category)
                        <a class="droped-menu-item"
                            href="{{route('show.galery', ['centuary' => $galery_category->slug, 'language' => app()->getLocale()])}}">{{ $galery_category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="{{ (request()->is('tours*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="show-tours-gal"
                        href="{{route('index.tour', app()->getLocale())}}">{{ __('menu.tours') }}</a>
                    <div data-menu="show-tours-gal" class="sub-menu-header">
                        @foreach($tour_categories as $tour_category)
                        <a class="droped-menu-item"
                            href="{{route('tour.category', ['category' => $tour_category->slug, 'language' => app()->getLocale()])}}"
                            class="sub-menu-item">{{ $tour_category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="{{ (request()->is('tours*')) ? 'active' : '' }} dektop-item"><a href="{{route('index.tourism', app()->getLocale())}}">{{ __('menu.fortoursit') }}</a></li>
                <!-- <li class="{{ (request()->is('bazar')) ? 'active' : '' }} dektop-item"><a href="">{{ __('menu.shop') }}</a></li> -->
                <li class="{{ (request()->is('blog*')) ? 'active' : '' }} dektop-item">
                    <a class="main-menu-link-drop" data-menu-show="show-blog-gal" href="{{route('index.blog', app()->getLocale())}}">{{ __('menu.news') }}</a>
                    <div data-menu="show-blog-gal" class="sub-menu-header">
                        <a class="droped-menu-item"
                            href="{{route('blog.category', ['category' => 'uzbekistan', 'language' => app()->getLocale()])}}"
                            class="sub-menu-item {{ (request()->segment(2) == 'uzbekistan') ? 'sub-menu-active' : ''}}">{{ __('menu.uzbekistan') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('blog.category', ['category' => 'archeology', 'language' => app()->getLocale()])}}"
                            class="sub-menu-item {{ (request()->segment(2) == 'archeology') ? 'sub-menu-active' : ''}}">{{ __('menu.archeology') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('blog.category', ['category' => 'tourism', 'language' => app()->getLocale()])}}"
                            class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.tourism') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('blog.category', ['category' => 'notes', 'language' => app()->getLocale()])}}"
                            class="sub-menu-item {{ (request()->segment(2) == 'notes') ? 'sub-menu-active' : ''}}">{{ __('menu.notes') }}</a>
                        <a class="droped-menu-item" href="/blog" class="sub-menu-item">{{ __('menu.allnews') }}</a>
                    </div>
                </li>
                <li><a href="#change-lang" id="change_lang" style="display: flex; justify-content: space-around; align-items: center;"><i style="margin-right: 5px;" class="fas fa-globe"></i> {{app()->getLocale()}}</a></li>

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
                    <a href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}"
                        data-menu-show="geo"
                        class="sub-menu-item {{ (request()->segment(2) == 'geo') ? 'sub-menu-active' : ''}}">{{ __('menu.geo') }}</a>
                    <div data-menu="geo" class="sub-menu-header">
                        @foreach($geo as $g)
                        <a class="droped-menu-item"
                            href="{{route('uzb.sub', ['category' => 'geo', 'subcategory' => $g->slug, 'language' => app()->getLocale()])}}">{{$g->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="dropdown" data-menu-show="history">
                    <a href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}"
                        data-menu-show="history"
                        class="sub-menu-item {{ (request()->segment(2) == 'history') ? 'sub-menu-active' : ''}}">{{ __('menu.history') }}</a>
                    <div data-menu="history" class="sub-menu-header">
                        @foreach($history as $h)
                        <a class="droped-menu-item"
                            href="{{route('uzb.sub', ['category' => 'history', 'subcategory' => $h->slug, 'language' => app()->getLocale()])}}">{{$h->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="dropdown" data-menu-show="people">
                    <a href="{{route('uzb.category', ['category' => 'peoples', 'language' => app()->getLocale()])}}"
                        data-menu-show="people" class="sub-menu-item">{{ __('menu.peoples') }}</a>
                    <div data-menu="people" class="sub-menu-header">
                        @foreach($peoplesm as $p)
                        <a class="droped-menu-item"
                            href="{{route('uzb.sub', ['category' => 'peoples', 'subcategory' => $p->slug, 'language' => app()->getLocale()])}}">{{$p->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="dropdown" data-menu-show="iskus">
                    <a href="{{route('uzb.category', ['category' => 'art', 'language' => app()->getLocale()])}}"
                        data-menu-show="iskus"
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.art') }}</a>
                    <div data-menu="iskus" class="sub-menu-header">
                        @foreach($art as $a)
                        <a class="droped-menu-item"
                            href="{{route('uzb.sub', ['category' => 'art', 'subcategory' => $a->slug, 'language' => app()->getLocale()])}}">{{$a->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="dropdown" data-menu-show="moda">
                    <a href="{{route('uzb.category', ['category' => 'fashion', 'language' => app()->getLocale()])}}"
                        data-menu-show="moda"
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.moda') }}</a>
                    <div data-menu="moda" class="sub-menu-header">
                        @foreach($fashion as $f)
                        <a class="droped-menu-item"
                            href="{{route('uzb.sub', ['category' => 'fashion', 'subcategory' => $f->slug, 'language' => app()->getLocale()])}}">{{$f->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="dropdown" data-menu-show="kartini">
                    <a href="{{route('uzb.category', ['category' => 'painting', 'language' => app()->getLocale()])}}"
                        data-menu-show="kartini"
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.painting') }}</a>
                    <div data-menu="kartini" class="sub-menu-header">
                        @foreach($painting as $pg)
                        <a class="droped-menu-item"
                            href="{{route('uzb.sub', ['category' => 'painting', 'subcategory' => $pg->slug, 'language' => app()->getLocale()])}}">{{$pg->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="dropdown" data-menu-show="cult">
                    <a data-menu-show="cult"
                        href="{{route('uzb.category', ['category' => 'culture', 'language' => app()->getLocale()])}}"
                        class="sub-menu-item {{ (request()->segment(2) == 'kitchen' || request()->segment(2) == 'clothing' || request()->segment(2) == 'religion' || request()->segment(2) == 'holidays' || request()->segment(2) == 'sufism' || request()->segment(2) == 'lang') ? 'sub-menu-active' : ''}}">{{ __('menu.culture') }}</a>
                    <div data-menu="cult" class="sub-menu-header">
                        @foreach($culture as $cult)
                        <a class="droped-menu-item"
                            href="{{route('uzb.sub', ['category' => 'culture', 'subcategory' => $cult->slug, 'language' => app()->getLocale()])}}">{{$cult->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="dropdown" data-menu-show="kitchen">
                    <a href="{{route('uzb.category', ['category' => 'kitchen', 'language' => app()->getLocale()])}}"
                        data-menu-show="kitchen"
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.kitchen') }}</a>
                    <div data-menu="kitchen" class="sub-menu-header">
                        @foreach($kitchen as $kit)
                        <a class="droped-menu-item"
                            href="{{route('uzb.sub', ['category' => 'kitchen', 'subcategory' => $kit->slug, 'language' => app()->getLocale() ])}}">{{$kit->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="dropdown" data-menu-show="tradition">
                    <a href="{{route('uzb.category', ['category' => 'tradicii', 'language' => app()->getLocale()])}}"
                        data-menu-show="tradition"
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">{{ __('menu.tradicii') }}</a>
                    <div data-menu="tradition" class="sub-menu-header">
                        @foreach($tradition as $trad)
                        <a class="droped-menu-item"
                            href="{{route('uzb.sub', ['category' => 'tradition', 'subcategory' => $trad->slug, 'language' => app()->getLocale()])}}">{{$trad->name}}</a>
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
                    <a href="{{route('city.show', ['lang' => app()->getLocale(), 'city' => Illuminate\Support\Str::lower($city->name)])}}"
                        data-menu-show="{{$city->name}}"
                        class="sub-menu-item {{ (request()->segment(2) == Illuminate\Support\Str::lower($city->name)) ? 'sub-menu-active' : ''}}">{{$city->name}}</a>
                    <div data-menu="{{$city->name}}" class="sub-menu-header">
                        <a class="droped-menu-item"
                            href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-eat', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_eat') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-stay', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_stay') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-see', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_see') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-do', 'language' => app()->getLocale()])}}">{{ __('mainpage.things_to_do') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-buy', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_buy') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'how-to-get', 'language' => app()->getLocale()])}}">{{ __('mainpage.how_to_get') }}</a>
                        <a class="droped-menu-item"
                            href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'useful-information', 'language' => app()->getLocale()])}}">{{ __('mainpage.useful_information') }}</a>
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
                <li data-menu-show="drevniy-mir">
                    <a data-menu-show="drevniy-mir"
                        href="{{route('people.category', ['category' => 'drevniy-mir', 'language' => app()->getLocale()])}}"
                        class="sub-menu-item {{ (request()->segment(2) == 'drevniy-mir') ? 'sub-menu-active' : ''}}">{{ __('menu.drevniy_mir') }}</a>
                    <div data-menu="drevniy-mir" class="sub-menu-header">
                        @foreach($drmir as $item_people)
                        <a class="droped-menu-item"
                            href="{{route('people.show', ['category'=> 'drevniy-mir', 'slug'=> $item_people->slug, 'language' => app()->getLocale()])}}">{{ $item_people->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li data-menu-show="srednie-veka">
                    <a data-menu-show="srednie-veka"
                        href="{{route('people.category', ['category' => 'srednie-veka', 'language' => app()->getLocale()])}}"
                        class="sub-menu-item {{ (request()->segment(2) == 'srednie-veka') ? 'sub-menu-active' : ''}}">{{ __('menu.srednie_veka') }}</a>
                    <div data-menu="srednie-veka" class="sub-menu-header">
                        @foreach($sredveka as $item_people)
                        <a class="droped-menu-item"
                            href="{{route('people.show', ['category'=> 'srednie-veka', 'slug'=> $item_people->slug, 'language' => app()->getLocale()])}}">{{ $item_people->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li data-menu-show="novoe-vremya">
                    <a data-menu-show="novoe-vremya"
                        href="{{route('people.category', ['category' => 'novoe-vremya', 'language' => app()->getLocale()])}}"
                        class="sub-menu-item {{ (request()->segment(2) == 'novoe-vremya') ? 'sub-menu-active' : ''}}">{{ __('menu.novoe_vremya') }}</a>
                    <div data-menu="novoe-vremya" class="sub-menu-header">
                        @foreach($novoevremya as $item_people)
                        <a class="droped-menu-item"
                            href="{{route('people.show', ['category'=> 'novoe-vremya', 'slug'=> $item_people->slug, 'language' => app()->getLocale()])}}">{{ $item_people->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li data-menu-show="sovremenost">
                    <a data-menu-show="sovremenost"
                        href="{{route('people.category', ['category' => 'sovremenost', 'language' => app()->getLocale()])}}"
                        class="sub-menu-item {{ (request()->segment(2) == 'sovremenost') ? 'sub-menu-active' : ''}}">{{ __('menu.sovremenost') }}</a>
                    <div data-menu="sovremenost" class="sub-menu-header">
                        @foreach($sovremenost as $item_people)
                        <a class="droped-menu-item"
                            href="{{route('people.show', ['category'=> 'sovremenost', 'slug'=> $item_people->slug, 'language' => app()->getLocale()])}}">{{ $item_people->name }}</a>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @elseif($type === 'news')
    <div class="sub-menu-main">
        <div class="container">
            <ul class="sub-menu-nav col-md-12">
                <li data-menu-show="uzbnews">
                    <a data-menu-show="uzbnews"
                        href="{{route('blog.category', ['category' => 'uzbekistan', 'language' => app()->getLocale()])}}"
                        class="sub-menu-item {{ (request()->segment(2) == 'uzbekistan') ? 'sub-menu-active' : ''}}">{{ __('menu.uzbekistan') }}</a>
                    <div data-menu="uzbnews" class="sub-menu-header">
                        @foreach($uzbnews as $item_news)
                        <a class="droped-menu-item"
                            href="{{route('blog.show', ['category'=> 'uzbekistan', 'slug'=> $item_news->slug, 'language' => app()->getLocale()])}}">{{ $item_news->title }}</a>
                        @endforeach
                    </div>
                </li>
                <li data-menu-show="arch">
                    <a data-menu-show="arch"
                        href="{{route('blog.category', ['category' => 'archeology', 'language' => app()->getLocale()])}}"
                        class="sub-menu-item {{ (request()->segment(2) == 'archeology') ? 'sub-menu-active' : ''}}">{{ __('menu.archeology') }}</a>
                    <div data-menu="arch" class="sub-menu-header">
                        @foreach($arch as $item_news)
                        <a class="droped-menu-item"
                            href="{{route('blog.show', ['category'=> 'archeology', 'slug'=> $item_news->slug, 'language' => app()->getLocale()])}}">{{ $item_news->title }}</a>
                        @endforeach
                    </div>
                </li>
                <li data-menu-show="tourism-arch">
                    <a data-menu-show="tourism-arch"
                        href="{{route('blog.category', ['category' => 'tourism', 'language' => app()->getLocale()])}}"
                        class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{ __('menu.tourism') }}</a>
                    <div data-menu="tourism-arch" class="sub-menu-header">
                        @foreach($tourism as $item_news)
                        <a class="droped-menu-item"
                            href="{{route('blog.show', ['category'=> 'tourism', 'slug'=> $item_news->slug, 'language' => app()->getLocale()])}}">{{ $item_news->title }}</a>
                        @endforeach
                    </div>
                </li>
                <li data-menu-show="notes">
                    <a data-menu-show="notes"
                        href="{{route('blog.category', ['category' => 'notes', 'language' => app()->getLocale()])}}"
                        class="sub-menu-item {{ (request()->segment(2) == 'notes') ? 'sub-menu-active' : ''}}">{{ __('menu.notes') }}</a>
                    <div data-menu="notes" class="sub-menu-header">
                        @foreach($notes as $item_news)
                        <a class="droped-menu-item"
                            href="{{route('blog.show', ['category'=> 'notes', 'slug'=> $item_news->slug, 'language' => app()->getLocale()])}}">{{ $item_news->title }}</a>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @elseif($type === 'tours')
    <div class="sub-menu-main">
        <div class="container">
            <ul class="sub-menu-nav col-md-12" style="flex-wrap: wrap; justify-content:center;">
                @foreach($tour_categories as $tourCategory)
                <li> <a href="{{route('tour.category', ['category' => $tourCategory->slug, 'language' => app()->getLocale()])}}"
                        class=" {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">{{$tourCategory->name}}</a>
                </li>
                @endforeach
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
            if (!target.classList.contains('sub-menu-header') && !target.classList.contains(
                "droped-menu-item") && !target.classList.contains('drop-image')) {
                menus.forEach(droped => {
                    droped.style.display = 'none';
                });
            }
            if (attr) {
                menus.forEach(droped => {
                    droped.style.display = 'none';
                    const dropedAttr = droped.getAttribute('data-menu');
                    if (attr === dropedAttr) droped.style.display = 'block';
                });
            }
        });

    </script>
    <script>
        window.addEventListener('scroll', e => {
            const position = window.scrollY;
            const menu = document.querySelector('.main-menu-sticky');
            if (position > 250 || position > 349) {
                menu.classList.add('main-menu-hide');
            } else if (position <= 250) {
                menu.classList.remove('main-menu-hide');
                menu.classList.remove('main-menu-fixed');
            }

            if (position >= 350) {
                menu.classList.remove('main-menu-hide');
                menu.classList.add('main-menu-fixed');
            }
        });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menu = document.querySelector('.main-menu-sticky');
            const dropDown = document.querySelectorAll('.drop-menu');
            const open = document.querySelector('.open-left-bar');
            const close = document.querySelector('.close-slide-menu');
            const leftMenu = document.querySelector('.left-side-menu');
            const site = document.querySelector('#main-content-web');

            dropDown.forEach(open => {
                open.addEventListener('click', e => {
                    const dropingMenu = e.target.parentNode.nextElementSibling;
                    const dropedMenuHeight = dropingMenu.scrollHeight;
                    if (dropingMenu.style.maxHeight) {
                        dropingMenu.style.maxHeight = null;
                        e.target.classList.remove('drop-menu-active');
                    } else {
                        dropingMenu.style.maxHeight = `${dropedMenuHeight}px`;
                        e.target.classList.add('drop-menu-active');
                    }
                });
            });

            open.addEventListener('click', () => openMenu(true));
            close.addEventListener('click', () => openMenu(false));
            document.body.addEventListener('click', e => {
                const target = e.target;
                if (!target.classList.contains('left-side-menu') && !target.classList.contains(
                        'close-cont') && !target.classList.contains('drop-menu') && !target.classList
                    .contains('left-menu-main-link') && !target.classList.contains('open-left-bar')) {
                    leftMenu.classList.add('left-menu-hide')
                    document.body.style.left = '0%';
                    open.style.visibility = 'visible';

                }
            })


            const openMenu = (isOpen) => {
                if (isOpen) {
                    leftMenu.classList.remove('left-menu-hide');
                    open.style.visibility = 'hidden';
                    document.body.style.overflowX = 'hidden';
                    document.body.style.left = '15%';
                } else {
                    leftMenu.classList.add('left-menu-hide');
                    open.style.visibility = 'visible';
                    document.body.style.left = '0%';
                }
            }
        })

    </script>

    <script>
        const langBtn = document.querySelector('#change_lang');
        langBtn.addEventListener('click', e => {
            e.preventDefault();
            const rightMenu = document.querySelector('.right-side-menu');
            rightMenu.classList.remove('right-menu-hide');
        });
    </script>
</nav>
