@extends('templates.cloud.layout')

@section('title')
<title>Cloud Agency</title>
@endsection

@section('css')

@endsection

@section('content')
<div id="home-page">


    <!-- Header -->
    <header id="header" class="header-wrapper home-parallax home-fade">
        <div class="color-overlay"></div>
        <div class="header-wrapper-inner">
            <div class="container">

                <div class="intro">
                    <h1>a digital studio</h1>
                    <h3>create your own slogan</h3>
                    <a href="#services" class="btn btn-red-border">Our Works</a>
                </div><!-- /.intro -->

            </div><!-- /.container -->
        </div><!-- /.header-wrapper-inner -->
    </header>
    <!-- /Header -->



    <!-- start: about us section -->
    <section id="about" class="dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>about us <span>||| make sure you know about us</span></h2>
                    </div> <!-- /.section-title -->
                </div>
            </div>

            <div class="about-info">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('img/cloud/smart-watch.jpg') }}" alt="Smart Watch" class="img-responsive center-block">
                    </div>
                    <div class="col-md-8">
                        <h2>learn <strong>about</strong> us in a minute</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div><!-- /.about-info -->

            <div class="row">
                <div class="col-md-4">
                    <div class="about-content">
                        <div class="about-icon center-block">
                            <i class="ion-plane"></i>
                        </div>
                        <h3 class="about-heading">great transport</h3>
                        <p class="about-description">
                            Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                        </p>
                    </div> <!--  end of .about-content  -->
                </div>
                <div class="col-md-4">
                    <div class="about-content">
                        <div class="about-icon center-block">
                            <i class="ion-battery-charging"></i>
                        </div>
                        <h3 class="about-heading">great transport</h3>
                        <p class="about-description">
                            Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                        </p>
                    </div> <!--  end of .about-content  -->
                </div>
                <div class="col-md-4">
                    <div class="about-content">
                        <div class="about-icon center-block">
                            <i class="ion-flag"></i>
                        </div>
                        <h3 class="about-heading">great transport</h3>
                        <p class="about-description">
                            Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum tal esuada fames ante infaucibus.
                        </p>
                    </div> <!--  end of .about-content  -->
                </div>
            </div>
        </div>
    </section> <!-- /#about -->
    <!-- end: about us section-->


    <!-- start: our services section -->
    <section id="services" class="light-gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>our services <span>||| make sure you know about us</span></h2>
                    </div> <!-- /.section-title -->
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="service-content">
                        <i class="center-block ion-android-image"></i>
                        <h3>illustration</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-content">
                        <i class="center-block ion-android-camera"></i>
                        <h3>3d modeling</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-content">
                        <i class="center-block ion-bug"></i>
                        <h3>bugs free</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-content">
                        <i class="center-block ion-android-bicycle"></i>
                        <h3>smooth and fast</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-content">
                        <i class="center-block ion-android-boat"></i>
                        <h3>huge dashboard</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service-content">
                        <i class="center-block ion-android-color-palette"></i>
                        <h3>elegant design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- /#services -->
    <!-- end: our services section -->



    <!-- start: portfolio section-->
    <section id="portfolio" class="dark-gray-bg">
        <div class="container">

            <div class="row portfolio-filter">
                <div class="col-md-12 filter-button-group" id="filters">
                    <div class="section-title">
                        <h2>portfolio <span>||| check our latest works</span></h2>
                    </div> <!-- /.section-title -->
                    <button type="button" class="btn btn-default btn-red-border section-heading-btn" data-filter="*">view all</button>
                    <button type="button" class="btn btn-default" data-filter=".web">WEB</button>
                    <button type="button" class="btn btn-default" data-filter=".app">APP</button>
                    <button type="button" class="btn btn-default" data-filter=".design">DESIGN</button>
                    <button type="button" class="btn btn-default" data-filter=".seo">SEO</button>
                </div>
            </div>  <!-- row -->

            <div class="row">
                <div id="portfolioItems">

                    <div class="col-md-4 col-sm-6 col-xs-12 element-item web all" data-category="web all">
                        <figure class="effect-zoe">
                            <img class="img-responsive center-block" src="{{ asset('img/cloud/portfolio1.jpg') }}"  alt="Portfolio Thumbnail">
                            <figcaption>
                                <h2>Item Name</h2>
                                <p class="icon-links">
                                    <a href="#"><span class="ion-planet"></span></a>
                                    <a href="#"><span class="ion-flag"></span></a>
                                    <a href="#"><span class="ion-battery-charging"></span></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 element-item app all" data-category="app all">
                        <figure class="effect-zoe">
                            <img class="img-responsive center-block" src="{{ asset('img/cloud/portfolio2.jpg') }}" alt="Portfolio Thumbnail">
                            <figcaption>
                                <h2>Item Name</h2>
                                <p class="icon-links">
                                    <a href="#"><span class="ion-planet"></span></a>
                                    <a href="#"><span class="ion-flag"></span></a>
                                    <a href="#"><span class="ion-battery-charging"></span></a>
                                </p>
                            </figcaption>
                        </figure>

                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 element-item design all" data-category="design all">
                        <figure class="effect-zoe">
                            <img class="img-responsive center-block" src="{{ asset('img/cloud/portfolio3.jpg') }}" alt="Portfolio Thumbnail">
                            <figcaption>
                                <h2>Item Name</h2>
                                <p class="icon-links">
                                    <a href="#"><span class="ion-planet"></span></a>
                                    <a href="#"><span class="ion-flag"></span></a>
                                    <a href="#"><span class="ion-battery-charging"></span></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 element-item seo all" data-category="seo all">
                        <figure class="effect-zoe">
                            <img class="img-responsive center-block" src="{{ asset('img/cloud/portfolio5.jpg') }}" alt="Portfolio Thumbnail">
                            <figcaption>
                                <h2>Item Name</h2>
                                <p class="icon-links">
                                    <a href="#"><span class="ion-planet"></span></a>
                                    <a href="#"><span class="ion-flag"></span></a>
                                    <a href="#"><span class="ion-battery-charging"></span></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 element-item web all" data-category="web all">
                        <figure class="effect-zoe">
                            <img class="img-responsive center-block" src="{{ asset('img/cloud/portfolio4.jpg') }}" alt="Portfolio Thumbnail">
                            <figcaption>
                                <h2>Item Name</h2>
                                <p class="icon-links">
                                    <a href="#"><span class="ion-planet"></span></a>
                                    <a href="#"><span class="ion-flag"></span></a>
                                    <a href="#"><span class="ion-battery-charging"></span></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12 element-item app all" data-category="app all">
                        <figure class="effect-zoe">
                            <img class="img-responsive center-block" src="{{ asset('img/cloud/portfolio6.jpg') }}" alt="Portfolio Thumbnail">
                            <figcaption>
                                <h2>Item Name</h2>
                                <p class="icon-links">
                                    <a href="#"><span class="ion-planet"></span></a>
                                    <a href="#"><span class="ion-flag"></span></a>
                                    <a href="#"><span class="ion-battery-charging"></span></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>  <!-- #portfolioItems -->
            </div>  <!-- row -->
        </div>
    </section> <!-- /#portfolio -->
    <!-- end: portfolio section-->



    <!-- start: testimonial -->
    <section id="testimonial" class="dark-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>testimonial <span>||| what our client says</span></h2>
                    </div> <!-- /.section-title -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="client-speech" class="owl-carousel owl theme">
                        <div class="item text-uppercase">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('img/cloud/testimonial.jpg') }}" class="img-circle img-responsive center-block" alt="Client photo">
                                </div>
                                <div class="col-md-9">
                                    <div class="client-text">
                                        <p>
                                            create a website that you are gonna be proud of. be it business, portfolio, photography, ecommerce and much more.
                                        </p>
                                        <p class="cient-designation">
                                            ceo of a.e.t institute
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item text-uppercase">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('img/cloud/testimonial.jpg') }}" class="img-circle img-responsive center-block" alt="Client photo">
                                </div>
                                <div class="col-md-9">
                                    <div class="client-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna.
                                        </p>
                                        <p class="cient-designation">
                                            ceo of a.e.t institute
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item text-uppercase">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('img/cloud/testimonial.jpg') }}" class="img-circle img-responsive center-block" alt="Client photo">
                                </div>
                                <div class="col-md-9">
                                    <div class="client-text">
                                        <p>
                                            Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        </p>
                                        <p class="cient-designation">
                                            ceo of a.e.t institute
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#testimonial -->
    <!-- end: testimonial -->





    <!-- start: call-to-action section-->
    <section class="call-to-action text-capitalize">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="col-md-8 col-sm-9">
                            <h3>are you ready for start project with us?</h3>
                        </div>
                        <div class="col-md-4 col-sm-3">
                            <a href="#" class="btn btn-white-border">
                                get start
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!-- /. call-to-action -->
    <!-- end: call-to-action section-->



    <!-- start: pricing section -->
    <section id="pricing">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>pricing <span>||| make sure you know about our pricing</span></h2>
                    </div> <!-- /.section-title -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 price-catagory">
                    <div class="price-box">
                        <p class="pricing-catagory-name">Basic</p>
                        <p><span class="price">$17</span>/Month</p>
                        <p>Billed anually or $19 month-to-month</p>
                        <hr>
                        <ul>
                            <li><i class="ion-android-done"></i>1 User</li>
                            <li><i class="ion-android-done"></i>1 Dashboard</li>
                        </ul>

                        <a href="#" class="btn">Get Started Now</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 price-catagory">
                    <div class="price-box">
                        <p class="pricing-catagory-name">Business</p>
                        <p><span class="price">$53</span>/Month</p>
                        <p>Billed anually or $19 month-to-month</p>
                        <hr>
                        <ul>
                            <li><i class="ion-android-done"></i>3 Users</li>
                            <li><i class="ion-android-done"></i>Unlimited Dashboards</li>
                            <li><i class="ion-android-done"></i>Custom CSS</li>
                        </ul>

                        <a href="#" class="btn">Get Started Now</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 price-catagory">
                    <div class="price-box">
                        <p class="pricing-catagory-name">Premium</p>
                        <p><span class="price">$66</span>/Month</p>
                        <p>Billed anually or $19 month-to-month</p>
                        <hr>
                        <ul>
                            <li><i class="ion-android-done"></i>20 Users</li>
                            <li><i class="ion-android-done"></i>Unlimited Dashboards</li>
                            <li><i class="ion-android-done"></i>Custom CSS</li>
                            <li><i class="ion-android-done"></i>IP Restriction</li>
                        </ul>

                        <a href="#" class="btn">Get Started Now</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 price-catagory">
                    <div class="price-box">
                        <p class="pricing-catagory-name">Ultimate</p>
                        <p><span class="price">$89</span>/Month</p>
                        <p>Billed anually or $19 month-to-month</p>
                        <hr>
                        <ul>
                            <li><i class="ion-android-done"></i>20 Users</li>
                            <li><i class="ion-android-done"></i>Unlimited Dashboards</li>
                            <li><i class="ion-android-done"></i>Custom CSS</li>
                            <li><i class="ion-android-done"></i>IP Restriction</li>
                            <li><i class="ion-android-done"></i>Custom Domain</li>
                        </ul>

                        <a href="#" class="btn">Get Started Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- /#pricing -->
    <!-- end: pricing section -->



    <!-- start: blog section-->
    <section id="blog" class="dark-gray-bg">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>latest news <span>||| make sure you know about us</span></h2>
                    </div> <!-- /.section-title -->

                    <a href="#" class="btn btn-red-border section-heading-btn">view all</a>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="blog-content">
                        <a href="{{ route('template.cloud.blog') }}">
                            <img src="{{ asset('img/cloud/blog1.jpg') }}" class="img-responsive center-block" alt="Blog Post 1 Thumbnail">
                        </a>
                        <a href="{{ route('template.cloud.blog') }}">
                            <h4>single image post title here</h4>
                        </a>
                        <span class="date">may 24,2015</span>
                        <span>12 comments</span>

                        <p class="blog-description text-justified">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ...
                        </p>

                        <a href="{{ route('template.cloud.blog') }}" class="btn btn-red-border">Read More <span><i class="ion-ios-arrow-thin-right"></i></span></a>
                    </div> <!-- /.blog-content -->
                </div>
                <div class="col-md-4">
                    <div class="blog-content">
                        <a href="{{ route('template.cloud.blog') }}">
                            <img src="{{ asset('img/cloud/blog2.jpg') }}" class="img-responsive center-block" alt="Blog Post 2 Thumbnail">
                        </a>

                        <a href="{{ route('template.cloud.blog') }}"><h4>multiple image post title here</h4></a>
                        <span class="date">may 24,2015</span>
                        <span>12 comments</span>

                        <p class="blog-description text-justified">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ...
                        </p>

                        <a href="{{ route('template.cloud.blog') }}" class="btn btn-red-border">Read More <span><i class="ion-ios-arrow-thin-right"></i></span></a>
                    </div> <!-- /.blog-content -->
                </div>
                <div class="col-md-4">
                    <div class="blog-content">
                        <a href="{{ route('template.cloud.blog') }}">
                            <img src="{{ asset('img/cloud/blog3.jpg') }}" class="img-responsive center-block" alt="Blog Post 3 Thumbnail">
                        </a>

                        <a href="{{ route('template.cloud.blog') }}"><h4>single video post title here</h4></a>
                        <span class="date">may 24,2015</span>
                        <span>12 comments</span>

                        <p class="blog-description text-justified">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ...
                        </p>

                        <a href="{{ route('template.cloud.blog') }}" class="btn btn-red-border">Read More <span><i class="ion-ios-arrow-thin-right"></i></span></a>
                    </div>  <!-- /.blog-content -->
                </div>
            </div>
        </div>
    </section> <!-- /#blog -->
    <!-- end: blog section-->



    <!-- start: contact section-->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>find us via map</h3>
                    <div id="map-canvas"></div>
                </div>
                <div class="col-md-4">
                    <h3>send email</h3>

                    <form method="post" action="contact.php">
                        <div class="form-group">
                            <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="Full Name">
                        </div>

                        <div class="form-group">
                            <input name="email" type="email" class="form-control" id="email" required="required" placeholder="Email Address">
                        </div>

                        <textarea name="message" type="text" class="form-control" id="message" rows="5" required="required" placeholder="Type here message"></textarea>
                        <button type="submit" id="submit" name="submit" class="btn btn-red-border submit-btn">subscribe</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <h3>contact details</h3>

                    <p>
                        blabla parkway, p.o box mountain view
                        <br>
                        united states of america
                    </p>

                    <p>
                        <strong>local:</strong> 1-800-123-hello
                        <br>
                        <strong>mobile:</strong> 1-800-123-hello
                    </p>

                    <p>
                        info@themewagon.com
                        <br>
                        www.themewagon.com
                    </p>

                    <ul class="social-icons">
                        <li>
                            <a href="#"><i class="ion-social-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-googleplus"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-rss"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ion-social-youtube"></i></a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section> <!-- /#contact -->
    <!-- end: contact section-->

</div>
@endsection

@section('js')

@endsection