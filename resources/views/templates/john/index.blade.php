@extends('templates.john.layout')

@section('title')
<title>John Doe - Professional web designer and photographer</title>
@endsection

@section('css')

@endsection

@section('content')
<!-- Header Image -->
<section class="hero" id="hero">
    <div class="container">
        <!-- Slider Button (don't edit!)-->
        <div class="row">
            <div class="col-md-12 text-right navicon">
                <a id="nav-toggle" class="nav_slide_button" href="{{ route('template.john.index') }}#"><span></span></a>
            </div>
        </div>
        <!-- HEADER HEADLINE -->
        <div class="row">
            <div class="col-md-8 col-md-offset-1 inner">
                <h1 class="animated fadeInDown">
                    J<span style="color:#E04343;">o</span>hn<br/>
                    <span>D<span style="color:#FFE800">o</span>e</span>
                </h1><!-- Title -->
                <h3 class="animated fadeInUp delay-05s"><span class="rotate">Web Designer,Photographer,3d Artist</span></h3><!-- Text Rotator -->
            </div>
        </div>
        <!-- Learn More Button -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <a href="{{ route('template.john.index') }}#about" class="scrollto wow fadeInUp delay-5s ">
                    <p>SEE MORE</p>
                    <p class="scrollto--arrow"><img src="{{ asset('img/john/scroll-down.png') }}" alt="scroll down arrow"></p>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Header Image End -->
</header>
<!-- ==========================
HEADER SECTION END
=========================== -->




<!-- ==========================
ABOUT SECTION
=========================== -->
<section class="intro text-center section-padding color-bg" id="about">
    <div class="container">
        <!-- WELCOME TEXT -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">A little <span>about</span> me</h1><!-- Headline -->
                <!-- about / welcome text -->
                <p>I am enough of an artist to draw freely upon my imagination. The point is that when I see a sunset or a <a href="#">waterfall</a> or something, for a split second it's so great, because for a little bit I'm out of my brain, and it's got nothing to do with me. I'm not trying to figure it out, you know what I mean? And I wonder if I can somehow find a way to maintain that mind stillness.</p>
            </div>
        </div>
    </div>
</section>




<!-- ==========================
        SERVICE SECTION
        =========================== -->
<section class="features text-center section-padding" id="service">
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">I do amazing things for clients</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="services">
                    <!-- Service Box 1 -->
                    <div class="col-md-4 wp2 item">
                        <div class="icon">
                            <i class="fa fa-camera"></i><!-- Icon -->
                        </div>
                        <h2>Photographer</h2><!-- Title -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.</p><!-- Description -->
                    </div>
                    <!-- Service Box 2 -->
                    <div class="col-md-4 wp2 item delay-05s">
                        <div class="icon">
                            <i class="fa fa-desktop"></i><!-- Icon -->
                        </div>
                        <h2>Web Designer</h2><!-- Title -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.</p><!-- Description -->
                    </div>
                    <!-- Service Box 3 -->
                    <div class="col-md-4 wp2 item delay-1s">
                        <div class="icon">
                            <i class="fa fa-cubes"></i><!-- Icon -->
                        </div>
                        <h2>3D Artist</h2><!-- Title -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum
                            primis in faucibus.</p><!-- Description -->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>





<div class="container-fluid">
    <!-- About 1 -->
    <div class="row color-bg">
        <div class="col-md-6 nopadding features-intro-img">
            <div class="about-image" style="background-image:url(/img/john/about1.png)"></div><!-- about image 1 -->
        </div>
        <div class="col-md-6 about-text">
            <h6>High quality webdesign</h6><!-- headline-->
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p><br><!-- About Text 1 -->
            <a href="{{ route('template.john.index') }}#team" class="weight-outline-btn">Read more</a><!-- read more button  -->
        </div>
    </div>
    <!-- About 2 -->
    <div class="row">
        <div class="col-md-6 about-text">
            <h6>Professional Photography</h6><!-- Headline -->
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p><br><!-- About Text 2 -->
            <a href="{{ route('template.john.index') }}#team" class="weight-outline-btn">Read more</a>	<!-- read more button  -->
        </div>
        <div class="col-md-6 nopadding features-intro-img">
            <div class="about-image" style="background-image:url(/img/john/about2.png)"></div><!-- about image 2 -->
        </div>
    </div>
    <!-- About 3 -->
    <div class="row color-bg">
        <div class="col-md-6 nopadding features-intro-img">
            <div class="about-image" style="background-image:url(/img/john/about3.png)"></div><!-- about image 3 -->
        </div>
        <div class="col-md-6 about-text">
            <h6>3d modeling and animations</h6><!-- Headline-->
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p><br><!-- About Text 3 -->
            <a href="{{ route('template.john.index') }}#team" class="weight-outline-btn">Read more</a><!-- read more button  -->
        </div>
    </div>
</div>
<!-- ==========================
ABOUT SECTION END
=========================== -->




<!-- ==========================
PORTFOLIO SECTION
=========================== -->
<section class="swag text-center" id="portfolio">
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <h1 class="arrow">
                Recent <span>Porojects</span>
            </h1>
        </div>
    </div>
</section>

<div class="container">
    <div class="row row-offset-0">

        <!-- PORTFOLIO ITEM 1 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img">
                    <a href="{{ asset('img/john/portfolio-01-large.jpg') }}" data-lightbox="roadtrip" title="Project One - Lorem Ipsum"><img class="grayscale" src="{{ asset('img/john/portfolio-01-thumbnail.jpg') }}" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->

        <!-- PORTFOLIO ITEM 2 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img">
                    <a href="{{ asset('img/john/portfolio-02-large.jpg') }}" data-lightbox="roadtrip" title="Project Two - Lorem Ipsum"><img class="grayscale" src="{{ asset('img/john/portfolio-02-thumbnail.jpg') }}" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->

        <!-- PORTFOLIO ITEM 3 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img">
                    <a href="{{ asset('img/john/portfolio-03-large.jpg') }}" data-lightbox="roadtrip" title="Project Three - Lorem Ipsum"><img class="grayscale" src="{{ asset('img/john/portfolio-03-thumbnail.jpg') }}" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->

        <!-- PORTFOLIO ITEM 4 -->
        <div class="col-md-3 col-sm-6 ">
            <div class="overlay-effect effects clearfix">
                <div class="img">
                    <a href="{{ asset('img/john/portfolio-04-large.jpg') }}" data-lightbox="roadtrip" title="Project Four - Lorem Ipsum"><img class="grayscale" src="{{ asset('img/john/portfolio-04-thumbnail.jpg') }}" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->

        <!-- PORTFOLIO ITEM 5 -->
        <div class="col-md-3 col-sm-6 ">
            <div class="overlay-effect effects clearfix">
                <div class="img">
                    <a href="{{ asset('img/john/portfolio-05-large.jpg') }}" data-lightbox="roadtrip" title="Project Five - Lorem Ipsum"><img class="grayscale" src="{{ asset('img/john/portfolio-05-thumbnail.jpg') }}" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->

        <!-- PORTFOLIO ITEM 6 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img">
                    <a href="{{ asset('img/john/portfolio-06-large.jpg') }}" data-lightbox="roadtrip" title="Project Six - Lorem Ipsum"><img class="grayscale" src="{{ asset('img/john/portfolio-06-thumbnail.jpg') }}" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->

        <!-- PORTFOLIO ITEM 7 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img">
                    <a href="{{ asset('img/john/portfolio-07-large.jpg') }}" data-lightbox="roadtrip" title="Project Seven - Lorem Ipsum"><img class="grayscale" src="{{ asset('img/john/portfolio-07-thumbnail.jpg') }}" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->

        <!-- PORTFOLIO ITEM 8 -->
        <div class="col-md-3 col-sm-6">
            <div class="overlay-effect effects clearfix">
                <div class="img">
                    <a href="{{ asset('img/john/portfolio-08-large.jpg') }}" data-lightbox="roadtrip" title="Project Eight - Lorem Ipsum"><img class="grayscale" src="{{ asset('img/john/portfolio-08-thumbnail.jpg') }}" alt="Portfolio Item"></a>
                </div>
            </div>
        </div>
        <!-- PORTFOLIO ITEM END -->
    </div><!--/row-->
</div><!--/.container-->
<!-- ==========================
PORTFOLIO SECTION END
=========================== -->




<!-- ==========================
CUSTOM SPACER
=========================== -->
<div class="spacer-cta text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('template.john.index') }}#contact" class="outline-btn">hire john doe</a>
            </div>
        </div>
    </div>
</div>
<!-- ==========================
CUSTOM SPACER END
=========================== -->



<!-- ==========================
    BLOG SECTION
    =========================== -->
<section class="text-center section-padding" id="blog">
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">My <span>little</span> blog</h1>
            </div>
        </div><br><br>

        <!-- Blog Slider -->
        <div class="row">
            <div id="blogSlider">
                <ul class="slides">
                    <li>
                        <!-- Blog Entry 1 -->
                        <div class="col-md-4 wp4">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="{{ asset('img/john/blog1.jpg') }}" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                                </div>
                            </div>
                            <br>
                            <h2>Creative Minds</h2><!-- Headline -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p><!-- Description-->
                        </div>
                        <!-- Blog Entry 2 -->
                        <div class="col-md-4 wp4 delay-05s">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="{{ asset('img/john/blog2.jpg') }}" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                                </div>
                            </div>
                            <br>
                            <h2>Creative Hearts</h2><!-- Headline -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p><!-- Description -->
                        </div>
                        <!-- Blog Entry 3 -->
                        <div class="col-md-4 wp4 delay-1s">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="{{ asset('img/john/blog3.jpg') }}"  class="grayscale" alt="Blog Item"><!-- Blog Image -->
                                </div>
                            </div>
                            <br>
                            <h2>Creative Ideas</h2><!-- Headline -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p><!-- Description-->
                        </div>
                    </li>
                    <li>
                        <!-- Blog Entry 4 -->
                        <div class="col-md-4 wp4">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="{{ asset('img/john/blog1.jpg') }}" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                                </div>
                            </div>
                            <br>
                            <h2>Creative Minds</h2><!-- Headline -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p><!-- Description -->
                        </div>
                        <!-- Blog Entry 5 -->
                        <div class="col-md-4 wp4 delay-05s">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="{{ asset('img/john/blog2.jpg') }}" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                                </div>
                            </div>
                            <br>
                            <h2>Creative Hearts</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p>
                        </div>
                        <!-- Blog Entry 6 -->
                        <div class="col-md-4 wp4 delay-1s">
                            <div class="overlay-effect effects clearfix">
                                <div class="img">
                                    <img src="{{ asset('img/john/blog3.jpg') }}" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                                </div>
                            </div>
                            <br>
                            <h2>Creative Ideas</h2><!-- Headline -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet. Praesent non adipiscing libero.</p><!-- Description -->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ==========================
    BLOG SECTION END
    =========================== -->



<!-- ==========================
CLIENT SECTION
=========================== -->
<div class="container-fluid">
    <div class="row color-bg">
        <!-- Left Image -->
        <div class="col-md-6 nopadding features-intro-img wow fadeInLeft">
            <div class="about-image" style="background-image:url(/img/john/clients.png)"></div>
        </div>
        <!-- Clients / Testimonials -->
        <div class="col-md-6 nopadding about-text">
            <h6>What our clients said</h6>
            <div id="clientSlider">
                <ul class="slides">
                    <li><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br>	<small>- Pete Rock, A New Tomorrow</small></p></li>
                    <li><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br>	<small>- Michael Snowden, Creativeland CEO</small></p></li>
                    <li><p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br>	<small>- Tom Davis, GreenWonder</small></p>	</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- ==========================
CLIENTS SECTION END
=========================== -->





<!-- ==========================
NEWSLETTER SECTION
=========================== -->
<section>
    <div class="container-fluid">
        <div class="row color-bg">
            <div class="col-md-6 nopadding subscribe text-center">
                <h1><i class="fa fa-paper-plane"></i><span>Subscribe our Newsletter</span></h1><!-- Heading -->
                <form action="{{ route('template.john.index') }}#">
                    <input type="text" name="" value="" placeholder="" required><!-- E-Mail -->
                    <input type="submit" name="" value="Send"><!-- Submit Button -->
                </form>
            </div>
            <div class="col-md-6 nopadding features-intro-img">
                <div class="about-image" style="background-image:url(/img/john/newsletter.png)"></div><!-- Right Image -->
            </div>
        </div>
    </div>
</section>
<!-- ==========================
NEWSLETTER SECTION END
=========================== -->



<!-- ==========================
CONTACT SECTION
=========================== -->
<section class="text-center section-padding contact-wrap" id="contact">
    <!-- To Top Button -->
    <a href="{{ route('template.john.index') }}#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
    <div class="container">
        <!-- Headline -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="arrow">Drop <span>me</span> a line</h1>
            </div>
        </div>
        <div class="row contact-details">
            <!-- Adress Box -->
            <div class="col-md-4">
                <div class="dark-box box-hover">
                    <h2><i class="fa fa-map-marker"></i><span>Address</span></h2>
                    <p>23 Ipsum street, New York</p>
                </div>
            </div>
            <!-- Phone Number Box -->
            <div class="col-md-4">
                <div class="dark-box box-hover">
                    <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                    <p>+12 345 6789</p>
                </div>
            </div>
            <!-- E-Mail Box -->
            <div class="col-md-4">
                <div class="dark-box box-hover">
                    <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                    <p><a href="{{ route('template.john.index') }}#">info@themewagon.com</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Google Maps (Change your Settings below) -->
            <div class="col-md-6">
                <div id="googlemaps"></div>
            </div>
            <!-- Contact Form -->
            <div class="col-md-6 contact">
                <form role="form">
                    <!-- Name -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- E-Mail -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Phone Number -->
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                    <!-- Message Area -->
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Write you message here..." style="height:232px;"></textarea>
                    </div>
                    <!-- Subtmit Button -->
                    <button type="submit" class="btn btn-send">
                        Send message
                    </button>
                </form>
            </div>
        </div>
        <br>
        <!-- Social Buttons - use font-awesome, past in what you want -->
        <div class="row">
            <div class="col-md-12">
                <ul class="social-buttons">
                    <li><a href="{{ route('template.john.index') }}#" class="social-btn"><i class="fa fa-dribbble"></i></a></li><!-- dribble -->
                    <li><a href="{{ route('template.john.index') }}#" class="social-btn"><i class="fa fa-twitter"></i></a></li><!-- twitter -->
                    <li><a href="{{ route('template.john.index') }}#" class="social-btn"><i class="fa fa-facebook"></i></a></li><!-- facebook -->
                    <li><a href="{{ route('template.john.index') }}#" class="social-btn"><i class="fa fa-deviantart"></i></a></li><!-- deviantart -->
                    <li><a href="{{ route('template.john.index') }}#" class="social-btn"><i class="fa fa-youtube"></i></a></li><!-- youtube -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- ==========================
CONTACT SECTION END
=========================== -->

@endsection

@section('js')

@endsection