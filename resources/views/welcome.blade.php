<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('components/head-settings')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">

    <!--Footer-->

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->

    <style>

    .slide-arrow{
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
    </style>
</head>

<body>
    <!-- Header -->
    @include('/components/header')
    <div class="main-tours-slider">
        @foreach($slider as $slide)
            <a href="{{route('tour.show', ['tourname' => $slide->slug, 'language' => app()->getLocale()])}}" class="main-tous-slide">
                <div class="image-tour-slide" style="background: url(/storage/{{$slide->image}})"></div>
                <div class="tours-slider__title">{{$slide->name}}</div>
                <div style="text-transform: uppercase" class="tours-slider__sub">{{$slide->starts}} - {{$slide->ends}}</div>
            </a>
        @endforeach
    </div>
    <div class="main-content">
        <section>
            <div class="container">
                <div class="section-name"><a href="{{route('index.uzbekistan', app()->getLocale())}}">{{__('menu.uzbekistan')}}</a></div>
                <div class="row" >
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">{{__('menu.geo')}}</div>
                                    <div class="block-desc">Геогра?фия — комп­лекс естественных и об­ще­ст­вен­ных на­ук, изу­чаю­щих струк­ту­ру, функ­цио­ни­ро­ва­ние и эво­лю­цию гео­гра­фи­че­ской обо­лоч­ки</div>
                                    <div class="show__more show__more-block" href="http://google.com">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1562023829-42be3bc1cc1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">{{__('menu.history')}}</div>
                                    <div class="block-desc">История — область знаний, а также гуманитарная наука, занимающаяся изучением человека (его деятельности, состояния, мировоззрения, социальных связей, организаций и так далее) в прошлом</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'peoples', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566578068205-12544813d53c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=968&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">{{__('menu.peoples')}}</div>
                                    <div class="block-desc">Народ — историческая общность людей. Употребляется в научной литературе в двух основных значениях — в политическом</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'culture', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566550190057-347ce06a9006?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">{{__('menu.culture')}}</div>
                                    <div class="block-desc">Культура — понятие, имеющее огромное количество значений в различных областях человеческой жизнедеятельности. Культура является предметом изучения философии,</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'art', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566608344098-60ca17bf3d60?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1038&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">{{__('menu.art')}}</div>
                                    <div class="block-desc">Хорошо развиты холм Венеры и холм Аполлона. Линия Ума тянется к Луне. Безымянный палец</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                            <a class="link-block" href="{{route('uzb.category', ['category' => 'kitchen', 'language' => app()->getLocale()])}}">
                                <div class="big-blocks big-padding">
                                    <div class="block-img"
                                        style="background: url(https://images.unsplash.com/photo-1470256699805-a29e1b58598a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                                    </div>
                                    <div class="block-content">
                                        <div class="block-title">{{ __('menu.kitchen') }}</div>
                                        <div class="block-desc">Узбекская кухня — национальная кухня Узбекистана. Богатая кухня, имеет глубокую историю, тесно связана с узбекской </div>
                                        <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                </div>
                </div>
                <a style="margin:auto; margin-top: 100px; width:200px;" href="{{route('index.uzbekistan', app()->getLocale())}}" class="show__more">{{__('mainpage.more')}}</a>
            </div>
        </section>

        <section class="second-sec">
        <div class="container">
                <div class="section-name"><a href="{{route('index.tourism', app()->getLocale())}}">{{__('menu.tourists')}}</a></div>
                <div class="row" >
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="tourists-blocks">
                                <div class="toursists-img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBxLV9A0TxeQb6ZNpl3Mwo3mj6vXOoLd7hxQhVvHopjupxblOK" alt=""></div>
                                <div class="block-content-tourists">
                                    <div class="block-category-tourists">Праздники</div>
                                    <div class="block-title-tourists">Праздники Узбекистана</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="tourists-blocks">
                                <div class="toursists-img"><img src="https://uznews.uz/upload/cache/ab/6f/ab6f9336f2856759fafbcbe29c19638a.jpg" alt=""></div>
                                <div class="block-content-tourists">
                                    <div class="block-category-tourists">Виза</div>
                                    <div class="block-title-tourists">Как получить визу быстро?</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="tourists-blocks">
                                <div class="toursists-img"><img src="http://aif.md/wp-content/uploads/2017/11/%D0%BE%D0%B1%D0%BC%D0%B5%D0%BD%D0%BA%D0%B0.jpg" alt=""></div>
                                <div class="block-content-tourists">
                                    <div class="block-category-tourists">Вальюта</div>
                                    <div class="block-title-tourists">Безопасный валютный обмен</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="tourists-blocks">
                                <div class="toursists-img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBxLV9A0TxeQb6ZNpl3Mwo3mj6vXOoLd7hxQhVvHopjupxblOK" alt=""></div>
                                <div class="block-content-tourists">
                                    <div class="block-category-tourists">Праздники</div>
                                    <div class="block-title-tourists">Праздники Узбекистана</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="tourists-blocks">
                                <div class="toursists-img"><img src="https://uznews.uz/upload/cache/ab/6f/ab6f9336f2856759fafbcbe29c19638a.jpg" alt=""></div>
                                <div class="block-content-tourists">
                                    <div class="block-category-tourists">Виза</div>
                                    <div class="block-title-tourists">Как получить визу быстро?</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="tourists-blocks">
                                <div class="toursists-img"><img src="http://aif.md/wp-content/uploads/2017/11/%D0%BE%D0%B1%D0%BC%D0%B5%D0%BD%D0%BA%D0%B0.jpg" alt=""></div>
                                <div class="block-content-tourists">
                                    <div class="block-category-tourists">Вальюта</div>
                                    <div class="block-title-tourists">Безопасный валютный обмен</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a style="margin:auto;width:200px;" href="/tourism" class="show__more">{{__('mainpage.more')}}</a>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="section-name"><a href="{{route('index.city', app()->getLocale())}}">{{__('menu.cities')}}</a></div>
                <div class="row cities-slider" >
                    @foreach($cities as $city)
                    <div class="col-md-12" style="margin-bottom: 25px;">
                        <a class="link-block" href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name), 'language' => app()->getLocale()])}}">
                            <div class="big-blocks" style="height: 390px; display: block;">
                                <div class="block-mini-img" style="background: url(/storage/{{$city -> image}});" ></div>
                                <div class="block-content" style="margin-top:25px;">
                                    <div class="block-title">{{$city->name}}</div>
                                    <div class="block-desc">{{str_limit($city ->desc, $limit = 120, $end = '...')}}</div>
                                    <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <a style="margin:auto; margin-top: 100px; width:200px;" href="{{route('index.city', app()->getLocale())}}" class="show__more">{{__('mainpage.more')}}</a>
            </div>
        </section>
        <section class="second-sec">
            <div class="container">
                <div class="section-name"><a href="{{route('index.people', app()->getLocale())}}">{{__('menu.peoples')}}</a></div>
                <div class="row" >
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a href="{{route('people.category', ['category' => 'drevniy-mir', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img" style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Slaget_ved_Zama_-_Cornelis_Cort%2C_1567.jpg/300px-Slaget_ved_Zama_-_Cornelis_Cort%2C_1567.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">{{__('menu.drevniy_mir')}}</div>
                                    <div class="block-desc">Дре?вний мир — период в истории человечества, выделяемый между доисторическим периодом </div>
                                    <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a href="{{route('people.category', ['category' => 'srednie-veka', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img " style="background: url(https://kipmu.ru/wp-content/uploads/sred.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">{{__('menu.srednie_veka')}}</div>
                                    <div class="block-desc">Сре?дние века?, или Средневеко?вье, — период истории Европы и Ближнего Востока</div>
                                    <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a href="{{route('people.category', ['category' => 'novoe-vremya', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img" style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Eug%C3%A8ne_Delacroix_-_La_libert%C3%A9_guidant_le_peuple.jpg/270px-Eug%C3%A8ne_Delacroix_-_La_libert%C3%A9_guidant_le_peuple.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">{{__('menu.novoe_vremya')}}</div>
                                    <div class="block-desc">Но?вое вре?мя — период в истории человечества, находящийся между Средневековьем и Новейшим временем.</div>
                                    <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a href="{{route('people.category', ['category' => 'sovremenost', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img" style="background: url(https://cs.pikabu.ru/post_img/2013/11/06/10/1383756784_1957448563.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">{{__('menu.sovremenost')}}</div>
                                    <div class="block-desc">Настоя?щее — часть линии времени, состоящая из событий, которые происходят в данный момент, то есть определенная область </div>
                                    <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a style="margin:auto; margin-top: 100px; width:200px;" href="{{route('index.people', app()->getLocale())}}" class="show__more">{{__('mainpage.more')}}</a>
            </div>
        </section>
        <div class="main-tours-slider">

        <div class="main-tous-slide">
            <div class="image-tour-slide" style="background: url(https://pp.userapi.com/c841427/v841427908/66527/7f65sFCuMoI.jpg)"></div>
            <div class="tours-slider__title">Кокандское ханство </div>
            <div class="tours-slider__sub">1709—1876</div>
        </div>
        <div class="main-tous-slide">
            <div class="image-tour-slide" style="background: url(https://static1-repo.aif.ru/1/36/983491/c/a9828cda6482867231cdabcc580a170b.jpg)"></div>
            <div class="tours-slider__title">Бухарский эмират</div>
            <div class="tours-slider__sub">1785—1920</div>
        </div>
        <div  class="main-tous-slide">
        <div class="image-tour-slide" style="background: url(https://avdet.org/wp-content/uploads/2016/04/25_04_2016_pauli.jpg)"></div>
            <div class="tours-slider__title">Туркестанское генерал-губернаторство</div>
            <div class="tours-slider__sub">1867 —1918</div>
        </div>
        <div style="background: url(http://my.krskstate.ru/upload/iblock/dee/tatary.jpg)" class="main-tous-slide">
            <div class="image-tour-slide" style="background: url(http://my.krskstate.ru/upload/iblock/dee/tatary.jpg)"></div>
            <div class="tours-slider__title">Туркестанская АССР </div>
            <div class="tours-slider__sub">1918—1924</div>
        </div>
        <div style="background: url(http://my.krskstate.ru/upload/iblock/dee/tatary.jpg)" class="main-tous-slide">
            <div class="image-tour-slide" style="background: url(http://meros.ziyonet.uz/uploads/wonder/554c407a5158d.jpg)"></div>
            <div class="tours-slider__title">Самарканд</div>
            <div class="tours-slider__sub">2000</div>
        </div>
    </div>
    </div>
        <!-- <section>
            <div class="container">
                <div class="section-name">{{__('menu.shop')}}</div>
                <div class="row bazar" >
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566572179133-512205811f1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Книги</div>
                                    <div class="block-desc">Книга — один из видов печатной продукции: непериодическое издание, состоящее из сброшюрованных или отдельных бумажных листов</div>
                                    <div class="show__more show__more-block" href="http://google.com">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Ткани</div>
                                    <div class="block-desc">Ткань — текстильное полотно, изготовленное на ткацком станке переплетением взаимно перпендикулярных систем нитей. Ткань состоит из двух переплетающихся систем нитей</div>
                                    <div class="show__more show__more-block" href="http://google.com">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block"  href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1562023829-42be3bc1cc1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">История</div>
                                    <div class="block-desc">Исто?рия — область знаний, а также гуманитарная наука, занимающаяся изучением человека (его деятельности, состояния, мировоззрения, социальных связей, организаций и так далее) в прошлом</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566572179133-512205811f1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Чапаны</div>
                                    <div class="block-desc">Кни?га — один из видов печатной продукции: непериодическое издание, состоящее из сброшюрованных или отдельных бумажных листов</div>
                                    <div class="show__more show__more-block" href="http://google.com">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Курапачи</div>
                                    <div class="block-desc">Ткань — текстильное полотно, изготовленное на ткацком станке переплетением взаимно перпендикулярных систем нитей. Ткань состоит из двух переплетающихся систем нитей</div>
                                    <div class="show__more show__more-block" href="http://google.com">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1562023829-42be3bc1cc1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Подушки</div>
                                    <div class="block-desc">Исто?рия — область знаний, а также гуманитарная наука, занимающаяся изучением человека (его деятельности, состояния, мировоззрения, социальных связей, организаций и так далее) в прошлом</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a style="margin:auto; margin-top: 100px; width:200px;" class="show__more">{{__('mainpage.more')}}</a>
            </div>
        </section> -->
        <section>
            <div class="container">
                <div class="section-name"><a href="{{route('index.blog', app()->getLocale())}}">{{__('menu.news')}}</a></div>
                <div class="row" >
                    @foreach($articles as $post)
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a class="link-block" href="google.com">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img " style="background: url(/storage/{{$post->image}});" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">{{str_limit($post->title, $limit = 25, $end = '...')}}</div>
                                    <div class="block-desc">{{str_limit($post->desc, $limit = 60, $end = '...')}}</div>
                                    <div class="show__more show__more-block" >{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <a href="{{route('index.blog', app()->getLocale())}}" style="margin:auto; margin-top: 100px; width:200px;" class="show__more">{{__('mainpage.more')}}</a>
            </div>
    </section>
    <!-- Footer -->
    @include('/components/footer')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.main-tours-slider').slick({
                infinite: true,
                speed: 300,
                dots: false,
                prevArrow: '<button class="slide-arrow prev-arrow prev-arrow-big"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow next-arrow-big"><i class="fas fa-chevron-right"></i></button>',
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
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
                responsive: [
                    {
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
