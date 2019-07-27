<div class="ad-banner-header"></div>
<script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
<nav class="main-menu-sticky">
    <div class="menu-border">
        <div class="container">
            <ul class="main-menu col-md-12">
                <li><i class="fas fa-bars"></i></li>
                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Главная</a></li>
                <li class="{{ (request()->is('uzbekistan*')) ? 'active' : '' }}"><a href="/uzbekistan">Узбекистан</a></li>
                <li class="{{ (request()->is('city*')) ? 'active' : '' }}"><a href="/city">Города</a></li>
                <li class="{{ (request()->is('people*')) ? 'active' : '' }}"><a href="/people">Люди</a></li>
                <li class="{{ (request()->is('tours*')) ? 'active' : '' }}"><a href="">Туры</a></li>
                <li class="{{ (request()->is('bazar')) ? 'active' : '' }}"><a href="">Базар</a></li>
                <li class="{{ (request()->is('blog*')) ? 'active' : '' }}"><a href="">Новости</a></li>
            </ul>
        </div>
    </div>   
    @if(isset($type))
        @if($type === 'uzbekistan') 
        <div class="sub-menu-main"> 
            <div class="container"> 
                <ul class="sub-menu-nav col-md-12">
                    <li class="dropdown" data-menu-show="geo">
                        <a href="" data-menu-show="geo" class="sub-menu-item {{ (request()->segment(2) == 'geo') ? 'sub-menu-active' : ''}}">География</a>
                        <div data-menu="geo" class="sub-menu-header">
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'kitchen'])}}">Кухня</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'clothing'])}}">Одежда</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'religion'])}}">Религия</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'holidays'])}}">Праздники</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'sufism'])}}">Суфизм</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'lang'])}}">Язык</a>
                        </div>   
                    </li>
                    <li class="dropdown" data-menu-show="history">
                        <a href="" data-menu-show="history" class="sub-menu-item {{ (request()->segment(2) == 'history') ? 'sub-menu-active' : ''}}">История</a>
                        <div data-menu="history" class="sub-menu-header">
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'kitchen'])}}">Кухня</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'clothing'])}}">Одежда</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'religion'])}}">Религия</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'holidays'])}}">Праздники</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'sufism'])}}">Суфизм</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'lang'])}}">Язык</a>
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="people">
                        <a href="" data-menu-show="people" class="sub-menu-item">Люди</a>
                        <div data-menu="people" class="sub-menu-header">
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'kitchen'])}}">Кухня</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'clothing'])}}">Одежда</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'religion'])}}">Религия</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'holidays'])}}">Праздники</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'sufism'])}}">Суфизм</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'lang'])}}">Язык</a>
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="toursizm">
                        <a href="/uzbekistan#turizm" data-menu-show="toursizm" class="sub-menu-item {{ (request()->segment(2) == 'visa' || request()->segment(2) == 'transport' || request()->segment(2) == 'eco') ? 'sub-menu-active' : ''}}">Туризм </a>
                        <div data-menu="toursizm" class="sub-menu-header">
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'kitchen'])}}">Кухня</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'clothing'])}}">Одежда</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'religion'])}}">Религия</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'holidays'])}}">Праздники</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'sufism'])}}">Суфизм</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'lang'])}}">Язык</a>
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="iskus">
                        <a href="/uzbekistan#iskustva" data-menu-show="iskus" 
                        class="sub-menu-item {{ (request()->segment(2) == 'literature' || request()->segment(2) == 'architecture' || request()->segment(2) == 'music' || request()->segment(2) == 'teatr' || request()->segment(2) == 'painting' || request()->segment(2) == 'poetry') ? 'sub-menu-active' : '' }}">Искуства</a>
                        <div data-menu="iskus" class="sub-menu-header">
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'kitchen'])}}">Кухня</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'clothing'])}}">Одежда</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'religion'])}}">Религия</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'holidays'])}}">Праздники</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'sufism'])}}">Суфизм</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'lang'])}}">Язык</a>
                        </div>  
                    </li>
                    <li class="dropdown" data-menu-show="cult">
                        <a data-menu-show="cult" href="/uzbekistan#cultura" 
                        class="sub-menu-item {{ (request()->segment(2) == 'kitchen' || request()->segment(2) == 'clothing' || request()->segment(2) == 'religion' || request()->segment(2) == 'holidays' || request()->segment(2) == 'sufism' || request()->segment(2) == 'lang') ? 'sub-menu-active' : ''}}">Культура</a>
                        <div data-menu="cult" class="sub-menu-header">
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'kitchen'])}}">Кухня</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'clothing'])}}">Одежда</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'religion'])}}">Религия</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'holidays'])}}">Праздники</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'sufism'])}}">Суфизм</a>
                            <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'lang'])}}">Язык</a>
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
                            <div style="width:220px; padding-right:30px;" data-menu="{{$city->name}}" class="sub-menu-header">
                                <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'kitchen'])}}">История</a>
                                <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'clothing'])}}">Что смотреть</a>
                                <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'religion'])}}">Чем заняться</a>
                                <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'holidays'])}}">Где покупать</a>
                                <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'sufism'])}}">Где поесть</a>
                                <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'lang'])}}">Где остановиться</a>
                                <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'lang'])}}">Как добраться</a>
                                <a class="droped-menu-item" href="{{route('uzb.category', ['category' => 'lang'])}}">Полезная информация</a>
                            </div>   
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        <script>
        document.addEventListener('mouseover', e => {
            const target = e.target;
            const attr = target.getAttribute('data-menu-show');
            const menus = document.querySelectorAll('div[data-menu]');
            if(!target.classList.contains('sub-menu-header') && !target.classList.contains("droped-menu-item")) {
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
    @endif
    <script>
            window.addEventListener('scroll', e => {
            const position = window.scrollY;
            const menu = document.querySelector('.main-menu-sticky');
            if(position > 250 || position > 349) {
                menu.classList.add('main-menu-hide');
            } else if(position <= 250) {
                menu.classList.remove('main-menu-hide');
                ;
                menu.classList.remove('main-menu-fixed');
            }

            if(position >= 350) {
                menu.classList.remove('main-menu-hide');
                menu.classList.add('main-menu-fixed');
            }
        });
    </script>
</nav>