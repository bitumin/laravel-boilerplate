@extends('templates.piple.layout')

@section('title')

<title>Piple - Creative One Page Template</title>
@endsection

@section('css')

@endsection

@section('content')

<div class="fullwidthbanner" id="home">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE 1 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('img/piple/bg-1.jpg') }}" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                    welcome to <span>Piple</span>
                </div> <!-- /tp-caption -->
                <!-- LAYER NR. 2 -->
                <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit aute irure
                </div> <!-- /tp-caption -->

                <!-- LAYER NR. 3 -->
                <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                    <a class="btn btn-white" href="#about">See more</a>
                </div> <!-- /tp-caption -->
            </li>
            <!-- SLIDE 2 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('img/piple/bg-3.jpg') }}" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                    Modern <span>Agency</span>
                </div> <!-- /tp-caption -->

                <!-- LAYER NR. 2 -->
                <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit aute irure
                </div> <!-- /tp-caption -->

                <!-- LAYER NR. 3 -->
                <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                    <a class="btn btn-white" href="#about">See more</a>
                </div> <!-- /tp-caption -->
            </li>
            <!-- SLIDE 3 -->
        </ul>
    </div>
</div><!--full width banner-->





<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="section-title">
                    <h1>modern <span class="candiman">Digital agency</span></h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        we are a creative agency located in <span class="colored-text">sydney, australia.</span> It is a long established fact that a reader will be distracted by the readable content.
                    </p>
                </div>
            </div>
        </div><!-- title row end-->

        <div class="row">
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap clearfix">
                    <div class="left-side-icon">
                        <i class="ion-ios-lightbulb-outline front-icon"></i>
                        <i class="ion-ios-lightbulb-outline back-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>creative Designs</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div><!--features icon wrap-->
            </div><!--features col-->
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap clearfix">
                    <div class="left-side-icon">
                        <i class="ion-ios-gear-outline front-icon"></i>
                        <i class="ion-ios-gear-outline back-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>Great support</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div><!--features icon wrap-->
            </div><!--features col-->
        </div><!--row-->
        <div class="row">
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap clearfix">
                    <div class="left-side-icon">
                        <i class="ion-iphone front-icon"></i>
                        <i class="ion-iphone back-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>Fully Responsive</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div><!--features icon wrap-->
            </div><!--features col-->
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap clearfix">
                    <div class="left-side-icon">
                        <i class="ion-ios-people-outline front-icon"></i>
                        <i class="ion-ios-people-outline back-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>Dedicated Team</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div><!--features icon wrap-->
            </div><!--features col-->
        </div><!--row-->
    </div><!--container-->
</section><!--about section end-->

<div class="funfacts parallax-1">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 margin-bottom30 text-center">
                <div class="fact-box">
                    <h2>654</h2>
                    <h5>Happy Clients</h5>
                    <span class="border-line"></span>
                </div>
            </div><!--fact cols-->
            <div class="col-sm-3 margin-bottom30 text-center">
                <div class="fact-box">
                    <h2>832</h2>
                    <h5>Projects finish</h5>
                    <span class="border-line"></span>
                </div>
            </div><!--fact cols-->
            <div class="col-sm-3 margin-bottom30 text-center">
                <div class="fact-box">
                    <h2>800</h2>
                    <h5>Pizza ordered </h5>
                    <span class="border-line"></span>
                </div>
            </div><!--fact cols-->
            <div class="col-sm-3 margin-bottom30 text-center">
                <div class="fact-box">
                    <h2>750</h2>
                    <h5>Cups of coffee</h5>
                    <span class="border-line"></span>
                </div>
            </div><!--fact cols-->

        </div>
    </div>
