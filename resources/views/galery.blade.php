<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Photon &mdash; Colorlib Website Template</title>
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
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">{{ __('mainpage.gallery') }}</h2>
            </div>
          </div>
        </div>
    
      </div>
      <div class="row">
          <div class="col-sm-6 col-md-4 item">
            <a href="{{route('show.galery', ['centuary' => 'khiva-khanate'])}}">
              <div style="background: url(https://static.kulturologia.ru/files/u19829/198295970.jpg); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;">{{ __('menu.khiva-khanate') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
            <a href="{{route('show.galery', ['centuary' => 'kokand-khanate'])}}">
            <div style="background: url(https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRDWmpb8EkV3-NiMk0bTe_4w); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;">{{ __('menu.kokand-khanate') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
            <a href="{{route('show.galery', ['centuary' => 'bukhara-emirate'])}}">
            <div style="background: url(http://alsamarkand.com/wp-content/uploads/20/06/132544534_6124548_ludiDrevnegoSamarkanda.jpg); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;">{{ __('menu.bukhara-emirate') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
           <a href="{{route('show.galery', ['centuary' => 'turkestan-assr'])}}">
            <div style="background: url(https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;"> {{ __('menu.turkestan-assr') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
           <a href="{{route('show.galery', ['centuary' => 'jadidism'])}}">
            <div style="background: url(https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;"> {{ __('menu.turkestan-assr') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
           <a href="{{route('show.galery', ['centuary' => 'stalin-period'])}}">
            <div style="background: url(https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;"> {{ __('menu.stalin-period') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
           <a href="{{route('show.galery', ['centuary' => 'khrushchevsky-period'])}}">
            <div style="background: url(https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;"> {{ __('menu.khrushchevsky-period') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
           <a href="{{route('show.galery', ['centuary' => 'brezhnevsky-period'])}}">
            <div style="background: url(https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;"> {{ __('menu.brezhnevsky-period') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
           <a href="{{route('show.galery', ['centuary' => 'restructuring'])}}">
            <div style="background: url(https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;"> {{ __('menu.restructuring') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
           <a href="{{route('show.galery', ['centuary' => 'republic-of-uzbekistan'])}}">
            <div style="background: url(https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;"> {{ __('menu.republic-of-uzbekistan') }}</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 item">
           <a href="{{route('show.galery', ['centuary' => 'present'])}}">
            <div style="background: url(https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;"> {{ __('menu.present') }}</div>
            </a>
          </div>
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