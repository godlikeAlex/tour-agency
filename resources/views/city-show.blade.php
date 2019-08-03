<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--===============================================================================================-->
   <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="///images/icons/favicon.png"/>
   
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/css/slick/custom-theme.css">
       
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
    <title>Document</title>
</head>
<body>
@include('/components/header', ['type' => 'city'])
    <div class="container" style="margin-bottom: 50px;  ">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 name-sec">{{$content->name}}</div>
                <div class="col-md-12">{!!$content->about!!}</div>
                <article class="col-md-4 block_main__item" style="margin-top:20px">
                        <div class="content-block__img">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'history']) }}""></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'history']) }}"">История</a>
                        </div>
                </article>
                <article class="col-md-4 block_main__item" style="margin-top:20px">
                        <div class="content-block__img">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-see']) }}""></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-see']) }}"">Что смотреть</a>
                        </div>
                </article>
                <article class="col-md-4 block_main__item" style="margin-top:20px">
                        <div class="content-block__img">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-do']) }}""></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-do']) }}"">Чем заняться</a>
                        </div>
                </article>
                <article class="col-md-4 block_main__item" style="margin-top:20px">
                        <div class="content-block__img">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-buy']) }}""></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-buy']) }}"">Где покупать</a>
                        </div>
                </article>
                <article class="col-md-4 block_main__item" style="margin-top:20px">
                        <div class="content-block__img">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-eat']) }}""></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-eat']) }}"">Где поесть</a>
                        </div>
                </article>
                <article class="col-md-4 block_main__item" style="margin-top:20px">
                        <div class="content-block__img">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-stay']) }}""></a>
                        </div>
                        <div class="content-block__title">
                            <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-stay']) }}"">Где остановиться</a>
                        </div>
                </article>
 
                <div class="col-md-12 name-sec">История</div>
                <div class="responsive col-md-12">
                    @foreach($historys as $history)
                        <article class="col-md-12 block_main__item" style="margin-top:20px">
                            <div class="content-block__img">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/history/{{$history->slug}}"><img src="/storage/{{$history->image}}" alt=""></a>
                            </div>
                            <div class="content-block__title">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/history/{{$history->slug}}">{{$history->name}}</a>
                            </div>
                        </article> 
                    @endforeach
                </div>  
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'history']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Показать еще</a>
                <div class="col-md-12 name-sec">Что смотреть</div>
                <div class="responsive col-md-12">
                    @foreach($whatToSee as $whatSee)
                        <article class="col-md-12 block_main__item" style="margin-top:20px">
                            <div class="content-block__img">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/what-to-see/{{$whatSee->slug}}"><img src="/storage/{{$whatSee->image}}" alt=""></a>
                            </div>
                            <div class="content-block__title">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/what-to-see/{{$whatSee->slug}}">{{$whatSee->name}}</a>
                            </div>
                        </article> 
                    @endforeach
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'what-to-see']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Показать еще</a>
                <div class="col-md-12 name-sec">Чем заняться</div>
                <div class="responsive col-md-12">
                    @foreach($whatToDo as $toDo)
                        <article class="col-md-12 block_main__item" style="margin-top:20px">
                            <div class="content-block__img">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/what-to-do/{{$toDo->slug}}"><img src="/storage/{{$toDo->image}}" alt=""></a>
                            </div>
                            <div class="content-block__title">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/what-to-do/{{$toDo->slug}}">{{$toDo->name}}</a>
                            </div>
                        </article> 
                    @endforeach 
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'things-to-do']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Показать еще</a>
                <div class="col-md-12 name-sec">Где покупать</div>
                <div class="responsive col-md-12">
                    @foreach($whereToBuy as $buy)
                        <article class="col-md-12 block_main__item" style="margin-top:20px">
                            <div class="content-block__img">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/where-to-buy/{{$buy->slug}}"><img src="/storage/{{$buy->image}}" alt=""></a>
                            </div>
                            <div class="content-block__title">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/where-to-buy/{{$buy->slug}}">{{$buy->name}}</a>
                            </div>
                        </article> 
                    @endforeach 
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-buy']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Показать еще</a>
                <div class="col-md-12 name-sec">Где поесть</div>
                <div class="responsive col-md-12">
                    @foreach($restaurants as $cafe)
                        <article class="col-md-12 block_main__item" style="margin-top:20px">
                            <div class="content-block__img">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/where-to-eat/{{$cafe->slug}}"><img src="/storage/{{$cafe->image}}" alt=""></a>
                            </div>
                            <div class="content-block__title">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/where-to-eat/{{$cafe->slug}}">{{$cafe->name}}</a>
                            </div>
                        </article> 
                    @endforeach
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-eat']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Показать еще</a>
                <div class="col-md-12 name-sec">Где остановиться</div>
                <div class="responsive col-md-12">
                    @foreach($hotels as $hotel)
                        <article class="col-md-12 block_main__item" style="margin-top:20px">
                            <div class="content-block__img">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/where-to-eat/{{$hotel->slug}}"><img src="/storage/{{$hotel->image}}" alt=""></a>
                            </div>
                            <div class="content-block__title">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/where-to-eat/{{$hotel->slug}}">{{$hotel->name}}</a>
                            </div>
                        </article> 
                    @endforeach
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'where-to-stay']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Показать еще</a>
                <div class="col-md-12 name-sec">Как добраться</div>
                <div class="responsive col-md-12">
                    @foreach($howToGet as $get)
                        <article class="col-md-12 block_main__item" style="margin-top:20px">
                            <div class="content-block__img">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/how-to-get/{{$get->slug}}"><img src="/storage/{{$get->image}}" alt=""></a>
                            </div>
                            <div class="content-block__title">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/how-to-get/{{$get->slug}}">{{$get->name}}</a>
                            </div>
                        </article> 
                    @endforeach
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'how-to-get']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Показать еще</a>
                <div class="col-md-12 name-sec">Полезная информация</div>
                <div class="responsive col-md-12">
                    @foreach($usefulInformation as $info)
                        <article class="col-md-12 block_main__item" style="margin-top:20px">
                            <div class="content-block__img">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/useful-information/{{$info->slug}}"><img src="/storage/{{$info->image}}" alt=""></a>
                            </div>
                            <div class="content-block__title">
                                <a href="{{Illuminate\Support\Str::lower($content->name)}}/useful-information/{{$info->slug}}">{{$info->name}}</a>
                            </div>
                        </article> 
                    @endforeach
                </div>
                <a href="{{ route('city.category', ['city'=> Illuminate\Support\Str::lower($content->name),'category'=>'useful-information']) }}" style="margin: auto; margin-top: 20px;" class="btn btn-primary">Показать еще</a>
            </div>
        </div>
 
    </div>

    @include('/components/footer')

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.responsive').slick({
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
            });
            $('.selector').slick({
                nextArrow: '<i class="fa fa-arrow-right"></i>',
                prevArrow: '<i class="fa fa-arrow-left"></i>',
                // add the rest of your options here
            });
    </script>
</body>
</html>