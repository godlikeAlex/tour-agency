<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/tour-all.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/card.css"> 
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css"> 

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="fonts/ionicons.css" rel="stylesheet">
</head>
<body>
    @include('/components/header', ['type' => 'city'])
        <div class="container">
        @foreach($cities as $city)

        <div style="margin-top: 50px;" class="section-name">{{ $city->name }}</div>
        <div class="row container_uzb" >
                <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'history', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=800);" ></div>
                                <div class="block-content">
                                    <div class="block-title">{{ __('menu.history') }}</div>
                                    <div class="block-desc">Здесь вы сможете найти интереснные фрагменты истории из жизни {{$city->name}}</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                </div>
                <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'what-to-do', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1563053457-d9d7ae11546d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">{{ __('mainpage.things_to_do') }}</div>
                                    <div class="block-desc">Здесь вы можете найти для себя лучшие развлечения в {{$city->name}}</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                </div>
                <div class="col-md-4" style="    padding-bottom: 10px;">
                        <a class="link-block" href="{{route('city.category', ['city'=> Illuminate\Support\Str::lower($city->name),'category'=>'where-to-do', 'language' => app()->getLocale()])}}">
                            <div class="big-blocks big-padding">
                                <div class="block-img" style="background: url(https://images.unsplash.com/photo-1559682289-d9cb5858235d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1051&q=80);" ></div>
                                <div class="block-content">
                                    <div class="block-title">{{ __('mainpage.where_to_see') }}</div>
                                    <div class="block-desc">Здесь вы можете найти для себя лучшие и красивые места в {{$city->name}}</div>
                                    <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                                </div>
                            </div>
                        </a>
                </div>
                <a href="{{route('city.show', ['city' => Illuminate\Support\Str::lower($city->name), 'language' => app()->getLocale()])}}" style="margin:auto; margin-top: 50px; width:180px; margin-bottom: 50px;" class="show__more">{{ __('mainpage.more') }}</a>
        </div>
        @endforeach
    </div>
    @include('/components/footer')
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <!-- Plugins js -->
    <script src="/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/js/active.js"></script>
    <script src="/vendor/bootstrap/js/popper.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>