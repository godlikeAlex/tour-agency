<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Photon &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

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
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
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
  <div class="container-fluid" data-aos="fade" data-aos-delay="500">
    <div class="swiper-container images-carousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">20 Век</h2>
                  <a href="/galery/20" class="btn btn-outline-white py-2 px-4">Все фотографии</a>
                </div>
                <img src="https://static.kulturologia.ru/files/u19829/198295970.jpg" alt="Image">
              </div>
            </div>  
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">19 Век</h2>
                  <a href="/galery/19" class="btn btn-outline-white py-2 px-4">Все фотографии</a>
                </div>
                <img src="http://alsamarkand.com/wp-content/uploads/2017/06/132544534_6124548_ludiDrevnegoSamarkanda.jpg" alt="Image">
              </div>
            </div> 
            <div class="swiper-slide">
              <div class="image-wrap">
                <div class="image-info">
                  <h2 class="mb-3">18 Век</h2>
                  <a href="/galery/18" class="btn btn-outline-white py-2 px-4">Все фотографии</a>
                </div>
                <img src="https://nuz.uz/uploads/posts/2018-07/1531981952_renesansn2.png" alt="Image">
              </div>
            </div> 
        </div>

        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-scrollbar"></div>
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

  <!--===============================================================================================-->
<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/vendor/bootstrap/js/popper.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
    
  </body>
</html>