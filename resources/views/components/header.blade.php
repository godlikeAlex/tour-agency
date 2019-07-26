<div class="ad-banner-header"></div>
<script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
<nav>
    <div class="menu-border">
        <div class="container">
            <ul class="main-menu col-md-12">
                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/">Главная</a></li>
                <li class="{{ (request()->is('uzbekistan*')) ? 'active' : '' }}"><a href="/uzbekistan">Узбекистан</a></li>
                <li class="{{ (request()->is('city*')) ? 'active' : '' }}"><a href="/city">Города</a></li>
                <li class="{{ (request()->is('people*')) ? 'active' : '' }}"><a href="/people">Люди</a></li>
                <li class="{{ (request()->is('tours*')) ? 'active' : '' }}"><a href="">Туры</a></li>
                <li class="{{ (request()->is('blog*')) ? 'active' : '' }}"><a href="">Новости</a></li>
                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="">Базар</a></li>
            </ul>
        </div>
    </div>   
    <div class="sub-menu-main"> 
        <div class="container"> 
            <ul class="sub-menu-nav col-md-12">
                <li class="dropdown" data-menu-show="geo">
                    <a href="" data-menu-show="geo">География <i class="fas fa-angle-down"></i></a>
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
                    <a href="" data-menu-show="history">История <i class="fas fa-angle-down"></i></a>
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
                    <a href="" data-menu-show="people">Люди <i class="fas fa-angle-down"></i></a>
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
                    <a href="" data-menu-show="toursizm">Туризм <i class="fas fa-angle-down"></i></a>
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
                    <a href="" data-menu-show="iskus">Искуства <i class="fas fa-angle-down"></i></a>
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
                    <a data-menu-show="cult" href="">Культура <i class="fas fa-angle-down"></i></a>
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
        })
    </script>
</nav>