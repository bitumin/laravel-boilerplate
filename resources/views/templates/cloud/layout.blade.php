
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('title')

    <!-- stylesheets -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/animatecss/3.4.0/animate.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('css/cloud/style.css') }}">

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
                title:"Cloud Agency Office"
            });

            // To add the marker to the map, call setMap();
            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

</head>

<body data-spy="scroll" data-target="#main-nav-collapse" data-offset="100">


<!-- site-navigation start -->
<nav id="mainNavigation" class="navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- navbar logo -->
            <div class="navbar-brand">
                <span class="sr-only">Cloud Agency</span>
                <a href="{{ route('template.cloud.index') }}">
                    <img src="{{ asset('img/cloud/main_logo.png') }}" class="img-responsive center-block" alt="logo">
                </a>
            </div>
            <!-- navbar logo -->

        </div><!-- /.navbar-header -->

        <!-- nav links -->
        <div class="collapse navbar-collapse" id="main-nav-collapse">
            <ul class="nav navbar-nav navbar-right text-uppercase">
                <li class="active">
                    <a data-scroll href="#header">home</a>
                </li>
                <li>
                    <a data-scroll href="#about">about</a>
                </li>
                <li>
                    <a data-scroll href="#services">services</a>
                </li>
                <li>
                    <a data-scroll href="#portfolio">portfolio</a>
                </li>
                <li>
                    <a data-scroll href="#pricing">pricing</a>
                </li>
                <li>
                    <a data-scroll href="#blog">blog</a>
                </li>
                <li>
                    <a data-scroll href="#contact">contact</a>
                </li>
            </ul>
        </div><!-- nav links -->

    </div><!-- /.container -->
</nav>
<!-- site-navigation end -->

@yield('content')



    <!-- start: footer -->
    <footer class="text-uppercase">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>&copy; copyright <a href="#">your website link</a> 2015</p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <p class="credit">theme by <a href="https://themewagon.com/">themewagon</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end: footer -->




<!--  Necessary scripts  -->
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/isotope/2.2.2/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/smooth-scroll/7.1.1/smooth-scroll.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.min.js"></script>

<script type="text/javascript" src="{{ asset('js/cloud/script.js') }}"></script>
@yield('js')

</body>
</html>