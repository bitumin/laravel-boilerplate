<!DOCTYPE html>
<html>
<head>
    {{--View specific title--}}
    @yield('title')

    {{--Common CSS--}}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    {{--View specific CSS--}}
    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    @yield('content')

    {{--Common JS--}}
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    {{--View specific JS--}}
    @yield('js')

    <script>
        var showToastr = function(style,message) {
            toastr[style](message,style.toUpperCase());
        };

        $(document).ready(function() {
            @if(session('status'))
                showToastr('info', '{{ session('status') }}');
            @endif
            @if(session('info'))
                showToastr('info', '{{ session('info') }}');
            @endif
            @if(session('success'))
                showToastr('success', '{{ session('success') }}');
            @endif
            @if(session('warning'))
                showToastr('warning', '{{ session('warning') }}');
            @endif
            @if(session('error'))
                showToastr('error', '{{ session('error') }}');
            @endif
        });
    </script>
</body>
</html>