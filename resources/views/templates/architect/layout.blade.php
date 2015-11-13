
<!DOCTYPE html>
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en-US">  <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
    @yield('title')
    <!-- Google Web Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,300italic,400,500,700%7cCourgette%7cRaleway:400,700,500%7cCourgette%7cLato:700' rel='stylesheet' type='text/css'>

    <!-- BYekan Web Fonts
    ================================================== -->
    <link href='{{ asset('css/byekan.css') }}' rel='stylesheet' type='text/css'>

    <!-- Basic Page Needs
	================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


    <meta name="description" content="BeraNia Office the best soloution for your Architectural Design and Construction Projects">
    <meta name="keywords" content="Architecture, landscape, urbanism, Interior Design, Parametric Architecture, Energy Analysis, Rhino and Grasshopper">
    <meta name="author" content="BeraNia Office">
    <meta name="email" content="info@beraniaoffice.com">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('img/architect/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/architect/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/architect/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/architect/apple-touch-icon-114x114.png') }}">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('css/architect.css') }}" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/architect-media.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/sequence.css') }}" />

    <!-- HTML5 Shiv
    ================================================== -->
    <script src="{{ asset('js/modernizer.js') }}"></script>

    @yield('css')

</head>
<body>

<div id="wrapper">

    <div id="mobile-menu" class="mobile-menu">

        <a href="#" id="menu-hide"></a>

    </div>


    <!-- - - - - - - - - - - - - Header - - - - - - - - - - - - - - -->


    <header id="header" class="type-fixed">
        <div class="middle-header-line transparent-bg">
            <div class="container">
                <div class="row">
                    <div class="header-in">
                        <h1>
                            <a href="{{ route('template.architect.index') }}"><img src="{{ asset('img/architect/logo-trs.png') }}" width="256" height="80" alt="logo"></a>
                        </h1>
                        <a id="responsive-nav-button" class="responsive-nav-button" href="#"></a>

                        <div class="nav-wrapper">
                            <nav id="navigation" class="navigation">
                                <ul>
                                    <li class="current-menu-item">
                                        <a href="{{ route('template.architect.index') }}">HOME</a></li>
                                    <li><a href="{{ route('template.architect.projects') }}">Projects</a></li>
                                    <li><a>RESEARCH</a></li>
                                    <li><a href="{{ route('template.architect.media') }}">Media</a></li>

                                    <li><a href="{{ route('template.architect.about') }}">about us</a>

                                        <ul>
                                            <li><a href="http://beraniaoffice.com/download/BeraNiaOffice.pdf" target="_blank">Download Resume</a></li>
                                        </ul>

                                    </li>
                                    <li><a href="{{ route('template.architect.contact') }}">contact</a></li>
                                </ul>

                            </nav><!--/ .navigation-->

                        </div><!--/ .nav-wrapper-->

                    </div><!--/ .header-in-->

                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ middle-header-line-->

    </header><!--/ #header-->


    @yield('content')


    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - -->


    <footer id="footer">

        <div class="clients-container">

            <section class="container">

                <div class="row"></div>

            </section><!--/ .container-->

        </div><!--/ .clients-container-->

        <div class="widget-area">

            <div class="container">

                <div class="row">

                    <div class="col-lg-4 col-sm-4">

                        <div class="widget widget_text">

                            <h3 class="widget-title">: دفتر مرکزی</h3>

                            <div class="textwidget">
                                <p>قم - خیابان شهید فاطمی - نبش کوچه 12 - ساختمان الهیه  طبقه سوم - واحد۳</p>
                                <p>Call : +98-25-37840592</p>
                            </div>

                        </div><!--/ .widget-->

                    </div>

                    <div class="col-lg-4 col-sm-4">
                        <a href="{{ route('template.architect.about') }}" target="_blank"><h5 align="center">About Us . . .</h5></a>
                        <a href="http://beraniaoffice.com/download/BeraNiaOffice.pdf" target="_blank"><h5 align="center">Download Resume</h5></a>


                    </div>



                    <div class="col-lg-4 col-sm-4">
                        <h5 align="center">Get in touch :</h5>
                        <p align="right"><a href="mailto:info@beraniaoffice.com">Email : info@beraniaoffice.com</a></p>
                        <ul align="right" class="social-icons circle-icons">
                            <li class="facebook"><a href="https://facebook.com" target="_blank"><i class="icon-facebook"></i>Facebook</a></li>
                            <li class="Instagram"><a href="http://instagram.com" target="_blank"><i class="icon-instagram"></i>Instagram</a></li>
                            <li class="youtube"><a href="https://www.youtube.com" target="_blank"><i class="icon-youtube"></i>Youtube</a></li>

                        </ul>

                    </div>


                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ .widget-area-->

    </footer><!--/ #footer-->


    <!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - -->


    <!-- - - - - - - - - - - - Bottom Footer - - - - - - - - - - - - -->


    <div class="bottom-footer">

        <div class="container">

            <div class="row">

                <div class="col-sm-6">
                    <div style="font-family:'roboto'" class="copyright">
                        Copyright © 2015.
                        <a href="http://beraniaoffice/" target="_blank">BeraNia Office</a>
                        . All rights reserved
                    </div>
                </div>

                <div class="col-sm-3 col-sm-offset-3">
                    <div class="developed">
                        Developed by
                        <a href="http://beraniaoffice/" target="_blank">BeraNia Office</a>
                    </div>
                </div>

            </div><!--/ .row-->

        </div><!--/ .container-->

    </div><!--/ .bottom-footer-->


    <!-- - - - - - - - - - - end Bottom Footer - - - - - - - - - - - -->


</div><!--/ #wrapper-->

<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>

<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="{{ asset('js/browser-selector.js') }}"></script>
<script src="{{ asset('js/sequence.js') }}"></script>
<script src="{{ asset('tweet.js') }}"></script>
<script src="{{ asset('js/smoothstate.js') }}"></script>
<script src="{{ asset('js/resize.js') }}"></script>
<script src="{{ asset('js/architect-config.js') }}"></script>
<script src="{{ asset('js/architect-global.js') }}"></script>

@yield('js')

</body>
</html>
