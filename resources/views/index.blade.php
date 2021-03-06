﻿<html lang="en">
<head>
    {{--<meta charset="utf-16"/>--}}
    <title>DesignOne</title>
    <meta name="description" content="design, architecture, creative"/>
    <meta name="keywords"
          content="architecture, design, buildings, creative, projects, houses, restaurant, Sri Lanka"/>
    <meta name="author" content="Brightron">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    {{--    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/favicon.ico') !!}"/>--}}
    <link rel="icon" type="image/png" href="{!! asset('img/favicon.png')  !!}"/>
    {{--<link rel="apple-touch-icon" href="{!! asset('img/favicon.png') !!}"/>--}}
    <link href="{!! asset('css/style-ang.css')!!}" rel="stylesheet" type="text/css"/>
    {{-- Css --}}
    <link href="{!! asset('css/style.css')!!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/bootstrap.css')!!}" rel="stylesheet" type="text/css"/>
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">--}}
    <link href="{!! asset('css/plugins/animate.css')!!}" rel="stylesheet" type="text/css"/>
    {{-- SLIDER REVOLUTION CSS SETTINGS --}}
    <link rel="stylesheet" type="text/css" href="{!! asset('rs-plugin/css/settings.css')!!}" media="screen"/>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/model.css')!!}" media="screen"/>

    <style type="text/css">

        .mySlides {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .mobile_logo {
                visibility: visible;
            }

            .desktop_logo {
                visibility: hidden;
            }

        }

        @media screen and (min-width: 600px) {
            .mobile_logo {
                visibility: hidden;
            }

            .desktop_logo {
                visibility: visible;
            }

            /*.my-background-image {*/
            /*min-width: 600px;*/
            /*}*/
        }


    </style>

    <style>
        h2 {
            text-align: center;
            padding: 20px;
        }


        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }


        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            /*height: %;*/
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }


        .slick-track {
            display: flex;
        }

        .slick-track .slick-slide {
            display: flex;
            height: auto;
            align-items: center;
            justify-content: center;
        }

    </style>
    <style>
        #wrap {
            background-color: #ddd;
            padding: 50px 0;
        }

        #slider {
            width: 300px;
            margin: 0 auto;
        }

        #slider img {
            width: 100%;
        }

        button {
            margin: 0;
            padding: 0;
            background: none;
            border: none;
            border-radius: 0;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .slide-arrow {
            position: absolute;
            top: 50%;
            margin-top: -15px;
        }

        .prev-arrow {
            left: -20px;
            width: 0;
            height: 0;
            border-left: 0 solid transparent;
            border-right: 15px solid #113463;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }

        .next-arrow {
            right: -20px;
            width: 0;
            height: 0;
            border-right: 0 solid transparent;
            border-left: 15px solid #113463;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
        }
    </style>

</head>
<body style="font-family: 'Swis721 LtCn BT',sans-serif;">
<section id="preloader">
    <div class="site-spinner"></div>
</section>
<div id="page-wraper">
    <div class="wrapper">
        <div id="header" class="header">
            <div class="header-inner">
                <div class="logo mobile_logo">
                    <a href="#">
                        <img src="{!! asset('img/logo.png')!!}" height="27px" style="margin-top:-5px ;"/>
                    </a>
                </div>
                {{--Navigation Icon--}}
                <div class="nav-menu-icon">
                    <a><i class="fa fa-bars"></i></a>
                </div>
                {{--End Navigation Icon--}}

                {{-- Navigation Menu --}}
                <div class="nav-menu singlepage-nav">
                    <ul class="nav-menu-inner">
                        <li class="desktop_logo"><img src="{!! asset('img/logo.png')!!}" height="27px"
                                                      style="margin-top:-5px ;"/></li>
                        <li><a href="#intro" id="intro">Home</a></li>
                        {{--                        <li><a href="#about">About</a></li>--}}
                        <li><a href="#news" id="newsModal" data-toggle="modal" data-target="#myModal">News</a></li>
                        <li><a href="#portfolio">Projects</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#client">Clients</a></li>
                        <li><a href="#contact-us">Contact</a></li>

                    </ul>
                </div>
                {{-- End Navigation Menu --}}
            </div>
        </div>

        <div class="modal right fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true" style="background-color: white;width: 50px;">&times;</span>about
                        </button>
                        <h4 class="modal-title" id="myModalLabel" style="color: #dddddd;">DesignOne News Bar</h4>
                    </div>

                    <div class="modal-body" style=" color: #cccccc;">
                        @foreach($newsItems as $newsItem)
                            <div>
                                <h3 style="color: #dddddd;">{!! $newsItem->title !!} -
                                    <small>{!! $newsItem->date !!}</small>
                                </h3>
                                <p style="color:inherit">{!! $newsItem->news !!}</p>
                            </div>
                        @endforeach
                    </div>

                </div>{{-- modal-content --}}
            </div>{{-- modal-dialog --}}
        </div>{{-- modal --}}
        {{--Intro Section--}}
        <section id="intro">
            {{--Slider Hero--}}
            <div class="tp-banner-container">
                <div class="intro-tp-banner">
                    <ul>
                        {{-- SLIDE  --}}
                        @if(!empty($sliderImages))
                            {{--{{dd('asdasda')}}--}}
                            @foreach($sliderImages as $sliderImage)
                                <li class="" data-transition="slidehorizontal" data-slotamount="5"
                                    data-masterspeed="700">
                                    {{-- MAIN IMAGE --}}
                                    <img src="{!! asset('control-panel/images/slider-images/'.$sliderImage->id.'.jpg') !!}"
                                         alt="SliderImages"
                                         data-bgfit="cover"
                                         data-bgposition="top center" data-bgrepeat="no-repeat">

                                    {{-- LAYER NR. 2 --}}
                                    <h2 class="tp-caption lfb ltt tp-resizeme sc-title"
                                        data-x="center" data-hoffset="0"
                                        data-y="center" data-voffset="-25"
                                        data-speed="600"
                                        data-start="700"
                                        data-easing="Power4.easeOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.01"
                                        data-endelementdelay="0.1"
                                        data-endspeed="500"
                                        data-endeasing="Power4.easeIn"
                                        style="z-index: 3; color: #FFFFFF; max-width: auto; max-height: auto; white-space: nowrap;">
                                        {!! $sliderImage->title !!}
                                    </h2>

                                    {{-- LAYER NR. 3 --}}
                                    <p class="tp-caption lfb ltt tp-resizeme sc-paragraph-lead"
                                       data-x="center" data-hoffset="0"
                                       data-y="center" data-voffset="40"
                                       data-speed="600"
                                       data-start="900"
                                       data-easing="Power4.easeOut"
                                       data-splitin="none"
                                       data-splitout="none"
                                       data-elementdelay="0.01"
                                       data-endelementdelay="0.1"
                                       data-endspeed="500"
                                       data-endeasing="Power4.easeIn"
                                       style="z-index: 3; color: #eff5f5 ;max-width: auto; max-height: auto; white-space: nowrap;">
                                        {!! $sliderImage->description !!}
                                        <br/>

                                    </p>
                                </li>
                            @endforeach
                        @endif

                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            {{-- End Slider Hero--}}

        </section>
        {{-- End Intro Section--}}

        {{-- About Section --}}
        {{--<section id="about" class="section-padding text-center">--}}
        {{--<div class="container mb-60">--}}
        {{--<h2>About <span class="text-light">Us</span></h2>--}}
        {{--<p class="max-width-700 lead">{!! $generalContent->about !!}</p>--}}
        {{--</div>--}}

        {{--</section>--}}

        @if(1==2)
            <section id="about" class="section-padding text-center" style="padding-bottom:0px;">
                <div class="container mb-50">
                    <div class="row text-center">

                        <div class="col-md-offset-6">
                            <h2 class="text-center">About <span class="text-light">Us</span></h2>
                        </div>
                    </div>
                    <div class="row text-center" style="vertical-align: middle;">
                        {{-- <h2 class="text-right" style="font-family: inherit">About <span class="text-light">Us</span></h2> --}}
                        <div class="col-md-6">
                            <div class="spacer-30"></div>
                            <br>
                            <div class="media">
                                <iframe style=""
                                        src="https://www.youtube.com/embed/k9EyPfc0FXc?rel=1&amp;controls=1&amp;showinfo=0"
                                        frameborder="0"></iframe>
                                {{--<img src="{!! asset('img/archi.png') !!}" style="max-width: 457px; width: 100%;" alt="mockup"/>--}}
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
                            <div class="spacer-15"></div>
                            {{--<h6 class="page-title-alt color mb-10">Architecture Planning Interiors</h6>--}}
                            {{--<div>--}}
                            {{--<img src="{!! asset('img/logo-dark.png') !!}" width="350" alt="mockup"/>--}}
                            {{--</div>--}}
                            <br>
                            {{--<h2 class="page-title mb-25">design<span class="text-light">One</span></h2>--}}
                            <p style="text-align: justify">{!! $generalContent->about !!}</p>
                            {{--<img src="img/signature.png" alt="signature" />--}}
                        </div>
                    </div>
                </div>
            </section>


            <hr/>
        @endif

        {{--Portfolio--}}

        <section id="portfolio" class="section-padding-t gray-bg">
            <div class="container text-left" style="font-family: inherit">
                <ul class="portfolio-filter categories-filter text-left">
                    <li><h2>Our <span class="text-light">Work</span></h2></li>
                    <li class="menu_down"><a class="categories active" data-filter="*">All</a></li>
                    <li><a class="categories" data-filter=".recent">Recent</a></li>
                    @if(!empty($projectTypes))
                        @foreach($projectTypes as $projectType)
                            <li><a class="categories"
                                   data-filter=".{!! snake_case($projectType->project_type) !!}">{!! $projectType->project_type !!}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="container-fluid">
                {{--<div class="row">--}}

                {{--</div>--}}
                <div class="portfolio-grid-fit row gallery-popup">

                    @foreach($portfolio as $item)
                        <div class="portfolio-item {!! $item['categories'] !!}"
                             style="background-color: #FFF; padding: 2px; ">
                            <div class="portfolio-box" style="border: thick;">
                                <a class="portfolio-image-wrap" data-toggle="modal"
                                   data-target="#myModal{{$item['project_id']}}">
                                    <img src="{!! asset($item['thumb_image']) !!}"/>
                                </a>
                                <div id="myModal{{$item['project_id']}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog  modal-lg">

                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                                <h4 class="modal-title"
                                                    style="color: #ffffff;">{{$item['heading']}}</h4>
                                            </div>
                                            <div class="modal-body">

                                                <div class="w3-content w3-display-container">
                                                    @foreach(App\Project::where('name', $item['name'])->orderBy('order')->get() as $projectImage)
                                                        <img class="mySlides{{$item['project_id']}}"
                                                             src="{{ asset('control-panel/images/projects/' . $projectImage->id . '.jpg') }}"
                                                             style="width:100%">

                                                    @endforeach
                                                    <button class="w3-button w3-black w3-display-left"
                                                            onclick="plusDivs{!! $item['project_id'] !!}(-1)">&#10094;
                                                    </button>
                                                    <button class="w3-button w3-black w3-display-right"
                                                            onclick="plusDivs{!! $item['project_id'] !!}(1)">&#10095;
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="modal-footer" style="color: #fff;">
                                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                                {!! $item['country'].' '.$item['year'] !!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        {{--<section>--}}
        {{--<div class="container text-left filters-button-group" style="font-family: inherit">--}}
        {{--<ul class="portfolio-filter categories-filter text-left">--}}
        {{--<li><h2>Our <span class="text-light">Work</span></h2></li>--}}
        {{--<li class="menu_down"><a class="categories active" data-filter="*">All</a></li>--}}
        {{--<li><a class="categories" data-filter=".recent">Recent</a></li>--}}
        {{--@if(!empty($projectTypes))--}}
        {{--@foreach($projectTypes as $projectType)--}}
        {{--<li><a class="button"--}}
        {{--data-filter=".{!! snake_case($projectType->project_type) !!}">{!! $projectType->project_type !!}</a>--}}
        {{--</li>--}}
        {{--@endforeach--}}
        {{--@endif--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="grid">--}}

        {{--@foreach($portfolio as $item)--}}
        {{--<div class="element-item {!! $item['categories'] !!}"--}}
        {{--style="background-color: #FFF; padding: 2px;">--}}
        {{--<div class="portfolio-box" style="border: thick;">--}}
        {{--<a class="portfolio-image-wrap">--}}
        {{--<img src="{!! asset($item['thumb_image']) !!}"/>--}}
        {{--</a>--}}
        {{--<div class="portfolio-caption">--}}
        {{--<div class="portfolio-caption-tb">--}}
        {{--<div class="portfolio-caption-tb-cell">--}}
        {{--<h5>{!! $item['heading'] !!}</h5>--}}
        {{--<p>{!! $item['country'].' '.$item['year'] !!}</p>--}}
        {{--<ul class="portfolio-btn-wraper">--}}
        {{--<li>--}}
        {{--<a class="gallery-popup-link btn btn-color"--}}
        {{--href="{!! asset($item['large_image']) !!}"--}}
        {{--title="{!! $item['heading'].' - '.$item['country'].' ('.$item['year'].')' !!}"><i--}}
        {{--class="fa fa-search"></i></a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--@endforeach--}}
        {{--</div>--}}
        {{--</section>--}}


        {{--End Portfolio Section --}}

        {{-- Statement1 Section --}}
        {{--<section id="Statement1" class="section-padding bg-image overlay-dark dark-bg text-center"--}}
        {{--data-stellar-background-ratio="0.5" data-background-img="img/full/Slider.jpeg">--}}
        {{--<div class="container">--}}
        {{--<p class="max-width-700 lead" style="font-family: inherit">You can download our portfolio below</p>--}}
        {{--<a class="btn btn-md btn-color">Download</a>--}}
        {{--</div>--}}
        {{--</section>--}}


        @if(!empty($teamMembers))
            <section id="team" class="section-padding-t">
                <div class="container">
                    <h2 class="page-title text-right">Busy <span class="text-light">Team</span></h2>
                </div>
                <div class="container">


                    <ul class="the-team">
                        @foreach($teamMembers as $teamMember)
                            <li>
                                <div style="text-align: center">
                                    <img src="{!! asset('control-panel/images/team-members/'. $teamMember->id.'.jpg') !!}">
                                    <br>
                                    <h6>{!! $teamMember->name !!}</h6>
                                    <p class="">{!! $teamMember->designation !!}</p>
                                    <p class="">{!! $teamMember->description !!}</p>
                                </div>
                            </li>

                            {{--</div>--}}
                        @endforeach
                    </ul>

                    {{--<div class="paginator-center text-color text-center">--}}
                    {{--<h6>VER MAS LANZAMIENTOS</h6>--}}
                    {{--<ul>--}}
                    {{--<li class="prev"></li>--}}
                    {{--<li class="next"></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </section>
            {{--<section id="team" class="section-padding" style="padding-bottom:0px;">--}}
            {{--<div class="container">--}}
            {{--<h2 class="page-title text-right">Busy <span class="text-light">Team</span></h2>--}}
            {{--</div>--}}
            {{--<div class="container">--}}
            {{--<div class="row">--}}
            {{--Team Carousel --}}
            {{--<div class="owl-carousel team-carousel nf-carousel-theme">--}}
            {{--@foreach($teamMembers as $teamMember)--}}
            {{--<div class="item">--}}
            {{--<div class="team-item"--}}
            {{--style="padding-left: 5px; padding-right: 5px; align-items: center; align-content: center">--}}
            {{--<div class="team-item-img" style="align-content: center">--}}
            {{--<img width=""--}}
            {{--src="{!! asset('control-panel/images/team-members/'. $teamMember->id.'.jpg') !!}"--}}
            {{--alt="" align="center"/>--}}
            {{--<div class="team-item-detail">--}}
            {{--<div class="team-item-detail-inner light-color">--}}
            {{--<h5>Michael Lee</h5>--}}
            {{--<p>To portal for some of the world's most high-value net.</p>--}}
            {{--<ul class="social">--}}
            {{--<li><a href="https://www.facebook.com/" target="_blank"><i--}}
            {{--class="fa fa-facebook"></i></a></li>--}}
            {{--<li><a href="https://www.twitter.com/" target="_blank"><i--}}
            {{--class="fa fa-twitter"></i></a></li>--}}
            {{--<li><a href="https://www.dribbble.com/" target="_blank"><i--}}
            {{--class="fa fa-dribbble"></i></a></li>--}}
            {{--<li><a href="https://www.pinterest.com/" target="_blank"><i--}}
            {{--class="fa fa-pinterest"></i></a></li>--}}
            {{--<li><a href="https://www.behance.net/" target="_blank"><i--}}
            {{--class="fa fa-behance"></i></a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="team-item-info">--}}
            {{--<h6>{!! $teamMember->name !!}</h6>--}}
            {{--<p class="">{!! $teamMember->designation !!}</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}
            {{--</div>--}}
            {{--End Team Carousel ---}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</section>--}}
        @endif

        {{--{{-- Action Box Section --}}
        {{--<section id="action-box2" class="action-box action-black">--}}
        {{--<div class="container">--}}
        {{--<div class="row action-box-left">--}}
        {{--<h4 class="action-box-title">--}}
        {{--{{--Designs filled with creativity and innovation--}}
        {{--{!! $generalContent->portfolioDescription !!}</h4>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--</section>--}}
        {{-- Action Box Section --}}

        {{-- Service Section
         Removed !!!
        End Service Section --}}

        {{-- Counter Section --}}
        {{--<section id="counter" class="section-padding bg-image overlay-dark dark-bg" data-stellar-background-ratio="0.5"--}}
        {{--data-background-img="{!! asset('img/full/14.jpg') !!}">--}}
        {{--<div class="container text-center">--}}
        {{--<div class="row">--}}
        {{--<div class="col-md-3 col-sm-6 mb-sm-30">--}}
        {{--<div class="alt-icon-top counter-icon"><i class="icon icon-basic-cup"></i></div>--}}
        {{--<h1 class="counter-title counter-num">{!! $generalContent->awardCount !!}</h1>--}}
        {{--<h5 class="counter-sub-title">Awards</h5>--}}
        {{--</div>--}}
        {{--<div class="col-md-3 col-sm-6 mb-sm-30">--}}
        {{--<div class="alt-icon-top counter-icon"><i class="icon icon-basic-heart"></i></div>--}}
        {{--<h1 class="counter-title counter-num">{!! $generalContent->clientCount !!}</h1>--}}
        {{--<h5 class="counter-sub-title">Clients</h5>--}}
        {{--</div>--}}
        {{--<div class="col-md-3 col-sm-6 mb-sm-30">--}}
        {{--<div class="alt-icon-top counter-icon"><i class="icon icon-basic-case"></i></div>--}}
        {{--<h1 class="counter-title counter-num">{!! $generalContent->projectCount !!}</h1>--}}
        {{--<h5 class="counter-sub-title">Projects</h5>--}}
        {{--</div>--}}
        {{--<div class="col-md-3 col-sm-6 mb-sm-30">--}}
        {{--<div class="alt-icon-top counter-icon"><i class="icon icon-basic-lightbulb"></i></div>--}}
        {{--<h1 class="counter-title counter-num">{!! $generalContent->teamCount !!}</h1>--}}
        {{--<h5 class="counter-sub-title">Teams</h5>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</section>--}}
        {{-- End Counter Section --}}


        {{-- Client Logo --}}
        @if(!empty($clients))




            <section id="client" class="section-padding">
                <div class="container">
                    <h2 class="page-title text-left">Happy <span class="text-light">Clients</span></h2>
                </div>
                <div class="container">

                    {{--<div class="owl-carousel client-carousel owl-controls owl-theme">--}}
                    {{--@foreach($clients as $client)--}}
                    {{--<div class="item">--}}
                    {{--<div class="client-logo">--}}
                    {{--<img src="{!! asset("control-panel/images/clients/".$client->id.".png") !!}"--}}
                    {{--alt=""/>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                    {{--</div>--}}
                    <ul class="customer-logos">

                        @foreach($clients as $client)
                            <li><img
                                        src="{!! asset("control-panel/images/clients/".$client->id.".png") !!}">
                            </li>

                        @endforeach
                    </ul>
                    {{--<div class="paginator-center text-color text-center">--}}
                    {{--<h6>VER MAS LANZAMIENTOS</h6>--}}
                    {{--<ul>--}}
                    {{--<li class="prev"></li>--}}
                    {{--<li class="next"></li>--}}
                    {{--</ul>--}}
                </div>

            </section>
            {{-- End Client Logo --}}
        @endif

        <hr/>


        {{-- Contact Form --}}
        <section id="contact-us" class="section-padding dark-bg bg-image overlay-dark60 my-background-image"
                 data-background-img="{!! asset('img/full/Slider.jpeg') !!}"
                 data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row text-center">
                    <h6 class="page-title-alt color mb-15">Wanna say hello? </h6>
                    <h2 class="page-title">Get In <span class="text-light">Touch</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            {!! Form::open(['url'=> 'send-mail', 'method' =>'post']) !!}
                            <div class="col-md-12 text-center">

                                @if(session()->get('email'))
                                    <h5 class="">
                                        <i class="fa fa-check left" style="color: #5cb45d;"></i>Your message has been
                                        sent successfully.
                                    </h5>
                                @endif
                                <h5 class="errorContent" style="color: #e1534f;">
                                    <i class="fa fa-exclamation-circle left"></i>There was a problem validating the
                                    form please check!
                                </h5>

                                <div class="form-field-wrapper">
                                    <input class="input-md form-full" id="form-name" type="text" name="name"
                                           placeholder="Your Name" required/>
                                </div>
                                <div class="form-field-wrapper">
                                    <input class="input-md form-full" id="form-email" type="email" name="email"
                                           placeholder="Email" required/>
                                </div>
                                <div class="form-field-wrapper">
                                    <input class="input-md form-full" id="form-subject" type="text"
                                           name="subject" placeholder="Subject"/>
                                </div>

                                <div class="form-field-wrapper">
                                        <textarea class="input-md form-full" id="form-message" rows="7"
                                                  name="message_body" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">

                                <button class="btn-contact-submit btn btn-md btn-color" type="submit"
                                        id="form-submit" name="submit">Submit
                                </button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Contact Form --}}

        {{-- Map section --}}
        <section>
            <div class="row">
                <div class="container-fluid">
                    <a href="https://goo.gl/maps/XimaR4XsiK22" target="_blank">
                        <img src="{!! asset('img/map2.jpg')  !!}" alt="" width="100%">
                    </a>
                </div>
            </div>
        </section>
        {{-- End Map section --}}

        {{--Contact Info Section--}}
        <section id="contct-info" class="section-padding">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                        <div class="alt-icon-sm-top"><i class="icon icon-basic-geolocalize-05"></i></div>
                        <h5 class="features-title">Address</h5>
                        <p>
                            <a>{!! str_replace(',','<br/>',$generalContent->address) !!}</a>
                        </p>
                    </div>
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
                        <div class="alt-icon-sm-top"><i class="icon icon-basic-alarm"></i></div>
                        <h5 class="features-title">Office Hours</h5>
                        <p>
                            <a>Mon - Fri 9.00 AM to 5.00 PM</a>
                        </p>
                    </div>
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2s">
                        <div class="alt-icon-sm-top"><i class="icon icon-basic-headset"></i></div>
                        <h5 class="features-title">Contact</h5>
                        <p class="contact-link">
                            <a href="mailto:{!! $generalContent->email !!}"><span
                                        class="text-bold">Email :</span>{!! $generalContent->email !!}</a><br/>
                            <a><span class="text-bold">Call :</span> {!! $generalContent->phone1 !!}</a><br/>
                            {{--<a><span class="text-bold">Fax :</span> {!! $generalContent->fax !!}--}}
                            {{--</a>--}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Contact Info Section--}}

        {{--Footer Section--}}
        <footer id="footer" class="footer section-padding gray-bg">
            <div class="container text-center">

                <a class="scroll-top" href="#intro">
                    <img src="{!! asset('img/logo-light.png')!!}" alt="designonestudio" width="300">
                </a>
                {{-- Copyright --}}
                <p class="copyright mb-25">
                    &copy; {!! date('Y') !!} <a><b> designONE </b></a>. All Rights Reserved.<br>
                    Solution By <a href="http://brightron.net">Brightron</a>
                </p>
                {{-- Copyright --}}

                {{-- Social --}}
                <div>


                    <a href="https://www.facebook.com/designone.lk/" target="_blank">
                        <img src="{{ url('img/fb.png') }}" alt="" width="40"></a>
                    <a href="https://www.instagram.com/?hl=en" target="_blank">
                        <img src="{{ url('img/insta.png') }}" alt="" width="40"></a>

                </div>
                {{-- End Social --}}

            </div>
        </footer>
        {{-- End Footer Section--}}

    </div>
</div>
{{-- End Page Wraper --}}

{{-- Js --}}
<script src="{!! asset('js/jquery-1.11.2.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.easing.1.3.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/bootstrap.min.js') !!}" type="text/javascript"></script>

{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>--}}

<script src="{!! asset('js/plugins/jquery.fitvids.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.stellar.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/isotope.pkgd.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.appear.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.fs.tipper.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.countTo.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/owl.carousel.min.js') !!}" type="text/javascript"></script>
<script type="text/javascript">
    $('#intro a').trigger('click');

</script>

{{-- SLIDER REVOLUTION SCRIPTS  --}}
<script src="{!! asset('rs-plugin/js/jquery.themepunch.tools.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('rs-plugin/js/jquery.themepunch.revolution.min.js') !!}" type="text/javascript"></script>
{{-- End SLIDER REVOLUTION SCRIPTS  --}}
<script src="{!! asset('js/plugins/jquery.magnific-popup.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.singlePageNav.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/wow.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/contact-form.js') !!}" type="text/javascript"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>--}}
{{--<script src="{!! asset('js/map.js') !!}" type="text/javascript"></script>--}}
<script src="{!! asset('js/theme.js') !!}" type="text/javascript"></script>
{{--<script src="{!! asset('js/masonry.js') !!}" type="text/javascript"></script>--}}


<script>

    var slideIndex = 1;
    @foreach($portfolio as $item)
    showDivs(slideIndex, '{!! "mySlides".$item['project_id'] !!}');

    @endforeach

    @foreach($portfolio as $item)
    function plusDivs{!! $item['project_id'] !!}(n) {
        showDivs(slideIndex += n, '{!! "mySlides".$item['project_id'] !!}');
    }

    @endforeach


    function showDivs(n, classname) {
        var i;
        var x = document.getElementsByClassName(classname);
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }
</script>

{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script>
    $(document).ready(function () {
        $('.customer-logos').slick({

            autoplay: true,
            autoplaySpeed: 1500,
            arrows: true,
            // dots: true,
            mobileFirst: true,
            prevArrow: "<button class=\"slide-arrow prev-arrow\"></button>",
            nextArrow: "<button class=\"slide-arrow next-arrow\"></button>",
            pauseOnHover: false,
            variableWidth: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 425,
                settings: {
                    slidesToShow: 2
                }
            }]
        });

        $('.the-team').slick({
            // slidesToShow: 4,
            // slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: true,
            // dots: true,
            mobileFirst: true,
            prevArrow: "<button class=\"slide-arrow prev-arrow\"></button>",
            nextArrow: "<button class=\"slide-arrow next-arrow\"></button>",
            pauseOnHover: false,
            variableWidth: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }, {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 425,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });
</script>

{{-- angular stuffs --}}

{{--<script src="{!! asset('scripts/vendor/angular.min.js') !!}"></script>--}}
{{--<script src="{!! asset('scripts/vendor/jquery.isotope.js') !!}"></script>--}}
{{--<script src="{!! asset('scripts/angular-isotope.js') !!}"></script>--}}
{{--<script src="{!! asset('http://yandex.st/highlightjs/8.0/highlight.min.js') !!}"></script>--}}
{{--<script src="{!! asset('http://pc035860.github.io/angular-highlightjs/angular-highlightjs.min.js') !!}"></script>--}}

</body>
</html>
