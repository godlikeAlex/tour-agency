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
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    

</head>

<body>

    <!-- Preloader End -->
    <!-- Header -->
    @include('/components/header', ['type' => 'news'])
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">{{ __('menu.news') }}</li>

                                <li class="nav-item">
                                    <a href="/blog/" class="nav-link @if($category === 'all') active @endif">{{ __('menu.all') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('blog.category', ['category'=>'uzbekistan'])}}" class="nav-link @if($category === 'uzbekistan') active @endif">{{ __('menu.uzbekistan') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('blog.category', ['category'=>'archeology'])}}" class="nav-link @if($category === 'archeology') active @endif">{{ __('menu.archeology') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('blog.category', ['category'=>'tourism'])}}" class="nav-link @if($category === 'tourism') active @endif" >{{ __('menu.tourism') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('blog.category', ['category'=>'notes'])}}" class="nav-link @if($category === 'notes') active @endif">{{ __('menu.notes') }}</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="tab1">
                                    <!-- Single Blog Post -->
                                    
                                    @foreach($posts as $post)
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail" style="height:200px; background: url(/storage/{{$post->image}}); background-size: cover; background-position: cneter;">
                                        </div>
                                        <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="{{route('blog.show', ['category' => $post->category, 'slug' => $post->slug])}}" class="headline">
                                                    <h5>{{$post -> title}}</h5>
                                                </a>
                                                <p>{{str_limit($post->desc, $limit = 80, $end = '...')}}</p>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p>{{$post -> author}} {{ $post->created_at->format('d/m/y') }}</p>
                                                </div>
                                            </div>
                                    </div>
                                    
                                    @endforeach
                                    <div style="display:flex;justify-content: center; margin-top: 25px;">
                                        {{$posts -> links()}}
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
                            <h5 class="title">{{ __('menu.last_posts') }}</h5>
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
                                        <a href="{{route('blog.show', ['category' => $lp->category, 'slug' => $lp->slug])}}" class="headline">
                                            <h5 class="mb-0">{{str_limit($lp->title, $limit = 20, $end = '...')}}</h5>
                                        </a>
                                    </div>
                                </div>
								@endforeach
                            </div>
                        </div>
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