<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tours</title>
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
    <link href="fonts/ionicons.css" rel="stylesheet">
</head>

<body>
    @include('/components/header', ['type' => 'uzbekistan'])
    <div class="container">
        <div style="margin-top: 50px;" class="section-name">{{ __('menu.uzbekistan') }}</div>
        <div class="row container_uzb">
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'geo'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1460134846237-51c777df6111?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.geo') }}</div>
                            <div class="block-desc">Здесь можно прочитать о географии Узбекистана</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'history'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=800);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.history') }}</div>
                            <div class="block-desc">Здесь вы сможете найти интереснные фрагменты истории из жизни
                                Узбекистана</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'peoples'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1558185730-e5b096912bbd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.peoples') }}</div>
                            <div class="block-desc">Здесь вы сможете найти интереснных людей со всего Узбекистана</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

    <div class="mapouter" style="width:100%; width: 100%; margin-bottom: 70px; margin-top: 70px; ><div class="
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
    <div class="container">
        <div id='iskustva' class="section-name">{{ __('menu.art') }}</div>
        <div class="row container_uzb">
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'literature'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1470549638415-0a0755be0619?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.literature') }}</div>
                            <div class="block-desc">Литерату́ра — в широком смысле слова совокупность любых письменных текстов</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'architecture'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1511818966892-d7d671e672a2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.architecture') }}</div>
                            <div class="block-desc">Архитиктура узбекистна прекрасна, но это не точно</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'music'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1484755560615-a4c64e778a6c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=980&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.music') }}</div>
                            <div class="block-desc">Музыка как вид искуства, она тут не очень хорошая</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'teatr'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1506780789966-15774276e069?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1076&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.teatr') }}</div>
                            <div class="block-desc">Теа́тр — зрелищный вид искусства, представляющий собой синтез различных искусств — литературы, музыки, хореографии, вокала</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'painting'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1476763752342-d5cf7e5eb6cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.painting') }}</div>
                            <div class="block-desc">Картина в живописи — произведение искусства, обладающее законченным характером и самостоятельным художественным значением</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'poetry'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=800);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.poetry') }}</div>
                            <div class="block-desc">Поэ́зия  — особый способ организации речи; привнесение в речь дополнительной меры</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="section-name" style="margin-top: 50px;">{{ __('menu.culture') }}</div>
        <div class="row container_uzb">
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'kitchen'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1470256699805-a29e1b58598a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.kitchen') }}</div>
                            <div class="block-desc">Узбе́кская ку́хня — национальная кухня Узбекистана. Богатая кухня, имеет глубокую историю, тесно связана с узбекской </div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'clothing'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1543087903-1ac2ec7aa8c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1074&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.clothing') }}</div>
                            <div class="block-desc">Народные узбекские наряды</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'religion'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1453412324657-958beaf0ef12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.religion') }}</div>
                            <div class="block-desc">Рели́гия (лат. religare — связывать, соединять) — определённая система взглядов</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'holidays'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1469967700385-5b0140e16e33?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.holidays') }}</div>
                            <div class="block-desc">Навру́з, также Международный день Навруз — праздник прихода весны по астрономическому солнечному календарю</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'sufism'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1566846726958-6c36311d74d1?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.sufism') }}</div>
                            <div class="block-desc">Суфи́зм или тасаввуф — мистическое течение в исламе, проповедующее аскетизм и повышенную духовность, одно из основных направлений</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4" style="    padding-bottom: 10px;">
                <a class="link-block" href="{{route('uzb.category', ['category' => 'lang'])}}">
                    <div class="big-blocks big-padding">
                        <div class="block-img"
                            style="background: url(https://images.unsplash.com/photo-1519734004356-f588de029302?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);">
                        </div>
                        <div class="block-content">
                            <div class="block-title">{{ __('menu.lang') }}</div>
                            <div class="block-desc">Узбекский язык</div>
                            <div class="show__more show__more-block">More</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

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
