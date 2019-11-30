<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">

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

    <!--Footer-->

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="/fonts/ionicons.css" rel="stylesheet">
</head>

<body>
    @include('/components/header', ['type' => 'uzbekistan'])
    <section>
    <div class="container">
        <div style="margin-top: 50px;" class="section-name">{{ __('menu.uzbekistan') }}</div>
        <div class="row container_uzb">
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'geo', 'language' => app()->getLocale()])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1460134846237-51c777df6111?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.geo') }}</div>
                            <div class="block-desc">Здесь можно прочитать о географии Узбекистана</div>
                            <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'history', 'language' => app()->getLocale()])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=800);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.history') }}</div>
                            <div class="block-desc">Здесь вы сможете найти интереснные фрагменты истории из жизни
                                Узбекистана</div>
                            <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'peoples', 'language' => app()->getLocale()])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1558185730-e5b096912bbd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.peoples') }}</div>
                            <div class="block-desc">Здесь вы сможете найти интереснных людей со всего Узбекистана</div>
                            <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
    </section>

    <div class="mapouter" style="width:100%; width: 100%; ><div class="
        gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
            src="https://maps.google.com/maps?q=uzbekistan&t=&z=5&ie=UTF8&iwloc=&output=embed" frameborder="0"
            scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
    <style>
        .mapouter {
            position: relative;
            text-align: right;
            height: 500px;
            width: 100%;
        }

        .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 500px;
            width: 100%;
        }

    </style>
    </div>
        <section class="second-sec">
            <div class="container">
            <div id='iskustva' class="section-name">{{ __('menu.art') }}</div>
                <div class="row container_uzb">
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'art', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img"
                                    style="background: url(https://images.unsplash.com/photo-1506780789966-15774276e069?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1076&q=80);">
                                </div>
                                <div class="block-content">
                                    <div class="block-title">{{ __('menu.art') }}</div>
                                    <div class="block-desc"> процесс или итог выражения внутреннего мира в (художественном) образе</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'fashion', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img"
                                    style="background: url(https://images.unsplash.com/photo-1469334031218-e382a71b716b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                                </div>
                                <div class="block-content">
                                    <div class="block-title">{{ __('menu.moda') }}</div>
                                    <div class="block-desc">Мо́да — совокупность привычек, ценностей и вкусов, принятых в определённой среде в определённое время.</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('uzb.category', ['category' => 'painting', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img"
                                    style="background: url(https://images.unsplash.com/photo-1476763752342-d5cf7e5eb6cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                                </div>
                                <div class="block-content">
                                    <div class="block-title">{{ __('menu.painting') }}</div>
                                    <div class="block-desc">Картина в живописи — произведение искусства, обладающее законченным характером и самостоятельным художественным значением</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="section-name" style="margin-top: 50px;">{{ __('menu.culture') }}</div>
                    <div class="row container_uzb">
                        <div class="col-md-4" style="    padding-bottom: 10px;">
                            <a class="link-block" href="{{route('uzb.category', ['category' => 'culture', 'language' => app()->getLocale()])}}">
                                <div class="big-blocks big-padding">
                                    <div class="block-img"
                                        style="background: url(https://images.unsplash.com/photo-1505932794465-147d1f1b2c97?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
                                    </div>
                                    <div class="block-content">
                                        <div class="block-title">{{ __('menu.culture') }}</div>
                                        <div class="block-desc">Культу́ра — понятие, имеющее огромное количество значений в различных областях человеческой жизнедеятельности. Культура является предметом изучения философии </div>
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
                                        <div class="block-desc">Узбе́кская ку́хня — национальная кухня Узбекистана. Богатая кухня, имеет глубокую историю, тесно связана с узбекской </div>
                                        <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4" style="    padding-bottom: 10px;">
                            <a class="link-block" href="{{route('uzb.category', ['category' => 'tradicii', 'language' => app()->getLocale()])}}">
                                <div class="big-blocks big-padding">
                                    <div class="block-img"
                                        style="background: url(https://images.unsplash.com/photo-1453412324657-958beaf0ef12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                                    </div>
                                    <div class="block-content">
                                        <div class="block-title">{{ __('menu.tradicii') }}</div>
                                        <div class="block-desc">Рели́гия (лат. religare — связывать, соединять) — определённая система взглядов</div>
                                        <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
        </section>

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
