
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

    @yield('title')
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.theme.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/animatecss/3.4.0/animate.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/flexslider/2.4/flexslider.css">
    <link rel="stylesheet" href="{{ asset('css/kitchen/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/kitchen/main.css') }}">

    @yield('css')

    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/flexslider/2.4/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map-canvas');
            var mapOptions = {
                center: new google.maps.LatLng(24.909439, 91.833800),
                zoom: 16,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(24.909439, 91.833800),
                title:"Mamma's Kitchen Restaurant"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


</head>
<body data-spy="scroll" data-target="#template-navbar">

<!--== 4. Navigation ==-->
<nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img id="logo" src="{{ asset('img/kitchen/Logo_main.png') }}" class="logo img-responsive">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="Food-fair-toggle">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">about</a></li>
                <li><a href="#pricing">pricing</a></li>
                <li><a href="#great-place-to-enjoy">beer</a></li>
                <li><a href="#breakfast">bread</a></li>
                <li><a href="#featured-dish">featured</a></li>
                <li><a href="#reserve">reservation</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.row -->
</nav>

@yield('content')


<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="copyright text-center">
                    <p>
                        &copy; Copyright, 2015 <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.mixitup/2.1.8/jquery.mixitup.min.js" ></script>
<script src="//cdn.jsdelivr.net/wow/1.1.2/wow.min.js"></script>
<script src="{{ asset('js/kitchen/jquery.validate.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.hoverdir/1.1.1/jquery.hoverdir.min.js"></script>
<script type="text/javascript" src="{{ asset('js/kitchen/jQuery.scrollSpeed.js') }}"></script>
<script src="{{ asset('js/kitchen/script.js') }}"></script>

@yield('js')

</body>
</html>