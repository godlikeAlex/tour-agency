<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Home 01</title>
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
        right: 0;
    }

    .prev-arrow {
        left: 0%;
        z-index: 9999;        
    }
    </style>
</head>

<body>
    <!-- Header -->
    @include('/components/header')
    <div class="main-tours-slider">
        <div style="background: url(https://images.unsplash.com/photo-1540206395-68808572332f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=562&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 1</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566434109082-772727eba32f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 2</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566612088151-a477d6c17708?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 3</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 4</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566572179133-512205811f1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 5</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
    </div>
    <div class="main-content">
        <section>
            <div class="container">
                <div class="section-name">Узбекистан</div>
                <div class="row" >
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566572179133-512205811f1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Godlike</div>
                                    <div class="block-desc">Some sub title la-la-bla</div>
                                    <div class="show__more show__more-block" href="http://google.com">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">География</div>
                                    <div class="block-desc">Геогра́фия — комп­лекс естественных и об­ще­ст­вен­ных на­ук, изу­чаю­щих струк­ту­ру, функ­цио­ни­ро­ва­ние и эво­лю­цию гео­гра­фи­че­ской обо­лоч­ки</div>
                                    <div class="show__more show__more-block" href="http://google.com">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1562023829-42be3bc1cc1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">История</div>
                                    <div class="block-desc">Исто́рия — область знаний, а также гуманитарная наука, занимающаяся изучением человека (его деятельности, состояния, мировоззрения, социальных связей, организаций и так далее) в прошлом</div>
                                    <div class="show__more show__more-block">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566578068205-12544813d53c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=968&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Народ</div>
                                    <div class="block-desc">Наро́д — историческая общность людей. Употребляется в научной литературе в двух основных значениях — в политическом</div>
                                    <div class="show__more show__more-block">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566550190057-347ce06a9006?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Культура</div>
                                    <div class="block-desc">Культу́ра — понятие, имеющее огромное количество значений в различных областях человеческой жизнедеятельности. Культура является предметом изучения философии,</div>
                                    <div class="show__more show__more-block">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566608344098-60ca17bf3d60?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1038&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Искуство</div>
                                    <div class="block-desc">Хорошо развиты холм Венеры и холм Аполлона. Линия Ума тянется к Луне. Безымянный палец</div>
                                    <div class="show__more show__more-block">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a style="margin:auto; margin-top: 50px; width:150px;" class="show__more">Show More</a>
            </div>
        </section>

        <section class="second-sec">
        <div class="container">
                <div class="section-name">Туристам</div>
                <div class="row" >
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="tourists-blocks">
                                <div class="toursists-img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBxLV9A0TxeQb6ZNpl3Mwo3mj6vXOoLd7hxQhVvHopjupxblOK" alt=""></div>
                                <div class="block-content-tourists">
                                    <div class="block-title-tourists">Праздники</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="tourists-blocks">
                                <div class="toursists-img"><img src="https://uznews.uz/upload/cache/ab/6f/ab6f9336f2856759fafbcbe29c19638a.jpg" alt=""></div>
                                <div class="block-content-tourists">
                                    <div class="block-title-tourists">Виза</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="tourists-blocks">
                                <div class="toursists-img"><img src="http://aif.md/wp-content/uploads/2017/11/%D0%BE%D0%B1%D0%BC%D0%B5%D0%BD%D0%BA%D0%B0.jpg" alt=""></div>
                                <div class="block-content-tourists">
                                    <div class="block-title-tourists">Вальюта и обмен</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a style="margin:auto;width:150px;" class="show__more">Show More</a>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="section-name">Города</div>
                <div class="row cities-slider" >
                    @foreach($cities as $city)
                    <div class="col-md-12" style="margin-bottom: 25px;">
                        <a class="link-block" href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name)])}}">
                            <div class="big-blocks" style="height: 390px; display: block;">
                                <div class="block-mini-img" style="background: url(/storage/{{$city -> image}});" ></div>
                                <div class="block-content" style="margin-top:25px;">
                                    <div class="block-title">{{$city->name}}</div>
                                    <div class="block-desc">Some sub title la-la-bla</div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <a style="margin:auto; margin-top: 50px; width:150px;" class="show__more">Show More</a>
            </div>
        </section>
        <section class="second-sec">
            <div class="container">
                <div class="section-name">Люди</div>
                <div class="row" >
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a href="google.com">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img" style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Slaget_ved_Zama_-_Cornelis_Cort%2C_1567.jpg/300px-Slaget_ved_Zama_-_Cornelis_Cort%2C_1567.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">Древний мир</div>
                                    <div class="block-desc">Дре́вний мир — период в истории человечества, выделяемый между доисторическим периодом </div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a href="google.com">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img " style="background: url(https://kipmu.ru/wp-content/uploads/sred.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">Средние века</div>
                                    <div class="block-desc">Сре́дние века́, или Средневеко́вье, — период истории Европы и Ближнего Востока</div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a href="google.com">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img" style="background: url(https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Eug%C3%A8ne_Delacroix_-_La_libert%C3%A9_guidant_le_peuple.jpg/270px-Eug%C3%A8ne_Delacroix_-_La_libert%C3%A9_guidant_le_peuple.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">Новое время</div>
                                    <div class="block-desc">Но́вое вре́мя — период в истории человечества, находящийся между Средневековьем и Новейшим временем.</div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a href="google.com">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img" style="background: url(https://cs.pikabu.ru/post_img/2013/11/06/10/1383756784_1957448563.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">Современость</div>
                                    <div class="block-desc">Настоя́щее — часть линии времени, состоящая из событий, которые происходят в данный момент, то есть определенная область </div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a style="margin:auto; margin-top: 50px; width:150px;" class="show__more">Show More</a>
            </div>
        </section>
        <div class="main-tours-slider">
        <div style="background: url(https://images.unsplash.com/photo-1559501717-d010f2247292?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Galery 1</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566434109082-772727eba32f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Galery 2</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566612088151-a477d6c17708?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Galery 3</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Galery 4</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566572179133-512205811f1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Galery 5</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
    </div>
    </div>
    <section>
            <div class="container">
                <div class="section-name">Базар</div>
                <div class="row bazar" >
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566572179133-512205811f1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Книги</div>
                                    <div class="block-desc">Кни́га — один из видов печатной продукции: непериодическое издание, состоящее из сброшюрованных или отдельных бумажных листов</div>
                                    <div class="show__more show__more-block" href="http://google.com">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Ткани</div>
                                    <div class="block-desc">Ткань — текстильное полотно, изготовленное на ткацком станке переплетением взаимно перпендикулярных систем нитей. Ткань состоит из двух переплетающихся систем нитей</div>
                                    <div class="show__more show__more-block" href="http://google.com">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1562023829-42be3bc1cc1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">История</div>
                                    <div class="block-desc">Исто́рия — область знаний, а также гуманитарная наука, занимающаяся изучением человека (его деятельности, состояния, мировоззрения, социальных связей, организаций и так далее) в прошлом</div>
                                    <div class="show__more show__more-block">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566572179133-512205811f1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Чапаны</div>
                                    <div class="block-desc">Кни́га — один из видов печатной продукции: непериодическое издание, состоящее из сброшюрованных или отдельных бумажных листов</div>
                                    <div class="show__more show__more-block" href="http://google.com">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Курапачи</div>
                                    <div class="block-desc">Ткань — текстильное полотно, изготовленное на ткацком станке переплетением взаимно перпендикулярных систем нитей. Ткань состоит из двух переплетающихся систем нитей</div>
                                    <div class="show__more show__more-block" href="http://google.com">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'geogrfy'])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1562023829-42be3bc1cc1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">Подушки</div>
                                    <div class="block-desc">Исто́рия — область знаний, а также гуманитарная наука, занимающаяся изучением человека (его деятельности, состояния, мировоззрения, социальных связей, организаций и так далее) в прошлом</div>
                                    <div class="show__more show__more-block">More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a style="margin:auto; margin-top: 50px; width:150px;" class="show__more">Show More</a>
            </div>
        </section>
        <section class="second-sec">
            <div class="container">
                <div class="section-name">Новости</div>
                <div class="row" >
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a class="link-block" href="google.com">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img" style="background: url(data:image/jpeg;base64,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);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">Узбекистан</div>
                                    <div class="block-desc">Здесь вы можете прочитать о последних событиях в Узбекистане </div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a class="link-block" href="google.com">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img " style="background: url(https://cs10.pikabu.ru/post_img/big/2018/08/26/12/1535316563181045867.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">Архиология</div>
                                    <div class="block-desc">Здесь вы можете прочитать и посмотреть о последнии находки архиологов</div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a class="link-block" href="google.com">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img" style="background: url(https://habrastorage.org/getpro/geektimes/post_images/4d1/7ff/877/4d17ff877486664d625eaaeb29d8bf98.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">Туризм</div>
                                    <div class="block-desc">Здесь вы можете прочитать самые важный новсти касающиеся туризма</div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3" style="margin-bottom: 25px;">
                        <a class="link-block" href="google.com">
                            <div class="big-blocks small-blocks" style="height: 390px;">
                                <div class="block-mini-img" style="background: url(https://cs.pikabu.ru/post_img/2013/11/06/10/1383756784_1957448563.jpg);" ></div>
                                <div class="block-content" style="margin-top:25px; padding-left: 10px; padding-right:10px;">
                                    <div class="block-title">Заметки</div>
                                    <div class="block-desc">Здесь вы можете найти для себя полезную ифнормацию, заметки и лайфхаки. </div>
                                    <div class="show__more show__more-block" >More</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <a style="margin:auto; margin-top: 50px; width:150px;" class="show__more">Show More</a>
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
                prevArrow: false,
                nextArrow: false,
                slidesToShow: 4,
                slidesToScroll: 4
            });

            $('.cities-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
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
