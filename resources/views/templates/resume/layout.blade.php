<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <link rel="shortcut icon" href="{{ asset('img/resume/favicon.ico') }}">

    @yield('title')

    <!-- Design Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resume/scroll.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resume/resume.css') }}" />
    <!-- Portfolio Thumbnail / Slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resume/resume-portfolio.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resume/resume-carousel.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/resume/resume-responsive.css') }}" />

    @yield('css')

    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

    <!-- Google Font-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700' rel='stylesheet' type='text/css'>

    <!-- Pie Chart / Skills -->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Send Email -->
    <script type="text/javascript" src="{{ asset('js/resume/resume-sendmail.js') }}"></script>
    <!-- Progressbar / Skills-->
    <script type="text/javascript" src="{{ asset('js/resume/resume-progressbar.js') }}"></script>
    <!-- Portfolio-->
    <script src="{{ asset('js/resume/resume-modernizer.js') }}"></script>

</head>
<body>
<div id="container" class="container">
    <!-- Left Menu / Logo-->
    <aside class="menu" id="menu">
        <div class="logo">
            <!-- Logo image-->
            <img src="{{ asset('img/resume/logo.png') }}" width="140" height="140" alt=""/>
            <!-- Logo name-->
            <span>Andrew Smith</span></div>
        <!-- Mobile Navigation-->
        <a href="#menu1" class="menu-link"></a>
        <!-- Left Navigation-->
        <nav id="menu1" role="navigation"> <a href="#chapterintroduction"><span id="link_introduction" class="active">Home</span></a> <a href="#chapterabout"><span id="link_about">About</span></a> <a href="#chapterskills"><span id="link_skills">Skills</span></a> <a href="#chapterexperience"><span id="link_experience">Experience</span></a> <a href="#chaptereducation"><span id="link_education">Education</span></a> <a href="#chapterportfolio"><span id="link_portfolio">Portfolio</span></a><a href="#chaptercontact"><span id="link_contact">Contact</span></a><a href="{{ route('template.resume.blog') }}"><span id="link_blog">Blog</span></a></nav>
        <div class="social"> <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a> <a href="https://twitter.com" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a> <a href="https://plus.google.com" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a> </div>
        <div class="copyright"> © Andrew Smith.<br>
            All Rights Reserved. </div>
    </aside>
    <!-- Go to top link for mobile device -->
    <a href="#menu" class="totop-link">Go to the top</a>
</div>

@yield('content')

<script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-head.js') }}"></script>
<!-- Portfolio Thumbnail -->
<script type="text/javascript" src="{{ asset('js/resume/resume-imageload.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-masonry.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-helper.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-grid.js') }}"></script>
<!-- Portfolio Slider-->
<script type="text/javascript"  src="{{ asset('js/resume/resume-carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-easypie.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/resume/resume-rotator.js') }}"></script>
<!-- Fit Video -->
<script type="text/javascript"  src="//cdn.jsdelivr.net/fitvids/1.1.0/jquery.fitvids.js"></script>
<!-- All Javascript Component-->
<script src="{{ asset('js/resume/resume-setting.js') }}"></script>

@yield('js')

</body>
</html>