<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')

    {{--CSS--}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet" type="text/css">

    @yield('css')

    {{--Webfonts--}}
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,500,700,80,900' rel='stylesheet' type='text/css'>

    {{--JS--}}
    <script type="application/x-javascript">
        addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.uitotop/1.2/js/jquery.ui.totop.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.easing/1.3/jquery.easing.1.3.min.js"></script>
</head>
<body>
<div class="header">
    <div class="col-md-8 header_left">
        <div class="headerleft_grid">
            <a href="{{ route('template.design.index') }}"><img src="{{ asset('img/design/logo.png') }}" alt=""/></a>
            <ul class="social">
                <li><a href=""> <i class="fb"> </i> </a></li>
                <li><a href=""><i class="tw"> </i> </a></li>
                <li><a href=""><i class="linked"> </i> </a></li>
                <li><a href=""><i class="google"> </i> </a></li>
            </ul>
        </div>
        <div class="chair">
            <span></span>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-4 header_right">
        <!--- Push Navigation Starts ---->
        <div class="menu">
            <a href="#" class="right_bt" id="activator"><img src="{{ asset('img/design/nav.png') }}" alt=""/></a>
            <div class="box" id="box">
                <div class="box_content_center">
                    <div class="menu_box_list">
                        <ul>
                            <li><a href="#home" class="scroll">Home</a></li>
                            <li class="active"><a href="#projects" class="scroll">Projects</a></li>
                            <li><a href="#studio" class="scroll">Studio</a></li>
                            <li><a href="#news" class="scroll">News</a></li>
                            <li><a href="#contact" class="scroll">Contact</a></li>
                        </ul>
                    </div>
                    <a class="boxclose" id="boxclose"><img src="{{ asset('img/design/close.png') }}" alt=""/></a>
                </div>
            </div>
            <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.easing/1.3/jquery.easing.1.3.min.js"></script>
            <script type="text/javascript">
                var $ = jQuery.noConflict();
                $(function() {
                    $('#activator').click(function(){
                        $('#box').animate({'top':'0px'},500);
                    });
                    $('#boxclose').click(function(){
                        $('#box').animate({'top':'-700px'},500);
                    });
                });
                $(document).ready(function(){

                    //Hide (Collapse) the toggle containers on load
                    $(".toggle_container").hide();

                    //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
                    $(".trigger").click(function(){
                        $(this).toggleClass("active").next().slideToggle("slow");
                        return false; //Prevent the browser jump to the link anchor
                    });

                });
            </script>
        </div>
        <div class="clearfix"></div>
        <div class="nav_grid">
            <ul class="nav_address">
                <li>lobortis nisl </li>
                <li>putamus parum</li>
                <li>etiam processus</li>
                <li>Mirum est</li>
                <li>Eodem modo</li>
            </ul>
            <ul class="nav_address1">
                <li>+8547 52 4789</li>
                <li><a href="mailto:info@example.com">info(at)dsgn-studio.com</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

@yield('content')


<div class="footer">
    <div class="col-md-6 footer_left">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
        </div>
    </div>
    <div class="col-md-6 footer_right">
        <address class="address">
            <p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
            <dl>
                <dt></dt>
                <dd>Freephone:<span> +1 800 254 2478</span></dd>
                <dd>Telephone:<span> +1 800 547 5478</span></dd>
                <dd>FAX: <span>+1 800 658 5784</span></dd>
                <dd>E-mail:&nbsp; <a href="mailto@example.com">info(at)dsgn-studio.com</a></dd>
            </dl>
        </address>
        <div class="contact_logo">
            <img src="{{ asset('img/design/logo.png') }}" alt=""/>
            <ul class="social">
                <li><a href=""> <i class="fb"> </i> </a></li>
                <li><a href=""><i class="tw"> </i> </a></li>
                <li><a href=""><i class="linked"> </i> </a></li>
                <li><a href=""><i class="google"> </i> </a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <div class="copy" id="contact">
            <p>&copy; 2014 Designed by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
        </div>
    </div>
    <div class="clearfix"></div>

    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>

@yield('js')

</body>
</html>