</div>
<div class="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-title text-center">
                    <h1> <span class="candiman">Piple</span> team</h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-4 margin-bottom30">
                <div class="team-box">
                    <img src="{{ asset('img/piple/team-2.jpg') }}" class="img-responsive" alt="">

                    <ul class="social list-inline">
                        <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="team-desc">
                    <h4>Daniel Smith</h4>
                    <em>Manager</em>
                </div>
            </div><!--team col end-->
            <div class="col-sm-4 margin-bottom30">
                <div class="team-box">
                    <img src="{{ asset('img/piple/team-3.jpg') }}" class="img-responsive" alt="">
                    <ul class="social list-inline">
                        <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="team-desc">
                    <h4>Daniel Smith</h4>
                    <em>Manager</em>
                </div>
            </div><!--team col end-->
            <div class="col-sm-4 margin-bottom30">
                <div class="team-box">
                    <img src="{{ asset('img/piple/team-4.jpg') }}" class="img-responsive" alt="">
                    <ul class="social list-inline">
                        <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                    </ul>
                </div>
                <div class="team-desc">
                    <h4>Daniel Smith</h4>
                    <em>Manager</em>
                </div>
            </div><!--team col end-->
        </div>
    </div>
</div><!--team section end-->
<section id="services" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="section-title">
                    <h1>Our <span class="colored-text">Services</span></h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        Why you choose <span class="colored-text">piple</span>
                    </p>
                </div>
            </div>
        </div><!-- title row end-->
        <div class="row">
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap services-icons clearfix">
                    <div class="left-side-icon">
                        <i class="ion-ios-paperplane-outline front-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>Marketing</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div>
            </div><!--services col-->
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap services-icons clearfix">
                    <div class="left-side-icon">
                        <i class="ion-ios-browsers-outline front-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>Web & Graphics design</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div>
            </div><!--services col-->
        </div><!--services row-->
        <div class="row">
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap services-icons clearfix">
                    <div class="left-side-icon">
                        <i class="ion-ios-world-outline front-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>Social Media</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div>
            </div><!--services col-->
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap services-icons clearfix">
                    <div class="left-side-icon">
                        <i class="ion-ios-color-wand-outline front-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>Creative ideas</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div>
            </div><!--services col-->
        </div><!--services row-->
        <div class="row">
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap services-icons clearfix">
                    <div class="left-side-icon">
                        <i class="ion-ios-crop front-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>Responsive Design</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div>
            </div><!--services col-->
            <div class="col-sm-6 margin-bottom30">
                <div class="feature-icon-wrap services-icons clearfix">
                    <div class="left-side-icon">
                        <i class="ion-ios-people-outline front-icon"></i>
                    </div>
                    <div class="features-text-right">
                        <h3>Customer Support</h3>
                        <p>
                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                        </p>
                    </div>
                </div>
            </div><!--services col-->
        </div><!--services row-->
    </div>
</section><!--services section end-->
<div class="testimonials parallax-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="flexslider testislider">
                    <ul class="slides">
                        <li>
                            <div class="slide-items">
                                <img src="{{ asset('img/piple/team-1.jpg') }}" alt="">
                                <p>
                                    Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus.
                                </p>
                                <h5>Maria Navratilova - Codeflicks inc.</h5>
                            </div>
                        </li>
                        <li>
                            <div class="slide-items">
                                <img src="{{ asset('img/piple/team-2.jpg') }}" alt="">
                                <p>
                                    Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus.
                                </p>
                                <h5>Maria Navratilova - Codeflicks inc.</h5>
                            </div>
                        </li>
                        <li>
                            <div class="slide-items">
                                <img src="{{ asset('img/piple/team-3.jpg') }}" alt="">
                                <p>
                                    Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus.
                                </p>
                                <h5>Maria Navratilova - Codeflicks inc.</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--testimonials-->
