<!DOCTYPE html>
<html>
<head>
    {{--View specific title--}}
    @yield('title')

    {{--Common CSS--}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    {{--View specific CSS--}}
    @yield('css')
</head>
<body>
    @yield('content')

    {{--Common JS--}}
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    {{--View specific JS--}}
    @yield('js')
</body>
</html>