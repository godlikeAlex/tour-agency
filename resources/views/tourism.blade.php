<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('/components/head-settings')

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/tour-all.css">
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="/fonts/ionicons.css" rel="stylesheet">
</head>

<body>
    @include('/components/header')
    <section>
        <div class="container">
            <div style="width:100%; ">
                <div class="section-name">{{__('menu.obwiy-info')}}</div>
            </div>
            <div class="row container_uzb">
                @foreach($obwiy_info as $item)
                <div class="col-md-4">
                    <a class="link-block"
                        href="{{route('tourism.show', ['slug' => $item->slug, 'lang' => app()->getLocale()])}}">
                        <div class="big-blocks big-padding">
                            <div class="block-img" style="background: url(/storage/{{$item->image}});"></div>
                            <div class="block-content">
                                <div class="block-title">{{$item->title}}</div>
                                <div class="block-desc">
                                    {{ str_limit($item->desc, $limit = 100, $end = '...') }}
                                </div>
                                <div class="show__more show__more-block">{{__('menu.more')}}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="second-sec">
        <div class="container">
            <div style="width:100%;  ">
                <div class="section-name">{{__('menu.visa')}}</div>
            </div>
            <div class="row container_uzb">
                @foreach($visa as $item)
                <div class="col-md-4">
                    <a class="link-block"
                        href="{{route('tourism.show', ['slug' => $item->slug, 'lang' => app()->getLocale()])}}">
                        <div class="big-blocks big-padding">
                            <div class="block-img" style="background: url(/storage/{{$item->image}});"></div>
                            <div class="block-content">
                                <div class="block-title">{{$item->title}}</div>
                                <div class="block-desc">
                                    {{ str_limit($item->desc, $limit = 100, $end = '...') }}
                                </div>
                                <div class="show__more show__more-block">{{__('menu.more')}}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div style="width:100%; ">
                <div class="section-name">{{__('menu.how_to_get')}}</div>
            </div>
            <div class="row container_uzb">
                @foreach($kak_dobratsya as $item)
                <div class="col-md-4">
                    <a class="link-block"
                        href="{{route('tourism.show', ['slug' => $item->slug, 'lang' => app()->getLocale()])}}">
                        <div class="big-blocks big-padding">
                            <div class="block-img" style="background: url(/storage/{{$item->image}});"></div>
                            <div class="block-content">
                                <div class="block-title">{{$item->title}}</div>
                                <div class="block-desc">
                                    {{ str_limit($item->desc, $limit = 100, $end = '...') }}
                                </div>
                                <div class="show__more show__more-block">{{__('menu.more')}}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="second-sec">
        <div class="container">
            <div style="width:100%; ">
                <div class="section-name">{{__('menu.money')}}</div>
            </div>
            <div class="row container_uzb">
                @foreach($dengi as $item)
                <div class="col-md-4">
                    <a class="link-block"
                        href="{{route('tourism.show', ['slug' => $item->slug, 'lang' => app()->getLocale()])}}">
                        <div class="big-blocks big-padding">
                            <div class="block-img" style="background: url(/storage/{{$item->image}});"></div>
                            <div class="block-content">
                                <div class="block-title">{{$item->title}}</div>
                                <div class="block-desc">
                                    {{ str_limit($item->desc, $limit = 100, $end = '...') }}
                                </div>
                                <div class="show__more show__more-block">{{__('menu.more')}}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="container">
        <div style="width:100%; ">
        <div class="section-name">{{__('menu.communication')}}</div>
    </div>
    <div class="row container_uzb">
        @foreach($svyaz as $item)
        <div class="col-md-4">
            <a class="link-block"
                href="{{route('tourism.show', ['slug' => $item->slug, 'lang' => app()->getLocale()])}}">
                <div class="big-blocks big-padding">
                    <div class="block-img" style="background: url(/storage/{{$item->image}});"></div>
                    <div class="block-content">
                        <div class="block-title">{{$item->title}}</div>
                        <div class="block-desc">
                            {{ str_limit($item->desc, $limit = 100, $end = '...') }}
                        </div>
                        <div class="show__more show__more-block">{{__('menu.more')}}</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
        </div>
    </section>
    <section class="second-sec">
        <div class="container">
        <div style="width:100%; ">
        <div class="section-name">{{__('menu.events')}}</div>
    </div>
    <div class="row container_uzb">
        @foreach($miropriyatiya as $item)
        <div class="col-md-4">
            <a class="link-block"
                href="{{route('tourism.show', ['slug' => $item->slug, 'lang' => app()->getLocale()])}}">
                <div class="big-blocks big-padding">
                    <div class="block-img" style="background: url(/storage/{{$item->image}});"></div>
                    <div class="block-content">
                        <div class="block-title">{{$item->title}}</div>
                        <div class="block-desc">
                            {{ str_limit($item->desc, $limit = 100, $end = '...') }}
                        </div>
                        <div class="show__more show__more-block">{{__('menu.more')}}</div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
        </div>
    </section>

    </div>
    @include('/components/footer')
    <!-- 20% Discount on Elegant Themes Divi Page Builder https://www.embedgooglemap.net/divi-sale/ -->
    <!--===============================================================================================-->
    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/js/main.js"></script>
</body>

</html>
