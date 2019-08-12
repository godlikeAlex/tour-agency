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
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style-blog.css">
   <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="///images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--==============================================/=================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.min.css">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/main-menu.css">
<!--===============================================================================================-->
    <style>
    body{
        color: #333;
    }
        ul li, ol li {
    list-style: unset;
}
    </style>
</head>

<body>
    <!-- ***** Header Area Start ***** -->
	@include('/components/header', ['type' => 'news'])
    <!-- ***** Header Area End ***** -->
    <div class="container">
		<div style="    padding-bottom: 20px; padding-top: 20px;padding-left: 0;" class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="/" class="breadcrumb-item f1-s-3 cl9">
					Главная 
				</a>

				<a href="/blog" class="breadcrumb-item f1-s-3 cl9">
					Новости 
                </a>
                
				<a href="/blog/category/{{$post->category}}" class="breadcrumb-item f1-s-3 cl9">
                    @if($post->category === 'tourism')
                        Туризм
                    @elseif($post->category === 'uzbekistan')
                        Узбекистан
                    @elseif($post->category === 'history')
                        История
                    @elseif($post->category === 'tourists')
                        Туристы
                    @endif 
                </a>
                
				<span class="breadcrumb-item f1-s-3 cl9">
					 {{$post -> title}}
				</span>
			</div>
		</div>
	</div>
    <div style="    padding-top: 0px;" class="main-content-wrapper section-padding-100">

        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-content mb-100">
                        <h1 style="    padding-bottom: 30px;
    font-size: 30px;
    font-weight: 700;">{!! $post->title !!}</h1>
                        <img src="/storage/{{$post->image}}" style="width:100%" alt="">
                        <!-- Post Content -->
                        <div style="padding: 0; box-shadow:none;" class="post-content">
							{!! $post->post !!}
                            <div class="post-meta second-part">
                                <p>{{$post -> author}} {{ $post->created_at->format('d/m/y') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area mb-100">
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
                                        <a href="{{route('blog.show', ['category' => $lp->category, 'slug' => $lp->slug])}}" class="headline">
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
                        <div class="stickyContainer" style="padding-top:25px;">
                            <img style="position: sticky;top: 17%;" src="/images/banner-02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============== Related Post ============== -->
            
            <div class="row">
                <div class="col-lg-12" style="font-size:25px; font-weight:700; padding-bottom:25px;">
                    Другие постыпше 
                </div>
                @foreach($recPosts as $rPost)
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="/storage/{{$rPost->image}}" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="/blog/category/{{$rPost -> category}}">{{$rPost -> category}}</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="/blog/post/{{$rPost->slug}}" class="headline" >
                                <h5 style="min-height:60px">{{$rPost->title}}</h5>
                            </a>
                            <p style="    min-height: 90px;">{{str_limit($rPost->desc, $limit = 100, $end = '...')}}</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a class="post-author">{{$post->author}}</a> <a class="post-date">{{ $post->created_at->format('d/m/y') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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

    <script>
        const post = document.querySelector('.post-content');
        const stickyContainer = document.querySelector('.stickyContainer');
        stickyContainer.style.height = post.offsetHeight / 100 * 80 +'px';
    </script>

</body>

</html>