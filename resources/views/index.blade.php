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
                        <li><a href="#latest-work">Work</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#client">Client</a></li>
                        <li><a href="#elements">Elements</a></li>
                        <li><a href="#contact-us">Contact</a></li>
                        <li><a class="nav-external all-demos-link" href="" target="_blank">Demos</a></li>
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
                        <li class="dark-bg" data-transition="fade" data-slotamount="5" data-masterspeed="700">
                            <!-- MAIN IMAGE -->
                            <img src="img/full/28.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="top center"
                                 data-bgrepeat="no-repeat">

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
                                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">We Are Mazel
                                One
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
                                A donec sodales sagittis magna. Sed consequat, leo eget bibendum amet nibh<br/>
                                sodales augue velit cursus nunc.
                            </p>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption lfb ltt tp-resizeme sc-button"
                                 data-x="center" data-hoffset="0"
                                 data-y="center" data-voffset="125"
                                 data-speed="600"
                                 data-start="1100"
                                 data-easing="Power4.easeOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn"
                                 style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                                <a class="btn btn-md btn-black">Shop Now</a>
                            </div>

                        </li>

                        <!-- SLIDE  -->
                        @if(!empty($sliderImages))
                            @foreach($sliderImages as $sliderImage)
                                <li class="dark-bg" data-transition="fade" data-slotamount="5" data-masterspeed="700">
                                    <!-- MAIN IMAGE -->
                                    <img src="{!! asset('img/full/'.$sliderImage->id.'.jpg') !!}" alt="slidebg2" data-bgfit="cover"
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
                                        Flexible
                                        & Customizable
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
                                        A donec sodales sagittis magna. Sed consequat, leo eget bibendum amet nibh<br/>
                                        sodales augue velit cursus nunc.
                                    </p>

                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption lfb ltt tp-resizeme sc-button"
                                         data-x="center" data-hoffset="0"
                                         data-y="center" data-voffset="125"
                                         data-speed="600"
                                         data-start="1100"
                                         data-easing="Power4.easeOut"
                                         data-splitin="none"
                                         data-splitout="none"
                                         data-elementdelay="0.01"
                                         data-endelementdelay="0.1"
                                         data-endspeed="500"
                                         data-endeasing="Power4.easeIn"
                                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                                        <a class="btn btn-md btn-black">Shop Now</a>
                                    </div>

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
                <h2>About <span class="text-light">Studio</span></h2>
                <p class="max-width-700 lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium totam aperiam.</p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 content-box mb-sm-30 wow fadeIn" data-wow-delay="0.2s"
                         data-wow-duration="2s">
                        <div class="icon-top"><i class="icon icon-basic-anchor"></i></div>
                        <h5 class="features-title">We’re Creative</h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat quo.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 content-box mb-sm-30 wow fadeIn" data-wow-delay="0.4s"
                         data-wow-duration="2s">
                        <div class="icon-top"><i class="icon icon-basic-alarm"></i></div>
                        <h5 class="features-title">TWe have magic</h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat quo.</p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 content-box mb-sm-30 wow fadeIn" data-wow-delay="0.6s"
                         data-wow-duration="2s">
                        <div class="icon-top"><i class="icon icon-basic-globe"></i></div>
                        <h5 class="features-title">Why we do it</h5>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                            consequatur vel illum qui dolorem eum fugiat quo.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Statement1 Section -->
        <section id="Statement1" class="section-padding bg-image overlay-dark dark-bg text-center"
                 data-stellar-background-ratio="0.5" data-background-img="img/full/33.jpg">
            <div class="container">
                <p class="max-width-700 lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium totam aperiam.</p>
                <a class="btn btn-md btn-color">Download</a>
            </div>
        </section>
        <!-- End Statement1 Section -->

        <!-- Team Section -->
        <section id="team-people" class="section-padding text-center">
            <div class="container">
                <h2 class="page-title">Our <span class="text-light">Team</span></h2>
            </div>
            <div class="container">
                <div class="row">
                    <!--Team Carousel -->
                    <div class="owl-carousel team-carousel nf-carousel-theme">

                        <div class="item">
                            <div class="team-item">
                                <div class="team-item-img">
                                    <img src="img/team/01.jpg" alt=""/>
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Mitchell KAPPOS</h5>
                                            <p>To portal for some of the world's most high-value net.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i
                                                                class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i
                                                                class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i
                                                                class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h6>Mitchell KAPPOS</h6>
                                    <p class="">( Graphic Designer )</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item">
                                <div class="team-item-img">
                                    <img src="img/team/03.jpg" alt=""/>
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Leonardo da Vinci</h5>
                                            <p>To portal for some of the world's most high-value net.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i
                                                                class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i
                                                                class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i
                                                                class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h6>Leonardo da Vinci</h6>
                                    <p class="">( Front-End Dev )</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item">
                                <div class="team-item-img">
                                    <img src="img/team/07.jpg" alt=""/>
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>John Doe</h5>
                                            <p>To portal for some of the world's most high-value net.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i
                                                                class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i
                                                                class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i
                                                                class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h6>John Doe</h6>
                                    <p class="">( Project Manager )</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item">
                                <div class="team-item-img">
                                    <img src="img/team/04.jpg" alt=""/>
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Michael Lee</h5>
                                            <p>To portal for some of the world's most high-value net.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i
                                                                class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i
                                                                class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i
                                                                class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h6>Michael Lee</h6>
                                    <p class="">( Web Developer )</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item">
                                <div class="team-item-img">
                                    <img src="img/team/02.jpg" alt=""/>
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Michael Lee</h5>
                                            <p>To portal for some of the world's most high-value net.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i
                                                                class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i
                                                                class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i
                                                                class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h6>Michael Lee</h6>
                                    <p class="">Photographer</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="team-item">
                                <div class="team-item-img">
                                    <img src="img/team/06.jpg" alt=""/>
                                    <div class="team-item-detail">
                                        <div class="team-item-detail-inner light-color">
                                            <h5>Michael Lee</h5>
                                            <p>To portal for some of the world's most high-value net.</p>
                                            <ul class="social">
                                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.twitter.com/" target="_blank"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                <li><a href="https://www.dribbble.com/" target="_blank"><i
                                                                class="fa fa-dribbble"></i></a></li>
                                                <li><a href="https://www.pinterest.com/" target="_blank"><i
                                                                class="fa fa-pinterest"></i></a></li>
                                                <li><a href="https://www.behance.net/" target="_blank"><i
                                                                class="fa fa-behance"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-item-info">
                                    <h6>Michael Lee</h6>
                                    <p class="">Photographer</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--End Team Carousel --->
                </div>
            </div>
        </section>
        <!-- End Team Section -->

        <hr/>

        <!-- Accordian & Skills Section-->
        <section id="accordian_skills" class="section-padding">
            <div class="container text-center">
                <h2 class="page-title">Skills <span class="text-light">&</span> History</h2>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Accordian -->
                    <div class="col-md-6 col-sm-6 mb-sm-30">
                        <div class="accordion">
                            <div class="accordion-title">
                                <a href="">Jan 14, 2008 (Opening)</a>
                            </div>
                            <div class="accordion-content">
                                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                molestiae consequatur vel illum qui dolorem eum fugiat quo.
                            </div>
                            <div class="accordion-title">
                                <a href="">FEB 18, 2011 (The best company of the year)</a>
                            </div>
                            <div class="accordion-content">
                                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                molestiae consequatur vel illum qui dolorem eum fugiat quo.
                            </div>
                            <div class="accordion-title">
                                <a href="">APR 6, 2013 (Opening </a>
                            </div>
                            <div class="accordion-content">
                                Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                molestiae consequatur vel illum qui dolorem eum fugiat quo.
                            </div>
                        </div>
                    </div>
                    <!-- End Accordian -->

                    <!-- Skills -->
                    <div class="col-md-6 col-sm-6">
                        <div class="skillbar" data-percent="55%">
                            <h6 class="skillbar-title">Design</h6>
                            <div class="skill-bar-percent">55%</div>
                            <div class="skillbar-bar">
                                <div class="skillbar-bar-child"></div>
                            </div>
                        </div>

                        <div class="skillbar" data-percent="80%">
                            <h6 class="skillbar-title">Development</h6>
                            <div class="skill-bar-percent">80%</div>
                            <div class="skillbar-bar">
                                <div class="skillbar-bar-child"></div>
                            </div>
                        </div>

                        <div class="skillbar" data-percent="40%">
                            <h6 class="skillbar-title">Photography</h6>
                            <div class="skill-bar-percent">40%</div>
                            <div class="skillbar-bar">
                                <div class="skillbar-bar-child"></div>
                            </div>
                        </div>

                        <div class="skillbar" data-percent="70%">
                            <h6 class="skillbar-title">Branding</h6>
                            <div class="skill-bar-percent">70%</div>
                            <div class="skillbar-bar">
                                <div class="skillbar-bar-child"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End Skills -->
                </div>
            </div>
        </section>
        <!-- End Accordian & Skills Section-->

        <!-- Testimonials Section-->
        <section id="testimonials" class="section-padding bg-image overlay-dark dark-bg text-center"
                 data-stellar-background-ratio="0.5" data-background-img="img/full/05.jpg">
            <div class="container">
                <div class="owl-carousel testimonial-carousel nf-carousel-theme white">
                    <div class="item">
                        <div class="testimonial text-center max-width-700">
                            <div class="page-icon-sm"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">I got a dummy for Christmas and started teaching myself. I got books and
                                records and sat in front of the practising.</p>
                            <h6 class="quote-author">Jeff Dunham <span style="font-weight: 400;">( Appel Studio )</span>
                            </h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial text-center max-width-700">
                            <div class="page-icon-sm"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">you can never eat a pet you name. And anyway, I did my first show in the
                                third grade it would be like a ventriloquist.</p>
                            <h6 class="quote-author">Alexander Theroux <span style="font-weight: 400;">( USA )</span>
                            </h6>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial text-center max-width-700">
                            <div class="page-icon-sm"><i class="fa fa-quote-right"></i></div>
                            <p class="lead">We're not leaving here without Buster, man. Leave no crash-test dummy
                                behind!</p>
                            <h6 class="quote-author">Adam Savage <span style="font-weight: 400;">( Artist )</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- Work Process Section -->
        <section id="process" class="section-padding">
            <div class="container text-center">
                <h2 class="page-title">Work <span class="text-light">Process</span></h2>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="process-box col-md-2 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="0.2s"
                         data-wow-duration="2s">
                        <div class="tipped" data-title="Step1 - Skype Interview"
                             data-tipper-options='{"direction":"top"}'>
                            <div class="process-icon alt-icon-top"><i class="icon icon-basic-headset"></i></div>
                            <h6>Interview</h6>
                        </div>
                    </div>
                    <div class="process-box col-md-2 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="0.4s"
                         data-wow-duration="2s">
                        <div class="tipped" data-title="Step2 - Project Plan" data-tipper-options='{"direction":"top"}'>
                            <div class="process-icon alt-icon-top"><i class="icon icon-basic-book-pencil"></i></div>
                            <h6>Plan</h6>
                        </div>
                    </div>
                    <div class="process-box col-md-2 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s"
                         data-wow-duration="2s">
                        <div class="tipped" data-title="Step3 - Design" data-tipper-options='{"direction":"top"}'>
                            <div class="process-icon alt-icon-top"><i class="icon icon-basic-picture-multiple"></i>
                            </div>
                            <h6>Design</h6>
                        </div>
                    </div>
                    <div class="process-box col-md-2 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="0.8s"
                         data-wow-duration="2s">
                        <div class="tipped" data-title="Step4 - Development" data-tipper-options='{"direction":"top"}'>
                            <div class="process-icon alt-icon-top"><i class="icon icon-basic-gear"></i></div>
                            <h6>Development</h6>
                        </div>
                    </div>
                    <div class="process-box col-md-2 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1s"
                         data-wow-duration="2s">
                        <div class="tipped" data-title="Step5 - Testing" data-tipper-options='{"direction":"top"}'>
                            <div class="process-icon alt-icon-top"><i class="icon icon-ecommerce-graph3"></i></div>
                            <h6>Testing</h6>
                        </div>
                    </div>
                    <div class="process-box col-md-2 col-sm-4 col-xs-6 wow fadeIn" data-wow-delay="1.2s"
                         data-wow-duration="2s">
                        <div class="tipped" data-title="Step6 - Delivery" data-tipper-options='{"direction":"top"}'>
                            <div class="process-icon alt-icon-top"><i class="icon icon-basic-anticlockwise"></i></div>
                            <h6>Delivery</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Work Process Section -->

        <hr/>

        <!--Latest Work Section-->
        <section id="latest-work" class="section-padding">
            <div class="container text-center">
                <h2 class="page-title">Latest <span class="text-light">Work</span></h2>
            </div>
            <div class="owl-carousel content-carousel content-slider">
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mb-sm-30">
                                <img src="img/mockup01.png" alt=""/>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <h4 class="content-title">Project name & Title</h4>
                                <p>Cras dapibus Vivamus elementum semper nisi Aenean vulputate eleifend tellus Aenean
                                    leo ligula, porttitor eu consequat vitae Phasellus viverra nulla ut metus varius
                                    laoreet.</p>
                                <ul class="list-inside">
                                    <li>Branding Design</li>
                                    <li>Web Design</li>
                                </ul>
                                <a target="_blank" href="http://google.com/" class="btn btn-md btn-black">Visit Site <i
                                            class="fa fa-external-link right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 mb-sm-30">
                                <h4 class="content-title">Project name & Title</h4>
                                <p>Cras dapibus Vivamus elementum semper nisi Aenean vulputate eleifend tellus Aenean
                                    leo ligula, porttitor eu consequat vitae Phasellus viverra nulla ut metus varius
                                    laoreet.</p>
                                <ul class="list-inside">
                                    <li>Fully Responsive</li>
                                    <li>Web Design</li>
                                </ul>
                                <a target="_blank" href="http://google.com/" class="btn btn-md btn-black">Visit Site <i
                                            class="fa fa-external-link right"></i></a>
                            </div>
                            <div class="col-md-6 col-md-offset-1">
                                <img src="img/mockup01.png" alt=""/>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 mb-sm-30">
                                <img src="img/mockup01.png" alt=""/>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <h4 class="content-title">Fully Responsive</h4>
                                <p>Cras dapibus Vivamus elementum semper nisi Aenean vulputate eleifend tellus Aenean
                                    leo ligula, porttitor eu consequat vitae Phasellus viverra nulla ut metus varius
                                    laoreet.</p>
                                <p>porttitor eu consequat vitae Phasellus viverra nulla ut metus varius laoreet</p>
                                <div class="spacer-15"></div>
                                <a target="_blank" href="http://google.com/" class="btn btn-md btn-black">Visit Site <i
                                            class="fa fa-external-link right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Latest Work Section-->

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
                    <!------->
                    <div class="portfolio-item branding photography coffee">
                        <div class="portfolio-box">
                            <a class="portfolio-image-wrap">
                                <img src="img/portfolio/thumb/01.jpg" alt=""/></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-tb">
                                    <div class="portfolio-caption-tb-cell">
                                        <h5>Digital Camera mockup</h5>
                                        <p>Mockup - Photography - Graphic - Branding</p>
                                        <ul class="portfolio-btn-wraper">
                                            <li>
                                                <a class="gallery-popup-link btn btn-color"
                                                   href="img/portfolio/large/01.jpg" title="Portfolio Image 01"><i
                                                            class="fa fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------->
                    <div class="portfolio-item">
                        <div class="portfolio-box">
                            <a class="portfolio-image-wrap">
                                <img src="img/portfolio/thumb/02.jpg" alt=""/></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-tb">
                                    <div class="portfolio-caption-tb-cell">
                                        <h5>Digital Camera mockup</h5>
                                        <p>Mockup - Photography - Graphic - Branding</p>
                                        <ul class="portfolio-btn-wraper">
                                            <li>
                                                <a class="gallery-popup-link btn btn-color"
                                                   href="img/portfolio/large/02.jpg" title="Portfolio Image 02"><i
                                                            class="fa fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------->
                    <div class="portfolio-item branding photography">
                        <div class="portfolio-box">
                            <a class="portfolio-image-wrap">
                                <img src="img/portfolio/thumb/03.jpg" alt=""/></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-tb">
                                    <div class="portfolio-caption-tb-cell">
                                        <h5>Digital Camera mockup</h5>
                                        <p>Mockup - Photography - Graphic - Branding</p>
                                        <ul class="portfolio-btn-wraper">
                                            <li>
                                                <a class="gallery-popup-link btn btn-color"
                                                   href="img/portfolio/large/03.jpg" title="Portfolio Image 03"><i
                                                            class="fa fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------->
                    <div class="portfolio-item creative">
                        <div class="portfolio-box">
                            <a class="portfolio-image-wrap">
                                <img src="img/portfolio/thumb/04.jpg" alt=""/></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-tb">
                                    <div class="portfolio-caption-tb-cell">
                                        <h5>Digital Camera mockup</h5>
                                        <p>Mockup - Photography - Graphic - Branding</p>
                                        <ul class="portfolio-btn-wraper">
                                            <li>
                                                <a class="gallery-popup-link btn btn-color"
                                                   href="img/portfolio/large/04.jpg" title="Portfolio Image 04"><i
                                                            class="fa fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------->
                    <div class="portfolio-item creative">
                        <div class="portfolio-box">
                            <a class="portfolio-image-wrap">
                                <img src="img/portfolio/thumb/05.jpg" alt=""/></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-tb">
                                    <div class="portfolio-caption-tb-cell">
                                        <h5>Digital Camera mockup</h5>
                                        <p>Mockup - Photography - Graphic - Branding</p>
                                        <ul class="portfolio-btn-wraper">
                                            <li>
                                                <a class="gallery-popup-link btn btn-color"
                                                   href="img/portfolio/large/05.jpg" title="Portfolio Image 05"><i
                                                            class="fa fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------->
                    <div class="portfolio-item branding photography">
                        <div class="portfolio-box">
                            <a class="portfolio-image-wrap">
                                <img src="img/portfolio/thumb/06.jpg" alt=""/></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-tb">
                                    <div class="portfolio-caption-tb-cell">
                                        <h5>Digital Camera mockup</h5>
                                        <p>Mockup - Photography - Graphic - Branding</p>
                                        <ul class="portfolio-btn-wraper">
                                            <li>
                                                <a class="gallery-popup-link btn btn-color"
                                                   href="img/portfolio/large/06.jpg" title="Portfolio Image 06"><i
                                                            class="fa fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------->
                    <div class="portfolio-item branding creative coffee">
                        <div class="portfolio-box">
                            <a class="portfolio-image-wrap">
                                <img src="img/portfolio/thumb/07.jpg" alt=""/></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-tb">
                                    <div class="portfolio-caption-tb-cell">
                                        <h5>Digital Camera mockup</h5>
                                        <p>Mockup - Photography - Graphic - Branding</p>
                                        <ul class="portfolio-btn-wraper">
                                            <li>
                                                <a class="gallery-popup-link btn btn-color"
                                                   href="img/portfolio/large/07.jpg" title="Portfolio Image 07"><i
                                                            class="fa fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------->
                    <div class="portfolio-item photography">
                        <div class="portfolio-box">
                            <a class="portfolio-image-wrap">
                                <img src="img/portfolio/thumb/08.jpg" alt=""/></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-tb">
                                    <div class="portfolio-caption-tb-cell">
                                        <h5>Digital Camera mockup</h5>
                                        <p>Mockup - Photography - Graphic - Branding</p>
                                        <ul class="portfolio-btn-wraper">
                                            <li>
                                                <a class="gallery-popup-link btn btn-color"
                                                   href="img/portfolio/large/08.jpg" title="Portfolio Image 08"><i
                                                            class="fa fa-search"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.dribbble.com/"><i class="fa fa-dribbble"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-black" target="_blank"
                                                   href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------->

                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- Action Box Section -->
        <section id="action-box2" class="action-box action-black">
            <div class="container">
                <div class="row action-box-left">
                    <h4 class="action-box-title">Powerfull Onepage Multipurpose Responsive Template ?</h4>
                </div>
                <div class="action-box-right">
                    <a class="btn btn-md btn-color" href="http://google.com/" target="_blank">See More</a>
                </div>
            </div>
        </section>
        <!-- Action Box Section -->

        <!-- Service Section -->
        <section id="service" class="section-padding">
            <div class="container mb-60 text-center">
                <h2>Our <span class="text-light">Service</span></h2>
                <p class="max-width-700 large">Excepturi Sint Occaecati Cupiditate non Provident voluptate.</p>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 pt-30 pt-sm-0">
                        <div class="content-box right wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                            <div class="icon-right"><i class="icon icon-basic-display"></i></div>
                            <h5 class="features-title">Bootstrap 3</h5>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                vel illum.</p>
                        </div>
                        <div class="content-box right wow fadeIn" data-wow-delay="0.2s" data-wow-duration="4s">
                            <div class="icon-right"><i class="icon icon-music-play-button"></i></div>
                            <h5 class="features-title">html5 & Youtube video</h5>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                vel illum.</p>
                        </div>
                        <div class="content-box right wow fadeIn" data-wow-delay="0.2s" data-wow-duration="6s">
                            <div class="icon-right"><i class="icon icon-basic-eye"></i></div>
                            <h5 class="features-title">Clean code & design</h5>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                vel illum.</p>
                        </div>
                        <div class="content-box right wow fadeIn" data-wow-delay="0.2s" data-wow-duration="8s">
                            <div class="icon-right"><i class="icon icon-basic-webpage-multiple"></i></div>
                            <h5 class="features-title">Unlimited layouts</h5>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                vel illum.</p>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs text-center">
                        <img src="img/mockup02.png" alt=""/>
                    </div>
                    <div class="col-md-4 col-sm-6 pt-30 pt-sm-0">
                        <div class="content-box left wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                            <div class="icon-left"><i class="icon icon-basic-gear"></i></div>
                            <h5 class="features-title">Flexible & Customizable</h5>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                vel illum.</p>
                        </div>
                        <div class="content-box left wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
                            <div class="icon-left"><i class="icon icon-basic-cards-diamonds"></i></div>
                            <h5 class="features-title">Multi Concept & Mutli prapose Theme</h5>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                vel illum.</p>
                        </div>
                        <div class="content-box left wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2s">
                            <div class="icon-left"><i class="icon icon-basic-sheet"></i></div>
                            <h5 class="features-title">Well Documented</h5>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                vel illum.</p>
                        </div>
                        <div class="content-box left wow fadeIn" data-wow-delay="0.8s" data-wow-duration="2s">
                            <div class="icon-left"><i class="icon icon-basic-headset"></i></div>
                            <h5 class="features-title">Friendly Support</h5>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                                vel illum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Service Section -->

        <!-- Counter Section -->
        <section id="counter" class="section-padding bg-image overlay-dark dark-bg" data-stellar-background-ratio="0.5"
                 data-background-img="img/full/14.jpg">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="alt-icon-top counter-icon"><i class="icon icon-basic-cup"></i></div>
                        <h1 class="counter-title counter-num">103</h1>
                        <h5 class="counter-sub-title">Awwards</h5>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="alt-icon-top counter-icon"><i class="icon icon-basic-heart"></i></div>
                        <h1 class="counter-title counter-num">256</h1>
                        <h5 class="counter-sub-title">client</h5>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="alt-icon-top counter-icon"><i class="icon icon-basic-case"></i></div>
                        <h1 class="counter-title counter-num">148</h1>
                        <h5 class="counter-sub-title">Project</h5>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-sm-30">
                        <div class="alt-icon-top counter-icon"><i class="icon icon-basic-lightbulb"></i></div>
                        <h1 class="counter-title counter-num">23</h1>
                        <h5 class="counter-sub-title">Team</h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter Section -->

        <!-- Pricing Table -->
        <section id="pricing" class="section-padding">
            <div class="container text-center">
                <h2 class="page-title">Pricing <span class="text-light">Table</span></h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.2s" data-wow-duration="2s">
                        <div class="pricing-box">
                            <div class="pricing-title pricing-padding-t">
                                <h4>Regular</h4>
                            </div>
                            <div class="pricing-price pricing-padding">
                                <p><span class="dollar">$</span><span class="pricing-price-lg">49</span><span
                                            class="pricing-price-sm">/ month</span></p>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li>Full Access</li>
                                    <li>1 Domain <strong>Free</strong></li>
                                    <li>Source Files</li>
                                    <li><strong>50 User Accounts</strong></li>
                                    <li>6 Month License</li>
                                    <li>Premium Support</li>
                                </ul>
                            </div>
                            <div class="pricing-button pricing-padding">
                                <a class="btn btn-md btn-black" href="http://google.com/" target="_blank"><i
                                            class="fa fa-user left"></i>Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
                        <div class="pricing-box highlight">
                            <div class="pricing-title pricing-padding-t">
                                <h4>Standard</h4>
                            </div>
                            <div class="pricing-price pricing-padding">
                                <p><span class="dollar">$</span><span class="pricing-price-lg color">99</span><span
                                            class="pricing-price-sm">/ month</span></p>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li>Full Access</li>
                                    <li>10 Domain <strong>Free</strong></li>
                                    <li>Source Files</li>
                                    <li><strong>500 User Accounts</strong></li>
                                    <li>6 Month License</li>
                                    <li>Premium Support</li>
                                </ul>
                            </div>
                            <div class="pricing-button pricing-padding">
                                <a class="btn btn-md btn-color" href="http://google.com/" target="_blank"><i
                                            class="fa fa-user left"></i>Sign Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2s">
                        <div class="pricing-box">
                            <div class="pricing-title pricing-padding-t">
                                <h4>Advanced</h4>
                            </div>
                            <div class="pricing-price pricing-padding">
                                <p><span class="dollar">$</span><span class="pricing-price-lg">199</span><span
                                            class="pricing-price-sm">/ month</span></p>
                            </div>
                            <div class="pricing-features">
                                <ul>
                                    <li>Full Access</li>
                                    <li>100 Domain <strong>Free</strong></li>
                                    <li>Source Files</li>
                                    <li><strong>5000 User Accounts</strong></li>
                                    <li>6 Month License</li>
                                    <li>Free Support</li>
                                </ul>
                            </div>
                            <div class="pricing-button pricing-padding">
                                <a class="btn btn-md btn-black" href="http://google.com/" target="_blank"><i
                                            class="fa fa-user left"></i>Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing Table -->

        <!-- video Section -->
        <section id="video-action" class="section-padding bg-image overlay-dark dark-bg"
                 data-stellar-background-ratio="0.5" data-background-img="img/full/02.jpg">
            <div class="container text-center">
                <div class="page-icon">
                    <a class="video-popup white" href="https://www.youtube.com/watch?v=JXOXns_gx8k"><i
                                class="icon icon-music-play-button"></i></a>
                </div>
                <p class="max-width-700 lead">
                    We’re developing a number of special projects if interested,<br/>
                    see the promo video
                </p>
                <h6 class="page-title-alt color mb-0">See Watch Video</h6>
            </div>
        </section>
        <!-- End video Section -->

        <!-- Client Logo -->
        <section id="client" class="section-padding">
            <div class="container text-center">
                <h2 class="page-title">Happy <span class="text-light">Client</span></h2>
            </div>
            <div class="container">
                <div class="owl-carousel client-carousel">
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/01.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/02.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/03.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/04.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/05.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/06.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/08.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/01.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/02.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-logo">
                            <a href="#">
                                <img src="img/logos/03.png" alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Client Logo -->

        <hr/>

        <!-- Tabs & Extra Elements -->
        <section id="elements" class="section-padding">
            <div class="container text-center">
                <h2 class="page-title">Tabs <span class="text-light">&</span> Elements</h2>
            </div>
            <div class="container">

                <ul class="tabs-nav alt-icon-tab text-center">
                    <li class="mb-30 active">
                        <a href="#tab-video" data-toggle="tab">
                            <div class="alt-icon-top"><i class="icon icon-basic-video"></i></div>
                            <h6>Video</h6>
                        </a>
                    </li>
                    <li class="mb-30">
                        <a href="#tab-image-slider" data-toggle="tab">
                            <div class="alt-icon-top"><i class="icon icon-basic-picture"></i></div>
                            <h6>Image Slider</h6>
                        </a>
                    </li>
                    <li class="mb-30">
                        <a href="#tab-icon-box" data-toggle="tab">
                            <div class="alt-icon-top"><i class="icon icon-basic-spades"></i></div>
                            <h6>Icon Box</h6>
                        </a>
                    </li>
                    <li class="mb-30">
                        <a href="#tab-content-box" data-toggle="tab">
                            <div class="alt-icon-top"><i class="icon icon-basic-webpage-txt"></i></div>
                            <h6>Content Box</h6>
                        </a>
                    </li>
                    <li class="mb-30">
                        <a href="#tab-cover-box" data-toggle="tab">
                            <div class="alt-icon-top"><i class="icon icon-basic-webpage-multiple"></i></div>
                            <h6>Cover Box</h6>
                        </a>
                    </li>
                </ul>
                <div class="tabs-cont">
                    <div id="tab-video" class="tab-pane active">
                        <div class="row">
                            <!--<div class="col-md-6">
                                <div class="media">
                                    <iframe src="https://player.vimeo.com/video/37298913?color=ffffff&title=0&byline=0&portrait=0" frameborder="0" allowfullscreen></iframe>
                                </div>
                                </div>-->
                            <div class="col-md-10 col-md-offset-1">
                                <div class="media">
                                    <iframe src="https://www.youtube.com/embed/k9EyPfc0FXc?rel=0&amp;controls=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-image-slider" class="tab-pane">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="owl-carousel image-carousel nf-carousel-theme white">
                                    <div class="item">
                                        <img src="img/full/06.jpg" alt=""/>
                                    </div>
                                    <div class="item">
                                        <img src="img/full/14.jpg" alt=""/>
                                    </div>
                                    <div class="item">
                                        <img src="img/full/09.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-icon-box" class="tab-pane">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12 mb-sm-30">
                                <div class="content-box alt-left">
                                    <div class="alt-icon-left">
                                        <i class="icon icon-basic-cup"></i>
                                    </div>
                                    <h5 class="features-title">Branding Design</h5>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur vel illum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mb-sm-30">
                                <div class="content-box alt-left">
                                    <div class="alt-icon-left">
                                        <i class="icon icon-basic-life-buoy"></i>
                                    </div>
                                    <h5 class="features-title">Web Design</h5>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur vel illum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mb-sm-30">
                                <div class="content-box alt-right">
                                    <div class="alt-icon-right">
                                        <i class="icon icon-basic-lightbulb"></i>
                                    </div>
                                    <h5 class="features-title">App Development</h5>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur vel illum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mb-sm-30">
                                <div class="content-box alt-left">
                                    <div class="alt-icon-left">
                                        <i class="icon icon-basic-star"></i>
                                    </div>
                                    <h5 class="features-title">Graphic Design</h5>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur vel illum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mb-sm-30">
                                <div class="content-box alt-left">
                                    <div class="alt-icon-left">
                                        <i class="icon icon-ecommerce-graph1"></i>
                                    </div>
                                    <h5 class="features-title">Landscape Photography</h5>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur vel illum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mb-sm-30">
                                <div class="content-box alt-right">
                                    <div class="alt-icon-right">
                                        <i class="icon icon-music-play-button"></i>
                                    </div>
                                    <h5 class="features-title">Photo Editing</h5>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur vel illum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-content-box" class="tab-pane">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                    <div class="content-box content-box-with-bg">
                                        <div class="icon-top icon-color"><i class="icon icon-basic-accelerator"></i>
                                        </div>
                                        <h5 class="features-title">Branding Design</h5>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                            nihil molestiae consequatur vel illum dolorem.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                    <div class="content-box content-box-with-bg">
                                        <div class="icon-top icon-color"><i class="icon icon-basic-cup"></i></div>
                                        <h5 class="features-title">Web Design</h5>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                            nihil molestiae consequatur vel illum dolorem.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                    <div class="content-box content-box-with-bg">
                                        <div class="icon-top icon-color"><i class="icon icon-basic-anchor"></i></div>
                                        <h5 class="features-title">App Development</h5>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                            nihil molestiae consequatur vel illum dolorem.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                    <div class="content-box content-box-with-bg">
                                        <div class="icon-top icon-black"><i class="icon icon-basic-globe"></i></div>
                                        <h5 class="features-title">Graphic Design</h5>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                            nihil molestiae consequatur vel illum dolorem.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                    <div class="content-box content-box-with-bg">
                                        <div class="icon-top icon-black"><i class="icon icon-basic-gear"></i></div>
                                        <h5 class="features-title">Photography</h5>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                            nihil molestiae consequatur vel illum dolorem.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                                    <div class="content-box content-box-with-bg">
                                        <div class="icon-top icon-black"><i class="icon icon-basic-paperplane"></i>
                                        </div>
                                        <h5 class="features-title">Photo Editing</h5>
                                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                                            nihil molestiae consequatur vel illum dolorem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-cover-box" class="tab-pane">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="cover-box mb-30">
                                        <figure class="cover-box-img">
                                            <img src="img/portfolio/thumb/09.jpg" alt="cover-img"/>
                                        </figure>
                                        <div class="cover-box-content">
                                            <h5>Responsive Design</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut
                                                dignissimos ea est, impedit incidunt, laboriosam maxime</p>
                                            <a class="link">Read More <i class="fa fa-angle-right right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cover-box mb-30">
                                        <figure class="cover-box-img">
                                            <img src="img/portfolio/thumb/06.jpg" alt="cover-img"/>
                                        </figure>
                                        <div class="cover-box-content">
                                            <h5>App Development</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut
                                                dignissimos ea est, impedit incidunt, laboriosam maxime</p>
                                            <a class="link">Read More <i class="fa fa-angle-right right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="cover-box mb-30">
                                        <figure class="cover-box-img">
                                            <img src="img/portfolio/thumb/05.jpg" alt="cover-img"/>
                                        </figure>
                                        <div class="cover-box-content">
                                            <h5>Photography</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aut
                                                dignissimos ea est, impedit incidunt, laboriosam maxime</p>
                                            <a class="link">Read More <i class="fa fa-angle-right right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Tabs & Extra Elements -->

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
                            502, DieSachbearbeiter, Schönhauser Allee,<br/>
                            167c10435 Berlin,Germany.
                        </p>
                    </div>
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.4s" data-wow-duration="2s">
                        <div class="alt-icon-sm-top"><i class="icon icon-basic-alarm"></i></div>
                        <h5 class="features-title">office Hours</h5>
                        <p>
                            Mon - Fri : 8am to 6pm<br/>
                            Sat : 10am to 2pm
                        </p>
                    </div>
                    <div class="col-md-4 mb-sm-30 wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2s">
                        <div class="alt-icon-sm-top"><i class="icon icon-basic-headset"></i></div>
                        <h5 class="features-title">Contact</h5>
                        <p class="contact-link">
                            <a href="mailto:yourname@domain.com"><span class="text-bold">Email :</span> yourname@domain
                                .com</a><br/>
                            <a><span class="text-bold">Call :</span> +40 (0) 012 345 6789</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Info Section-->

        <!--Footer Section-->
        <footer id="footer" class="footer section-padding gray-bg">
            <div class="container text-center">

                <!--Footer Logo-->
                <div class="footer-logo mb-25 wow fadeInUp" data-wow-duration="1.5s">
                    <a class="scroll-top" href="#intro">
                        <img src="img/logo-dark.png" alt="mazel"/>
                    </a>
                </div>
                <!--End Footer Logo-->

                <!-- Copyright -->
                <p class="copyright mb-25">
                    &copy; 2015 <a><b>Mazel Template</b></a>. All Rights Reserved.<br>
                    Template by <a href="http://nileforest.com/" target="_blank"><b>nileforest</b></a>
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
                    <li>
                        <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
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