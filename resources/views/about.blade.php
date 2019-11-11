<!DOCTYPE html>
<html>
<head>
    @include('/components/head-settings')
    <!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- STYLES -->
	<link rel="stylesheet" href="/css/about/bootstrap.min.css">
	<link rel="stylesheet" href="/css/about/ionicons.min.css">
	<link rel="stylesheet" href="/css/about/animsition.min.css">
	<link rel="stylesheet" href="/css/about/animate.css">
    <link rel="stylesheet" href="/css/about/style.css">

        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="/css/main-menu.css">
<link rel="stylesheet" type="text/css" href="/css/main-page.css">

<!--Footer-->

<link rel="stylesheet" type="text/css" href="/css/footer.css">
<link href="/fonts/ionicons.css" rel="stylesheet">
</head>
<body class="animsition" style="background: white;">
        @include('components.header')
	<section style="padding: 0; margin: 0;">
		<div class="container">
            <div class="section-name">{{__('menu.about')}}</div>
            <div class="row" style="padding-top: 100px;">
                <div class="col-md-6">
					<div class="section-title" style="text-align:left;float:left;width:100%;margin-bottom:0">
						<span>about us</span>
						<p class="montserrat-text uppercase">we are awesome</p>
					</div>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-md-6">
					<div class="section-title" style="text-align:left;float:left;width:100%;margin-bottom:0">
						<span>what we do</span>
						<p class="montserrat-text uppercase">creative &amp; digital</p>
					</div>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</section>


	<section>
		<div class="container">
			<div class="row">
				<div class="section-title">
					<span>some benefits</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 benefits_2_single wow fadeInUp">
					<i class="icon ion-iphone"></i>
					<span class="title montserrat-text uppercase">fully responsive</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation. </p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 benefits_2_single wow fadeInUp" data-wow-delay=".1s">
					<i class="icon ion-ios-infinite-outline"></i>
					<span class="title montserrat-text uppercase">unlimited options</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation. </p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 benefits_2_single wow fadeInUp" data-wow-delay=".2s">
					<i class="icon ion-social-wordpress-outline"></i>
					<span class="title montserrat-text uppercase">wordpress</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation. </p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 benefits_2_single wow fadeInUp" data-wow-delay=".3s">
					<i class="icon ion-ios-cart-outline"></i>
					<span class="title montserrat-text uppercase">e-commerce</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation. </p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 benefits_2_single wow fadeInUp" data-wow-delay=".4s">
					<i class="icon ion-ios-settings"></i>
					<span class="title montserrat-text uppercase">customizable design</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation. </p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 benefits_2_single wow fadeInUp" data-wow-delay=".5s">
					<i class="icon ion-settings"></i>
					<span class="title montserrat-text uppercase">support</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation. </p>
				</div>
			</div>
		</div>
    </section>
    @include('components.footer')
	<!-- SCRIPTS -->
	<script type="text/javascript" src="/js/about/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/js/about/smoothScroll.js"></script>
	<script type="text/javascript" src="/js/about/jquery.flexslider.js"></script>
	<script type="text/javascript" src="/js/about/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="/js/about/wow.min.js"></script>
	<script type="text/javascript" src="/js/about/main.js"></script>
	<script type="text/javascript">
	$(window).load(function(){
		new WOW().init();
		$(".testimonials").flexslider({
			directionNav : false,
			controlNav : false,
			smoothHeight : true,
		});
	});
	</script>
</body>
</html>
