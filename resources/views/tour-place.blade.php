<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tour Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
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
    <!--===============================================================================================-->
	<!-- Animate.css -->
	<link rel="stylesheet" href="/css/tours/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/css/tours/icomoon.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="/css/tours/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="/css/tours/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/css/tours/owl.carousel.min.css">
	<link rel="stylesheet" href="/css/tours/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="/css/tours/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="/font/tours/flaticon/font/flaticon.css">



	<!-- Modernizr JS -->
	<script src="/js/tours/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="/css/tours/bootstrap-extend.min.css">
  <link rel="stylesheet" href="/css/tours/site.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<!-- Theme style  -->
	<link rel="stylesheet" href="/css/tours/style.css">
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="/css/card.css">    
	<link rel="stylesheet" href="/css/main-menu.css">
    <script src="https://kit.fontawesome.com/cdcf5aa2f7.js"></script>
	</head>
	<body style="padding:0;">
		
	<div class="colorlib-loader"></div>

	@include('/components/header')
		<div class="colorlib-wrap" style="background:#f1f1f1; padding-top:0">
			<div class="container">
				<div class="row">
				<div style="    padding-bottom: 20px;
    padding-top: 20px;" class="f2-s-1 p-r-30 m-tb-6">
                    <a href="/" class="breadcrumb-item f1-s-3 cl9">
                        Главная 
                    </a>

                    <a href="/tours" class="breadcrumb-item f1-s-3 cl9">
                        Туры 
                    </a>
                    <a href="{{route('tour.category', ['category' => $tour->category])}}" class="breadcrumb-item f1-s-3 cl9">
                            @if($tour->category === 'history_tours')
								Бизнес туры
                            @elseif($tour->category === 'short_tours')
								Короткие туры
                            @elseif($tour->category === 'group_tours')
								Групповые туры
                            @elseif($tour->category === 'individual_tours')
								Индивидуальные туры
                            @elseif($tour->category === 'exclusive_tours')
								Эксклюзивные туры
                            @elseif($tour->category === 'classic_tours')
								Классические туры
                            @elseif($tour->category === 'eco_tours')
								Эко туры
							@elseif($tour->category === 'kombo_asia_tours')
								Комбинированные туры по Центральной Азии
							@elseif($tour->category === 'kombo_uz_kz_tours')
								Комбинированные туры по Узбекистану и Казахстану
							@elseif($tour->category === 'kombo_uz_kg_tours')
								Комбинированные туры по Узбекистану и Кыргызстану
							@elseif($tour->category === 'kombo_uz_tm_tours')
								Комбинированные туры по Узбекистану и Туркменистану
							@elseif($tour->category === 'kombo_uz_tj_tours')
								Комбинированные туры по Узбекистану и Таджикистану
							@elseif($tour->category === 'excursion_сity')
								Экскурсии по городам
							@elseif($tour->category === 'pilgrim_tours')
								Паломнические туры
							@elseif($tour->category === 'economy_tours')
								Эконом туры
							@elseif($tour->category === 'cycling_tours')
								Велотуры туры
							@elseif($tour->category === 'buisnes_tours')
								Бизнес туры

                            @endif
                    </a>
                    <span class="breadcrumb-item f1-s-3 cl9">
                        {{$tour -> name}}
					</span>
