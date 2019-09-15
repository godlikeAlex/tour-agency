<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Home 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">

    <!--Footer-->
    
    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->
    
    <style>

    .slide-arrow{
        position: absolute;
        top: 50%;
        transform: translate(0%, -50%);
        border: none;
        width: 52px;
        height: 52px;
        color: white;
        background: #4c4c4c82;
    }

    .next-arrow {
        right: 0;
    }

    .prev-arrow {
        left: 0%;
        z-index: 9999;        
    }
    </style>
</head>

<body>
    <!-- Header -->
    @include('/components/header')

    <div class="container" style="padding-top: 50px; padding-bottom: 50px;">
        <h1>Central Asia - О агенстве</h1>
        <p style="padding-top: 15px;">Туристическое агентство Advantour представлено на рынке международного туризма с 2003 года. За прошедшее время агентством разработан и успешно реализуется целый ряд увлекательных групповых и индивидуальных туров в Узбекистан, Киргизию, Туркменистан, Таджикистан, Казахстан, Грузию, Азербайджан, Армению и Китай. Компанией приобретён большой опыт работы в индустрии туризма, установлены проверенные временем партнерские связи с целым рядом туроператоров в странах Закавказья, Западной Европы и Северной Америки.</p>
        <p style="padding-top: 15px;">Три офиса Advantour – в Ташкенте (Узбекистан), в Бишкеке (Кыргызстан) и Тбилиси (Грузия) предоставляют услуги по бронированию гостиниц,  а также организовывают туры по странам Великого Шелкового Пути. Команда профессионалов компании также занимается организацией и сервисом бизнес-поездок в странах Великого Шелкового пути и разрабатывает эксклюзивные туры по заказу клиента.</p>
        <p style="padding-top: 15px;">Цель туристического агентства Advantour – создание комфортных условий для уникального, интересного и продуманного до мелочей путешествия, чтобы ничто не мешало вам наслаждаться отдыхом и яркими впечатлениями в гостеприимной Центральной Азии и многогранном Кавказе.</p>
    </div>
    <!-- Footer -->
    @include('/components/footer')
</body>

</html>
