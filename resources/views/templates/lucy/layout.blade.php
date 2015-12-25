
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')


    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('css/lucy/nivo-lightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lucy/nivo-lightbox-theme.css') }}">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/animatecss/3.4.0/animate.min.css">
    <link rel="stylesheet" href="{{ asset('css/lucy/style.css') }}">

    @yield('css')

    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js"></script>

</head>

<body>

<a href="#header" id="back-to-top" class="top"><i class="fa fa-chevron-up"></i></a>
<!-- HHHHHHHHHHHHHHHHHH        Preloader          HHHHHHHHHHHHHHHH -->
<!-- <div id="preloader"></div> -->
<!-- HHHHHHHHHHHHHHHHHH        Header          HHHHHHHHHHHHHHHH -->
<section id="header" class="header">
    <div class="top-bar">
        <div class="container">
            <div class="navigation" id="navigation-scroll">
                <div class="row">
                    <div class="col-md-11 col-xs-10">
                        <a href="{{ route('template.lucy.index') }}"><span id="logo"><strong class="strong">L</strong>UCY</span></a>
                    </div>
                    <div class="col-md-1 col-xs-2">
                        <p class="nav-button">
                            <button id="trigger-overlay" type="button">
                                <i class="fa fa-bars"></i>
                            </button>
                        </p>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.navigation -->
        </div><!--/.container-->
    </div><!--/.top-bar-->

    @yield('content')

            <!-- HHHHHHHHHHHHHHHHHH        Footer          HHHHHHHHHHHHHHHH -->

<section id="footer" class="wrapper">
    <div class="container text-center">
        <div class="footer-logo">
            <h1 class="text-center animation-box wow bounceIn animated">lucy</h1>
        </div>
        <ul class="social-icons text-center">
            <li class="wow animated fadeInLeft facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="wow animated fadeInRight twitter"><a href="#"><i class="fa fa-twitter"></i></a>
            <li class="wow animated fadeInLeft linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li class="wow animated fadeInRight googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="wow animated fadeInLeft github"><a href="#"><i class="fa fa-github"></i></a>
        </ul>

        <div class="copyright">
            <div class="credits">
                Made With <i class="fa fa-heart"></i> by <a href="http://www.themewagon.com" target="_blank">ThemeWagon</a>
            </div>
            <div>©2015 Your Company, All Rights Reserved</div>
        </div>
    </div><!-- container -->
</section>

<!-- HHHHHHHHHHHHHHHHHH        Open/Close          HHHHHHHHHHHHHHHH -->
<div class="overlay overlay-hugeinc">
    <button type="button" class="overlay-close">Close</button>
    <nav>
        <ul>
            <li class="hideit"><a href="#header">Home</a></li>
            <li class="hideit"><a href="#bigfeatures">Feature</a></li>
            <li class="hideit"><a href="#speciality">Speciality</a></li>
            <li class="hideit"><a href="#gallery">Gallery</a></li>
            <li class="hideit"><a href="#testimonial">Testimonial</a></li>
            <!-- <li class="hideit"><a href="#team">Team</a></li> -->
            <li class="hideit"><a href="#contact">Contact Us</a></li>
        </ul>
    </nav>
</div>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//cdn.jsdelivr.net/wow/1.1.2/wow.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.min.js"></script>
<script src="{{ asset('js/lucy/nivo-lightbox.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/smooth-scroll/7.1.1/smooth-scroll.min.js"></script>
<!--<script src="js/jquery.ajaxchimp.min.js"></script>-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/classie/1.0.1/classie.js"></script>
<script src="{{ asset('js/lucy/script.js') }}"></script>
<script>
    new WOW().init();
</script>
<script>
    $(document).ready(function(){
        $(".hideit").click(function(){
            $(".overlay").hide();
        });
        $("#trigger-overlay").click(function(){
            $(".overlay").show();
        });
    });
</script>
<script>
    $(document).ready(function(){

        var kawa = $('.top-bar');
        var back = $('#back-to-top');
        function scroll() {
            if ($(window).scrollTop() > 700) {
                kawa.addClass('fixed');
                back.addClass('show-top');

            } else {
                kawa.removeClass('fixed');
                back.removeClass('show-top');
            }
        }

        document.onscroll = scroll;
    });
</script>
<!--HHHHHHHHHHHH        Smooth Scrooling     HHHHHHHHHHHHHHHH-->
<script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>
@yield('js')

</body>
</html>