</div>
				<div class="col-md-12" style="margin-top:0;padding-left:0;font-size:30px; font-weight:700; display:flex; justify-content: space-between;" >
									{{$tour->name}}	<!-- AddToAny BEGIN -->
					<div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="display:flex;align-items:center; justify-content: flex-end;width: 27%;">  
					<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
					<a class="a2a_button_facebook"></a>
					<a class="a2a_button_email"></a>
					<a class="a2a_button_telegram"></a>
					<a class="a2a_button_whatsapp"></a>
					</div>
					<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
							</div>
					<div class="col-md-8">
						<div class="row">
							<div style="padding-left:0;" class="col-md-12">
							<div>
								<div id="myCarousel" class="carousel slide" data-ride="carousel">

								

								<!-- Wrapper for slides -->
								<div class="carousel-inner" >
									@foreach($tour->images as $img)
										@if($loop->iteration == 1)
											<div class="item active" style="background: url(/storage/{{$img->path}}); height:420px;     height: 420px;
    background-size: cover;">
												
											</div>
										@else
											<div class="item" style="background: url(/storage/{{$img->path}}); height:420px;height: 420px; background-size: cover;">
											</div>
										@endif
									@endforeach
								</div>
							<!-- Left and right controls -->
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a>
							</div>  
							<div class="col-md-12 col-md-offset-0 heading2 animate-box" style="padding-top:20px; padding-bottom:20px; background:white;display: flex;justify-content: space-around;">
								<div class="starts-container">
								<div class="starts_block">Starts</div>
								<div class="starts_city">{{$tour->starts}}</div>
								</div>
								<div class="ends-container">
								<div class="ends_block">Ends</div>
								<div class="ends_city">{{$tour->ends}}</div>
								</div>
							</div>
							</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-12 col-md-offset-0 heading2 animate-box" style="margin-top:25px; height: 80px; background:white">
										<ul class="nav-menu-tour">
											<li><a href="#highlights">Особености</a></li>
											<li><a href="#Itinerary">Маршрут</a></li>
											<li><a href="#includes">Входит</a></li>
											<li><a href="#notincludes">Невходит</a></li>
											<li><a href="#booknow">Забанировать</a></li>
										</ul>
									</div>
							</div>

							<div class="col-md-12">			
								<div class="col-md-12 col-md-offset-0 block-item animate-box" id="highlights" style="padding:20px;margin-top:25px;padding-top:25px; padding-bottom:25px; background:white">
											<div style="display:flex;     justify-content: space-between;">
												<div>
													<h2>Особености</h2>
													<ul style="margin-top:25px;  list-style-type: none;">
														@foreach($tour->feature as $feature)
															<li style="line-height:30px; font-weight:700"><i style="padding-right: 10px; color:green;" class="fas fa-check"></i> {{$feature->title}}</li>
														@endforeach
													</ul>
												</div>
												<div style="width:286px; height:190px; background:#7e2dff;">
													<img src="/storage/{{$tour->map}}" alt="">
												</div>
											</div>

											<div class="info-tour">
												<div class="dd_block">
													<span class="info-people">Age range</span>
													<span style="width:17%;">{{$tour->age_from}}  {{$tour->age_to}}</span>
												</div>
												<div class="dd_block">
													<span class="info-people">Physical rating</span>
													<span style="width:17%;">{{$tour->physical_rating}}</span>
												</div>
											</div>
											<div style="margin-top:20px; line-height:20px;">
												{!! $tour->about !!}
											</div>
										</div>	
								</div>
							<div class="col-md-12">
								<div class="block-item">
								<div id="Itinerary" style="display:flex; justify-content: space-between; align-items:center">
												<h2>Маршрут </h2>
												<a href="{{$tour->pdf}}" class="btn btn-primary">Download PDF Brochure</a>
											</div>
											<!-- Example Continuous Accordion -->
											<div class="examle-wrap">
											<div class="example">
												<div class="panel-group panel-group-continuous" id="marshrut" aria-multiselectable="true" role="tablist">
													@foreach($tour->tourDatesAbout as $adate)
													<div class="panel" style="margin-top:0px">
														<div class="panel-heading" id="exampleHeadingContinuousOne" role="tab">
														<a class="panel-title" data-parent="#marshrut" data-toggle="collapse"
														href="#marshrut{{$loop->iteration}}" aria-controls="exampleCollapseContinuousOne"
														aria-expanded="false">
														<i class="fas fa-map-marker-alt" style="padding-right:15px; font-size:25px;"></i>{{$adate->day_title}}
														 
														</a>
														</div>
														<div class="panel-collapse collapse" id="marshrut{{$loop->iteration}}" aria-labelledby="exampleHeadingContinuousOne"
														role="tabpanel">
														<div class="panel-body">
														{!!$adate->day_desc!!}
														</div>
														</div>
													</div>
													@endforeach
												</div>
											</div>
											<!-- End Example Continuous Accordion -->
										</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="block-item">
								<div id="includes" style="display:flex; justify-content: space-between; align-items:center">
												<h2>Что входит</h2>
											</div>
											<!-- Example Continuous Accordion -->
											<div class="examle-wrap">
											<div class="example">
												
												<div class="panel-group panel-group-continuous" id="include" aria-multiselectable="true" role="tablist">
												@foreach($tour->includes as $inc)
												<div class="panel" style="margin-top:0px">
													<div class="panel-heading" id="exampleHeadingContinuousOne" role="tab">
													<a class="panel-title" data-parent="#include" data-toggle="collapse"
													href="#includes{{$loop->iteration}}" aria-controls="includes1"
													aria-expanded="false">
													<i class="far fa-check-circle" style="color:green; font-size:25px; padding-right:15px;"></i> {{$inc->include_title}}
													</a>
													</div>
													<div class="panel-collapse collapse " id="includes{{$loop->iteration}}" aria-labelledby="exampleHeadingContinuousOne"
													role="tabpanel">
													<div class="panel-body">{!!$inc->include_desc!!}</div>
													</div>
												</div>
												@endforeach
												</div>
											</div>
											<!-- End Example Continuous Accordion -->
										</div>
										<strong id="notincludes"><h2>Не входит</h2></strong>
										<!-- Example Continuous Accordion -->
										<div class="examle-wrap">
											<div class="example">
												<div class="panel-group panel-group-continuous" id="notinclude"
												aria-multiselectable="true" role="tablist">
												@foreach($tour->notIncludes as $nInc)
												<div class="panel" style="margin-top:0px">
													<div class="panel-heading" id="exampleHeadingContinuousOne" role="tab">
													<a class="panel-title" data-parent="#notinclude" data-toggle="collapse"
													href="#notinclude{{$loop->iteration}}" aria-controls="notinclude1"
													aria-expanded="false">
														<i class="far fa-times-circle" style="padding-right:15px; font-size:25px; color:red;"></i> {{$nInc->dont_include_title}}
													</a>
													</div>
													<div class="panel-collapse collapse " id="notinclude{{$loop->iteration}}" aria-labelledby="exampleHeadingContinuousOne"
													role="tabpanel">
													<div class="panel-body">{{$nInc->dont_include_desc}}</div>
													</div>
												</div>
												@endforeach
												</div>
												</div>
											</div>
											<!-- End Example Continuous Accordion -->
								</div>
							</div>

						</div>
	</div>	 

					<!-- SIDEBAR-->
					<div class="col-md-4" >
						<div class="fixed-side">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Find your hotel</h3>
								<form method="post" class="colorlib-form">
				              	<div class="row">
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <div class="form-group">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control">
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-12">
				                  <input type="submit" name="submit" id="submit" value="Find Hotel" class="btn btn-primary btn-block">
				                </div>
				              </div>
				            </form>
							</div>
						</div>
						<div class="info-tour-side">
							<div class="side_price_dates">
								<dl>
									<dt>Days</dt>
									<dd>8</dd>
								</dl>
								<dl>
									<dt>Price</dt>
									<dd style="    text-align: right;">3500$</dd>
								</dl>
							</div>
							<ul class="about_tour_info_list">
								<li><i class="fas fa-check" style="    color: green;"></i> NO BOOKING OR CREDIT CARD FEES</li>
								<li><i class="fas fa-check" style="    color: green;"></i> BEST PRICE GUARANTEE</li>
								<li><i class="fas fa-check" style="    color: green;"></i> SAVE $26 ON YOUR NEXT BOOKING</li>
								<li><i class="fas fa-check" style="    color: green;"></i> JUST PAY $99 DEPOSIT TODAY</li>
							</ul>
							<div style="display:flex; justify-content:center;">
								<a class="btn btn-info" style="    width: 38%;font-weight: 700;font-size: 18px;color: white;">Заказать</a>
							</div>
						</div>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-md-12" id="prices_dates">
									<div id="booknow" class="block-item">
									<div style="display:flex; align-items: center;
    justify-content: space-between;">
										<h2 style="margin:0">Заказать</h2>
										<div style="font-size:35px;">
											<i class="fab fa-cc-mastercard"></i>
											<i class="fab fa-cc-jcb"></i>
											<i class="fab fa-cc-amex"></i>
											<i class="fab fa-cc-paypal"></i>
											<i class="fab fa-cc-visa"></i>
										</div>
									</div>
									<h5>{{$tour->name}}</h5>
									<table class="table table-striped" style="margin-top:20px;">
										<thead>
										<tr>
											<th>Начало</th>
											<th>Конец</th>
											<th>Места</th>
											<th>Статус</th>
											<th>Цена</th>
										</tr>
										</thead>
										<tbody>
										@foreach($tour->tourDates as $tourDates)
											<tr>
												<td style="font-size:16px; font-weight:700; vertical-align: unset;">{{$tourDates->starts}}</td>
												<td style="font-size:16px; font-weight:700; vertical-align: unset;">{{$tourDates->ends}}</td>
												<td style="font-size:16px; font-weight:700; vertical-align: unset;">{{$tourDates->places}}</td>
												<td style="font-size:16px; font-weight:700; vertical-align: unset;">{{$tourDates->status}}</td>
												<td style="font-size:16px; font-weight:700; vertical-align: unset;">{{$tourDates->price}}</td>
												<td style="font-size:16px; font-weight:700; vertical-align: unset;"><button type="button" class="btn btn-info">Заказать</button></td>
											</tr>
										@endforeach
										</tbody>
									</table>
									</div>
								</div>
			</div>
			</div>
		</div>
	</div>
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/js/tours/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="/js/tours/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="/js/tours/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="/js/tours/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="/js/tours/jquery.magnific-popup.min.js"></script>
	<script src="/js/tours/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="/js/tours/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="/js/tours/jquery.stellar.min.js"></script>

	<!-- Main -->	
	<script src="/js/tours/main.js"></script>
	<script src="/js/main.js"></script>


	

	</body>
</html>

