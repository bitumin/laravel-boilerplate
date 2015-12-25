
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!DOCTYPE html>
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    @yield('title')

    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Core Meta Data -->
    <meta content="ThemeWagon" name="author">
    <meta content="The most spectacular coming soon template!" name="description">
    <meta content="Comming Soon, Responsive, Landing Page, One Page" name="keywords"><!-- Open Graph Meta Data -->
    <meta content="The most spectacular coming soon template!">
    <meta content="ThemeWagon">
    <meta content="ThemeWagon">
    <meta content="website">
    <meta content="index.html"><!-- Twitter Card Meta Data -->
    <meta content="summary" name="twitter:card">
    <meta content="@themewagon" name="twitter:site">
    <meta content="@themewagon" name="twitter:creator">
    <meta content="ThemeWagon" name="twitter:title">
    <meta content="Imminent - The most spectacular coming soon template!" name="twitter:description">

    <link href="favicon.png" rel="shortcut icon" type="image/png">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- CSS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900' rel='stylesheet' type='text/css'><!-- Styles -->
    <link href="{{ asset('css/comingsoon/loader.css') }}" rel="stylesheet" type="text/css">
    <link href="//cdn.jsdelivr.net/normalize/3.0.3/normalize.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="{{ asset('css/comingsoon/style.css') }}" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->

    @yield('css')

            <!-- Javascript -->

    <script src="{{ asset('js/comingsoon/jquery.js') }}"></script>

</head>
<body>
<div class="preloader">
    <div class="loading">
        <h2>
            Loading...
        </h2>
        <span class="progress"></span>
    </div>
</div>

@yield('content')

<!-- Javascript -->
<script src="{{ asset('js/comingsoon/plugins.js') }}"></script>
<script src="{{ asset('js/comingsoon/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/comingsoon/main.js') }}"></script>
@yield('js')

</body>
</html>