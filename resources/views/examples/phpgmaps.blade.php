@extends('layouts.basic')

@section('title')
    <title>PHP Gmaps example</title>
@endsection

@section('css')
    {{--Beautify code--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/darkula.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            {{-- EXAMPLE 1: PHP GOOGLE MAPS--}}
            <?php
                //basic options
                $radius = 25; //km
                $width = '100%';
                $height = '100px';
                $lat = 41.1451;
                $lng = 25.1242;
                $zoom = 7;
                $markerURL = '';
                $circleBorderColor = '#d20500';
                $circleFillColor = '#d20500';

                //general map options
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

                //add a circle
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

                //add a marker
                $marker = array();
                $marker['position'] = $lat.','.$lng;
                $marker['icon'] = $markerURL;
                \Phpgmaps::add_marker($marker);

                //generate code
                $GMap =  \Phpgmaps::create_map(); //generate HTML and JS code with the given config options
            ?>
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
            {{--EXAMPLE 2: STATIC GOOGLE MAP IMAGE--}}
            <?php
                //basic options
                $radius = 25; //km
                $width = '640';
                $height = '100';
                $lat = 41.1451;
                $lng = 25.1242;
                $zoom = 7;
                $markerURL = '';
                $circleBorderColor = 'd20500';
                $circleFillColor = 'd20500';
                $staticImgGMap = \App\Lib\Geo::getGoogleMapsStaticImageURL(
                        $width, $height, $lat, $lng, $zoom,
                        true,$markerURL,true,$radius,$circleFillColor,$circleBorderColor
                );
            ?>
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
                <h3>Generated URL</h3>
                <pre><code class="html">
                    {{ $staticImgGMap }}
                </code></pre>
            </div>
        </div>
        <div class="row">
            {{--EXAMPLE 3a: EMBEDDED GOOGLE MAP LOADS ONLY AFTER CLICK ON STATIC IMAGE--}}
            {{--EXAMPLE 3b: HOW TO LOAD MORE THAN ONE EMBEDDED GOOGLE MAP IN THE SAME PAGE--}}
            <?php
                //since this is the second embedded map in this page we need a new instance of our code generation class
                new \Phpgmaps;

                //options are taken from above, but we need to set some new ones:

                //same height and weight for static image and embedded map
                $width = '640';
                $height = '100';

                $map['map_width'] = $width.'px';
                $map['map_height'] = $height.'px';

                //IMPORTANT! a new map name and container div id
                $map['map_name'] = 'map2';
                $map['map_div_id'] = 'map_canvas2';

                //IMPORTANT! to not initialize the map on load (we will initialize it manually on any event we choose
                $map['initializeOnLoad'] = FALSE;

                //pass the old and new options to the new instance
                \Phpgmaps::initialize($map);
                \Phpgmaps::add_circle($circle);
                \Phpgmaps::add_marker($marker);

                //generate the new JS and HTML code
                $GMap2 = \Phpgmaps::create_map();

                //static img
                $staticImgGMap2 = \App\Lib\Geo::getGoogleMapsStaticImageURL(
                        $width, $height, $lat, $lng, $zoom,
                        true,$markerURL,true,$radius,$circleFillColor,$circleBorderColor
                );
            ?>
            <div class="col-lg-12">
                <h2>Google maps loads after click on static image (Phpgmaps + Geo lib + jquery)</h2>
                <div class="text-center">
                    <img src="{{ $staticImgGMap2 }}" id="static-img-layer"/>
                    <div id="gmap-layer-container" class="hidden" style="display:inline-block;">
                        {!! $GMap2['js'] !!}
                        {!! $GMap2['html'] !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <h3>PHP example</h3>
                <pre><code class="php">
                    //same options as Example 1, plus:
                    new \Phpgmaps; //new instance of our code generator class
                    $width = '640';
                    $height = '100';
                    $map['map_width'] = $width.'px'; //same width than the static image
                    $map['map_height'] = $height.'px'; //same height than the static image
                    $map['map_name'] = 'map2'; //IMPORTANT!
                    $map['map_div_id'] = 'map_canvas2'; //IMPORTANT!
                    $map['initializeOnLoad'] = FALSE; //IMPORTANT!

                    \Phpgmaps::initialize($map);
                    \Phpgmaps::add_circle($circle);
                    \Phpgmaps::add_marker($marker);
                    $GMap2 = \Phpgmaps::create_map();

                    $staticImgGMap2 = \App\Lib\Geo::getGoogleMapsStaticImageURL(
                        $width, $height, $lat, $lng, $zoom,
                        true,$markerURL,true,$radius,$circleFillColor,$circleBorderColor
                    );
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>Generated URL (static image)</h3>
                <pre><code class="html">
                    {{ $staticImgGMap2 }}
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>Generated JS (google map)</h3>
                <pre><code class="html">
                    {{ $GMap2['js'] }}
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>Generated HTML (google map)</h3>
                <pre><code class="html">
                    {{ $GMap2['html'] }}
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>Initialize the map on click static image (jquery)</h3>
                <pre><code class="js">
                    $(document).on("click", "#static-img-layer", function() {
                        $(this).hide();
                        $('#gmap-layer-container').removeClass('hidden');
                        initialize_map2();
                    });
                </code></pre>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{--Beautify code--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '#static-img-layer', function() {
                $(this).hide();
                $('#gmap-layer-container').removeClass('hidden');
                initialize_map2();
            });
        });
    </script>
@endsection
