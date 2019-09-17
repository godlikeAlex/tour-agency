<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
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
                    @if($category === 'geo')
                        {{__('menu.geo')}}
                    @elseif($category === 'history')
                        {{__('menu.history')}}
                    @elseif($category === 'peoples')
                        {{__('menu.peoples')}}
                    @elseif($category === 'art')
                        {{__('menu.art')}}
                    @elseif($category === 'fashion')
                        {{__('menu.moda')}}
                    @elseif($category === 'painting')
                        {{__('menu.painting')}}
                    @elseif($category === 'culture')
                        {{__('menu.culture')}}
                    @elseif($category === 'kitchen')
                        {{__('menu.kitchen')}}
                    @elseif($category === 'tradition')
                        {{__('menu.tradition')}}
                    @endif
    </div>
        <div class="row container_of_tours" >
                @foreach($items as $item)
                        <div class="col-md-4" style="    padding-bottom: 10px;">
                                <a class="link-block" href="{{route('uzb.show', ['category'=>$category ,'uzb' => $item->slug, 'language' => app()->getLocale()])}}">
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