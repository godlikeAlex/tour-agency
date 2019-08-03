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
                    <div><a href="{{route('uzb.category', ['category' => 'geo'])}}">19 Век</a></div>
                    <div><a href="{{route('uzb.category', ['category' => 'history'])}}">18 Век</a></div>
                </div>
            </div>
            <div class="footer_block">
                <div class="title-footer">Туры</div>
                <div class="items-footer">
                        <div><a href="history_tours">Исторические туры</a></div>
                        <div><a href="short_tours">Короткие туры</a></div>
                        <div><a href="group_tours">Групповые туры</a></div>
                        <div><a href="individual_tours">Индивидуальные туры</a></div>
                        <div><a href="exclusive_tours">Эксклюзивные туры</a></div>
                        <div><a href="eco_tours">Эко туры</a></div>
                        <div><a href="cycling_tours">Велотуры</a></div>
                        <div><a href="buisnes_tours">Бизнес турыa</a></div>
                        <div><a href="kombo_asia_tours">Центральная Азия</a></div>
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