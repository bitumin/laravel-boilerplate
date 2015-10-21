@extends('layouts.basic')

@section('title')
    <title>PHP Gmaps example</title>
@endsection

@section('css')
    {{--Beautify code--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/darkula.min.css">
@endsection

@section('content')
    <?php
        /*
         * Google maps embedded map:
         * Available options and defaults in App\Lib\Phpgmap.php
         */

        //common options for the embedded google map and the static image
        $radius = 25; //km
        $lat = 41.1451;
        $lng = 25.1242;
        $zoom = 7;
        $markerURL = '';
        $circleBorderColor = 'd20500';
        $circleFillColor = 'd20500';
        //static image dimensions
        $width = '640';
        $height = '100';

        //custom gmap options
        $map = array();
        $map['map_height'] = '100px';
        $map['map_width'] = '100%';
        $map['center'] = $lat.','.$lng;
        $map['zoom'] = $zoom;
        $map['disableMapTypeControl'] = true;
        $map['https'] = false;
        $map['disableStreetViewControl'] = true;
        $map['disableDoubleClickZoom'] = true;
        $map['disableNavigationControl'] = true;
        $map['disableScaleControl'] = true;
        $map['scrollwheel'] = false;
        $map['zoomControlStyle'] = 'SMALL';
        $map['zoomControlPosition'] = 'TOP_RIGHT';
        \Phpgmaps::initialize($map);

        //custom gmap circle options
        $circle = array();
        $circle['center'] = $lat.','.$lng;
        $circle['radius'] = $radius*1000; //m
        $circle['strokeColor'] = '#'.$circleBorderColor;
        $circle['strokeOpacity'] = '0.2';
        $circle['strokeWeight'] = '1';
        $circle['fillColor'] = '#'.$circleFillColor;
        $circle['fillOpacity'] = '0.1';
        $circle['clickable'] = false;
        \Phpgmaps::add_circle($circle);

        //custom gmap marker options
        $marker = array();
        $marker['position'] = $lat.','.$lng;
        $marker['icon'] = $markerURL;
        \Phpgmaps::add_marker($marker);

        //generate the proper code (returns an array with 2 keys: js, html
        $GMap =  \Phpgmaps::create_map(); //generate HTML and JS code with the given config options

        /*
         * Google maps STATIC IMAGE
         */

        $staticImgGMap = \App\Lib\Geo::getGoogleMapsStaticImageURL(
                $width, $height, $lat, $lng, $zoom,
                true,$markerURL,true,$radius,$circleFillColor,$circleBorderColor
        );

    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>PHP Google maps (Phpgmaps facade)</h2>
                {!! $GMap['js'] !!}
                {!! $GMap['html'] !!}
            </div>
            <div class="col-lg-12">
                <h3>PHP example</h3>
                <pre><code class="php">
                    $radius = 25; //km
                    $lat = 41.1451;
                    $lng = 25.1242;
                    $zoom = 7;
                    $markerURL = '';
                    $circleBorderColor = 'd20500';
                    $circleFillColor = 'd20500';

                    $map = array();
                    $map['map_height'] = '100px';
                    $map['map_width'] = '100%';
                    $map['center'] = $lat.','.$lng;
                    $map['zoom'] = $zoom;
                    $map['disableMapTypeControl'] = true;
                    $map['https'] = false;
                    $map['disableStreetViewControl'] = true;
                    $map['disableDoubleClickZoom'] = true;
                    $map['disableNavigationControl'] = true;
                    $map['disableScaleControl'] = true;
                    $map['scrollwheel'] = false;
                    $map['zoomControlStyle'] = 'SMALL';
                    $map['zoomControlPosition'] = 'TOP_RIGHT';
                    \Phpgmaps::initialize($map);

                    $circle = array();
                    $circle['center'] = $lat.','.$lng;
                    $circle['radius'] = $radius*1000; //m
                    $circle['strokeColor'] = '#'.$circleBorderColor;
                    $circle['strokeOpacity'] = '0.2';
                    $circle['strokeWeight'] = '1';
                    $circle['fillColor'] = '#'.$circleFillColor;
                    $circle['fillOpacity'] = '0.1';
                    $circle['clickable'] = false;
                    \Phpgmaps::add_circle($circle);

                    $marker = array();
                    $marker['position'] = $lat.','.$lng;
                    $marker['icon'] = $markerURL;
                    \Phpgmaps::add_marker($marker);

                    $GMap =  \Phpgmaps::create_map();
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>Generated JS</h3>
                <pre><code class="html">
                    {{ $GMap['js'] }}
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>Generated HTML</h3>
                <pre><code class="html">
                    {{ $GMap['html'] }}
                </code></pre>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

            </div>
            <div class="col-lg-12">
                <h2>Google maps static image (Geo library method)</h2>
                <div class="text-center">
                    <img src="{{ $staticImgGMap }}"/>
                </div>
            </div>
            <div class="col-lg-12">
                <h3>PHP example</h3>
                <pre><code class="php">
                    $width = '640';
                    $height = '100';
                    $radius = 25; //km
                    $lat = 41.1451;
                    $lng = 25.1242;
                    $zoom = 7;
                    $markerURL = '';
                    $circleBorderColor = 'd20500';
                    $circleFillColor = 'd20500';
                    $staticImgGMap = \App\Lib\Geo::getGoogleMapsStaticImageURL(
                            $width, $height, $lat, $lng, $zoom,
                            $showMarker = true, $markerURL,
                            $showCircle = true, $radius, $circleFillColor, $circleBorderColor
                    );
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>Generated string</h3>
                <pre><code class="html">
                    {{ $staticImgGMap }}
                </code></pre>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{--Beautify code--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection
