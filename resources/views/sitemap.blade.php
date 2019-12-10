<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('components/head-settings')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common-offers.css">
    <link rel="stylesheet" type="text/css" href="/css/desktop-offers.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">

    <!--Footer-->

    <link rel="stylesheet" type="text/css" href="/css/footer.css">

    <link href="/fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->

    <style>
        .slide-arrow {
            position: absolute;
            top: 50%;
            transform: translate(0%, -50%);
            border: none;
            width: 52px;
            height: 52px;
            color: white;
            background: #4c4c4c82;
        }

        .next-arrow {
            right: -3%;
        }

        .prev-arrow {
            left: -3%;
            z-index: 9999;
        }

        .next-arrow-big {
            right: 1%;
            background: none;
            font-size: 30px;
        }

        .prev-arrow-big {
            left: 1%;
            z-index: 9999;
            background: none;
            font-size: 30px;

        }

        .main-tours-slider:hover .prev-arrow-big {
            color: #050658;
        }

        .main-tours-slider:hover .next-arrow-big {
            color: #050658;
        }

        .slick-list {
            overflow-y: -webkit-paged-x;
        }

        ul {
            display: block;
            list-style-type: disc;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 0px;
            margin-inline-end: 0px;
            padding-inline-start: 40px;
        }

        .sitemap {
            position: relative;
            font-size: 16px;
        }

        .sitemap li {
            display: block;
            margin-bottom: 4px;
            position: relative;
            line-height: 25px;
        }

        .sitemap li::before {
            content: '';
    width: 10px;
    height: 10px;
    background: #050658;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: -25px;
    border-radius: 50%;
        }

    </style>
</head>

