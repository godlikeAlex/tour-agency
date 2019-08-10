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
              <h2 class="site-section-heading text-center">Галлерея</h2>
            </div>
          </div>
        </div>
    
      </div>
      <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3 item">
            <a href="{{route('show.galery', ['centuary' => '20'])}}">
              <div style="background: url(https://static.kulturologia.ru/files/u19829/198295970.jpg); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;">20 Век</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 item">
            <a href="{{route('show.galery', ['centuary' => '19'])}}">
            <div style="background: url(https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRDWmpb8EkV3-NiMk0bTe_4w); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;">19 Век</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 item">
            <a href="{{route('show.galery', ['centuary' => '18'])}}">
            <div style="background: url(http://alsamarkand.com/wp-content/uploads/2017/06/132544534_6124548_ludiDrevnegoSamarkanda.jpg); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;">18 Век</div>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 item">
           <a href="{{route('show.galery', ['centuary' => '17'])}}">
            <div style="background: url(https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png); height: 250px; background-size: cover; background-position: center;" alt="IMage" class="img-fluid"></div>
              <div style="text-align:center; font-size: 20px; margin-top: 10px; color:black; font-weight:700;">17 Век</div>
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