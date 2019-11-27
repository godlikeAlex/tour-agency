<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
      @include('/components/head-settings')

      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/lightgallery.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/css/swiper.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">

        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="/images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/util.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/main-menu.css" >
    <link rel="stylesheet" href="/css/main-page.css" >
    <link rel="stylesheet" type="text/css" href="/css/main.css">

<link rel="stylesheet" type="text/css" href="/css/footer.css">
<link href="/fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    @include('/components/header')
  <div class="site-section"  data-aos="fade">
    <div class="container">
      <div style="width:100%"><div class="section-name">{{ __('mainpage.gallery') }}</div></div>
      <div class="row justify-content-center">
      </div>
      <div class="row">
          @foreach($categories as $category)
            <div class="col-sm-6 col-md-4 item gallery-item-prev">
              <a href="{{route('show.galery', ['centuary' => $category->slug, 'language' => app()->getLocale()])}}">
                <div style="background: url(/storage/{{ $category->image }}); height: 100%; background-size: cover; background-position: center;" alt="IMage" class="img-fluid">
                <div style="text-align:center; font-size: 40px; margin-top: 10px; color:white; font-weight:700; z-index:99;">{{ $category->name }}</div>
              </div>
              </a>
            </div>
          @endforeach
      </div>
    </div>
  </div>
  </div>
  @include('/components/footer')
  <script src="/js/galery/jquery-3.3.1.min.js"></script>
  <script src="/js/galery/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/galery/jquery-ui.js"></script>
  <script src="/js/galery/popper.min.js"></script>
  <script src="/js/galery/bootstrap.min.js"></script>
  <script src="/js/galery/owl.carousel.min.js"></script>
  <script src="/js/galery/jquery.stellar.min.js"></script>
  <script src="/js/galery/jquery.countdown.min.js"></script>
  <script src="/js/galery/jquery.magnific-popup.min.js"></script>
  <script src="/js/galery/bootstrap-datepicker.min.js"></script>
  <script src="/js/galery/swiper.min.js"></script>
  <script src="/js/galery/aos.js"></script>

  <script src="/js/galery/picturefill.min.js"></script>
  <script src="/js/galery/lightgallery-all.min.js"></script>
  <script src="/js/galery/jquery.mousewheel.min.js"></script>

  <script src="/js/galery/main.js"></script>

  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>

  </body>
</html>
