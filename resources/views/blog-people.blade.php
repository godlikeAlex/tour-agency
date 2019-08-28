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

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="fonts/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main-menu.css">
    

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- Header -->
    @include('/components/header', ['type' => 'people'])
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">{{ __('menu.peoples') }}</li>

                                <li class="nav-item">
                                    <a href="/blog/" class="nav-link @if($category === 'all') active @endif">{{ __('menu.all') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/people/category/drevniy-mir" class="nav-link @if($category === 'drevniy-mir') active @endif" >{{ __('menu.drevniy_mir') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/people/category/srednie-veka" class="nav-link @if($category === 'srednie-veka') active @endif">{{ __('menu.srednie_veka') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a href="/people/category/novoe-vremya" class="nav-link @if($category === 'novoe-vremya') active @endif">{{ __('menu.novoe_vremya') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/people/category/sovremenost" class="nav-link @if($category === 'sovremenost') active @endif">{{ __('menu.sovremenost') }}</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="tab1">
                                    <!-- Single Blog Post -->
                                    
                                    @foreach($people as $pb)
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="/storage/{{$pb -> image}}" alt="">
                                        </div>
                                        <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="{{route('people.show', ['categoy' => $pb->category, 'slug' => $pb->slug])}}" class="headline">
                                                    <h5>{{$pb -> name}}</h5>
                                                </a>
                                                <p>{{str_limit($pb->desc, $limit = 350, $end = '...')}}</p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p>{{ $pb->created_at->format('d/m/y') }}</p>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    @endforeach
                                    <div style="display:flex;justify-content: center; margin-top: 25px;">
                                        {{$people -> links()}}
                                    </div>
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
                            <h5 class="title">{{ __('menu.last_people') }}</h5>
                            <div class="widget-content">
								@foreach($lastPeople as $lp)
								<!-- Single Blog Post -->
								<div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img style="height:60px" src="/storage/{{$lp->image}}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="{{route('people.show', ['categoy' => $lp->category, 'slug' => $lp->slug])}}" class="headline">
                                            <h5 class="mb-0">{{$lp->name}}</h5>
                                        </a>
                                    </div>
                                </div>
								@endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More btn -->
			{{ $people->links() }}
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