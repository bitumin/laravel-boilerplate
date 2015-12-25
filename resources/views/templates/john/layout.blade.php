
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Website Title -->
    @yield('title')

            <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Lightbox -->
    <link href="{{ asset('css/john/lightbox.css') }}" rel="stylesheet">
    <!-- Text Rotator-->
    <link href="{{ asset('css/john/simpletextrotator.css') }}" rel="stylesheet">
    <!-- FlexSlider -->
    <link href="//cdn.jsdelivr.net/flexslider/2.4/flexslider.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="{{ asset('css/john/style.css') }}" rel="stylesheet">
    <!-- Animations -->
    <link href="//cdn.jsdelivr.net/animatecss/3.4.0/animate.min.css" rel="stylesheet">

    @yield('css')

            <!-- Custom Favicon -->
    <link href="{{ asset('img/john/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.js"></script>
    <script src="assets/respond/respond.min.js"></script>
    <![endif]-->
</head>
<body id="top">

<!-- ****************************** Preloader ************************** -->
<div id="preloader"></div>


<!-- ==========================
HEADER SECTION
=========================== -->
<header id="home">
    <!-- creative menu -->
    <div class="container-fluid">
        <div class="row">
            <div class="menu-wrap">
                <nav class="menu">
                    <!-- Menu Links -->
                    <div class="icon-list">
                        <a href="{{ route('template.john.index') }}#home"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
                        <a href="{{ route('template.john.index') }}#about"><i class="fa fa-fw fa-quote-left"></i><span>About</span></a>
                        <a href="{{ route('template.john.index') }}#service"><i class="fa fa-fw fa-globe"></i><span>Service</span></a>
                        <a href="{{ route('template.john.index') }}#portfolio"><i class="fa fa-fw fa-picture-o"></i><span>Portfolio</span></a>
                        <a href="{{ route('template.john.index') }}#blog"><i class="fa fa-fw fa-rss"></i><span>Blog</span></a>
                        <a href="{{ route('template.john.index') }}#contact"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
                    </div>
                </nav>
            </div>
            <button class="menu-button" id="open-button"></button><!-- menu button -->
        </div><!--/row-->
    </div><!--/container-->

    @yield('content')


            <!-- ==========================
FOOTER SECTION
=========================== -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>All Rights Reserved. &copy; 2015 <a href="http://www.themewagon.com">ThemeWagon</a>
            </div>
        </div>
    </div>
</footer>
<!-- ==========================
FOOTER SECTION END
=========================== -->


<!-- jQuery -->
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/smooth-scroll/7.1.1/smooth-scroll.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.waypoints/2.0.5/waypoints.min.js"></script>
<script src="//cdn.jsdelivr.net/classie/1.0.1/classie.js"></script>
<script src="//cdn.jsdelivr.net/flexslider/2.4/jquery.flexslider-min.js"></script>
<script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js"></script>
<script src="{{ asset('js/john/jquery.simple-text-rotator.js') }}"></script>
<script src="{{ asset('js/john/lightbox.min.js') }}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
<script src="{{ asset('js/john/main.js') }}"></script>
<script src="{{ asset('js/john/script.js') }}"></script>

<!-- GOOGLE MAPS DATA -->
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 15,

            scrollwheel: false,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.68961985411178, -74.01618003845215), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('googlemaps');

        // Create the Google Map using out element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
    }

</script>

<!-- TEXT ROTATOR SETTINGS -->
<script type="text/javascript">
    $(".rotate").textrotator({
        animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
        separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
        speed: 2000 // How many milliseconds until the next word show.
    });
</script>
@yield('js')

</body>
</html>