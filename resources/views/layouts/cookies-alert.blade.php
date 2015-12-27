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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="alert alert-dismissible alert-cookies" id="cookieBanner" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        Este sitio web utiliza cookies propias y de terceros para mejorar la experiencia de usuario y mostrarle
        publicidad relacionada con sus preferencias mediante el análisis de sus hábitos de navegación.
        Si está de acuerdo pulse <a href="javascript:;">Acepto</a> o siga navegando. Puede cambiar la configuración
        u obtener más información haciendo click en
        <a class="noconsent" href="http://politicadecookies.com/cookies.php" target="_blank">más información</a>.
        <br><br>
        Fem servir cookies pròpies i de tercers que recopilen informació anònima per garantir un correcte funcionament
        del nostre web. Si hi estàs d'acord fes click sobre <a href="javascript:">Accepto</a> o segueix fent servir el
        web. Pots obtenir més informació sobre cookies fent click sobre
        <a class="noconsent" href="http://politicadecookies.com/cookies.php" target="_blank">més informació</a>.
    </div>

    @yield('content')

    {{--Common JS--}}
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/cookies-consent.js') }}"></script>

    {{--View specific JS--}}
    @yield('js')
</body>
</html>