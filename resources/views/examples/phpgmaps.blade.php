@extends('layouts.basic')

@section('title')
    <title>PHP Gmaps example</title>
@endsection

@section('css')
    {{--Beautify code--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/darkula.min.css">
@endsection

@section('content')
    {{--GoogleMaps JS and HTML generation--}}
    {{--Available options and defaults in App\Lib\Phpgmap.php--}}
    <?php
        //common options for the google map and the static image
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

        //gmap options
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

        //gmap marker options
        $marker = array();
        $marker['position'] = $lat.','.$lng;
        $marker['icon'] = $markerURL;
        \Phpgmaps::add_marker($marker);

        //gmap circle options
        $circle = array();
        $circle['center'] = $lat.','.$lng;
        $circle['radius'] = $radius;
        $circle['strokeColor'] = '#'.$circleBorderColor;
        $circle['strokeOpacity'] = '0.2';
        $circle['strokeWeight'] = '1';
        $circle['fillColor'] = '#'.$circleFillColor;
        $circle['fillOpacity'] = '0.1';
        $circle['clickable'] = false;
        \Phpgmaps::add_circle($circle);

        //generate the proper code (returns an array with 2 keys: js and html
        $GMap =  \Phpgmaps::create_map(); //generate HTML and JS code with the given config options

        //static image
        $staticImgGMap = \App\Lib\Geo::getGoogleMapsStaticImageURL($width,$height,$lat,$lng,$zoom,true,$markerURL,true,$radius,$circleFillColor,$circleBorderColor);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                {!! $GMap['js'] !!}
                {!! $GMap['html'] !!}
            </div>
            <div class="col-lg-6">
                <div class="well-sm">

                </div>
            </div>
            <div class="col-lg-6">
                <div class="well-sm">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" style="
                height:{{$height}}px;
                background: url('{{ $staticImgGMap }}') no-repeat;
            ">
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{--Beautify code--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection
