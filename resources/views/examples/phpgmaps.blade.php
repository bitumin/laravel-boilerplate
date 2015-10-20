@extends('layouts.basic')

@section('title')
    <title>PHP Gmaps example</title>
@endsection

@section('css')

@endsection

@section('content')
    <?php
    //basic options
    $radius = 25; //km
    $lat = 41.1451;
    $lng = 25.1242;
    $height = 175; //px
    $width = 200; //px
    $zoom = 7;
    $markerURl = '';
    $circleBorderColor = 'd20500';
    $circleFillColor = 'd20500';

    //map options
    $map = array();
    $map['center'] = $lat.','.$lng;
    $map['zoom'] = $zoom;
    $map['disableMapTypeControl'] = true;
    $map['https'] = false;
    $map['disableStreetViewControl'] = true;
    $map['disableDoubleClickZoom'] = true;
    $map['disableNavigationControl'] = true;
    $map['disableScaleControl'] = true;
    $map['map_height'] = $height.'px';
    $map['scrollwheel'] = false;
    $map['zoomControlStyle'] = 'SMALL';
    $map['zoomControlPosition'] = 'TOP_RIGHT';
    \Phpgmaps::initialize($map);

    //marker options
    $marker = array();
    $marker['position'] = $lat.','.$lng;
    $marker['icon'] = $markerURl;
    // \Phpgmaps::add_marker($marker);

    //circle options
    $circle = array();
    $circle['center'] = $lat.','.$lng;
    $circle['radius'] = $radius;
    $circle['strokeColor'] = '#'.$circleBorderColor;
    $circle['strokeOpacity'] = '0.2';
    $circle['strokeWeight'] = '1';
    $circle['fillColor'] = '#'.$circleFillColor;
    $circle['fillOpacity'] = '0.1';
    $circle['clickable'] = false;
    // \Phpgmaps::add_circle($circle);

    $GMap =  \Phpgmaps::create_map(); //generate HTML and JS code with the given config options
{{--    //$staticImgGMap = \App\Lib\Geo::getGoogleMapsStaticImageURL($width,$height,$lat,$lng,$zoom,true,$markerURl,true,$radius,$circleFillColor,$circleBorderColor);--}}
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 text-center">
                {{ $GMap }}
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
