<!doctype html>
<html lang="{{app()->getLocale()}}">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('/components/head-settings')
    <link rel="icon" href="img/favicon.png">
   <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/css/blog/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="/css/blog/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="/css/blog/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="/css/blog/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="/css/blog/liner_icon.css">
    <link rel="stylesheet" href="/css/blog/search.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="/css/blog/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="/css/blog/style.css">

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">

    <!--Footer-->
    <link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="/fonts/ionicons.css" rel="stylesheet">
</head>

<body>
   <!--::header part start::-->
    @include('components.header', ['type' => 'people'])
   <!-- Header part end-->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area all_post section_padding" style="padding-top: 25px !important;">
      <div class="container">
      <div style="background: transparent; padding-bottom: 20px; padding-top: 20px; padding-left: 0;" class="col-md-12 headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			        <div class="f2-s-1 p-r-30 m-tb-6">
                            <a href="/" class="breadcrumb-item f1-s-3 cl9">
                                {{__('menu.main')}}
                            </a>

                            <a href="{{route('index.blog', app()->getLocale())}}" class="breadcrumb-item f1-s-3 cl9">
                                {{__('menu.news')}}
                            </a>
                            <a href="{{route('people.category', ['language' => app()->getLocale(), 'category' => $people->category])}}" class="breadcrumb-item f1-s-3 cl9">
                                @if($people->category === 'drevniy-mir')
                                    {{__('menu.drevniy_mir')}}
                                @elseif($people->category === 'srednie-veka')
                                    {{__('menu.srednie-veka')}}
                                @elseif($people->category === 'novoe-vremya')
                                    {{__('menu.novoe_vremya')}}
                                @elseif($people->category === 'sovremenost')
                                    {{__('menu.sovremenost')}}
                                @endif
                            </a>
                            <span class="breadcrumb-item f1-s-3 cl9">
                                {{$people -> name}}
                            </span>
                        </div>
            </div>
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$people->name}}</h2>

                    <div style="padding-top: 25px; padding-bottom: 25px;"><img src="/storage/{{$people->image}}" alt=""></div>
                    <div class="col-md-12 main-content-text" style="margin-top:25px; margin-bottom:50px; padding-left:0">{!! $people->body !!}</div>

                    <p>
                        <img src="/images/ads.png" alt="">
                    </p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
                    <div class="sidebar_widget">
                    <div class="sidebar_tittle">
                            <h3>{{__('menu.category')}}</h3>
                        </div>
                        <div class="single_catagory_item category">
                            <ul class="list-unstyled">
                                <li style="width:100%;"><a href="{{route('people.category', ['category' => 'drevniy-mir', 'language' => app()->getLocale()])}}">{{__('menu.drevniy_mir')}}</a></li>
                                <li style="width:100%;"><a href="{{route('people.category', ['category' => 'srednie-veka', 'language' => app()->getLocale()])}}">{{__('menu.srednie_veka')}}</a></li>
                                <li style="width:100%;"><a href="{{route('people.category', ['category' => 'novoe-vremya', 'language' => app()->getLocale()])}}">{{__('menu.novoe_vremya')}}</a></li>
                                <li style="width:100%;"><a href="{{route('people.category', ['category' => 'sovremenost', 'language' => app()->getLocale()])}}">{{__('menu.sovremenost')}}</a></li>
                            </ul>
                        </div>
                        <div class="sidebar_tittle">
                            <h3>{{__('menu.last_people')}}</h3>
                        </div>
                        @foreach($lastPeople as $lp)
                        <div class="single_catagory_post post_2 single_border_bottom">
                            <div class="category_post_img" style="height: 175px;  background: url(/storage/{{$lp -> image}}); background-size: cover; background-position: center;">
                            </div>
                            <div class="post_text_1 pr_30">
                                <p>{{ Date::parse($lp->created_at)->format('j F Y г.') }}</p>
                                <a href="{{route('people.show', ['category' => $lp->category, 'slug' => $lp->slug, 'language' => app()->getLocale()])}}">
                                    <h3>{{str_limit($lp->name, $limit = 35, $end = '...')}}</h3>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

   <!-- footer part start-->
    @include('components.footer')
   <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/blog/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/blog/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/blog/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="js/blog/custom.js"></script>
</body>

</html>
