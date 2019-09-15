<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tours</title>
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main-page.css">
    <link rel="stylesheet" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">    <link rel="stylesheet" type="text/css" href="/css/main.css"> 

<link rel="stylesheet" type="text/css" href="/css/footer.css">
<link href="fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
</head>
<body>
    @include('/components/header', ['type' => 'tours'])
    <div class="container">
        <div class="row" style="margin-bottom: 50px;">
        @foreach($tours as $tour)
            <div class="col-md-4" style="    padding-bottom: 10px;">
                    <a class="link-block" href="{{route('tour.show', ['tourname' => $tour->slug])}}">
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