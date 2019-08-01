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
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
    <link rel="stylesheet" type="text/css" href="/css/card.css"> 
</head>
<body>
    @include('/components/header', ['type' => 'uzbekistan'])
    <div class="container">
        <div class="row container_of_tours" >
                @foreach($items as $item)
                    <article class="col-md-4 block_main__item" style="margin-top:50px;">
                        <div class="content-block__img">
                            <a href="{{route('uzb.show', ['category'=>request()->segment(2) ,'uzb' => $item->slug])}}"><img src="/storage/{{$item->image}}" alt=""></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{route('uzb.show', ['category'=>request()->segment(2) ,'uzb' => $item->slug])}}">{{$item->name}}</a>
                        </div>
                    </article>
                @endforeach
                
        </div>
        
    </div>
</body>
</html>