<div class="price-tables section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <div class="section-title">
                    <h1>Our <span class="colored-text">Pricing</span></h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        Vivamus congue diam vitae tortor imperdiet congue.
                    </p>
                </div>
            </div>
        </div><!-- title row end-->
        <div class="row">
            <div class="col-sm-4 margin-bottom30">
                <div class="price-box text-center">
                    <div class="header ">
                        <h3>Standard</h3>
                        <div class="price">
                            <h2>$3.99</h2>
                            <span>Start price / month</span>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        <li>10 GB Storage Space</li>
                        <li>50 GB Bandwidth</li>
                        <li>Unlimited Users</li>
                        <li>No Time Tracking</li>
                        <li>Enhanced Security</li>
                    </ul>
                    <div class="price-footer">
                        <h4><a href="#" class="btn btn-white">Buy Now</a></h4>
                    </div>
                </div>
            </div><!--price col-->
            <div class="col-sm-4 margin-bottom30">
                <div class="price-box text-center">
                    <div class="header active">
                        <h3>Standard</h3>
                        <div class="price">
                            <h2>$3.99</h2>
                            <span>Start price / month</span>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        <li>10 GB Storage Space</li>
                        <li>50 GB Bandwidth</li>
                        <li>Unlimited Users</li>
                        <li>No Time Tracking</li>
                        <li>Enhanced Security</li>
                    </ul>
                    <div class="price-footer">
                        <h4><a href="#" class="btn btn-border-theme">Buy Now</a></h4>
                    </div>
                </div>
            </div><!--price col-->
            <div class="col-sm-4 margin-bottom30">
                <div class="price-box text-center">
                    <div class="header">
                        <h3>Standard</h3>
                        <div class="price">
                            <h2>$3.99</h2>
                            <span>Start price / month</span>
                        </div>
                    </div>
                    <ul class="list-unstyled">
                        <li>10 GB Storage Space</li>
                        <li>50 GB Bandwidth</li>
                        <li>Unlimited Users</li>
                        <li>No Time Tracking</li>
                        <li>Enhanced Security</li>
                    </ul>
                    <div class="price-footer">
                        <h4><a href="#" class="btn btn-white">Buy Now</a></h4>
                    </div>
                </div>
            </div><!--price col-->
        </div>
    </div>
</div><!--pricing-->
<div class="cta cta-bg">
    <div class="container text-center scroll-to">
        <h1>WE'VE GOT PLENTY MORE TO SAY</h1>
        <a href="#contact" class="btn btn-white btn-radius btn-lg">Let's talk</a>
    </div>
</div><!--call to action-->

<section id="work" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-title text-center">
                    <h1> <span class="candiman">Piple's</span> Portfolio</h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        Vivamus congue diam vitae tortor imperdiet congue.
                    </p>
                </div>
            </div>
        </div><!--heading row-->


        <div class="row">
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="{{ asset('img/piple/work-1.jpg') }}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="{{ asset('img/piple/work-1.jpg') }}" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                        </a>
                    </div>
                </div>
            </div><!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="{{ asset('img/piple/work-2.jpg') }}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="{{ asset('img/piple/work-2.jpg') }}" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                        </a>
                    </div>
                </div>
            </div><!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="{{ asset('img/piple/work-3.jpg') }}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="{{ asset('img/piple/work-3.jpg') }}" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                        </a>
                    </div>
                </div>
            </div><!--work col-->
        </div><!--work row-->
        <div class="row">
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="{{ asset('img/piple/work-4.jpg') }}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="{{ asset('img/piple/work-4.jpg') }}" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                        </a>
                    </div>
                </div>
            </div><!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="{{ asset('img/piple/work-5.jpg') }}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="{{ asset('img/piple/work-5.jpg') }}" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                        </a>
                    </div>
                </div>
            </div><!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="{{ asset('img/piple/work-6.jpg') }}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="{{ asset('img/piple/work-6.jpg') }}" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                        </a>
                    </div>
                </div>
            </div><!--work col-->
        </div><!--work row-->
        <div class="row">
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="{{ asset('img/piple/work-7.jpg') }}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="{{ asset('img/piple/work-7.jpg') }}" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                        </a>
                    </div>
                </div>
            </div><!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="{{ asset('img/piple/work-8.jpg') }}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="{{ asset('img/piple/work-8.jpg') }}" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                        </a>
                    </div>
                </div>
            </div><!--work col-->
            <div class="col-sm-4">
                <div class="entry-thumb portfolio-thumb">
                    <div class="imgoverlay text-light">
                        <a href="{{ asset('img/piple/work-9.jpg') }}" class="load-content prettyPhoto" data-gal="prettyPhoto[name_gallery]">
                            <img src="{{ asset('img/piple/work-9.jpg') }}" class="img-responsive" alt="">
                            <div class="overlay"><span class="overlaycolor"></span><div class="overlayinfo" style="margin-top: -11px;"><h6>Branding</h6></div></div>
                        </a>
                    </div>
                </div>
            </div><!--work col-->
        </div><!--work row-->
    </div>
