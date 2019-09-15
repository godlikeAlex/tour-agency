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
    <link href="/fonts/ionicons.css" rel="stylesheet">
</head>
<body>
    @include('/components/header', ['type' => 'uzbekistan'])
    <div class="container" style="margin-bottom: 50px;">
    <div style="margin-top: 50px;" class="section-name">
                    @if(request()->segment(2) === 'geo')
                        {{__('menu.geo')}}
                    @elseif(request()->segment(2) === 'history')
                        {{__('menu.history')}}
                    @elseif(request()->segment(2) === 'peoples')
                        {{__('menu.peoples')}}
                    @elseif(request()->segment(2) === 'art')
                        {{__('menu.art')}}
                    @elseif(request()->segment(2) === 'fashion')
                        {{__('menu.moda')}}
                    @elseif(request()->segment(2) === 'painting')
                        {{__('menu.painting')}}
                    @elseif(request()->segment(2) === 'culture')
                        {{__('menu.culture')}}
                    @elseif(request()->segment(2) === 'kitchen')
                        {{__('menu.kitchen')}}
                    @elseif(request()->segment(2) === 'tradition')
                        {{__('menu.tradition')}}
                    @endif
    </div>
        <div class="row container_of_tours" >
                @foreach($items as $item)
                        <div class="col-md-4" style="    padding-bottom: 10px;">
                                <a class="link-block" href="{{route('uzb.show', ['category'=>request()->segment(2) ,'uzb' => $item->slug])}}">
                                    <div class="big-blocks big-padding">
                                        <div class="block-img" style="background: url(/storage/{{$item->image}});" ></div>
                                        <div class="block-content">
                                            <div class="block-title">{{str_limit($item ->name, $limit = 15, $end = '...')}}</div>
                                            <div class="block-desc">{{str_limit($item ->desc, $limit = 130, $end = '...')}}</div>
                                            <div class="show__more show__more-block">{{ __('mainpage.moreblock') }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                @endforeach
                
        </div>
        
    </div>
    @include('/components/footer')
</body>
</html>