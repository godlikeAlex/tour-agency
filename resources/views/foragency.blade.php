<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('components/head-settings')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/common-offers.css">
    <link rel="stylesheet" type="text/css" href="/css/desktop-offers.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">

    <!--Footer-->

    <link rel="stylesheet" type="text/css" href="/css/footer.css">

    <link href="/fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->

    <style>
        p {
            margin-bottom: 15px;
        }

    </style>
</head>

<body>
    <!-- Header -->
    @include('/components/header')
    <section class="second-sec" style="padding-top: 75px !important">
        <div class="container">
            <div class="section-name">{{__('menu.foragency')}}</div>
            <p style="margin-top: 75px;">Данное предложение франчайзинга рассчитано на турфирмы "второго и первого эшелона", стремящиеся занять лидирующие позиции на рынке туристических услуг своего региона. Компании, стремящиеся к разовой выгоде, имеющие запятнанную репутацию и т.д. - просьба не тратить наше общее время и время наших партнёров.</p>
            <p>Наша Компания приглашает турфирмы из Вашего города для выгодного и перспективного сотрудничества в рамках проекта "Франчайзинг: Сеть турагентств", которая объединяет ряд независимых компаний в разных городах Украины.</p>
            <p>Наша партнёрская программа прекрасно подходит как для тех, кто желает ознакомиться с рынком туристического бизнеса и решить, насколько выгодно наше франчайзинговое предложение, так и для турагентств со стажем, желающих укрепить свои позиции и охватить весь спектр информационного привлечения туристов</p>
            <p><b>Важно</b></p>
            <p>Туристы покупают не товар и не услугу - они покупают Бренд, свою привязанность и свои ожидания от этого товара или услуги (например, стоимость Макдоналдса, Кока-Колы, Майкрософта на 90% состоит из бренда). Бренды всегда побеждают на рынке и что бы ни делали небрендовые турфирмы, они своими действиями всегда будут подкармливать бренды. Даже если у Вас есть уникальная ниша и свой круг потребителей, но нет бренда - рано или поздно появятся конкуренты. Можно потерять деньги, кадры, недвижимость - бренд потерять нельзя, потому что он находится в умах потребителей</p>
            <p>Наша партнёрская программа — это Ваша возможность закрепить свои позиции и расширить сферу своего влияния на рынке туристических услуг вашего города</p>
            <p>** А самое главное - от Вашей турфирмы не требуется никаких дополнительных финансовых вложений, наоборот - в рамках нашей Партнёрской программы, для турагентства со стажем, существует Уникальное предложение - возможность самим получать роялти - % от продаж других турфирм!!! Заманчиво, не правда ли ?!</p>
        </div>
    </section>
    <!-- Footer -->
    @include('/components/footer')
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.main-tours-slider').slick({
                infinite: true,
                speed: 300,
                dots: false,
                prevArrow: '<button class="slide-arrow prev-arrow prev-arrow-big"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow next-arrow-big"><i class="fas fa-chevron-right"></i></button>',
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.cities-slider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4,
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });

            $('.bazar').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
            });

        });

    </script>
</body>

</html>
