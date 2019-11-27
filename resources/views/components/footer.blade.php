<footer class="bg-191 pos-relative color-ccc bg-primary pt-50">
		<div class="abs-tblr pt-50 z--1 text-center">
			<div class="h-80 pos-relative"><div class="bg-map abs-tblr opacty-1"></div></div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-4">
					<h5 class="f-title"><b>УЗБЕКИСТАН</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
						<li><a href="{{route('uzb.category', ['category' => 'geography', 'language' => app()->getLocale()])}}">{{ __('menu.geo') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a></li>
                        <li><a href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.peoples') }}</a></li>
                        <li><a href="/uzbekistan#iskustva">{{ __('menu.art') }}</a></li>
                        <li><a href="/uzbekistan#iskustva">{{ __('menu.moda') }}</a></li>
                        <li><a href="/uzbekistan#culura">{{ __('menu.culture') }}</a></li>
                        <li><a href="/uzbekistan#culura">{{ __('menu.kitchen') }}</a></li>
                        <li><a href="/uzbekistan#culura">{{ __('menu.tradition') }}</a></li>
					</ul>
				</div><!-- col-sm-2 -->


				<div class="col-lg-2 col-md-4 col-sm-4">
					<h5 class="f-title"><b>ГОРОДА</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
                        @foreach($cities as $city)
                            <li><a href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name), 'language' => app()->getLocale()])}}">{{$city->name}}</a></li>
                        @endforeach
					</ul>
				</div><!-- col-sm-2 -->

				<div class="col-lg-2 col-md-4 col-sm-4">
					<h5 class="f-title"><b>ФОТО</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
						@foreach($gallery_categories as $galery_category)
                        	<li><a href="{{route('show.galery', ['centuary' => 'khiva-khanate', 'language' => app()->getLocale()])}}">{{$galery_category->name}}</a></li>
						@endforeach
					</ul>
                </div><!-- col-sm-2 -->

                <div class="col-lg-2 col-md-4 col-sm-4">
					<h5 class="f-title"><b>ТУРЫ</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
						@foreach($tour_categories as $tourCategory)
							<li> <a href="{{route('tour.category', ['category' => $tourCategory->slug, 'language' => app()->getLocale()])}}">{{$tourCategory->name}}</a>  </li>
						@endforeach

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
                        <li><a href="{{route('blog.category', ['category' => 'tourism', 'language' => app()->getLocale()])}}">Туризм</a></li>
                        <li><a href="{{route('blog.category', ['category' => 'uzbekistan', 'language' => app()->getLocale()])}}">Узбекистан</a></li>
                        <li><a href="{{route('blog.category', ['category' => 'history', 'language' => app()->getLocale()])}}">История</a></li>
                        <li><a href="{{route('blog.category', ['category' => 'tourists', 'language' => app()->getLocale()])}}">Туристы</a></li>
					</ul>
                </div><!-- col-sm-2 -->



			</div><!-- row -->

			<div class="mt-20 brdr-ash-1 opacty-4"></div>

			<div class="text-center ptb-30">
				<div class="row">

					<div class="col-sm-12">
						<ul class="mtb-10 font-12 list-radial-35 list-li-mlr-3">
						<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-google"></i></a></li>
							<li><a href="#"><i class="ion-social-rss"></i></a></li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-google"></i></a></li>
							<li><a href="#"><i class="ion-social-rss"></i></a></li>
							<li><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							<li><a href="#"><i class="ion-social-google"></i></a></li>
							<li><a href="#"><i class="ion-social-rss"></i></a></li>
						</ul>
					</div><!-- col-sm-12 -->
					<div class="col-sm-12">Если вы спиздите контент, я найду вас и сломаю вам ебальник <i class="ion-heart" aria-hidden="true"></i> <br /> Все права защищены 2019.</div>
				</div><!-- row -->
			</div><!-- text-center -->
		</div><!-- container -->

		<div class="bg-dark-primary ptb-15 text-left">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-6" style="display: flex; align-items: center;">
                            <a target="_blank" href="https://wdagency.org/">Made with <i style="color: red;" class="fa fa-heart heart" aria-hidden="true"></i> in Web Digital</a>.
                    </div><!-- col-sm-3 -->
					<div class="col-sm-12 col-md-6">
						<ul class="mtb-5 font-11 text-md-center text-right list-a-p-5">
							<li><a href="{{ route('about', app() -> getLocale()) }}">{{__('menu.about')}}</a> </li>
							<li><a href="{{ route('team', app() -> getLocale()) }}">{{__('menu.team')}}</a></li>
							<li> <a href="{{ route('faq', app() -> getLocale()) }}">{{__('menu.faq')}}</a></li>                            <li><a href="{{ route('contacts', app() -> getLocale()) }}">{{__('menu.foragency')}}</a></li>
                            <li><a href="{{ route('contacts', app() -> getLocale()) }}">{{__('menu.foragency')}}</a></li>
                            <li><a href="{{ route('contacts', app() -> getLocale()) }}">{{__('menu.contacts')}}</a></li>
						</ul>
					</div><!-- col-sm-3 -->
				</div><!-- row -->

			</div><!-- container -->
		</div><!-- container -->
	</footer>