<body>
    <!-- Header -->
    @include('/components/header')
    <section class="second-sec" style="padding-top: 75px !important">
        <div class="container">
            <div class="section-name">{{__('menu.sitemap')}}</div>
            <ul class="sitemap" style="padding-top: 75px !important">
                <li>Главная</li>
                <div style="padding-left: 25px">
                        <li>Узбекистан</li>
                        <div style="padding-left: 25px">
                            <li><a href="{{route('uzb.category', ['category' => 'geography', 'language' => app()->getLocale()])}}">{{ __('menu.geo') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($geoCategories as $item)
                                    <li><a href="{{route('uzb.sub', ['category'=>'geo', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                    <div style="padding-left: 25px">
                                            @foreach($item->items() as $sub_item)
                                                <li><a href="{{route('uzb.show', ['category'=> 'geo', 'subcategory' => $sub_item->category, 'uzb' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <li><a href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($historyCategories as $item)
                                    <li><a href="{{route('uzb.sub', ['category'=>'history', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                    <div style="padding-left: 25px">
                                            @foreach($item->items() as $sub_item)
                                                <li><a href="{{route('uzb.show', ['category'=> 'history', 'subcategory' => $sub_item->category, 'uzb' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <li><a href="{{route('uzb.category', ['category' => 'peoples', 'language' => app()->getLocale()])}}">{{ __('menu.peoples') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($peoplesCategories as $item)
                                    <li><a href="{{route('uzb.sub', ['category'=>'peoples', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                    <div style="padding-left: 25px">
                                            @foreach($item->items() as $sub_item)
                                                <li><a href="{{route('uzb.show', ['category'=> 'peoples', 'subcategory' => $sub_item->category, 'uzb' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <li><a href="{{route('uzb.category', ['category' => 'art', 'language' => app()->getLocale()])}}">{{ __('menu.art') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($artCategories as $item)
                                    <li><a href="{{route('uzb.sub', ['category'=>'art', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                    <div style="padding-left: 25px">
                                            @foreach($item->items() as $sub_item)
                                                <li><a href="{{route('uzb.show', ['category'=> 'art', 'subcategory' => $sub_item->category, 'uzb' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <li><a href="{{route('uzb.category', ['category' => 'fashion', 'language' => app()->getLocale()])}}">{{ __('menu.moda') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($fashionCategories as $item)
                                    <li><a href="{{route('uzb.sub', ['category'=>'fashion', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                    <div style="padding-left: 25px">
                                            @foreach($item->items() as $sub_item)
                                                <li><a href="{{route('uzb.show', ['category'=> 'fashion', 'subcategory' => $sub_item->category, 'uzb' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <li><a href="{{route('uzb.category', ['category' => 'painting', 'language' => app()->getLocale()])}}">{{ __('menu.painting') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($paintingCategories as $item)
                                    <li><a href="{{route('uzb.sub', ['category'=>'painting', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                    <div style="padding-left: 25px">
                                            @foreach($item->items() as $sub_item)
                                                <li><a href="{{route('uzb.show', ['category'=> 'painting', 'subcategory' => $sub_item->category, 'uzb' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <li><a href="{{route('uzb.category', ['category' => 'culture', 'language' => app()->getLocale()])}}">{{ __('menu.culture') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($cultureCategories as $item)
                                    <li><a href="{{route('uzb.sub', ['category'=>'culture', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                    <div style="padding-left: 25px">
                                            @foreach($item->items() as $sub_item)
                                                <li><a href="{{route('uzb.show', ['category'=> 'culture', 'subcategory' => $sub_item->category, 'uzb' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <li><a href="{{route('uzb.category', ['category' => 'kitchen', 'language' => app()->getLocale()])}}">{{ __('menu.kitchen') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($kitchenCategories as $item)
                                    <li><a href="{{route('uzb.sub', ['category'=>'kitchen', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                    <div style="padding-left: 25px">
                                            @foreach($item->items() as $sub_item)
                                                <li><a href="{{route('uzb.show', ['category'=> 'kitchen', 'subcategory' => $sub_item->category, 'uzb' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                            <li><a href="{{route('uzb.category', ['category' => 'tradition', 'language' => app()->getLocale()])}}">{{ __('menu.tradicii') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($traditionCategories as $item)
                                    <li><a href="{{route('uzb.sub', ['category'=>'tradition', 'uzb' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                    <div style="padding-left: 25px">
                                            @foreach($item->items() as $sub_item)
                                                <li><a href="{{route('uzb.show', ['category'=> 'tradition', 'subcategory' => $sub_item->category, 'uzb' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                            @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <li><a href="{{route('index.city', app()->getLocale())}}">{{__('menu.cities')}}</a></li>
                        <div style="padding-left: 25px">
                            @foreach($cities as $city)
                                <li><a href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name), 'language' => app()->getLocale()])}}">{{$city->name}}</a></li>
                                <div style="padding-left: 25px">
                                    <li><a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'history', 'language' => app()->getLocale()])}}">{{ __('menu.history') }}</a></li>
                                    <div style="padding-left: 25px">
                                    @foreach($city_items as $cityitem)
                                        @if($cityitem->city_id == $city->id && $cityitem->category === 'history')
                                            <li><a href="{{route('city.item', ['city'=> Illuminate\Support\Str::lower($city->name), 'category' => 'history', 'slug' => $cityitem->slug, 'lang' => app()->getLocale()])}}">{{$cityitem->name}}</a></li>
                                        @endif
                                    @endforeach
                                    </div>
                                    <li><a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-eat', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_eat') }}</a></li>
                                    <div style="padding-left: 25px">
                                    @foreach($city_items as $cityitem)
                                        @if($cityitem->city_id == $city->id && $cityitem->category === 'where-to-eat')
                                            <li><a href="{{route('city.item', ['city'=> Illuminate\Support\Str::lower($city->name), 'category' => 'where-to-eat', 'slug' => $cityitem->slug, 'lang' => app()->getLocale()])}}">{{$cityitem->name}}</a></li>
                                        @endif
                                    @endforeach
                                    </div>
                                    <li><a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-stay', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_stay') }}</a></li>
                                    <div style="padding-left: 25px">
                                    @foreach($city_items as $cityitem)
                                        @if($cityitem->city_id == $city->id && $cityitem->category === 'where-to-stay')
                                            <li><a href="{{route('city.item', ['city'=> Illuminate\Support\Str::lower($city->name), 'category' => 'where-to-stay', 'slug' => $cityitem->slug, 'lang' => app()->getLocale()])}}">{{$cityitem->name}}</a></li>
                                        @endif
                                    @endforeach
                                    </div>
                                    <li><a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-see', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_see') }}</a></li>
                                    <div style="padding-left: 25px">
                                    @foreach($city_items as $cityitem)
                                        @if($cityitem->city_id == $city->id && $cityitem->category === 'what-to-see')
                                            <li><a href="{{route('city.item', ['city'=> Illuminate\Support\Str::lower($city->name), 'category' => 'what-to-see', 'slug' => $cityitem->slug, 'lang' => app()->getLocale()])}}">{{$cityitem->name}}</a></li>
                                        @endif
                                    @endforeach
                                    </div>
                                    <li><a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-do', 'language' => app()->getLocale()])}}">{{ __('mainpage.things_to_do') }}</a></li>
                                    <div style="padding-left: 25px">
                                    @foreach($city_items as $cityitem)
                                        @if($cityitem->city_id == $city->id && $cityitem->category === 'what-to-do')
                                            <li><a href="{{route('city.item', ['city'=> Illuminate\Support\Str::lower($city->name), 'category' => 'what-to-do', 'slug' => $cityitem->slug, 'lang' => app()->getLocale()])}}">{{$cityitem->name}}</a></li>
                                        @endif
                                    @endforeach
                                    </div>
                                    <li><a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-buy', 'language' => app()->getLocale()])}}">{{ __('mainpage.where_to_buy') }}</a></li>
                                    <div style="padding-left: 25px">
                                    @foreach($city_items as $cityitem)
                                        @if($cityitem->city_id == $city->id && $cityitem->category === 'where-to-buy')
                                            <li><a href="{{route('city.item', ['city'=> Illuminate\Support\Str::lower($city->name), 'category' => 'where-to-buy', 'slug' => $cityitem->slug, 'lang' => app()->getLocale()])}}">{{$cityitem->name}}</a></li>
                                        @endif
                                    @endforeach
                                    </div>
                                    <li><a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'how-to-get', 'language' => app()->getLocale()])}}">{{ __('mainpage.how_to_get') }}</a></li>
                                    <div style="padding-left: 25px">
                                    @foreach($city_items as $cityitem)
                                        @if($cityitem->city_id == $city->id && $cityitem->category === 'how-to-get')
                                            <li><a href="{{route('city.item', ['city'=> Illuminate\Support\Str::lower($city->name), 'category' => 'how-to-get', 'slug' => $cityitem->slug, 'lang' => app()->getLocale()])}}">{{$cityitem->name}}</a></li>
                                        @endif
                                    @endforeach
                                    </div>
                                    <li><a href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'useful-information', 'language' => app()->getLocale()])}}">{{ __('mainpage.useful_information') }}</a></li>
                                    <div style="padding-left: 25px">
                                    @foreach($city_items as $cityitem)
                                        @if($cityitem->city_id == $city->id && $cityitem->category === 'useful-information')
                                            <li><a href="{{route('city.item', ['city'=> Illuminate\Support\Str::lower($city->name), 'category' => 'useful-information', 'slug' => $cityitem->slug, 'lang' => app()->getLocale()])}}">{{$cityitem->name}}</a></li>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <li><a href="{{route('index.people', app()->getLocale())}}">{{__('menu.peoples')}}</a></li>
                        <div style="padding-left: 25px">
                            <li><a href="{{route('people.category', ['category' => 'drevniy-mir', 'language' => app()->getLocale()])}}">{{ __('menu.drevniy_mir') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($drevniy as $item)
                                    <li><a href="{{route('people.show', ['category' => $item->category, 'slug' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                @endforeach
                            </div>
                            <li><a href="{{route('people.category', ['category' => 'srednie-veka', 'language' => app()->getLocale()])}}">{{ __('menu.srednie_veka') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($sredniy as $item)
                                    <li><a href="{{route('people.show', ['category' => $item->category, 'slug' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                @endforeach
                            </div>
                            <li><a href="{{route('people.category', ['category' => 'novoe-vremya', 'language' => app()->getLocale()])}}">{{ __('menu.novoe_vremya') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($novie as $item)
                                    <li><a href="{{route('people.show', ['category' => $item->category, 'slug' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                @endforeach
                            </div>
                            <li><a href="{{route('people.category', ['category' => 'sovremenost', 'language' => app()->getLocale()])}}">{{ __('menu.sovremenost') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($sovremenost as $item)
                                    <li><a href="{{route('people.show', ['category' => $item->category, 'slug' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                @endforeach
                            </div>
                        </div>
                        <li><a href="{{route('index.people', app()->getLocale())}}">{{__('menu.galery')}}</a></li>
                        <div style="padding-left: 25px">
                            @foreach($galleryCategories as $item)
                                <li><a href="{{route('show.galery', ['centuary' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                            @endforeach
                        </div>
                        <li><a href="{{route('index.people', app()->getLocale())}}">{{__('menu.tours')}}</a></li>
                        <div style="padding-left: 25px">
                            @foreach($tourCategories as $item)
                                <li><a href="{{route('tour.category', ['category' => $item->slug,'language' => app()->getLocale()])}}">{{$item->name}}</a></li>
                                <div style="padding-left: 25px">
                                        @foreach($item->tours() as $sub_item)
                                            <li><a href="{{route('tour.show', ['tourname' => $sub_item->slug, 'language' => app()->getLocale()])}}">{{$sub_item->name}}</a></li>
                                        @endforeach
                                </div>
                            @endforeach
                        </div>
                        <li><a href="{{route('index.tourism', app()->getLocale())}}">{{__('menu.tourism')}}</a></li>
                        <div style="padding-left: 25px">
                                @foreach($tourism as $item)
                                    <li><a href="{{route('tourism.show', ['slug' => $item->slug, 'lang' => app()->getLocale()])}}">{{$item->title}}</a></li>
                                @endforeach
                        </div>
                        <li><a href="{{route('index.blog', app()->getLocale())}}">{{__('menu.news')}}</a></li>
                        <div style="padding-left: 25px">
                            <li><a  href="{{route('blog.category', ['category' => 'uzbekistan', 'language' => app()->getLocale()])}}">{{ __('menu.uzbekistan') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($uzbBlog as $item)
                                    <li><a href="{{route('blog.show', ['category' => $item->category, 'slug' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->title}}</a></li>
                                @endforeach
                            </div>
                            <li><a  href="{{route('blog.category', ['category' => 'archeology', 'language' => app()->getLocale()])}}">{{ __('menu.archeology') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($archBlog as $item)
                                    <li><a href="{{route('blog.show', ['category' => $item->category, 'slug' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->title}}</a></li>
                                @endforeach
                            </div>
                            <li><a  href="{{route('blog.category', ['category' => 'tourism', 'language' => app()->getLocale()])}}">{{ __('menu.tourism') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($tourBlog as $item)
                                    <li><a href="{{route('blog.show', ['category' => $item->category, 'slug' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->title}}</a></li>
                                @endforeach
                            </div>
                            <li><a  href="{{route('blog.category', ['category' => 'notes', 'language' => app()->getLocale()])}}">{{ __('menu.notes') }}</a></li>
                            <div style="padding-left: 25px">
                                @foreach($notesBlog as $item)
                                    <li><a href="{{route('blog.show', ['category' => $item->category, 'slug' => $item->slug, 'language' => app()->getLocale()])}}">{{$item->title}}</a></li>
                                @endforeach
                            </div>
                        </div>
                </div>
            </ul>
        </div>
    </section>
    <!-- Footer -->
    @include('/components/footer')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.main-tours-slider').slick({
                infinite: true,
                speed: 300,
                dots: false,
                prevArrow: '<button class="slide-arrow prev-arrow prev-arrow-big"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow next-arrow-big"><i class="fas fa-chevron-right"></i></button>',
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.cities-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.bazar').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
            });

        });

    </script>
</body>

</html>
