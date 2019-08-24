<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Home 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">
    <!--===============================================================================================-->
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
</head>

<body>
    <!-- Header -->
    @include('/components/header')
    <div class="main-tours-slider">
        <div style="background: url(https://images.unsplash.com/photo-1540206395-68808572332f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=562&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 1</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566434109082-772727eba32f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 2</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566612088151-a477d6c17708?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 3</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 4</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
        <div style="background: url(https://images.unsplash.com/photo-1566572179133-512205811f1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80)" class="main-tous-slide">
            <div class="tours-slider__title">Tour 5</div>
            <div class="tours-slider__sub">Sub info</div>
        </div>
    </div>
    <div class="container main-content">
        <section style="overflow:hidden;margin-bottom: 50px; ">
            <div class="section-name">Узбекистан</div>
            <div class="row" >
                <div class="col-md-4">
                    <div class="big-blocks">
                        <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566572179133-512205811f1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);" ></div>
                        <div class="block-content">
                            <div class="block-title">Godlike</div>
                            <div class="block-desc">Some sub title la-la-bla</div>
                            <a class="show__more show__more-block" href="http://google.com">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="big-blocks">
                        <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566623610601-61780308981d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=80);" ></div>
                        <div class="block-content">
                            <div class="block-title">География</div>
                            <div class="block-desc">Some sub title la-la-bla</div>
                            <a class="show__more show__more-block" href="http://google.com">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="big-blocks">
                        <div class="block-img" style="background: url(https://images.unsplash.com/photo-1562023829-42be3bc1cc1b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80);" ></div>
                        <div class="block-content">
                            <div class="block-title">История</div>
                            <div class="block-desc">Some sub title la-la-bla</div>
                            <a class="show__more show__more-block">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="big-blocks">
                        <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566578068205-12544813d53c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=968&q=80);" ></div>
                        <div class="block-content">
                            <div class="block-title">Народ</div>
                            <div class="block-desc">Some sub title la-la-bla</div>
                            <a class="show__more show__more-block">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="big-blocks">
                        <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566550190057-347ce06a9006?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80);" ></div>
                        <div class="block-content">
                            <div class="block-title">Культура</div>
                            <div class="block-desc">Some sub title la-la-bla</div>
                            <a class="show__more show__more-block">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="big-blocks">
                        <div class="block-img" style="background: url(https://images.unsplash.com/photo-1566608344098-60ca17bf3d60?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1038&q=80);" ></div>
                        <div class="block-content">
                            <div class="block-title">Искуство</div>
                            <div class="block-desc">Some sub title la-la-bla</div>
                            <a class="show__more show__more-block">More</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <a style="margin:auto; margin-top: 50px;" class="show__more">Show More</a>
        </section>
        
    </div>
    <!-- Footer -->
    @include('/components/footer')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            console.log(true);
            $('.main-tours-slider').slick({
                infinite: true,
                speed: 300,
                dots: false,
                prevArrow: false,
                nextArrow: false,
                slidesToShow: 4,
                slidesToScroll: 4
            });
        });
    </script>
</body>

</html>
