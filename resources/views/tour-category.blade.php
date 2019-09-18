<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tours</title>
	<link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main-page.css">
    <link rel="stylesheet" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">    <link rel="stylesheet" type="text/css" href="/css/main.css"> 

<link rel="stylesheet" type="text/css" href="/css/footer.css">
<link href="/fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
</head>
<body>
    @include('/components/header', ['type' => 'tours'])
    <div class="container">
    <div style="margin-top: 50px;" class="section-name">
        @if($category == 'history-tours') 
            {{__('menu.history_tours')}}
        @elseif($category == 'short-tours') 
            {{__('menu.short_tours')}}
        @elseif($category == 'group-tours') 
            {{__('menu.group_tours')}}
        @elseif($category == 'individual-tours') 
            {{__('menu.individual_tours')}}
        @elseif($category == 'exclusive-tours') 
            {{__('menu.exclusive_tours')}}
        @elseif($category == 'classic-tours') 
            {{__('menu.classic_tours')}}
        @elseif($category == 'excursion-tours') 
            {{__('menu.excursion_tours')}}
        @elseif($category == 'piligram-tours') 
            {{__('menu.piligram_tours')}}
        @elseif($category == 'economy-tours') 
            {{__('menu.economy_tours')}}
        @elseif($category == 'eco-tours') 
            {{__('menu.eco_tours')}}
        @elseif($category == 'cycling-tours') 
            {{__('menu.eco_tours')}}
        @endif
    </div>

        <div class="row" style="margin-bottom: 50px;">
        @foreach($tours as $tour)
            <div class="col-md-4" style="    padding-bottom: 10px;">
                    <a class="link-block" href="{{route('tour.show', ['tourname' => $tour->slug, 'language' => app()->getLocale() ])}}">
                        <div class="big-blocks big-padding">
                            <div class="block-img" style="background: url(storage/{{$tour->image}});" ></div>
                            <div class="block-content">
                                <div class="block-title">{{ $tour->name }}</div>
                                <div class="block-desc">{{str_limit($tour ->desc, $limit = 120, $end = '...')}}</div>
                                <div class="show__more show__more-block">{{__('mainpage.moreblock')}}</div>
                            </div>
                        </div>
                    </a>
            </div>
        @endforeach
        {{$tours -> links()}}
        </div>
    </div>
    @include('/components/footer')
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