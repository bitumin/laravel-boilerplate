<!DOCTYPE html>
<html>
<head>
    {{--View specific title--}}
    @yield('title')

    {{--Common CSS--}}
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    {{--View specific CSS--}}
    @yield('css')
</head>
<body>
    @yield('content')

    {{--Common JS--}}
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{--View specific JS--}}
    @yield('js')
</body>
</html>