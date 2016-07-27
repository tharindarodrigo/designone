﻿<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Mazel One - Onepage Responsive Html Template</title>
    <meta name="description" content=""/>
    <meta name="keywords"
          content="creative, portfolio, template, theme, designed, html5, css3, responsive, mazel, onepage"/>
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/favicon.ico') !!}"/>
    <link rel="icon" type="image/png" href="{!! asset('img/favicon.png')  !!}"/>
    <link rel="apple-touch-icon" href="{!! asset('img/favicon.png') !!}"/>

    <!-- Css -->
    <link href="{!! asset('css/style.css')!!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/bootstrap.css')!!}" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('css/plugins/animate.css')!!}" rel="stylesheet" type="text/css"/>
    <!-- SLIDER REVOLUTION CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('rs-plugin/css/settings.css')!!}" media="screen"/>

</head>
<body>

<!-- Site preloader -->
<section id="preloader">
    <div class="site-spinner"></div>
</section>
<!-- End Site preloader -->

<!-- Page Wraper -->
<div id="page-wraper">
    <div class="wrapper">
        <div id="header" class="header">
            <div class="header-inner">
                <!-- Logo -->
                <div class="logo">
                    <a href="#">
                        <img src="img/logo-light.png"/>
                    </a>
                </div>
                <!-- End Logo -->

                <!--Navigation Icon-->
                <div class="nav-menu-icon">
                    <a><i class="fa fa-bars"></i></a>
                </div>
                <!--End Navigation Icon-->

                <!-- Navigation Menu -->
                <div class="nav-menu singlepage-nav">
                    <ul class="nav-menu-inner">
                        <li><a href="#intro">Home</a></li>
                        <li><a href="#about">About</a></li>
                        {{--<li><a href="#latest-work">Work</a></li>--}}
                        <li><a href="#client">Client</a></li>
                        <li><a href="#contact-us">Contact</a></li>

                    </ul>
                </div>
                <!-- End Navigation Menu -->
            </div>
        </div>
        <!--Intro Section-->
        <section id="intro">
            <!--Slider Hero-->
            <div class="tp-banner-container">
                <div class="intro-tp-banner">
                    <ul>
                        <!-- SLIDE  -->
                        @if(!empty($sliderImages))
                            {{--{{dd('asdasda')}}--}}
                            @foreach($sliderImages as $sliderImage)
                                <li class="" data-transition="fade" data-slotamount="5" data-masterspeed="700">
                                    <!-- MAIN IMAGE -->
                                    <img src="{!! asset('control-panel/images/slider-images/'.$sliderImage->id.'.jpg') !!}" alt="SliderImages"
                                         data-bgfit="cover"
                                         data-bgposition="top center" data-bgrepeat="no-repeat">

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption lfb ltt tp-resizeme"
                                         data-x="center" data-hoffset="0"
                                         data-y="center" data-voffset="-125"
                                         data-speed="600"
                                         data-start="500"
                                         data-easing="Power4.easeOut"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.1"
                                         data-endspeed="500"
                                         data-endeasing="Power4.easeIn"
                                         style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <img src="img/t-logo1.png" alt="logo"/>

                                    </div>

                                    <!-- LAYER NR. 2 -->
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
                                        style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                                        {!! $sliderImage->title !!}
                                    </h2>

                                    <!-- LAYER NR. 3 -->
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
                                       style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
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
            <!-- End Slider Hero-->

        </section>
        <!-- End Intro Section-->

        <!-- About Section -->
        <section id="about" class="section-padding text-center">
            <div class="container mb-60">
                <h2>About <span class="text-light">Us</span></h2>
                <p class="max-width-700 lead">{!! $generalContent->about !!}</p>
            </div>


        </section>
        <!-- End About Section -->

        <!-- Statement1 Section -->
        <section id="Statement1" class="section-padding bg-image overlay-dark dark-bg text-center"
                 data-stellar-background-ratio="0.5" data-background-img="img/full/33.jpg">
            <div class="container">

            </div>
        </section>
        <!-- End Statement1 Section -->

        <!-- Team Section
        Removed !!!
         End Team Section -->
        <!--<hr/>-->

        <!--Accordian
         Removed !!!
        End Accordian -->



        <!-- NewsFeed Section-->

        <section id="testimonials" class="section-padding bg-image overlay-dark dark-bg text-center"
                 data-stellar-background-ratio="0.5" data-background-img="img/full/05.jpg">
            <div class="container">
                <div class="owl-carousel testimonial-carousel nf-carousel-theme white">

                    @if(!empty($newsItems))
                        @foreach($newsItems as $newsItem)
                            <div class="item">
                                <div class="testimonial text-center max-width-700">
                                    <div class="page-icon-sm">{!! $newsItem->title !!}</div>
                                    <p class="lead"><!--I got a dummy for Christmas and started teaching myself. I got books and
                                records and sat in front of the practising.-->{!! asset($newsItem->body) !!}</p>
                                    <h6 class="quote-author"><!-- Jeff Dunham --> {!! asset("- ".$newsItem->date) !!}
                                    </h6>
                                </div>
                            </div>

                        @endforeach
                    @endif

                </div>
            </div>
        </section>


        <!-- End NewsFeed Section -->

        <!-- Work Process Section
        Removed!!!
        End Work Process Section -->

      <!--  <hr/> -->
        <hr/>



        <!-- Portfolio Section -->
        <section id="portfolio" class="section-padding-t gray-bg">
            <div class="container text-center">
                <h2>Our <span class="text-light">Portfolio</span></h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <ul class="portfolio-filter categories-filter">
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".branding">Branding</a></li>
                        <li><a class="categories" data-filter=".creative">Creative</a></li>
                        <li><a class="categories" data-filter=".photography">Photography</a></li>
                        <li><a class="categories" data-filter=".coffee">coffee</a></li>
                    </ul>

                </div>
                <div class="portfolio-grid-fit row gallery-popup">


                    @if(!empty($portfolio))
                    @foreach($portfolio as $portfolioItem)
                            <!------->
                    <div class="portfolio-item branding photography coffee">
                        <div class="portfolio-box">
                            <a class="portfolio-image-wrap">
                                <img src="{!! asset('img/portfolio/thumb/'.$portfolioItem->thumbImage.'.jpg') !!}"
                                     alt=""/></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-tb">
                                    <div class="portfolio-caption-tb-cell">
                                        <h5><!--Digital Camera mockup-->{!! $portfolioItem->title !!}</h5>
                                        <p>
                                            <!--Mockup - Photography - Graphic - Branding-->{!! $portfolioItem->description !!}</p>
                                        <ul class="portfolio-btn-wraper">
                                            <li>
                                                <a class="gallery-popup-link btn btn-color"
                                                   href="{!! asset("img/portfolio/large/".$portfolioItem->fullImage.".jpg") !!}"
                                                   title="Portfolio Image 01"><i
                                                            class="fa fa-search"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif



                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- Action Box Section -->
        <section id="action-box2" class="action-box action-black">
            <div class="container">
                <div class="row action-box-left">
                    <h4 class="action-box-title">
                        <!--Designs filled with creativity and innovation--> {!! $generalContent->portfolioDescription !!}</h4>
                </div>

            </div>
        </section>
        <!-- Action Box Section -->

        <!-- Service Section
         Removed !!!
        End Service Section -->

        <!-- Counter Section -->
        <section id="counter" class="section-padding bg-image overlay-dark dark-bg" data-stellar-background-ratio="0.5"
                 data-background-img="img/full/14.jpg">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="alt-icon-top counter-icon"><i class="icon icon-basic-cup"></i></div>
                        <h1 class="counter-title counter-num">{!! $generalContent->awardCount !!}</h1>
                        <h5 class="counter-sub-title">Awards</h5>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="alt-icon-top counter-icon"><i class="icon icon-basic-heart"></i></div>
                        <h1 class="counter-title counter-num">{!! $generalContent->clientCount !!}</h1>
                        <h5 class="counter-sub-title">Clients</h5>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="alt-icon-top counter-icon"><i class="icon icon-basic-case"></i></div>
                        <h1 class="counter-title counter-num">{!! $generalContent->projectCount !!}</h1>
                        <h5 class="counter-sub-title">Projects</h5>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="alt-icon-top counter-icon"><i class="icon icon-basic-lightbulb"></i></div>
                        <h1 class="counter-title counter-num">{!! $generalContent->teamCount !!}</h1>
                        <h5 class="counter-sub-title">Teams</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Section -->



        <!-- Client Logo -->
        <section id="client" class="section-padding">
            <div class="container text-center">
                <h2 class="page-title">Happy <span class="text-light">Clients</span></h2>
            </div>
            <div class="container">

                @if(!empty($clients))
                    @foreach($clients as $client)

                        <div class="owl-carousel client-carousel">
                            <div class="item">
                                <div class="client-logo">
                                    <a href="#">
                                        <img src="{!! asset("img/logos/".$clients->image.".png") !!}" alt=""/></a>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endif


            </div>
        </section>
        <!-- End Client Logo -->

        <hr/>


        <!-- Contact Form -->
        <section id="contact-us" class="section-padding dark-bg bg-image overlay-dark60"
                 data-background-img="img/full/20.jpg" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row text-center">
                    <h6 class="page-title-alt color mb-15">Wanna say hello? </h6>
                    <h2 class="page-title">Get In <span class="text-light">Touch</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <form id="contact" class="contact-form" role="form">
                                <div class="col-md-12 text-center">
                                    <h5 class="successContent">
                                        <i class="fa fa-check left" style="color: #5cb45d;"></i>Your message has been
                                        sent successfully.
                                    </h5>
                                    <h5 class="errorContent" style="color: #e1534f;">
                                        <i class="fa fa-exclamation-circle left"></i>There was a problem validating the
                                        form please check!
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field-wrapper">
                                        <input class="input-md form-full" id="form-name" type="text" name="form-name"
                                               placeholder="Your Name" required/>
                                    </div>
                                    <div class="form-field-wrapper">
                                        <input class="input-md form-full" id="form-email" type="email" name="form-email"
                                               placeholder="Email" required/>
                                    </div>
                                    <div class="form-field-wrapper">
                                        <input class="input-md form-full" id="form-subject" type="text"
                                               name="form-subject" placeholder="Subject"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-0">
                                    <div class="form-field-wrapper">
                                        <textarea class="input-md form-full" id="form-message" rows="7"
                                                  name="form-message" placeholder="Your Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn-contact-submit btn btn-md btn-color" type="submit"
                                            id="form-submit" name="submit">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Form -->

        <!-- Map section -->
        <section class="map" id="map"></section>
        <!-- End Map section -->

        <!--Contact Info Section-->
        <section id="contct-info" class="section-padding">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                        <div class="alt-icon-sm-top"><i class="icon icon-basic-geolocalize-05"></i></div>
                        <h5 class="features-title">Address</h5>
                        <p>
                            {!! asset($generalContent->address) !!}
                        </p>
                    </div>
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
                        <div class="alt-icon-sm-top"><i class="icon icon-basic-alarm"></i></div>
                        <h5 class="features-title">Office Hours</h5>
                        <p>
                            {!! asset($generalContent->officeHours) !!}
                        </p>
                    </div>
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2s">
                        <div class="alt-icon-sm-top"><i class="icon icon-basic-headset"></i></div>
                        <h5 class="features-title">Contact</h5>
                        <p class="contact-link">
                            <a href="mailto:{!! asset($generalContent->email) !!}"><span
                                        class="text-bold">Email :</span>{!! asset($generalContent->email) !!}</a><br/>
                            <a><span class="text-bold">Call :</span> {!! asset($generalContent->contactNo) !!}</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Info Section-->

        <!--Footer Section-->
        <footer id="footer" class="footer section-padding gray-bg">
            <div class="container text-center">


                <!-- Copyright -->
                <p class="copyright mb-25">
                    &copy; 2016 <a><b> Design One </b></a>. All Rights Reserved.<br>

                </p>
                <!-- Copyright -->

                <!-- Social -->
                <ul class="social">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>

                </ul>
                <!-- End Social -->

            </div>
        </footer>
        <!-- End Footer Section-->

    </div>
</div>
<!-- End Page Wraper -->

<!-- Js -->
<script src="{!! asset('js/jquery-1.11.2.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.easing.1.3.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.fitvids.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.stellar.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/isotope.pkgd.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.appear.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.fs.tipper.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.countTo.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/owl.carousel.min.js') !!}" type="text/javascript"></script>

<!-- SLIDER REVOLUTION SCRIPTS  -->
<script src="{!! asset('rs-plugin/js/jquery.themepunch.tools.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('rs-plugin/js/jquery.themepunch.revolution.min.js') !!}" type="text/javascript"></script>
<!-- End SLIDER REVOLUTION SCRIPTS  -->
<script src="{!! asset('js/plugins/jquery.magnific-popup.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.singlePageNav.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/wow.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/plugins/jquery.validate.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('/contact-form.js') !!}" type="text/javascript"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>--}}
{{--<script src="js/map.js') !!}" type="text/javascript"></script>--}}
<script src="{!! asset('js/theme.js') !!}" type="text/javascript"></script>

</body>
</html>
