<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <div class="container">
        <div class="col-md-10" style="padding:0;">
            <div class="row">
                @if($items[0]->category_price)
                    <div class="col-md-12 sub-category" style="font-size:25px; margin-top:50px; margin-bottom:20px;">Дешевый</div>
                    @foreach($items as $item)
                        @if($item->category_price === 'cheap')
                        <article class="col-md-4 block_main__item">
                            <div class="content-block__img"><img src="/storage/{{$item->image}}" alt=""></div>
                            <div class="content-block__category">
                                @if($item->category_price === 'cheap')
                                    Дешевый
                                @elseif($item->category_price === 'middle')
                                    Средний
                                @elseif($item->category_price === 'expensive')
                                    Элитный
                                @endif
                            </div>
                            <div class="content-block__title"><a  href="{{Request::url()}}/{{$item->slug}}">{{$item->name}}</a></div>
                        </article>
                        @endif
                    @endforeach
                    <div class="col-md-12 sub-category" style="font-size:25px; margin-top:50px; margin-bottom:20px;">Средний</div>
                    @foreach($items as $item)
                        @if($item->category_price === 'middle')
                        <article class="col-md-4 block_main__item">
                            <div class="content-block__img"><img src="/storage/{{$item->image}}" alt=""></div>
                            <div class="content-block__category">
                                @if($item->category_price === 'cheap')
                                    Дешевый
                                @elseif($item->category_price === 'middle')
                                    Средний
                                @elseif($item->category_price === 'expensive')
                                    Элитный
                                @endif
                            </div>
                            <div class="content-block__title"><a  href="{{Request::url()}}/{{$item->slug}}">{{$item->name}}</a></div>
                        </article>
                        @endif
                    @endforeach
                    <div class="col-md-12 sub-category" style="font-size:25px; margin-top:50px; margin-bottom:20px;">Дорогой</div>
                    @foreach($items as $item)
                        @if($item->category_price === 'expensive')
                        <article class="col-md-4 block_main__item">
                            <div class="content-block__img"><img src="/storage/{{$item->image}}" alt=""></div>
                            <div class="content-block__category">
                                @if($item->category_price === 'cheap')
                                    Дешевый
                                @elseif($item->category_price === 'middle')
                                    Средний
                                @elseif($item->category_price === 'expensive')
                                    Элитный
                                @endif
                            </div>
                            <div class="content-block__title"><a  href="{{Request::url()}}/{{$item->slug}}">{{$item->name}}</a></div>
                        </article>
                        @endif
                    @endforeach
                @else
                    @foreach($items as $item)
                        <article class="col-md-4 block_main__item">
                            <div class="content-block__img"><img src="/storage/{{$item->image}}" alt=""></div>
                            <div class="content-block__title"><a  href="{{Request::url()}}/{{$item->slug}}">{{$item->name}}</a></div>
                        </article>
                    @endforeach
                @endif
            </div>
        </div>
    
        {{$items->links()}}
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
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $('.responsive').slick({
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
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