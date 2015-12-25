
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/piple/style.css') }}" rel="stylesheet" type="text/css">
    <link href="//cdn.jsdelivr.net/flexslider/2.4/flexslider.css" rel="stylesheet" type="text/css">
    <link href="//cdn.jsdelivr.net/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/piple/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
    <!--revolution slider setting css-->
    <link href="{{ asset('css/piple/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('css/piple/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />

    @yield('css')

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="80">


<!-- Static navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top before-color">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand candiman" href="{{ route('template.piple.index') }}">Piple</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right scroll-to">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#blog">Blog</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('template.piple.post') }}">Blog Post</a></li>
                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>


@yield('content')

<footer class="footer">
    <div class="container text-center">
        <span class="candiman">Piple</span>
        <ul class="social list-inline">
            <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
            <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
            <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
        </ul>
        <span class="copyright">&copy; Copyright 2015. Piple One page theme.</span>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//code.jquery.com/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="//cdn.jsdelivr.net/jquery.easing/1.3/jquery.easing.1.3.min.js" type="text/javascript"></script>
<!-- bootstrap js-->
<script src="//cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/flexslider/2.4/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="{{ asset('js/piple/parallax.min.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/prettyphoto/3.1.6/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="{{ asset('js/piple/contact_me.js') }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.bootstrapvalidation/1.3.7/jqBootstrapValidation.min.js"></script>
<!--revolution slider scripts-->
<script src="{{ asset('js/piple/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/piple/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/piple/template.js') }}" type="text/javascript"></script>
@yield('js')

</body>
</html>
