<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>World - Blog &amp; Magazine Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="/img/favicon.ico">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style-blog.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    

</head>

<body>

    <!-- Preloader End -->
    <!-- Header -->
    @include('/components/header')
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Блог</li>

                                <li class="nav-item">
                                    <a href="/blog/" class="nav-link @if($category === 'alld') active @endif">Все</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/blog/category/tourism/" class="nav-link @if($category === 'tourism') active @endif" >Туризм</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/blog/category/uzbekistan/" class="nav-link @if($category === 'uzbekistan') active @endif">Узбекистан</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/blog/category/history/" class="nav-link @if($category === 'history') active @endif">История</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/blog/category/tourists/" class="nav-link @if($category === 'tourists') active @endif">Туристы</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="tab1">
                                    <!-- Single Blog Post -->
                                    
                                    @foreach($posts as $post)
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="/storage/{{$post -> image}}" alt="">
                                        </div>
                                        <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="/blog/post/{{$post->slug}}" class="headline">
                                                    <h5>{{$post -> title}}</h5>
                                                </a>
                                                <p>{{str_limit($post->desc, $limit = 350, $end = '...')}}</p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p>{{$post -> author}} {{ $post->created_at->format('d/m/y') }}</p>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Последние посты</h5>
                            <div class="widget-content">
								@foreach($lastPosts as $lp)
								<!-- Single Blog Post -->
								<div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="/storage/{{$lp->image}}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="/blog/post/{{$lp->slug}}" class="headline">
                                            <h5 class="mb-0">{{$lp->title}}</h5>
                                        </a>
                                    </div>
                                </div>
								@endforeach
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    @include('/components/footer')
    <!-- ***** Footer Area End ***** -->

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
</body>

</html>