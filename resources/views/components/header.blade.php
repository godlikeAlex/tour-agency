<div class="ad-banner-header"></div>
<script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
<nav class="main-menu-sticky">
    <div class="left-side-menu left-menu-hide">
        <div class="close-cont">
            <i class="fas fa-times close-slide-menu"></i>
        </div>
        <ul >
            <li><div  class="left-menu-main-link" ><a href="/">Главная</a></div></li>
            <li>
                <div  class="left-menu-main-link" ><a href="/uzbekistan">Узбекистан</a> <i class="fas fa-angle-down drop-menu"></i></div>
                <ul class="dropped-menu">
                    <li><a href="">География</a></li>
                    <li><a href="">История</a></li>
                    <li><a href="">Люди</a></li>
                    <li><a href="">Туризм</a></li>
                    <li><a href="">Искуства</a></li>
                    <li><a href="">Культура</a></li>
                </ul>
            </li>
            <li>
                <div  class="left-menu-main-link" ><a href="/city">Города</a> <i class="fas fa-angle-down drop-menu"></i></div>
                <ul class="dropped-menu">
                    @foreach($cities as $city)
                        <li><a href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name)])}}">{{$city->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li>
                <div  class="left-menu-main-link" ><a href="/people">Люди</a> <i class="fas fa-angle-down drop-menu"></i></div>
                <ul class="dropped-menu">
                    <li><a href="/people">Все</a></li>
                    <li><a href="/people/category/drevniy-mir">Древний мир</a></li>
                    <li><a href="/people/category/srednie-veka">Средние века</a></li>
                    <li><a href="/people/category/novoe-vremya">Новое время</a></li>
                </ul>
            </li>
            <li>
                <div  class="left-menu-main-link" ><a href="/tours">Туры</a> <i class="fas fa-angle-down drop-menu"></i></div>
                <ul class="dropped-menu">
                    <li><a href="{{route('tour.category', ['category' => 'history_tours'])}}">Исторические туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'short_tours'])}}">Короткие туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'group_tours'])}}">Групповые туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'individual_tours'])}}">Индивидуальные туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'exclusive_tours'])}}">Эксклюзивные туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'classic_tours'])}}">Классические туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'eco_tours'])}}">Эко туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'kombo_asia_tours'])}}">Туры по Центральной Азии</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'excursion_сity'])}}">Экскурсии по городам</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'pilgrim_tours'])}}">Паломнические туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'economy_tours'])}}">Эконом туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'cycling_tours'])}}">Велотуры туры</a></li>
                    <li><a href="{{route('tour.category', ['category' => 'buisnes_tours'])}}">Бизнес туры</a></li>

                </ul>
            </li>
            <li>
                <div  class="left-menu-main-link" ><a href="/blog">Новости</a> <i class="fas fa-angle-down drop-menu"></i></div>
                <ul class="dropped-menu">
                    <li><a href="{{route('blog.category', ['category' => 'toursim'])}}">Туризм</a></li>
                    <li><a href="{{route('blog.category', ['category' => 'uzbekistan'])}}">Узбекистан</a></li>
                    <li><a href="{{route('blog.category', ['category' => 'history'])}}">История</a></li>
                    <li><a href="{{route('blog.category', ['category' => 'tourists'])}}">Туристы</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu-border">
        <div class="container">
            <ul class="main-menu col-md-12">
                <li><i class="fas fa-bars open-left-bar"></i></li>
                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Главная</a></li>
                <li class="{{ (request()->is('uzbekistan*')) ? 'active' : '' }}"><a href="/uzbekistan">Узбекистан</a></li>
                <li class="{{ (request()->is('city*')) ? 'active' : '' }}"><a href="/city">Города</a></li>
                <li class="{{ (request()->is('people*')) ? 'active' : '' }}"><a href="/people">Люди</a></li>
                <li class="{{ (request()->is('tours*')) ? 'active' : '' }}"><a href="/tours">Туры</a></li>
                <li class="{{ (request()->is('galery*')) ? 'active' : '' }}"><a href="/galery">Фото</a></li>
                <li class="{{ (request()->is('bazar')) ? 'active' : '' }}"><a href="">Базар</a></li>
                <li class="{{ (request()->is('blog*')) ? 'active' : '' }}"><a href="/blog">Новости</a></li>
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
        @elseif($type === 'people')
        <div class="sub-menu-main"> 
            <div class="container"> 
                <ul class="sub-menu-nav col-md-12">
                    <li>    
                        <a href="{{route('people.category', ['category' => 'drevniy-mir'])}}" class="sub-menu-item {{ (request()->segment(2) == 'drevniy-mir') ? 'sub-menu-active' : ''}}">Древний мир</a>
                    </li>
                    <li>    
                        <a href="{{route('people.category', ['category' => 'srednie-veka'])}}" class="sub-menu-item {{ (request()->segment(2) == 'srednie-veka') ? 'sub-menu-active' : ''}}">Средние века</a>
                    </li>
                    <li>    
                        <a href="{{route('people.category', ['category' => 'novoe-vremya'])}}" class="sub-menu-item {{ (request()->segment(2) == 'novoe-vremya') ? 'sub-menu-active' : ''}}">Новое время</a>
                    </li>
                </ul>
            </div>
        </div>
        @elseif($type === 'news')
        <div class="sub-menu-main"> 
            <div class="container"> 
                <ul class="sub-menu-nav col-md-12">
                    <li>    
                        <a href="{{route('blog.category', ['category' => 'drevniy-mir'])}}" class="sub-menu-item {{ (request()->segment(2) == 'toursim') ? 'sub-menu-active' : ''}}">Туризм</a>
                    </li>
                    <li>    
                        <a href="{{route('blog.category', ['category' => 'srednie-veka'])}}" class="sub-menu-item {{ (request()->segment(2) == 'uzbekistan') ? 'sub-menu-active' : ''}}">Узбекистан</a>
                    </li>
                    <li>    
                        <a href="{{route('blog.category', ['category' => 'novoe-vremya'])}}" class="sub-menu-item {{ (request()->segment(2) == 'history') ? 'sub-menu-active' : ''}}">История</a>
                    </li>
                    <li>    
                        <a href="{{route('blog.category', ['category' => 'novoe-vremya'])}}" class="sub-menu-item {{ (request()->segment(2) == 'tourists') ? 'sub-menu-active' : ''}}">Туристы</a>
                    </li>
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
    <script>
        const dropDown = document.querySelectorAll('.drop-menu');
        const open     = document.querySelector('.open-left-bar');
        const close    = document.querySelector('.close-slide-menu');
        const leftMenu = document.querySelector('.left-side-menu');

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

        const openMenu = (open) => {
            if(open) leftMenu.classList.remove('left-menu-hide');
            else leftMenu.classList.add('left-menu-hide'); 
        }
    </script>
</nav>