</section><!--work section end-->


<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="section-title text-center">
                    <h1> <span class="candiman">Piple's</span> News</h1>
                    <span class="border-line"></span>
                    <p class="lead subtitle-caption">
                        Vivamus congue diam vitae tortor imperdiet congue.
                    </p>
                </div>
            </div>
        </div><!--heading row-->
    </div><!--container-->

    <div class="news-wrapper container-fluid">
        <div class='row'>
            <div class="col-sm-6 text-center no-padding">
                <a class="news-inner" href="{{ route('template.piple.post') }}" style="background:url(/img/piple/bg-1.jpg) no-repeat; background-size: cover;">
                    <div class="post-overlay"></div>
                    <div class="post-preview-content">
                        <h4 class="date">24 April, 2015</h4>
                        <h2 class="title">Clean & Flat one page theme</h2>
                        <span class="border-line"></span>
                        <p class="author">By Maria</p>
                    </div>
                </a>
            </div><!--news col-->
            <div class="col-sm-6 text-center no-padding">
                <a class="news-inner" href="{{ route('template.piple.post') }}" style="background:url(/img/piple/bg-2.jpg) no-repeat; background-size: cover;">
                    <div class="post-overlay"></div>
                    <div class="post-preview-content">
                        <h4 class="date">24 April, 2015</h4>
                        <h2 class="title">Clean & Flat one page theme</h2>
                        <span class="border-line"></span>
                        <p class="author">By Maria</p>
                    </div>
                </a>
            </div><!--news col-->
            <div class="col-sm-6 text-center no-padding">
                <a class="news-inner" href="{{ route('template.piple.post') }}" style="background:url(/img/piple/bg-3.jpg) no-repeat; background-size: cover;">
                    <div class="post-overlay"></div>
                    <div class="post-preview-content">
                        <h4 class="date">24 April, 2015</h4>
                        <h2 class="title">Clean & Flat one page theme</h2>
                        <span class="border-line"></span>
                        <p class="author">By Maria</p>
                    </div>
                </a>
            </div><!--news col-->
            <div class="col-sm-6 text-center no-padding">
                <a class="news-inner" href="{{ route('template.piple.post') }}" style="background:url(/img/piple/bg-1.jpg) no-repeat; background-size: cover;">
                    <div class="post-overlay"></div>
                    <div class="post-preview-content">
                        <h4 class="date">24 April, 2015</h4>
                        <h2 class="title">Clean & Flat one page theme</h2>
                        <span class="border-line"></span>
                        <p class="author">By Maria</p>
                    </div>
                </a>
            </div><!--news col-->
        </div>
    </div>
    <div class="clearfix"></div>
</section><!--news section end-->
<div class="cta">
    <div class="container text-center scroll-to">
        <h1>Simple & clean one page template</h1>
        <a href="#contact" class="btn btn-border-theme btn-radius btn-lg">Purchase now</a>
    </div>
</div><!--call to action-->


<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="row contact-details">
                    <div class="col-sm-4 margin-bottom30 text-center">
                        <i class="ion-ios-location-outline"></i>
                        <h4>California, Usa</h4>
                    </div>
                    <div class="col-sm-4 margin-bottom30 text-center">
                        <i class="ion-ios-email-outline"></i>
                        <h4>support@piple.com</h4>
                    </div>
                    <div class="col-sm-4 margin-bottom30 text-center">
                        <i class="ion-ios-telephone-outline"></i>
                        <h4>+01 - 4567 - 65678</h4>
                    </div>
                </div><!--contact details-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">

                <form name="sentMessage" class="contact-form" id="contactForm" method="post" novalidate>
                    <h3>Drop us a line</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">

                                    <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 controls">

                                    <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12  controls">

                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 controls">

                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12 text-right">
                            <button type="submit" class="btn btn-white btn-lg">Send Message</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section><!--contact section end-->
@endsection
@section('js')

@endsection