<footer class="bg-191 pos-relative color-ccc bg-primary pt-50">
		<div class="abs-tblr pt-50 z--1 text-center">
			<div class="h-80 pos-relative"><div class="bg-map abs-tblr opacty-1"></div></div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-4">	
					<h5 class="f-title"><b>УЗБЕКИСТАН</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
                        <li><a href="{{route('uzb.category', ['category' => 'geo'])}}">География</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'history'])}}">История</a></li>
                        <li><a href="#">Люди</a></li>
                        <li><a href="/uzbekistan/#turizm">Туризм</a></li>
                        <li><a href="/uzbekistan/#iskustva">Искуства</a></li>
                        <li><a href="/uzbekistan/#culura">Культура</a></li>
					</ul>
				</div><!-- col-sm-2 -->
				
				
				<div class="col-lg-2 col-md-4 col-sm-4">	
					<h5 class="f-title"><b>ГОРОДА</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
                        @foreach($cities as $city)
                            <li><a href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name)])}}">{{$city->name}}</a></li>
                        @endforeach
					</ul>
				</div><!-- col-sm-2 -->
				
				<div class="col-lg-2 col-md-4 col-sm-4">	
					<h5 class="f-title"><b>ФОТО</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
                        <li><a href="{{route('show.galery', ['centuary' => 'khiva-khanate'])}}">{{ __('menu.khiva-khanate') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'khanate-khanate'])}}">{{ __('menu.kokand-khanate') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'bukhara-emirate'])}}">{{ __('menu.bukhara-emirate') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'turkestan-assr'])}}">{{ __('menu.turkestan-assr') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'jadidism'])}}">{{ __('menu.jadidism') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'stalin-period'])}}">{{ __('menu.stalin-period') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'khrushchevsky-period'])}}">{{ __('menu.khrushchevsky-period') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'brezhnevsky-period'])}}">{{ __('menu.brezhnevsky-period') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'restructuring'])}}">{{ __('menu.restructuring') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'republic-of-uzbekistan'])}}">{{ __('menu.republic-of-uzbekistan') }}</a></li>
                        <li><a href="{{route('show.galery', ['centuary' => 'present'])}}">{{ __('menu.present') }}</a></li>
					</ul>
                </div><!-- col-sm-2 -->
                
                <div class="col-lg-2 col-md-4 col-sm-4">	
					<h5 class="f-title"><b>ТУРЫ</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
                        <li><a href="{{route('tour.category', ['category' => 'history-tours'])}}">Исторические туры</a></li>
                        <li><a href="{{route('tour.category', ['category' => 'short-tours'])}}">Короткие туры</a></li>
                        <li><a href="{{route('tour.category', ['category' => 'group-tours'])}}">Групповые туры</a></li>
                        <li><a href="{{route('tour.category', ['category' => 'inliidual-tours'])}}">Индивидуальные туры</a></li>
                        <li><a href="{{route('tour.category', ['category' => 'exclusive-tours'])}}">Эксклюзивные туры</a></li>
                        <li><a href="{{route('tour.category', ['category' => 'eco-tours'])}}">Эко туры</a></li>
                        <li><a href="{{route('tour.category', ['category' => 'cycling-tours'])}}">Велотуры</a></li>
                        <li><a href="{{route('tour.category', ['category' => 'buissens-tours'])}}">Бизнес турыa</a></li>
                        <li><a href="{{route('tour.category', ['category' => 'kombo-asia-tours'])}}">Центральная Азия</a></li>
					</ul>
                </div><!-- col-sm-2 -->
                
                <div class="col-lg-2 col-md-4 col-sm-4">	
					<h5 class="f-title"><b>ТУРИСТАМ</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
                        <li><a href="history_tours">Общая информация</a></li>
                        <li><a href="short_tours">Туризм в Узбекистане</a></li>
                        <li><a href="group_tours">Курорты и санатории </a></li>
                        <li><a href="inliidual_tours">Виза </a></li>
                        <li><a href="exclusive_tours">Посольства  </a></li>
                        <li><a href="kombo_asia_tours">Цены </a></li>
                        <li><a href="kombo_asia_tours">Валюта и обмен</a></li>
                        <li><a href="kombo_asia_tours">Интернет</a></li>
                        <li><a href="kombo_asia_tours">Мобильный связь </a></li>
                        <li><a href="kombo_asia_tours">Фестивали </a></li>
                        <li><a href="kombo_asia_tours">Выставки </a></li>
                        <li><a href="kombo_asia_tours">Праздники </a></li>
                        <li><a href="kombo_asia_tours">Прописка </a></li>
                        <li><a href="kombo_asia_tours">Полезный номера</a></li>
					</ul>
                </div><!-- col-sm-2 -->
                
                <div class="col-lg-2 col-md-4 col-sm-4">	
					<h5 class="f-title"><b>НОВОСТИ</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
                        <li><a href="{{route('blog.category', ['category' => 'tourism'])}}">Туризм</a></li>
                        <li><a href="{{route('blog.category', ['category' => 'uzbekistan'])}}">Узбекистан</a></li>
                        <li><a href="{{route('blog.category', ['category' => 'history'])}}">История</a></li>
                        <li><a href="{{route('blog.category', ['category' => 'tourists'])}}">Туристы</a></li>
					</ul>
                </div><!-- col-sm-2 -->
                
                
				
			</div><!-- row -->
			
			<div class="mt-20 brdr-ash-1 opacty-4"></div>
			
			<div class="text-center ptb-30">
				<div class="row">
					<div class="col-sm-3">
						<a class="mtb-10" href="#"><img src="images/logo-white.png" alt=""></a>
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-5">
						<p class="mtb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur placerat 
							tincidunt mauris semper lorem</p>
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-4">
						<ul class="mtb-10 font-12 list-radial-35 list-li-mlr-3">
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-google"></i></a></li>
							<li><a href="#"><i class="ion-social-rss"></i></a></li>
						</ul>
					</div><!-- col-sm-3 -->
				</div><!-- row -->
			</div><!-- text-center -->
		</div><!-- container -->
		
		<div class="bg-dark-primary ptb-15 text-left">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-12 col-md-6">
						<p class="text-md-center font-9 pt-5 mtb-5"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div><!-- col-sm-3 -->
					
					<div class="col-sm-12 col-md-6">
						<ul class="mtb-5 font-11 text-md-center text-right list-a-p-5">
							<li><a href="#">Home</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Sport</a></li>
							<li><a href="#">Politics</a></li>
							<li><a href="#">Travel</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Culture</a></li>
							<li><a href="#">Tech</a></li>
							<li><a href="#">Video</a></li>
						</ul>
					</div><!-- col-sm-3 -->
				</div><!-- row -->
				
			</div><!-- container -->
		</div><!-- container -->
	</footer>