<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('components/head-settings')

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/assets/plugins/css/plugins.css">

    <!-- Custom style -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/responsiveness.css" rel="stylesheet">
    <link id="jssDefault" rel="stylesheet" href="/assets/css/skins/default.css">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/css/main-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/main-page.css">

    <!--Footer-->

    <link rel="stylesheet" type="text/css" href="/css/footer.css">
    <link href="/fonts/ionicons.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
</head>

<body>

    <!-- ======================= Start Navigation ===================== -->
    @include('components.header')
    <!-- ======================= End Navigation ===================== -->

    <!-- ======================= Start Banner ===================== -->
    <section class="page-title-banner"
        style="height: 65vh; background-image:url(/storage/{{$tour->image}}); background-position: center; background-size: cover;">

    </section>
    <!-- ======================= End Banner ===================== -->



    <!-- ============== Tour Detail ====================== -->

    <section class="tr-single-detail gray-bg" style="padding-top: 30px !important;">
        <div class="container">

            <div class="row">
                <div class="col-md-12" style="padding: 0">
                    <div style="background: transparent" class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
                        <div class="f2-s-1 p-r-30 m-tb-6">
                            <a href="/" class="breadcrumb-item f1-s-3 cl9">
                                {{__('menu.main')}}
                            </a>

                            <a href="{{route('index.uzbekistan', app()->getLocale())}}"
                                class="breadcrumb-item f1-s-3 cl9">
                                {{__('menu.tours')}}
                            </a>
                            <span class="breadcrumb-item f1-s-3 cl9">
                                {{$tour -> name}}
                            </span>
                        </div>
                    </div>
                </div>

                <div style="padding-left: 0px; margin-top: 0px; display: flex; align-items: center; justify-content: space-between;  flex-wrap: wrap; padding-top: 30px; padding-bottom: 30px; font-size: 32px; font-weight: 700;"
                    class="col-md-12 title-item">{{$tour->name}}
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style"
                        style="display:flex;align-items:center; justify-content: flex-end;width: 27%;">
                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_email"></a>
                        <a class="a2a_button_telegram"></a>
                        <a class="a2a_button_whatsapp"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                </div>

                <div class="col-md-8 col-sm-12" id="content">
                    <div class="tab-content tabs">

                        <div role="tabpanel" class="tab-pane fade in active" id="Overview">

                            <!-- Overview -->
                            <div class="row">
                                <div class="tr-single-box" style="width: 100%;">
                                    <div class="tr-single-header">
                                        <h4><i class="fa fa-fw fa-info"></i>Overview</h4>
                                    </div>
                                    <div class="tr-single-body" style="width: 100%;">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-6"
                                                style="text-align: center; font-size: 14px; font-weight: 700;     padding-top: 25px;">
                                                <i class="fa fa-fw fa-map-signs"
                                                    style="font-size: 30px;color: #050658;"></i>
                                                <div>{{$tour->starts}} - {{$tour->ends}}</div>
                                            </div>
                                            <div class="col-md-3 col-sm-6"
                                                style="text-align: center; font-size: 14px; font-weight: 700;     padding-top: 25px;">
                                                <i class="fa fa-fw fa-clock-o"
                                                    style="font-size: 30px;color: #050658;"></i>
                                                <div>{{$tour->days}} {{__('menu.days')}}</div>
                                            </div>
                                            <div class="col-md-3 col-sm-6"
                                                style="text-align: center; font-size: 14px; font-weight: 700;     padding-top: 25px;">
                                                <i class="fa fa-fw fa-money"
                                                    style="font-size: 30px;color: #050658;"></i>
                                                <div>{{__('menu.from')}} {{$tour->price}}$</div>
                                            </div>
                                            <div class="col-md-3 col-sm-6"
                                                style="text-align: center; font-size: 14px; font-weight: 700;     padding-top: 25px;">
                                                <i class="fa fa-fw fa-smile-o"
                                                    style="font-size: 30px;color: #050658;"></i>
                                                <div>{{__('menu.best_service')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="row">
                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-files"></i>{{__('menu.desc')}}</h4>
                                    </div>
                                    <div class="tr-single-body">
                                        {!!$tour->about!!}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="tr-single-box col-md-12">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-files"></i>{{__('menu.program_tour')}}</h4>
                                    </div>

                                    <div class="tr-single-body">
                                        <div class="row" style="padding-top: 15px">
                                            <a href="{{$tour->pdf}}" target="_blank"
                                                class="btn theme-btn full-width">{{__('menu.pdf_download')}}</a>

                                            <div style="margin-top: 30px; width: 100%;">
                                                <div role="tabpanel" class="tab-pane fade in active">
                                                    <div class="simple-accordion">
                                                        <div class="panel-group" id="accordion" role="tablist"
                                                            aria-multiselectable="true">
                                                            @foreach($tour->tourDatesAbout as $adate)
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab"
                                                                    id="title{{$loop->iteration}}">
                                                                    <h4 class="panel-title">
                                                                        <a class="collapsed" role="button"
                                                                            data-toggle="collapse"
                                                                            data-parent="#accordion"
                                                                            href="#col{{$loop->iteration}}"
                                                                            aria-expanded="false"
                                                                            aria-controls="col{{$loop->iteration}}">
                                                                            {{$adate->day_title}}
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="col{{$loop->iteration}}"
                                                                    class="panel-collapse collapse" role="tabpanel"
                                                                    aria-labelledby="title{{$loop->iteration}}">
                                                                    <div class="panel-body">
                                                                        {!!$adate->day_desc!!}</div>
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
                            </div>

                            <div class="row">
                                <div class="tr-single-box col-md-12">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-comment"></i>{{__('menu.video_reviews')}}</h4>
                                    </div>
                                    <div class="tr-single-body">
                                        <div class="col-md-12"><iframe width="100%" height="450"
                                                src="https://www.youtube.com/embed/{{$tour->video}}" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe></div>
                                    </div>
                                </div>
                            </div>



                            <!-- Amenities -->
                            <div class="row">
                                <div class="tr-single-box col-md-12">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-crown"></i>{{__('menu.details')}}</h4>
                                    </div>
                                    <div class="tr-single-body" style="width: 100%;">
                                        <div role="tabpanel" class="tab-pane fade in active">
                                            <div class="simple-accordion">
                                                <div class="panel-group" id="accordion" role="tablist"
                                                    aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="includetitle">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse"
                                                                    data-parent="#accordion" href="#include"
                                                                    aria-expanded="false" aria-controls="include">
                                                                    {{__('menu.include')}}
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="include" class="panel-collapse collapse"
                                                            role="tabpanel" aria-labelledby="includetitle">
                                                            <div class="panel-body">
                                                                @foreach($tour->includes as $inc)
                                                                <div><span style="color: green" class="ti-check"></span>
                                                                    {{$inc->include_title}}</div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="notincludetitle">
                                                            <h4 class="panel-title">
                                                                <a class="collapsed" role="button"
                                                                    data-toggle="collapse" data-parent="#accordion"
                                                                    href="#notinclude" aria-expanded="false"
                                                                    aria-controls="notinclude">
                                                                    {{__('menu.notinclude')}}
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="notinclude" class="panel-collapse collapse"
                                                            role="tabpanel" aria-labelledby="notincludetitle">
                                                            <div class="panel-body">
                                                                @foreach($tour->notIncludes as $inc)
                                                                <div><span style="color: red" class="ti-close"></span>
                                                                    {{$inc->dont_include_title}}</div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Location -->
                            <div class="row">
                                <div class="tr-single-box" style="width: 100%;">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-map-alt"></i>Location</h4>
                                    </div>
                                    <div class="tr-single-body">
                                        <iframe src="{{$tour->map}}" width="100%" height="480"></iframe>
                                    </div>
                                </div>
                            </div>

                            <!-- Gallery -->
                            <!-- ============ Photos =================== -->
                            <div class="row">
                                <div class="tr-single-box" style="width: 100%;">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-gallery"></i>{{__('menu.galery')}}</h4>
                                    </div>
                                    <div class="tr-single-body">
                                        <ul class="gallery-list container">
                                            @foreach($tour->images as $img)
                                            <li class="col-md-4 col-sm-12">
                                                <a style="width: 100%;" data-fancybox="gallery"
                                                    href="/storage/{{$img->path}}">
                                                    <div
                                                        style="width: 100%; height: 200px; background: url(/storage/{{$img->path}}); background-position: center; background-size: cover;">
                                                    </div>
                                                </a>
                                                <div style="text-align: center;">{{$img['galery_title']}}</div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- ============ Features =================== -->
                        <div role="tabpanel" class="tab-pane fade in" id="Features">

                            <!-- About Features -->
                            <div class="row">
                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-files"></i>About Features</h4>
                                    </div>
                                    <div class="tr-single-body">
                                        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                            cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                                            maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor
                                            repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum
                                            necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae
                                            non recusandae.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Extra features -->
                            <div class="row">
                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-thumb-up"></i>Extra Features</h4>
                                    </div>
                                    <div class="tr-single-body">

                                        <ul class="simple-features-list">
                                            <li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                                nesciunt.</li>
                                            <li>Minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                                laboriosam.</li>
                                            <li>But I must explain to you how all this mistaken idea of denouncing
                                                pleasure and praising pain.</li>
                                            <li>Pain can procure him some great pleasure. To take a trivial example,
                                                which of us ever undertakes.</li>
                                            <li>Sed quia consequuntur magni dolores eos qui ratione voluptatem sequi
                                                nesciunt.</li>
                                            <li>Minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                                laboriosam.</li>
                                            <li>But I must explain to you how all this mistaken idea of denouncing
                                                pleasure and praising pain.</li>
                                            <li>Pain can procure him some great pleasure. To take a trivial example,
                                                which of us ever undertakes.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- ============ Review =================== -->
                        <div role="tabpanel" class="tab-pane fade in" id="Review">

                            <!-- Review -->
                            <div class="row">
                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-write"></i>All Review</h4>
                                    </div>
                                    <div class="tr-single-body">

                                        <!-- Single Review -->
                                        <div class="review-box">
                                            <div class="review-thumb">
                                                <img src="/assets/img/user-1.jpg" class="img-responsive img-circle"
                                                    alt="">
                                            </div>

                                            <div class="review-box-content">
                                                <div class="reviewer-rate">
                                                    <p><i class="fa fa-star cl-warning"></i>4.7/<span>5</span></p>
                                                </div>
                                                <div class="review-user-info">
                                                    <h4>Daniel Dicoss</h4>
                                                    <p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
                                                        Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
                                                        Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
                                                </div>
                                                <div class="review-lc text-right">
                                                    <a href="#"><i class="ti-heart"></i>87</a>
                                                    <a href="#"><i class="ti-comment"></i>52</a>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Single Review -->
                                        <div class="review-box">
                                            <div class="review-thumb">
                                                <img src="/assets/img/user-2.jpg" class="img-responsive img-circle"
                                                    alt="">
                                            </div>

                                            <div class="review-box-content">
                                                <div class="reviewer-rate">
                                                    <p><i class="fa fa-star cl-warning"></i>4.4/<span>5</span></p>
                                                </div>
                                                <div class="review-user-info">
                                                    <h4>Archita Singh</h4>
                                                    <p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
                                                        Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
                                                        Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
                                                </div>
                                                <div class="review-lc text-right">
                                                    <a href="#"><i class="ti-heart"></i>65</a>
                                                    <a href="#"><i class="ti-comment"></i>78</a>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Single Review -->
                                        <div class="review-box">
                                            <div class="review-thumb">
                                                <img src="/assets/img/user-3.jpg" class="img-responsive img-circle"
                                                    alt="">
                                            </div>

                                            <div class="review-box-content">
                                                <div class="reviewer-rate">
                                                    <p><i class="fa fa-star cl-warning"></i>5.0/<span>5</span></p>
                                                </div>
                                                <div class="review-user-info">
                                                    <h4>Devesh Patri</h4>
                                                    <p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
                                                        Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
                                                        Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
                                                </div>
                                                <div class="review-lc text-right">
                                                    <a href="#"><i class="ti-heart"></i>110</a>
                                                    <a href="#"><i class="ti-comment"></i>47</a>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Single Review -->
                                        <div class="review-box">
                                            <div class="review-thumb">
                                                <img src="/assets/img/user-4.jpg" class="img-responsive img-circle"
                                                    alt="">
                                            </div>

                                            <div class="review-box-content">
                                                <div class="reviewer-rate">
                                                    <p><i class="fa fa-star cl-warning"></i>4.9/<span>5</span></p>
                                                </div>
                                                <div class="review-user-info">
                                                    <h4>Ruchi Sethi</h4>
                                                    <p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
                                                        Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
                                                        Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
                                                </div>
                                                <div class="review-lc text-right">
                                                    <a href="#"><i class="ti-heart"></i>120</a>
                                                    <a href="#"><i class="ti-comment"></i>36</a>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Single Review -->
                                        <div class="review-box">
                                            <div class="review-thumb">
                                                <img src="/assets/img/user-5.jpg" class="img-responsive img-circle"
                                                    alt="">
                                            </div>

                                            <div class="review-box-content">
                                                <div class="reviewer-rate">
                                                    <p><i class="fa fa-star cl-warning"></i>4.8/<span>5</span></p>
                                                </div>
                                                <div class="review-user-info">
                                                    <h4>Duke Divalkis</h4>
                                                    <p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
                                                        Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
                                                        Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
                                                </div>
                                                <div class="review-lc text-right">
                                                    <a href="#"><i class="ti-heart"></i>80</a>
                                                    <a href="#"><i class="ti-comment"></i>70</a>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Single Review -->
                                        <div class="review-box">
                                            <div class="review-thumb">
                                                <img src="/assets/img/user-6.jpg" class="img-responsive img-circle"
                                                    alt="">
                                            </div>

                                            <div class="review-box-content">
                                                <div class="reviewer-rate">
                                                    <p><i class="fa fa-star cl-warning"></i>4.7/<span>5</span></p>
                                                </div>
                                                <div class="review-user-info">
                                                    <h4>Shilka Rai</h4>
                                                    <p>Et Harum Quidem Rerum Facilis Est Et Expedita Distinctio. Nam
                                                        Libero Tempore, Cum Soluta Nobis Est Eligendi Optio Cumque Nihil
                                                        Impedit Quo Minus Id Quod Maxime Placeat Facere Possimus</p>
                                                </div>
                                                <div class="review-lc text-right">
                                                    <a href="#"><i class="ti-heart"></i>120</a>
                                                    <a href="#"><i class="ti-comment"></i>140</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>
                </div>

                <!-- Sidebar Start -->
                <div class="col-md-4 col-sm-12">
                    <!-- overview & booking Form -->
                    <div class="tr-single-box sticky-top" style="top: 9%;">
                        <div class="tr-single-header"
                            style="    border-radius: 5px 5px 0px 0px; background: #050658; color: white; text-align: center; font-weight: 700; font-size: 20px;">
                            <div class="entry-meta">
                                $ {{$tour->price}}/{{__('menu.perperson')}}

                                <div class="meta-item meta-author">
                                    <div class="hotel-review entry-location">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tr-single-body">
                            <form class="book-form" id="form">
                                @csrf
                                <input type="hidden" name="tour_name" class="form-control" value="{{$tour->name}}">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control"
                                        placeholder="{{__('menu.your_name')}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="surname" class="form-control"
                                        placeholder="{{__('menu.your_surname')}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="{{__('menu.your_email')}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="phone" class="form-control" name="phone"
                                        placeholder="{{__('menu.your_phone')}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="peoples" class="form-control"
                                        placeholder="{{__('menu.number_of_people')}}" required>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 mrg-top-15">
                                        <input type="submit" value="{{__('menu.boocking_now')}}"
                                            class="btn btn-arrow theme-btn full-width">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- /col-md-4 -->
            </div>

            <div class="row">
                <div class="tr-single-box" style="width: 100%;">

                    <div class="tr-single-body">
                        <div class="col-md-12" id="prices_dates">
                            <div id="booknow" class="block-item">
                                <div
                                    style="display:flex; align-items: center;justify-content: space-between;     flex-wrap: wrap;">
                                    <h2 style="margin:0" class="avalible">{{__('menu.availability')}}</h2>
                                    <div style="font-size:35px;">
                                        <i class="fab fa-cc-mastercard"></i>
                                        <i class="fab fa-cc-jcb"></i>
                                        <i class="fab fa-cc-amex"></i>
                                        <i class="fab fa-cc-paypal"></i>
                                        <i class="fab fa-cc-visa"></i>
                                    </div>
                                </div>
                                <table class="table table-striped" style="margin-top:20px;">
                                    <thead>
                                        <tr>
                                            <th>{{__('menu.starts')}}</th>
                                            <th>{{__('menu.ends')}}</th>
                                            <th>{{__('menu.places')}}</th>
                                            <th>{{__('menu.availability')}}</th>
                                            <th>{{__('menu.perperson')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tour->tourDates as $tourDates)
                                        <tr>
                                            <td style="font-size:16px; font-weight:700; vertical-align: center;">
                                                {{$tourDates->starts}}</td>
                                            <td style="font-size:16px; font-weight:700; vertical-align: center;">
                                                {{$tourDates->ends}}</td>
                                            <td style="font-size:16px; font-weight:700; vertical-align: center;">
                                                {{$tourDates->places}}</td>
                                            <td
                                                style="font-size:16px; font-weight:700; vertical-align: center; color:{{$tourDates->status == 'closed' ? 'red' : 'green'}}">
                                                @if($tourDates->status == 'closed')
                                                {{__('menu.not_available')}}
                                                @else
                                                {{__('menu.available')}}
                                                @endif
                                            </td>
                                            <td style="font-size:16px; font-weight:700; vertical-align: center;">
                                                {{$tourDates->price}} $</td>
                                            <td width="5%">
                                                @if($tourDates->status !== 'closed')
                                                <div style="background: #050658; font-size: 14px;display: flex; justify-content: center; align-items: center;  padding: 0 10px;  margin: 0;"
                                                    class="btn btn-primary book-now-aval book-now-phone-off"
                                                    data-starts="{{$tourDates->starts}}"
                                                    data-ends="{{$tourDates->ends}}"
                                                    data-price="{{$tourDates->price}}">{{__('menu.boocking_now')}}</div>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-form">
                <i class="fas fa-times close-modal" style="font-size: 2rem;color: white;  cursor: pointer;  float: right;    padding-top: 25px;    padding-right: 25px;"></i>
                <div style="display: flex;
    justify-content: center; align-items: center; height: 100vh;">
                    <div class="tr-single-box" style="width:25%;">
                        <div class="tr-single-header"
                            style="    border-radius: 5px 5px 0px 0px; background: #050658; color: white; text-align: center; font-weight: 700; font-size: 20px;">
                            <div class="entry-meta">
                                $ <span id="price-modal"></span>/Per Person
                                <br>
                                <span id="date-modal"></span>

                                <div class="meta-item meta-author">
                                    <div class="hotel-review entry-location">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tr-single-body">
                            <form class="book-form" id="form-date">
                                @csrf
                                <input
                                    type="hidden" name="tour_name" class="form-control" value="New Year 2020 in Uzbekistan">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="surname" class="form-control" placeholder="Your Surname"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="phone" class="form-control" name="phone" placeholder="Your Phone"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="peoples" class="form-control" placeholder="Number of people"
                                        required="">
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 mrg-top-15">
                                        <input type="submit" value="Book now" class="btn btn-arrow theme-btn full-width">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ============== Tour Detail ====================== -->

    @include('components.footer')

    <!-- ================= footer start ========================= -->



    <!-- =================== START JAVASCRIPT ================== -->
    <script src="/assets/plugins/js/jquery.min.js"></script>
    <script src="/assets/plugins/js/bootstrap.min.js"></script>
    <script src="/assets/plugins/js/viewportchecker.js"></script>
    <script src="/assets/plugins/js/bootsnav.js"></script>
    <script src="/assets/plugins/js/slick.min.js"></script>
    <script src="/assets/plugins/js/jquery.nice-select.min.js"></script>
    <script src="/assets/plugins/js/jquery.fancybox.min.js"></script>
    <script src="/assets/plugins/js/jquery.downCount.js"></script>
    <script src="/assets/plugins/js/freshslider.1.0.0.js"></script>
    <script src="/assets/plugins/js/moment.min.js"></script>
    <script src="/assets/plugins/js/daterangepicker.js"></script>
    <script src="/assets/plugins/js/wysihtml5-0.3.0.js"></script>
    <script src="/assets/plugins/js/bootstrap-wysihtml5.js"></script>
    <script src="http://maps.google.com/maps/api/js?key="></script>
    <script src="/assets/plugins/js/markerclusterer.js"></script>
    <script src="/assets/js/map.js"></script>

    <!-- Dashboard Js -->
    <script src="/assets/plugins/js/jquery.slimscroll.min.js"></script>
    <script src="/assets/plugins/js/jquery.metisMenu.js"></script>
    <script src="/assets/plugins/js/jquery.easing.min.js"></script>

    <!-- Custom Js -->
    <script src="/assets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>
    <script>
        const form = document.querySelector('#form');
        const token = document.querySelector('input[name="_token"]').value;
        form.addEventListener('submit', async e => {
            e.preventDefault();

            const formData = {};
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(inp => {
                formData[inp.name] = inp.value;
            });
            const res = await fetch('{{route("book.tour", app()->getLocale())}}', {
                method: 'POST',
                body: JSON.stringify(formData),
                headers: {
                    'X-CSRF-Token': token
                }
            });
            if (res.status == 200) {
                const data = await res.text();
                console.log(data);
                Swal.fire({
                    type: 'success',
                    title: data,
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    type: 'error',
                    text: data
                })
            }
        })

    </script>
    <script>
        const bookNow = document.querySelectorAll('.book-now-aval');
        const modal = document.querySelector('.modal-form');
        const closeModal = document.querySelector('.close-modal');
        const handlerCloseModal = () => {
            document.body.style.overflow = 'unset';
            modal.classList.remove('modal-form-open');
        }

        closeModal.addEventListener('click', () => handlerCloseModal());

        const handlerButton = e => {
                const starts = e.target.getAttribute('data-starts');
                const ends = e.target.getAttribute('data-ends');
                const price = e.target.getAttribute('data-price');

                document.body.style.overflow = 'hidden';
                document.querySelector('#date-modal').innerHTML = `${starts} - ${ends}`
                document.querySelector('#price-modal').innerHTML = price;
                document.addEventListener('keydown', event => {
                    if (event.key === "Escape") {
                        handlerCloseModal();                    
                    }
                });
            modal.classList.toggle('modal-form-open');


            const formModal = document.querySelector('#form-date');
        const modalToken = document.querySelector('#form-date input[name="_token"]').value;
        formModal.addEventListener('submit', async e => {
            e.preventDefault();

                const formData = {};
                const inputs = document.querySelectorAll('#form-date .form-control');
                inputs.forEach(inp => {
                    formData[inp.name] = inp.value;
                });
                formData['starts'] = starts;
                formData['ends'] = ends;
                formData['price'] = price;
                const res = await fetch('{{route("book.tour", app()->getLocale())}}', {
                    method: 'POST',
                    body: JSON.stringify(formData),
                    headers: {
                        'X-CSRF-Token': modalToken
                    }
                });
                if (res.status == 200) {
                    const data = await res.text();
                    console.log(data);
                    Swal.fire({
                        type: 'success',
                        title: data,
                        showConfirmButton: false,
                        timer: 1500
                    });
                } else {
                    Swal.fire({
                        type: 'error',
                        text: data
                    })
                }
            })
        };
        bookNow.forEach(element => element.addEventListener('click', handlerButton));

    </script>
    <script>
        $('#checkin').daterangepicker({
            "singleDatePicker": true,
            "timePicker": true,
            "startDate": "12/12/2018",
            "endDate": "12/14/2018"
        }, function (start, end, label) {
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format(
                'YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        });

    </script>

    <script>
        $('#checkout').daterangepicker({
            "singleDatePicker": true,
            "timePicker": true,
            "startDate": "12/18/2018",
            "endDate": "12/18/2018"
        }, function (start, end, label) {
            console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format(
                'YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        });

    </script>

    <script src="/assets/js/jQuery.style.switcher.js"></script>
    <script>
        function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
        }

        function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
        }

    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#styleOptions').styleSwitcher();
        });

    </script>
</body>

</html>
