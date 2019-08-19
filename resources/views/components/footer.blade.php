<footer class="footer-nav">
    <div class="container footer-flex" style="display: flex; justify-content: space-between; margin: auto; flex-wrap: wrap;">
            <div class="footer_block">
                <div class="title-footer">Узбекистан</div>
                <div class="items-footer">
                    <div><a href="{{route('uzb.category', ['category' => 'geo'])}}">География</a></div>
                    <div><a href="{{route('uzb.category', ['category' => 'history'])}}">История</a></div>
                    <div><a href="#">Люди</a></div>
                    <div><a href="/uzbekistan/#turizm">Туризм</a></div>
                    <div><a href="/uzbekistan/#iskustva">Искуства</a></div>
                    <div><a href="/uzbekistan/#culura">Культура</a></div>
                </div>
            </div>
            <div class="footer_block">
                <div class="title-footer">Города</div>
                <div class="items-footer">
                    @foreach($cities as $city)
                        <div><a href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name)])}}">{{$city->name}}</a></div>
                    @endforeach
                </div>
            </div>
            <div class="footer_block">
                <div class="title-footer">Люди</div>
                <div class="items-footer">
                    <div><a href="{{route('people.category', ['category' => 'drevniy-mir'])}}">Древний мир</a></div>
                    <div><a href="{{route('people.category', ['category' => 'srednie-veka'])}}">Средние века</a></div>
                    <div><a href="{{route('people.category', ['category' => 'novoe-vremya'])}}">Новое время</a></div>
                </div>
            </div>  
            <div class="footer_block">
            <div class="title-footer">Фото</div>
                <div class="items-footer">
                    <div><a href="{{route('show.galery', ['centuary' => 'khiva-khanate'])}}">{{ __('menu.khiva-khanate') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'khanate-khanate'])}}">{{ __('menu.kokand-khanate') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'bukhara-emirate'])}}">{{ __('menu.bukhara-emirate') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'turkestan-assr'])}}">{{ __('menu.turkestan-assr') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'jadidism'])}}">{{ __('menu.jadidism') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'stalin-period'])}}">{{ __('menu.stalin-period') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'khrushchevsky-period'])}}">{{ __('menu.khrushchevsky-period') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'brezhnevsky-period'])}}">{{ __('menu.brezhnevsky-period') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'restructuring'])}}">{{ __('menu.restructuring') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'republic-of-uzbekistan'])}}">{{ __('menu.republic-of-uzbekistan') }}</a></div>
                    <div><a href="{{route('show.galery', ['centuary' => 'present'])}}">{{ __('menu.present') }}</a></div>
                </div>
            </div>
            <div class="footer_block">
                <div class="title-footer">Туры</div>
                <div class="items-footer">
                        <div><a href="{{route('tour.category', ['category' => 'history-tours'])}}">Исторические туры</a></div>
                        <div><a href="{{route('tour.category', ['category' => 'short-tours'])}}">Короткие туры</a></div>
                        <div><a href="{{route('tour.category', ['category' => 'group-tours'])}}">Групповые туры</a></div>
                        <div><a href="{{route('tour.category', ['category' => 'individual-tours'])}}">Индивидуальные туры</a></div>
                        <div><a href="{{route('tour.category', ['category' => 'exclusive-tours'])}}">Эксклюзивные туры</a></div>
                        <div><a href="{{route('tour.category', ['category' => 'eco-tours'])}}">Эко туры</a></div>
                        <div><a href="{{route('tour.category', ['category' => 'cycling-tours'])}}">Велотуры</a></div>
                        <div><a href="{{route('tour.category', ['category' => 'buissens-tours'])}}">Бизнес турыa</a></div>
                        <div><a href="{{route('tour.category', ['category' => 'kombo-asia-tours'])}}">Центральная Азия</a></div>
                </div>
            </div> 
            <div class="footer_block">
                <div class="title-footer">Туристам</div>
                <div class="items-footer">
                        <div><a href="history_tours">Общая информация</a></div>
                        <div><a href="short_tours">Туризм в Узбекистане</a></div>
                        <div><a href="group_tours">Курорты и санатории </a></div>
                        <div><a href="individual_tours">Виза </a></div>
                        <div><a href="exclusive_tours">Посольства  </a></div>
                        <div><a href="kombo_asia_tours">Цены </a></div>
                        <div><a href="kombo_asia_tours">Валюта и обмен</a></div>
                        <div><a href="kombo_asia_tours">Интернет</a></div>
                        <div><a href="kombo_asia_tours">Мобильный связь </a></div>
                        <div><a href="kombo_asia_tours">Фестивали </a></div>
                        <div><a href="kombo_asia_tours">Выставки </a></div>
                        <div><a href="kombo_asia_tours">Праздники </a></div>
                        <div><a href="kombo_asia_tours">Прописка </a></div>
                        <div><a href="kombo_asia_tours">Полезный номера</a></div>
                </div>
            </div> 
            <div class="footer_block">
                <div class="title-footer">Базар</div>
                <div class="items-footer">
                    <div><a href="{{route('uzb.category', ['category' => 'geo'])}}">География</a></div>
                    <div><a href="{{route('uzb.category', ['category' => 'history'])}}">История</a></div>
                    <div><a href="#">Люди</a></div>
                    <div><a href="/uzbekistan/#turizm">Туризм</a></div>
                    <div><a href="/uzbekistan/#iskustva">Искуства</a></div>
                    <div><a href="/uzbekistan/#culura">Культура</a></div>
                </div>
            </div>
            <div class="footer_block">
            <div class="title-footer">Новости</div>
                <div class="items-footer">
                    <div><a href="{{route('blog.category', ['category' => 'tourism'])}}">Туризм</a></div>
                    <div><a href="{{route('blog.category', ['category' => 'uzbekistan'])}}">Узбекистан</a></div>
                    <div><a href="{{route('blog.category', ['category' => 'history'])}}">История</a></div>
                    <div><a href="{{route('blog.category', ['category' => 'tourists'])}}">Туристы</a></div>
                </div>
            </div>
    </div>
    <div class="social-network">
        <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-vk"></i> </a>
        <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-telegram"></i> </a>
        <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-messenger"></i> </a>
        <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i> </a>
        <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i> </a>
        <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i> </a>
        <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp-square"></i> </a>
    </div>
    <div class="about-footer-comapny">
        <div class="about-footer-title">About Company</div>
        <div class="about-footer-company-links">
            <a href="http://" target="_blank" rel="noopener noreferrer">ABOUT US</a>
            <a href="http://" target="_blank" rel="noopener noreferrer">CONTACT US</a>
            <a href="http://" target="_blank" rel="noopener noreferrer">PRIVACY POLICY</a>
            <a href="http://" target="_blank" rel="noopener noreferrer">LINK POLICY</a>
            <a href="http://" target="_blank" rel="noopener noreferrer">FAQ</a>
            <a href="http://" target="_blank" rel="noopener noreferrer">SITE MAP</a>
        </div>
        <div class="righs-reserver">
            Copyright © 2019-2020 uzbeknow Inc. All Rights Reserved
        </div>
    </div>
</footer>