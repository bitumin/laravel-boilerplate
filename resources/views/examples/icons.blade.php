@extends('layouts.basic')

@section('title')
    <title>Icons</title>
@endsection

@section('css')
    <style>
        h4 {
            padding-bottom: 3px;
            border-bottom: 1px solid #EEE;
        }
    </style>
@endsection

@section('content')
    <div style="min-height: 297px;" class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="">Icons</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Google maps KML4 marker icons
                    </div>
                    <div class="panel-body">
                        <p>Collection of icons Google makes available for Google Earth and Google Maps: <a target="_blank" href="http://kml4earth.appspot.com/icons.html">http://kml4earth.appspot.com/icons.html</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Font-awesome icons 4.4.0
                    </div>
                    <div class="panel-body">
                        <div id="icons">
                            <section id="new">
                                <h4>66 New Icons in 4.4</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-500px"></i> 500px</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-amazon"></i> amazon</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-balance-scale"></i> balance-scale</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-0"></i> battery-0 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-1"></i> battery-1 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-2"></i> battery-2 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-3"></i> battery-3 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-4"></i> battery-4 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-empty"></i> battery-empty</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-full"></i> battery-full</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-half"></i> battery-half</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-quarter"></i> battery-quarter</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-three-quarters"></i> battery-three-quarters</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-black-tie"></i> black-tie</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar-check-o"></i> calendar-check-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar-minus-o"></i> calendar-minus-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar-plus-o"></i> calendar-plus-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar-times-o"></i> calendar-times-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-diners-club"></i> cc-diners-club</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-jcb"></i> cc-jcb</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chrome"></i> chrome</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-clone"></i> clone</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-commenting"></i> commenting</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-commenting-o"></i> commenting-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-contao"></i> contao</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-creative-commons"></i> creative-commons</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-expeditedssl"></i> expeditedssl</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-firefox"></i> firefox</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-fonticons"></i> fonticons</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-genderless"></i> genderless</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-get-pocket"></i> get-pocket</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gg"></i> gg</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gg-circle"></i> gg-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-grab-o"></i> hand-grab-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-lizard-o"></i> hand-lizard-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-paper-o"></i> hand-paper-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-peace-o"></i> hand-peace-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-pointer-o"></i> hand-pointer-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-rock-o"></i> hand-rock-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-scissors-o"></i> hand-scissors-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-spock-o"></i> hand-spock-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-stop-o"></i> hand-stop-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass"></i> hourglass</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-1"></i> hourglass-1 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-2"></i> hourglass-2 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-3"></i> hourglass-3 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-end"></i> hourglass-end</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-half"></i> hourglass-half</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-o"></i> hourglass-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-start"></i> hourglass-start</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-houzz"></i> houzz</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-i-cursor"></i> i-cursor</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-industry"></i> industry</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-internet-explorer"></i> internet-explorer</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-map"></i> map</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-map-o"></i> map-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-map-pin"></i> map-pin</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-map-signs"></i> map-signs</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mouse-pointer"></i> mouse-pointer</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-object-group"></i> object-group</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-object-ungroup"></i> object-ungroup</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-odnoklassniki"></i> odnoklassniki</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-odnoklassniki-square"></i> odnoklassniki-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-opencart"></i> opencart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-opera"></i> opera</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-optin-monster"></i> optin-monster</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-registered"></i> registered</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-safari"></i> safari</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sticky-note"></i> sticky-note</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sticky-note-o"></i> sticky-note-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-television"></i> television</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-trademark"></i> trademark</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tripadvisor"></i> tripadvisor</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tv"></i> tv <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-vimeo"></i> vimeo</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-wikipedia-w"></i> wikipedia-w</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-y-combinator"></i> y-combinator</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-yc"></i> yc <span class="text-muted">(alias)</span></div>
                                </div>
                            </section>
                            <section id="web-application">
                                <h4>Web Application Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-adjust"></i> adjust</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-anchor"></i> anchor</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-archive"></i> archive</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> area-chart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrows"></i> arrows</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> arrows-h</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> arrows-v</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-asterisk"></i> asterisk</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-at"></i> at</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-balance-scale"></i> balance-scale</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ban"></i> ban</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bank"></i> bank <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> bar-chart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> bar-chart-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-barcode"></i> barcode</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bars"></i> bars</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-0"></i> battery-0 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-1"></i> battery-1 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-2"></i> battery-2 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-3"></i> battery-3 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-4"></i> battery-4 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-empty"></i> battery-empty</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-full"></i> battery-full</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-half"></i> battery-half</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-quarter"></i> battery-quarter</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-battery-three-quarters"></i> battery-three-quarters</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bed"></i> bed</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-beer"></i> beer</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bell"></i> bell</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bell-o"></i> bell-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bell-slash"></i> bell-slash</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bell-slash-o"></i> bell-slash-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bicycle"></i> bicycle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-binoculars"></i> binoculars</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-birthday-cake"></i> birthday-cake</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bolt"></i> bolt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bomb"></i> bomb</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-book"></i> book</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bookmark"></i> bookmark</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bookmark-o"></i> bookmark-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-briefcase"></i> briefcase</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bug"></i> bug</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-building"></i> building</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-building-o"></i> building-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bullhorn"></i> bullhorn</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bullseye"></i> bullseye</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bus"></i> bus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calculator"></i> calculator</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar"></i> calendar</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar-check-o"></i> calendar-check-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar-minus-o"></i> calendar-minus-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar-o"></i> calendar-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar-plus-o"></i> calendar-plus-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-calendar-times-o"></i> calendar-times-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-camera"></i> camera</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-camera-retro"></i> camera-retro</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-car"></i> car</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> caret-square-o-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> caret-square-o-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> caret-square-o-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> caret-square-o-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cart-arrow-down"></i> cart-arrow-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cart-plus"></i> cart-plus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc"></i> cc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-certificate"></i> certificate</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-check"></i> check</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-check-circle"></i> check-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-check-circle-o"></i> check-circle-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-check-square"></i> check-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> check-square-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-child"></i> child</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-circle"></i> circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> circle-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> circle-o-notch</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-circle-thin"></i> circle-thin</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-clock-o"></i> clock-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-clone"></i> clone</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-close"></i> close <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cloud"></i> cloud</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cloud-download"></i> cloud-download</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cloud-upload"></i> cloud-upload</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-code"></i> code</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-code-fork"></i> code-fork</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-coffee"></i> coffee</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cog"></i> cog</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cogs"></i> cogs</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-comment"></i> comment</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-comment-o"></i> comment-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-commenting"></i> commenting</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-commenting-o"></i> commenting-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-comments"></i> comments</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-comments-o"></i> comments-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-compass"></i> compass</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-copyright"></i> copyright</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-creative-commons"></i> creative-commons</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> credit-card</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-crop"></i> crop</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-crosshairs"></i> crosshairs</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cube"></i> cube</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cubes"></i> cubes</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cutlery"></i> cutlery</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-dashboard"></i> dashboard <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-database"></i> database</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-desktop"></i> desktop</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-diamond"></i> diamond</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> dot-circle-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-download"></i> download</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-edit"></i> edit <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ellipsis-h"></i> ellipsis-h</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ellipsis-v"></i> ellipsis-v</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-envelope"></i> envelope</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-envelope-o"></i> envelope-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-envelope-square"></i> envelope-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-eraser"></i> eraser</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-exchange"></i> exchange</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-exclamation"></i> exclamation</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-exclamation-circle"></i> exclamation-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-exclamation-triangle"></i> exclamation-triangle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-external-link"></i> external-link</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-external-link-square"></i> external-link-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-eye"></i> eye</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-eye-slash"></i> eye-slash</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-eyedropper"></i> eyedropper</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-fax"></i> fax</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-feed"></i> feed <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-female"></i> female</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> fighter-jet</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> file-archive-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> file-audio-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> file-code-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> file-excel-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> file-image-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> file-pdf-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> file-video-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> file-word-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-film"></i> film</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-filter"></i> filter</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-fire"></i> fire</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-fire-extinguisher"></i> fire-extinguisher</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-flag"></i> flag</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-flag-checkered"></i> flag-checkered</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-flag-o"></i> flag-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-flash"></i> flash <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-flask"></i> flask</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-folder"></i> folder</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-folder-o"></i> folder-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-folder-open"></i> folder-open</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-folder-open-o"></i> folder-open-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-frown-o"></i> frown-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-futbol-o"></i> futbol-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gamepad"></i> gamepad</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gavel"></i> gavel</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gear"></i> gear <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gears"></i> gears <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gift"></i> gift</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-glass"></i> glass</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-globe"></i> globe</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-graduation-cap"></i> graduation-cap</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-group"></i> group <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-grab-o"></i> hand-grab-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-lizard-o"></i> hand-lizard-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-paper-o"></i> hand-paper-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-peace-o"></i> hand-peace-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-pointer-o"></i> hand-pointer-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-rock-o"></i> hand-rock-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-scissors-o"></i> hand-scissors-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-spock-o"></i> hand-spock-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-stop-o"></i> hand-stop-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hdd-o"></i> hdd-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-headphones"></i> headphones</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-heart"></i> heart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> heart-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-heartbeat"></i> heartbeat</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-history"></i> history</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-home"></i> home</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hotel"></i> hotel <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass"></i> hourglass</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-1"></i> hourglass-1 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-2"></i> hourglass-2 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-3"></i> hourglass-3 <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-end"></i> hourglass-end</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-half"></i> hourglass-half</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-o"></i> hourglass-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hourglass-start"></i> hourglass-start</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-i-cursor"></i> i-cursor</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-image"></i> image <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-inbox"></i> inbox</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-industry"></i> industry</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-info"></i> info</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-info-circle"></i> info-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-institution"></i> institution <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-key"></i> key</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-keyboard-o"></i> keyboard-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-language"></i> language</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-laptop"></i> laptop</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-leaf"></i> leaf</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-legal"></i> legal <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-lemon-o"></i> lemon-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-level-down"></i> level-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-level-up"></i> level-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-life-bouy"></i> life-bouy <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-life-buoy"></i> life-buoy <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-life-ring"></i> life-ring</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-life-saver"></i> life-saver <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-lightbulb-o"></i> lightbulb-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> line-chart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-location-arrow"></i> location-arrow</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-lock"></i> lock</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-magic"></i> magic</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-magnet"></i> magnet</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mail-forward"></i> mail-forward <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mail-reply"></i> mail-reply <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mail-reply-all"></i> mail-reply-all <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-male"></i> male</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-map"></i> map</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-map-marker"></i> map-marker</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-map-o"></i> map-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-map-pin"></i> map-pin</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-map-signs"></i> map-signs</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-meh-o"></i> meh-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-microphone"></i> microphone</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-microphone-slash"></i> microphone-slash</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-minus"></i> minus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-minus-circle"></i> minus-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> minus-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> minus-square-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mobile"></i> mobile</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mobile-phone"></i> mobile-phone <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-money"></i> money</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-moon-o"></i> moon-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mortar-board"></i> mortar-board <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-motorcycle"></i> motorcycle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mouse-pointer"></i> mouse-pointer</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-music"></i> music</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-navicon"></i> navicon <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-newspaper-o"></i> newspaper-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-object-group"></i> object-group</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-object-ungroup"></i> object-ungroup</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-paint-brush"></i> paint-brush</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-paper-plane"></i> paper-plane</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-paper-plane-o"></i> paper-plane-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-paw"></i> paw</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pencil"></i> pencil</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pencil-square"></i> pencil-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pencil-square-o"></i> pencil-square-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-phone"></i> phone</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-phone-square"></i> phone-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-photo"></i> photo <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-picture-o"></i> picture-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> pie-chart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plane"></i> plane</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plug"></i> plug</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plus"></i> plus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plus-circle"></i> plus-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> plus-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> plus-square-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-power-off"></i> power-off</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-print"></i> print</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-puzzle-piece"></i> puzzle-piece</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-qrcode"></i> qrcode</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-question"></i> question</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-question-circle"></i> question-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-quote-left"></i> quote-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-quote-right"></i> quote-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-random"></i> random</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-recycle"></i> recycle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-refresh"></i> refresh</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-registered"></i> registered</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-remove"></i> remove <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-reorder"></i> reorder <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-reply"></i> reply</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-reply-all"></i> reply-all</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-retweet"></i> retweet</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-road"></i> road</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rocket"></i> rocket</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rss"></i> rss</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rss-square"></i> rss-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-search"></i> search</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-search-minus"></i> search-minus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-search-plus"></i> search-plus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-send"></i> send <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-send-o"></i> send-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-server"></i> server</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-share"></i> share</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> share-alt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> share-alt-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-share-square"></i> share-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-share-square-o"></i> share-square-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-shield"></i> shield</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ship"></i> ship</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-shopping-cart"></i> shopping-cart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sign-in"></i> sign-in</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sign-out"></i> sign-out</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-signal"></i> signal</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sitemap"></i> sitemap</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sliders"></i> sliders</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-smile-o"></i> smile-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-soccer-ball-o"></i> soccer-ball-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort"></i> sort</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-alpha-asc"></i> sort-alpha-asc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-alpha-desc"></i> sort-alpha-desc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-amount-asc"></i> sort-amount-asc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-amount-desc"></i> sort-amount-desc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-asc"></i> sort-asc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-desc"></i> sort-desc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-down"></i> sort-down <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-numeric-asc"></i> sort-numeric-asc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-numeric-desc"></i> sort-numeric-desc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sort-up"></i> sort-up <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-space-shuttle"></i> space-shuttle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-spinner"></i> spinner</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-spoon"></i> spoon</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-square"></i> square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-square-o"></i> square-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-star"></i> star</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-star-half"></i> star-half</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-star-half-empty"></i> star-half-empty <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-star-half-full"></i> star-half-full <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-star-half-o"></i> star-half-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-star-o"></i> star-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sticky-note"></i> sticky-note</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sticky-note-o"></i> sticky-note-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-street-view"></i> street-view</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-suitcase"></i> suitcase</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sun-o"></i> sun-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-support"></i> support <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tablet"></i> tablet</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tachometer"></i> tachometer</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tag"></i> tag</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tags"></i> tags</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tasks"></i> tasks</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-taxi"></i> taxi</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-television"></i> television</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-terminal"></i> terminal</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-thumb-tack"></i> thumb-tack</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> thumbs-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> thumbs-o-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> thumbs-o-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> thumbs-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ticket"></i> ticket</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-times"></i> times</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-times-circle"></i> times-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-times-circle-o"></i> times-circle-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tint"></i> tint</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> toggle-down <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> toggle-left <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-off"></i> toggle-off</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-on"></i> toggle-on</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> toggle-right <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> toggle-up <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-trademark"></i> trademark</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-trash"></i> trash</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-trash-o"></i> trash-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tree"></i> tree</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-trophy"></i> trophy</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-truck"></i> truck</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tty"></i> tty</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tv"></i> tv <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-umbrella"></i> umbrella</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-university"></i> university</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-unlock"></i> unlock</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-unlock-alt"></i> unlock-alt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-unsorted"></i> unsorted <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-upload"></i> upload</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-user"></i> user</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-user-plus"></i> user-plus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-user-secret"></i> user-secret</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-user-times"></i> user-times</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-users"></i> users</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-video-camera"></i> video-camera</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-volume-down"></i> volume-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-volume-off"></i> volume-off</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-volume-up"></i> volume-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-warning"></i> warning <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> wheelchair</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-wifi"></i> wifi</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-wrench"></i> wrench</div>
                                </div>
                            </section>
                            <section id="hand">
                                <h4>Hand Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-grab-o"></i> hand-grab-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-lizard-o"></i> hand-lizard-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> hand-o-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> hand-o-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> hand-o-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> hand-o-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-paper-o"></i> hand-paper-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-peace-o"></i> hand-peace-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-pointer-o"></i> hand-pointer-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-rock-o"></i> hand-rock-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-scissors-o"></i> hand-scissors-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-spock-o"></i> hand-spock-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-stop-o"></i> hand-stop-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> thumbs-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> thumbs-o-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> thumbs-o-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> thumbs-up</div>
                                </div>
                            </section>
                            <section id="transportation">
                                <h4>Transportation Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> ambulance</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bicycle"></i> bicycle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bus"></i> bus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-car"></i> car</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> fighter-jet</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-motorcycle"></i> motorcycle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plane"></i> plane</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rocket"></i> rocket</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ship"></i> ship</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-space-shuttle"></i> space-shuttle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-subway"></i> subway</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-taxi"></i> taxi</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-train"></i> train</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-truck"></i> truck</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> wheelchair</div>
                                </div>
                            </section>
                            <section id="gender">
                                <h4>Gender Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-genderless"></i> genderless</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-intersex"></i> intersex <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mars"></i> mars</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mars-double"></i> mars-double</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mars-stroke"></i> mars-stroke</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mars-stroke-h"></i> mars-stroke-h</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mars-stroke-v"></i> mars-stroke-v</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-mercury"></i> mercury</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-neuter"></i> neuter</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-transgender"></i> transgender</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-transgender-alt"></i> transgender-alt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-venus"></i> venus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-venus-double"></i> venus-double</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-venus-mars"></i> venus-mars</div>
                                </div>
                            </section>
                            <section id="file-type">
                                <h4>File Type Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file"></i> file</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-archive-o"></i> file-archive-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-audio-o"></i> file-audio-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-code-o"></i> file-code-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-excel-o"></i> file-excel-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-image-o"></i> file-image-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-o"></i> file-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-pdf-o"></i> file-pdf-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-text"></i> file-text</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> file-text-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-video-o"></i> file-video-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-word-o"></i> file-word-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></div>
                                </div>
                            </section>
                            <section id="spinner">
                                <h4>Spinner Icons</h4>
                                <div class="alert alert-success">
                                    <ul class="fa-ul">
                                        <li>
                                            <i class="fa fa-info-circle fa-lg fa-li"></i>
                                            These icons work great with the <code>fa-spin</code> class. Check out the
                                            <a href="https://fortawesome.github.io/Font-Awesome/examples/#animated" class="alert-link">spinning icons example.</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-circle-o-notch"></i> circle-o-notch</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cog"></i> cog</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gear"></i> gear <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-refresh"></i> refresh</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-spinner"></i> spinner</div>
                                </div>
                            </section>
                            <section id="form-control">
                                <h4>Form Control Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-check-square"></i> check-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> check-square-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-circle"></i> circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> circle-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> dot-circle-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> minus-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> minus-square-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> plus-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> plus-square-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-square"></i> square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-square-o"></i> square-o</div>
                                </div>
                            </section>
                            <section id="payment">
                                <h4>Payment Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> cc-amex</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-diners-club"></i> cc-diners-club</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> cc-discover</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-jcb"></i> cc-jcb</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> cc-mastercard</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> cc-paypal</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> cc-stripe</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> cc-visa</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> credit-card</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> google-wallet</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-paypal"></i> paypal</div>
                                </div>
                            </section>
                            <section id="chart">
                                <h4>Chart Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-area-chart"></i> area-chart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bar-chart"></i> bar-chart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> bar-chart-o <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-line-chart"></i> line-chart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pie-chart"></i> pie-chart</div>
                                </div>
                            </section>
                            <section id="currency">
                                <h4>Currency Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> bitcoin <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-btc"></i> btc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cny"></i> cny <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-dollar"></i> dollar <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-eur"></i> eur</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-euro"></i> euro <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gbp"></i> gbp</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gg"></i> gg</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gg-circle"></i> gg-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ils"></i> ils</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-inr"></i> inr</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-jpy"></i> jpy</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-krw"></i> krw</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-money"></i> money</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rmb"></i> rmb <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rouble"></i> rouble <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rub"></i> rub</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ruble"></i> ruble <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rupee"></i> rupee <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-shekel"></i> shekel <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sheqel"></i> sheqel <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-try"></i> try</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-turkish-lira"></i> turkish-lira <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-usd"></i> usd</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-won"></i> won <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-yen"></i> yen <span class="text-muted">(alias)</span></div>
                                </div>
                            </section>
                            <section id="text-editor">
                                <h4>Text Editor Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-align-center"></i> align-center</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-align-justify"></i> align-justify</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-align-left"></i> align-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-align-right"></i> align-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bold"></i> bold</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chain"></i> chain <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chain-broken"></i> chain-broken</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-clipboard"></i> clipboard</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-columns"></i> columns</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-copy"></i> copy <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cut"></i> cut <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-dedent"></i> dedent <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-eraser"></i> eraser</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file"></i> file</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-o"></i> file-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-text"></i> file-text</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> file-text-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-files-o"></i> files-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-floppy-o"></i> floppy-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-font"></i> font</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-header"></i> header</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-indent"></i> indent</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-italic"></i> italic</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-link"></i> link</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-list"></i> list</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-list-alt"></i> list-alt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-list-ol"></i> list-ol</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-list-ul"></i> list-ul</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-outdent"></i> outdent</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-paperclip"></i> paperclip</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-paragraph"></i> paragraph</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-paste"></i> paste <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-repeat"></i> repeat</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rotate-left"></i> rotate-left <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rotate-right"></i> rotate-right <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-save"></i> save <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-scissors"></i> scissors</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-strikethrough"></i> strikethrough</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-subscript"></i> subscript</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-superscript"></i> superscript</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-table"></i> table</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-text-height"></i> text-height</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-text-width"></i> text-width</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-th"></i> th</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-th-large"></i> th-large</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-th-list"></i> th-list</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-underline"></i> underline</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-undo"></i> undo</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-unlink"></i> unlink <span class="text-muted">(alias)</span></div>
                                </div>
                            </section>
                            <section id="directional">
                                <h4>Directional Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-angle-double-down"></i> angle-double-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-angle-double-left"></i> angle-double-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-angle-double-right"></i> angle-double-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-angle-double-up"></i> angle-double-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-angle-down"></i> angle-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-angle-left"></i> angle-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-angle-right"></i> angle-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-angle-up"></i> angle-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-circle-down"></i> arrow-circle-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-circle-left"></i> arrow-circle-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-down"></i> arrow-circle-o-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-left"></i> arrow-circle-o-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-right"></i> arrow-circle-o-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-up"></i> arrow-circle-o-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-circle-right"></i> arrow-circle-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-circle-up"></i> arrow-circle-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-down"></i> arrow-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-left"></i> arrow-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-right"></i> arrow-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrow-up"></i> arrow-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrows"></i> arrows</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> arrows-alt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> arrows-h</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> arrows-v</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-down"></i> caret-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-left"></i> caret-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-right"></i> caret-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> caret-square-o-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> caret-square-o-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> caret-square-o-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> caret-square-o-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-caret-up"></i> caret-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chevron-circle-down"></i> chevron-circle-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chevron-circle-left"></i> chevron-circle-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chevron-circle-right"></i> chevron-circle-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chevron-circle-up"></i> chevron-circle-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chevron-down"></i> chevron-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chevron-left"></i> chevron-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chevron-right"></i> chevron-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chevron-up"></i> chevron-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-exchange"></i> exchange</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> hand-o-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> hand-o-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> hand-o-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> hand-o-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-long-arrow-down"></i> long-arrow-down</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-long-arrow-left"></i> long-arrow-left</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-long-arrow-right"></i> long-arrow-right</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-long-arrow-up"></i> long-arrow-up</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> toggle-down <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> toggle-left <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> toggle-right <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> toggle-up <span class="text-muted">(alias)</span></div>
                                </div>
                            </section>
                            <section id="video-player">
                                <h4>Video Player Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> arrows-alt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-backward"></i> backward</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-compress"></i> compress</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-eject"></i> eject</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-expand"></i> expand</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-fast-backward"></i> fast-backward</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-fast-forward"></i> fast-forward</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-forward"></i> forward</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pause"></i> pause</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-play"></i> play</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-play-circle"></i> play-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-play-circle-o"></i> play-circle-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-random"></i> random</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-step-backward"></i> step-backward</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-step-forward"></i> step-forward</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-stop"></i> stop</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> youtube-play</div>
                                </div>
                            </section>
                            <section id="brand">
                                <h4>Brand Icons</h4>
                                <div class="alert alert-warning">
                                    <h4><i class="fa fa-warning"></i> Warning!</h4>
                                    Apparently, Adblock Plus can remove Font Awesome brand icons with their "Remove Social
                                    Media Buttons" setting. We will not use hacks to force them to display. Please
                                    <a href="https://adblockplus.org/en/bugs" class="alert-link">report an issue with Adblock Plus if you believe this to be
                                    an error. To work around this, you'll need to modify the social icon class names.</a>
                                </div>
                                <div class="row fontawesome-icon-list margin-bottom-lg">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-500px"></i> 500px</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-adn"></i> adn</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-amazon"></i> amazon</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-android"></i> android</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-angellist"></i> angellist</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-apple"></i> apple</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-behance"></i> behance</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-behance-square"></i> behance-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bitbucket"></i> bitbucket</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bitbucket-square"></i> bitbucket-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> bitcoin <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-black-tie"></i> black-tie</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-btc"></i> btc</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-buysellads"></i> buysellads</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-amex"></i> cc-amex</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-diners-club"></i> cc-diners-club</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-discover"></i> cc-discover</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-jcb"></i> cc-jcb</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-mastercard"></i> cc-mastercard</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-paypal"></i> cc-paypal</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-stripe"></i> cc-stripe</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-cc-visa"></i> cc-visa</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-chrome"></i> chrome</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-codepen"></i> codepen</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-connectdevelop"></i> connectdevelop</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-contao"></i> contao</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-css3"></i> css3</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-dashcube"></i> dashcube</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-delicious"></i> delicious</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-deviantart"></i> deviantart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-digg"></i> digg</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-dribbble"></i> dribbble</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-dropbox"></i> dropbox</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-drupal"></i> drupal</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-empire"></i> empire</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-expeditedssl"></i> expeditedssl</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-facebook"></i> facebook</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-facebook-f"></i> facebook-f <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-facebook-official"></i> facebook-official</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-facebook-square"></i> facebook-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-firefox"></i> firefox</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-flickr"></i> flickr</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-fonticons"></i> fonticons</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-forumbee"></i> forumbee</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-foursquare"></i> foursquare</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ge"></i> ge <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-get-pocket"></i> get-pocket</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gg"></i> gg</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gg-circle"></i> gg-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-git"></i> git</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-git-square"></i> git-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-github"></i> github</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-github-alt"></i> github-alt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-github-square"></i> github-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gittip"></i> gittip <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-google"></i> google</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-google-plus"></i> google-plus</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-google-plus-square"></i> google-plus-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-google-wallet"></i> google-wallet</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-gratipay"></i> gratipay</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hacker-news"></i> hacker-news</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-houzz"></i> houzz</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-html5"></i> html5</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-instagram"></i> instagram</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-internet-explorer"></i> internet-explorer</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ioxhost"></i> ioxhost</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-joomla"></i> joomla</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-jsfiddle"></i> jsfiddle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-lastfm"></i> lastfm</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-lastfm-square"></i> lastfm-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-leanpub"></i> leanpub</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-linkedin"></i> linkedin</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-linkedin-square"></i> linkedin-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-linux"></i> linux</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-maxcdn"></i> maxcdn</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-meanpath"></i> meanpath</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-medium"></i> medium</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-odnoklassniki"></i> odnoklassniki</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-odnoklassniki-square"></i> odnoklassniki-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-opencart"></i> opencart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-openid"></i> openid</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-opera"></i> opera</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-optin-monster"></i> optin-monster</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pagelines"></i> pagelines</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-paypal"></i> paypal</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pied-piper"></i> pied-piper</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pied-piper-alt"></i> pied-piper-alt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pinterest"></i> pinterest</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pinterest-p"></i> pinterest-p</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-pinterest-square"></i> pinterest-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-qq"></i> qq</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ra"></i> ra <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-rebel"></i> rebel</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-reddit"></i> reddit</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-reddit-square"></i> reddit-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-renren"></i> renren</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-safari"></i> safari</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-sellsy"></i> sellsy</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-share-alt"></i> share-alt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-share-alt-square"></i> share-alt-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-shirtsinbulk"></i> shirtsinbulk</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-simplybuilt"></i> simplybuilt</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-skyatlas"></i> skyatlas</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-skype"></i> skype</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-slack"></i> slack</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-slideshare"></i> slideshare</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-soundcloud"></i> soundcloud</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-spotify"></i> spotify</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-stack-exchange"></i> stack-exchange</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-stack-overflow"></i> stack-overflow</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-steam"></i> steam</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-steam-square"></i> steam-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-stumbleupon"></i> stumbleupon</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-stumbleupon-circle"></i> stumbleupon-circle</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tencent-weibo"></i> tencent-weibo</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-trello"></i> trello</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tripadvisor"></i> tripadvisor</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tumblr"></i> tumblr</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-tumblr-square"></i> tumblr-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-twitch"></i> twitch</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-twitter"></i> twitter</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-twitter-square"></i> twitter-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-viacoin"></i> viacoin</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-vimeo"></i> vimeo</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-vimeo-square"></i> vimeo-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-vine"></i> vine</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-vk"></i> vk</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-wechat"></i> wechat <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-weibo"></i> weibo</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-weixin"></i> weixin</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-whatsapp"></i> whatsapp</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-wikipedia-w"></i> wikipedia-w</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-windows"></i> windows</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-wordpress"></i> wordpress</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-xing"></i> xing</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-xing-square"></i> xing-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-y-combinator"></i> y-combinator</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-y-combinator-square"></i> y-combinator-square <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-yahoo"></i> yahoo</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-yc"></i> yc <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-yc-square"></i> yc-square <span class="text-muted">(alias)</span></div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-yelp"></i> yelp</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-youtube"></i> youtube</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> youtube-play</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-youtube-square"></i> youtube-square</div>
                                </div>
                                <div class="alert alert-success">
                                    <ul class="margin-bottom-none padding-left-lg">
                                        <li>All brand icons are trademarks of their respective owners.</li>
                                        <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
                                    </ul>
                                </div>
                            </section>
                            <section id="medical">
                                <h4>Medical Icons</h4>
                                <div class="row fontawesome-icon-list">
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> ambulance</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-h-square"></i> h-squae</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-heart"></i> heart</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> heart-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-heartbeat"></i> heartbeat</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-hospital-o"></i> hospital-o</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-medkit"></i> medkit</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> plus-square</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-stethoscope"></i> stethoscope</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-user-md"></i> user-md</div>
                                    <div class="fa-hover col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> wheelchair</div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Glyphicons
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="bs-glyphicons col-lg-4">
                                <span class="glyphicon glyphicon-asterisk"> glyphicon-asterisk </span><br>
                                <span class="glyphicon glyphicon-plus"> glyphicon-plus </span><br>
                                <span class="glyphicon glyphicon-euro"> glyphicon-euro </span><br>
                                <span class="glyphicon glyphicon-eur"> glyphicon-eur </span><br>
                                <span class="glyphicon glyphicon-minus"> glyphicon-minus </span><br>
                                <span class="glyphicon glyphicon-cloud"> glyphicon-cloud </span><br>
                                <span class="glyphicon glyphicon-envelope"> glyphicon-envelope </span><br>
                                <span class="glyphicon glyphicon-pencil"> glyphicon-pencil </span><br>
                                <span class="glyphicon glyphicon-glass"> glyphicon-glass </span><br>
                                <span class="glyphicon glyphicon-music"> glyphicon-music </span><br>
                                <span class="glyphicon glyphicon-search"> glyphicon-search </span><br>
                                <span class="glyphicon glyphicon-heart"> glyphicon-heart </span><br>
                                <span class="glyphicon glyphicon-star"> glyphicon-star </span><br>
                                <span class="glyphicon glyphicon-star-empty"> glyphicon-star-empty </span><br>
                                <span class="glyphicon glyphicon-user"> glyphicon-user </span><br>
                                <span class="glyphicon glyphicon-film"> glyphicon-film </span><br>
                                <span class="glyphicon glyphicon-th-large"> glyphicon-th-large </span><br>
                                <span class="glyphicon glyphicon-th"> glyphicon-th </span><br>
                                <span class="glyphicon glyphicon-th-list"> glyphicon-th-list </span><br>
                                <span class="glyphicon glyphicon-ok"> glyphicon-ok </span><br>
                                <span class="glyphicon glyphicon-remove"> glyphicon-remove </span><br>
                                <span class="glyphicon glyphicon-zoom-in"> glyphicon-zoom-in </span><br>
                                <span class="glyphicon glyphicon-zoom-out"> glyphicon-zoom-out </span><br>
                                <span class="glyphicon glyphicon-off"> glyphicon-off </span><br>
                                <span class="glyphicon glyphicon-signal"> glyphicon-signal </span><br>
                                <span class="glyphicon glyphicon-cog"> glyphicon-cog </span><br>
                                <span class="glyphicon glyphicon-trash"> glyphicon-trash </span><br>
                                <span class="glyphicon glyphicon-home"> glyphicon-home </span><br>
                                <span class="glyphicon glyphicon-file"> glyphicon-file </span><br>
                                <span class="glyphicon glyphicon-time"> glyphicon-time </span><br>
                                <span class="glyphicon glyphicon-road"> glyphicon-road </span><br>
                                <span class="glyphicon glyphicon-download-alt"> glyphicon-download-alt </span><br>
                                <span class="glyphicon glyphicon-download"> glyphicon-download </span><br>
                                <span class="glyphicon glyphicon-upload"> glyphicon-upload </span><br>
                                <span class="glyphicon glyphicon-inbox"> glyphicon-inbox </span><br>
                                <span class="glyphicon glyphicon-play-circle"> glyphicon-play-circle </span><br>
                                <span class="glyphicon glyphicon-repeat"> glyphicon-repeat </span><br>
                                <span class="glyphicon glyphicon-refresh"> glyphicon-refresh </span><br>
                                <span class="glyphicon glyphicon-list-alt"> glyphicon-list-alt </span><br>
                                <span class="glyphicon glyphicon-lock"> glyphicon-lock </span><br>
                                <span class="glyphicon glyphicon-flag"> glyphicon-flag </span><br>
                                <span class="glyphicon glyphicon-headphones"> glyphicon-headphones </span><br>
                                <span class="glyphicon glyphicon-volume-off"> glyphicon-volume-off </span><br>
                                <span class="glyphicon glyphicon-volume-down"> glyphicon-volume-down </span><br>
                                <span class="glyphicon glyphicon-volume-up"> glyphicon-volume-up </span><br>
                                <span class="glyphicon glyphicon-qrcode"> glyphicon-qrcode </span><br>
                                <span class="glyphicon glyphicon-barcode"> glyphicon-barcode </span><br>
                                <span class="glyphicon glyphicon-tag"> glyphicon-tag </span><br>
                                <span class="glyphicon glyphicon-tags"> glyphicon-tags </span><br>
                                <span class="glyphicon glyphicon-book"> glyphicon-book </span><br>
                                <span class="glyphicon glyphicon-bookmark"> glyphicon-bookmark </span><br>
                                <span class="glyphicon glyphicon-print"> glyphicon-print </span><br>
                                <span class="glyphicon glyphicon-camera"> glyphicon-camera </span><br>
                                <span class="glyphicon glyphicon-font"> glyphicon-font </span><br>
                                <span class="glyphicon glyphicon-bold"> glyphicon-bold </span><br>
                                <span class="glyphicon glyphicon-italic"> glyphicon-italic </span><br>
                                <span class="glyphicon glyphicon-text-height"> glyphicon-text-height </span><br>
                                <span class="glyphicon glyphicon-text-width"> glyphicon-text-width </span><br>
                                <span class="glyphicon glyphicon-align-left"> glyphicon-align-left </span><br>
                                <span class="glyphicon glyphicon-align-center"> glyphicon-align-center </span><br>
                                <span class="glyphicon glyphicon-align-right"> glyphicon-align-right </span><br>
                                <span class="glyphicon glyphicon-align-justify"> glyphicon-align-justify </span><br>
                                <span class="glyphicon glyphicon-list"> glyphicon-list </span><br>
                                <span class="glyphicon glyphicon-indent-left"> glyphicon-indent-left </span><br>
                                <span class="glyphicon glyphicon-indent-right"> glyphicon-indent-right </span><br>
                                <span class="glyphicon glyphicon-facetime-video"> glyphicon-facetime-video </span><br>
                                <span class="glyphicon glyphicon-picture"> glyphicon-picture </span><br>
                                <span class="glyphicon glyphicon-map-marker"> glyphicon-map-marker </span><br>
                                <span class="glyphicon glyphicon-adjust"> glyphicon-adjust </span><br>
                                <span class="glyphicon glyphicon-tint"> glyphicon-tint </span><br>
                                <span class="glyphicon glyphicon-edit"> glyphicon-edit </span><br>
                                <span class="glyphicon glyphicon-share"> glyphicon-share </span><br>
                                <span class="glyphicon glyphicon-check"> glyphicon-check </span><br>
                                <span class="glyphicon glyphicon-move"> glyphicon-move </span><br>
                                <span class="glyphicon glyphicon-step-backward"> glyphicon-step-backward </span><br>
                                <span class="glyphicon glyphicon-fast-backward"> glyphicon-fast-backward </span><br>
                                <span class="glyphicon glyphicon-backward"> glyphicon-backward </span><br>
                                <span class="glyphicon glyphicon-play"> glyphicon-play </span><br>
                                <span class="glyphicon glyphicon-pause"> glyphicon-pause </span><br>
                                <span class="glyphicon glyphicon-stop"> glyphicon-stop </span><br>
                                <span class="glyphicon glyphicon-forward"> glyphicon-forward </span><br>
                                <span class="glyphicon glyphicon-fast-forward"> glyphicon-fast-forward </span><br>
                                <span class="glyphicon glyphicon-step-forward"> glyphicon-step-forward </span><br>
                                <span class="glyphicon glyphicon-eject"> glyphicon-eject </span><br>
                                <span class="glyphicon glyphicon-chevron-left"> glyphicon-chevron-left </span><br>
                                <span class="glyphicon glyphicon-chevron-right"> glyphicon-chevron-right </span><br>
                                <span class="glyphicon glyphicon-plus-sign"> glyphicon-plus-sign </span><br>
                            </div>
                            <div class="bs-glyphicons col-lg-4">
                                <span class="glyphicon glyphicon-minus-sign"> glyphicon-minus-sign </span><br>
                                <span class="glyphicon glyphicon-remove-sign"> glyphicon-remove-sign </span><br>
                                <span class="glyphicon glyphicon-ok-sign"> glyphicon-ok-sign </span><br>
                                <span class="glyphicon glyphicon-question-sign"> glyphicon-question-sign </span><br>
                                <span class="glyphicon glyphicon-info-sign"> glyphicon-info-sign </span><br>
                                <span class="glyphicon glyphicon-screenshot"> glyphicon-screenshot </span><br>
                                <span class="glyphicon glyphicon-remove-circle"> glyphicon-remove-circle </span><br>
                                <span class="glyphicon glyphicon-ok-circle"> glyphicon-ok-circle </span><br>
                                <span class="glyphicon glyphicon-ban-circle"> glyphicon-ban-circle </span><br>
                                <span class="glyphicon glyphicon-arrow-left"> glyphicon-arrow-left </span><br>
                                <span class="glyphicon glyphicon-arrow-right"> glyphicon-arrow-right </span><br>
                                <span class="glyphicon glyphicon-arrow-up"> glyphicon-arrow-up </span><br>
                                <span class="glyphicon glyphicon-arrow-down"> glyphicon-arrow-down </span><br>
                                <span class="glyphicon glyphicon-share-alt"> glyphicon-share-alt </span><br>
                                <span class="glyphicon glyphicon-resize-full"> glyphicon-resize-full </span><br>
                                <span class="glyphicon glyphicon-resize-small"> glyphicon-resize-small </span><br>
                                <span class="glyphicon glyphicon-exclamation-sign"> glyphicon-exclamation-sign </span><br>
                                <span class="glyphicon glyphicon-gift"> glyphicon-gift </span><br>
                                <span class="glyphicon glyphicon-leaf"> glyphicon-leaf </span><br>
                                <span class="glyphicon glyphicon-fire"> glyphicon-fire </span><br>
                                <span class="glyphicon glyphicon-eye-open"> glyphicon-eye-open </span><br>
                                <span class="glyphicon glyphicon-eye-close"> glyphicon-eye-close </span><br>
                                <span class="glyphicon glyphicon-warning-sign"> glyphicon-warning-sign </span><br>
                                <span class="glyphicon glyphicon-plane"> glyphicon-plane </span><br>
                                <span class="glyphicon glyphicon-calendar"> glyphicon-calendar </span><br>
                                <span class="glyphicon glyphicon-random"> glyphicon-random </span><br>
                                <span class="glyphicon glyphicon-comment"> glyphicon-comment </span><br>
                                <span class="glyphicon glyphicon-magnet"> glyphicon-magnet </span><br>
                                <span class="glyphicon glyphicon-chevron-up"> glyphicon-chevron-up </span><br>
                                <span class="glyphicon glyphicon-chevron-down"> glyphicon-chevron-down </span><br>
                                <span class="glyphicon glyphicon-retweet"> glyphicon-retweet </span><br>
                                <span class="glyphicon glyphicon-shopping-cart"> glyphicon-shopping-cart </span><br>
                                <span class="glyphicon glyphicon-folder-close"> glyphicon-folder-close </span><br>
                                <span class="glyphicon glyphicon-folder-open"> glyphicon-folder-open </span><br>
                                <span class="glyphicon glyphicon-resize-vertical"> glyphicon-resize-vertical </span><br>
                                <span class="glyphicon glyphicon-resize-horizontal"> glyphicon-resize-horizontal </span><br>
                                <span class="glyphicon glyphicon-hdd"> glyphicon-hdd </span><br>
                                <span class="glyphicon glyphicon-bullhorn"> glyphicon-bullhorn </span><br>
                                <span class="glyphicon glyphicon-bell"> glyphicon-bell </span><br>
                                <span class="glyphicon glyphicon-certificate"> glyphicon-certificate </span><br>
                                <span class="glyphicon glyphicon-thumbs-up"> glyphicon-thumbs-up </span><br>
                                <span class="glyphicon glyphicon-thumbs-down"> glyphicon-thumbs-down </span><br>
                                <span class="glyphicon glyphicon-hand-right"> glyphicon-hand-right </span><br>
                                <span class="glyphicon glyphicon-hand-left"> glyphicon-hand-left </span><br>
                                <span class="glyphicon glyphicon-hand-up"> glyphicon-hand-up </span><br>
                                <span class="glyphicon glyphicon-hand-down"> glyphicon-hand-down </span><br>
                                <span class="glyphicon glyphicon-circle-arrow-right"> glyphicon-circle-arrow-right </span><br>
                                <span class="glyphicon glyphicon-circle-arrow-left"> glyphicon-circle-arrow-left </span><br>
                                <span class="glyphicon glyphicon-circle-arrow-up"> glyphicon-circle-arrow-up </span><br>
                                <span class="glyphicon glyphicon-circle-arrow-down"> glyphicon-circle-arrow-down </span><br>
                                <span class="glyphicon glyphicon-globe"> glyphicon-globe </span><br>
                                <span class="glyphicon glyphicon-wrench"> glyphicon-wrench </span><br>
                                <span class="glyphicon glyphicon-tasks"> glyphicon-tasks </span><br>
                                <span class="glyphicon glyphicon-filter"> glyphicon-filter </span><br>
                                <span class="glyphicon glyphicon-briefcase"> glyphicon-briefcase </span><br>
                                <span class="glyphicon glyphicon-fullscreen"> glyphicon-fullscreen </span><br>
                                <span class="glyphicon glyphicon-dashboard"> glyphicon-dashboard </span><br>
                                <span class="glyphicon glyphicon-paperclip"> glyphicon-paperclip </span><br>
                                <span class="glyphicon glyphicon-heart-empty"> glyphicon-heart-empty </span><br>
                                <span class="glyphicon glyphicon-link"> glyphicon-link </span><br>
                                <span class="glyphicon glyphicon-phone"> glyphicon-phone </span><br>
                                <span class="glyphicon glyphicon-pushpin"> glyphicon-pushpin </span><br>
                                <span class="glyphicon glyphicon-usd"> glyphicon-usd </span><br>
                                <span class="glyphicon glyphicon-gbp"> glyphicon-gbp </span><br>
                                <span class="glyphicon glyphicon-sort"> glyphicon-sort </span><br>
                                <span class="glyphicon glyphicon-sort-by-alphabet"> glyphicon-sort-by-alphabet </span><br>
                                <span class="glyphicon glyphicon-sort-by-alphabet-alt"> glyphicon-sort-by-alphabet-alt </span><br>
                                <span class="glyphicon glyphicon-sort-by-order"> glyphicon-sort-by-order </span><br>
                                <span class="glyphicon glyphicon-sort-by-order-alt"> glyphicon-sort-by-order-alt </span><br>
                                <span class="glyphicon glyphicon-sort-by-attributes"> glyphicon-sort-by-attributes </span><br>
                                <span class="glyphicon glyphicon-sort-by-attributes-alt"> glyphicon-sort-by-attributes-alt </span><br>
                                <span class="glyphicon glyphicon-unchecked"> glyphicon-unchecked </span><br>
                                <span class="glyphicon glyphicon-expand"> glyphicon-expand </span><br>
                                <span class="glyphicon glyphicon-collapse-down"> glyphicon-collapse-down </span><br>
                                <span class="glyphicon glyphicon-collapse-up"> glyphicon-collapse-up </span><br>
                                <span class="glyphicon glyphicon-log-in"> glyphicon-log-in </span><br>
                                <span class="glyphicon glyphicon-flash"> glyphicon-flash </span><br>
                                <span class="glyphicon glyphicon-log-out"> glyphicon-log-out </span><br>
                                <span class="glyphicon glyphicon-new-window"> glyphicon-new-window </span><br>
                                <span class="glyphicon glyphicon-record"> glyphicon-record </span><br>
                                <span class="glyphicon glyphicon-save"> glyphicon-save </span><br>
                                <span class="glyphicon glyphicon-open"> glyphicon-open </span><br>
                                <span class="glyphicon glyphicon-saved"> glyphicon-saved </span><br>
                                <span class="glyphicon glyphicon-import"> glyphicon-import </span><br>
                                <span class="glyphicon glyphicon-export"> glyphicon-export </span><br>
                                <span class="glyphicon glyphicon-send"> glyphicon-send </span><br>
                            </div>
                            <div class="bs-glyphicons col-lg-4">
                                <span class="glyphicon glyphicon-floppy-disk"> glyphicon-floppy-disk </span><br>
                                <span class="glyphicon glyphicon-floppy-saved"> glyphicon-floppy-saved </span><br>
                                <span class="glyphicon glyphicon-floppy-remove"> glyphicon-floppy-remove </span><br>
                                <span class="glyphicon glyphicon-floppy-save"> glyphicon-floppy-save </span><br>
                                <span class="glyphicon glyphicon-floppy-open"> glyphicon-floppy-open </span><br>
                                <span class="glyphicon glyphicon-credit-card"> glyphicon-credit-card </span><br>
                                <span class="glyphicon glyphicon-transfer"> glyphicon-transfer </span><br>
                                <span class="glyphicon glyphicon-cutlery"> glyphicon-cutlery </span><br>
                                <span class="glyphicon glyphicon-header"> glyphicon-header </span><br>
                                <span class="glyphicon glyphicon-compressed"> glyphicon-compressed </span><br>
                                <span class="glyphicon glyphicon-earphone"> glyphicon-earphone </span><br>
                                <span class="glyphicon glyphicon-phone-alt"> glyphicon-phone-alt </span><br>
                                <span class="glyphicon glyphicon-tower"> glyphicon-tower </span><br>
                                <span class="glyphicon glyphicon-stats"> glyphicon-stats </span><br>
                                <span class="glyphicon glyphicon-sd-video"> glyphicon-sd-video </span><br>
                                <span class="glyphicon glyphicon-hd-video"> glyphicon-hd-video </span><br>
                                <span class="glyphicon glyphicon-subtitles"> glyphicon-subtitles </span><br>
                                <span class="glyphicon glyphicon-sound-stereo"> glyphicon-sound-stereo </span><br>
                                <span class="glyphicon glyphicon-sound-dolby"> glyphicon-sound-dolby </span><br>
                                <span class="glyphicon glyphicon-sound-5-1"> glyphicon-sound-5-1 </span><br>
                                <span class="glyphicon glyphicon-sound-6-1"> glyphicon-sound-6-1 </span><br>
                                <span class="glyphicon glyphicon-sound-7-1"> glyphicon-sound-7-1 </span><br>
                                <span class="glyphicon glyphicon-copyright-mark"> glyphicon-copyright-mark </span><br>
                                <span class="glyphicon glyphicon-registration-mark"> glyphicon-registration-mark </span><br>
                                <span class="glyphicon glyphicon-cloud-download"> glyphicon-cloud-download </span><br>
                                <span class="glyphicon glyphicon-cloud-upload"> glyphicon-cloud-upload </span><br>
                                <span class="glyphicon glyphicon-tree-conifer"> glyphicon-tree-conifer </span><br>
                                <span class="glyphicon glyphicon-tree-deciduous"> glyphicon-tree-deciduous </span><br>
                                <span class="glyphicon glyphicon-cd"> glyphicon-cd </span><br>
                                <span class="glyphicon glyphicon-save-file"> glyphicon-save-file </span><br>
                                <span class="glyphicon glyphicon-open-file"> glyphicon-open-file </span><br>
                                <span class="glyphicon glyphicon-level-up"> glyphicon-level-up </span><br>
                                <span class="glyphicon glyphicon-copy"> glyphicon-copy </span><br>
                                <span class="glyphicon glyphicon-paste"> glyphicon-paste </span><br>
                                <span class="glyphicon glyphicon-alert"> glyphicon-alert </span><br>
                                <span class="glyphicon glyphicon-equalizer"> glyphicon-equalizer </span><br>
                                <span class="glyphicon glyphicon-king"> glyphicon-king </span><br>
                                <span class="glyphicon glyphicon-queen"> glyphicon-queen </span><br>
                                <span class="glyphicon glyphicon-pawn"> glyphicon-pawn </span><br>
                                <span class="glyphicon glyphicon-bishop"> glyphicon-bishop </span><br>
                                <span class="glyphicon glyphicon-knight"> glyphicon-knight </span><br>
                                <span class="glyphicon glyphicon-baby-formula"> glyphicon-baby-formula </span><br>
                                <span class="glyphicon glyphicon-tent"> glyphicon-tent </span><br>
                                <span class="glyphicon glyphicon-blackboard"> glyphicon-blackboard </span><br>
                                <span class="glyphicon glyphicon-bed"> glyphicon-bed </span><br>
                                <span class="glyphicon glyphicon-apple"> glyphicon-apple </span><br>
                                <span class="glyphicon glyphicon-erase"> glyphicon-erase </span><br>
                                <span class="glyphicon glyphicon-hourglass"> glyphicon-hourglass </span><br>
                                <span class="glyphicon glyphicon-lamp"> glyphicon-lamp </span><br>
                                <span class="glyphicon glyphicon-duplicate"> glyphicon-duplicate </span><br>
                                <span class="glyphicon glyphicon-piggy-bank"> glyphicon-piggy-bank </span><br>
                                <span class="glyphicon glyphicon-scissors"> glyphicon-scissors </span><br>
                                <span class="glyphicon glyphicon-bitcoin"> glyphicon-bitcoin </span><br>
                                <span class="glyphicon glyphicon-yen"> glyphicon-yen </span><br>
                                <span class="glyphicon glyphicon-ruble"> glyphicon-ruble </span><br>
                                <span class="glyphicon glyphicon-scale"> glyphicon-scale </span><br>
                                <span class="glyphicon glyphicon-ice-lolly"> glyphicon-ice-lolly </span><br>
                                <span class="glyphicon glyphicon-ice-lolly-tasted"> glyphicon-ice-lolly-tasted </span><br>
                                <span class="glyphicon glyphicon-education"> glyphicon-education </span><br>
                                <span class="glyphicon glyphicon-option-horizontal"> glyphicon-option-horizontal </span><br>
                                <span class="glyphicon glyphicon-option-vertical"> glyphicon-option-vertical </span><br>
                                <span class="glyphicon glyphicon-menu-hamburger"> glyphicon-menu-hamburger </span><br>
                                <span class="glyphicon glyphicon-modal-window"> glyphicon-modal-window </span><br>
                                <span class="glyphicon glyphicon-oil"> glyphicon-oil </span><br>
                                <span class="glyphicon glyphicon-grain"> glyphicon-grain </span><br>
                                <span class="glyphicon glyphicon-sunglasses"> glyphicon-sunglasses </span><br>
                                <span class="glyphicon glyphicon-text-size"> glyphicon-text-size </span><br>
                                <span class="glyphicon glyphicon-text-color"> glyphicon-text-color </span><br>
                                <span class="glyphicon glyphicon-text-background"> glyphicon-text-background </span><br>
                                <span class="glyphicon glyphicon-object-align-top"> glyphicon-object-align-top </span><br>
                                <span class="glyphicon glyphicon-object-align-bottom"> glyphicon-object-align-bottom </span><br>
                                <span class="glyphicon glyphicon-object-align-horizontal"> glyphicon-object-align-horizontal </span><br>
                                <span class="glyphicon glyphicon-object-align-left"> glyphicon-object-align-left </span><br>
                                <span class="glyphicon glyphicon-object-align-vertical"> glyphicon-object-align-vertical </span><br>
                                <span class="glyphicon glyphicon-object-align-right"> glyphicon-object-align-right </span><br>
                                <span class="glyphicon glyphicon-triangle-right"> glyphicon-triangle-right </span><br>
                                <span class="glyphicon glyphicon-triangle-left"> glyphicon-triangle-left </span><br>
                                <span class="glyphicon glyphicon-triangle-bottom"> glyphicon-triangle-bottom </span><br>
                                <span class="glyphicon glyphicon-triangle-top"> glyphicon-triangle-top </span><br>
                                <span class="glyphicon glyphicon-console"> glyphicon-console </span><br>
                                <span class="glyphicon glyphicon-superscript"> glyphicon-superscript </span><br>
                                <span class="glyphicon glyphicon-subscript"> glyphicon-subscript </span><br>
                                <span class="glyphicon glyphicon-menu-left"> glyphicon-menu-left </span><br>
                                <span class="glyphicon glyphicon-menu-right"> glyphicon-menu-right </span><br>
                                <span class="glyphicon glyphicon-menu-down"> glyphicon-menu-down </span><br>
                                <span class="glyphicon glyphicon-menu-up"> glyphicon-menu-up </span><br>
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
@endsection

@section('js')

@endsection
