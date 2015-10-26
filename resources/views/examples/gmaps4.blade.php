@extends('layouts.basic')

<?php
    //common options for gmap and static img
    $width = 640;
    $height = 400;
    $lat = 41.5451;
    $lng = 1.1242;
    $zoom = 7;
    $radius = 25;   //km
    $borderColor = 'd02123';
    $fillColor = 'ef01e3';

    $phpgmaps = new \App\Lib\Phpgmaps();
    $phpgmaps->initialize([
        'initializeOnLoad'          => false,               //IMPORTANT!
        'map_width'                 => $width.'px',
        'map_height'                => $height.'px',
        'centerLat'                 => $lat,
        'centerLng'                 => $lng,
        'zoom'                      => $zoom,
        'disableMapTypeControl'     => true,
        'disableStreetViewControl'  => true,
        'disableDoubleClickZoom'    => true,
        'disableNavigationControl'  => true,
        'disableScaleControl'       => true,
        'scrollwheel'               => false,
        'zoomControlStyle'          => 'SMALL',
        'zoomControlPosition'       => 'TOP_RIGHT',
        'jsWithHtmlTags'            => false,
    ]);
    $phpgmaps->add_circle([
        'centerLat'                 => $lat,
        'centerLng'                 => $lng,
        'radius'                    => $radius*1000,        //pass it in meters!!!
        'strokeColor'               => '#'.$borderColor,
        'strokeOpacity'             => '0.2',
        'strokeWeight'              => '1',
        'fillColor'                 => '#'.$fillColor,
        'fillOpacity'               => '0.2',
        'clickable'                 => false,
    ]);
    $phpgmaps->add_marker([
        'positionLat'               => $lat,
        'positionLng'               => $lng,
    ]);
    $gmaps = $phpgmaps->create_map();

    $gmapsStaticImg = \App\Lib\Geo::getGoogleMapsStaticImageURL([
        'width'                     => $width,
        'height'                    => $height,
        'lat'                       => $lat,
        'lng'                       => $lng,
        'zoom'                      => $zoom,
        'addCircle'                 => true,
        'radius'                    => $radius,             //pass it in km!!!
        'circleBorderColor'         => $borderColor,
        'circleFillColor'           => $fillColor,
        'addMarker'                 => true
    ]);
?>

@section('title')
    <title>Google map load on event + static image</title>
@endsection

@section('css')
    {{--Beautify code--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/darkula.min.css">

    {{--The Google maps API reference must be included within the <header>--}}
    {!! $gmaps['api'] !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Google maps loads after click on static image (Phpgmaps + Geo lib + jquery)</h2>
                <div class="well">
                    In case we want a embedded google maps that loads after we click on an static image of the same map.
                </div>
                <div class="text-center">
                    <img id="staticImg-layer" src="{{ $gmapsStaticImg['url'] }}" width="{{ $gmapsStaticImg['width'] }}" height="{{ $gmapsStaticImg['height'] }}"/>
                    <div id="gMaps-layer" class="hidden" style="display:inline-block;">
                        {!! $gmaps['html'] !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <h3>PHP</h3>
                <pre><code class="php">
                    //common options for gmap and static img
                    $width = 640;
                    $height = 400;
                    $lat = 41.5451;
                    $lng = 1.1242;
                    $zoom = 7;
                    $radius = 25;   //km
                    $borderColor = 'd02123';
                    $fillColor = 'ef01e3';

                    $phpgmaps = new \App\Lib\Phpgmaps();
                    $phpgmaps->initialize([
                        'initializeOnLoad'          => false,               //IMPORTANT!
                        'map_width'                 => $width.'px',
                        'map_height'                => $height.'px',
                        'centerLat'                 => $lat,
                        'centerLng'                 => $lng,
                        'zoom'                      => $zoom,
                        'disableMapTypeControl'     => true,
                        'disableStreetViewControl'  => true,
                        'disableDoubleClickZoom'    => true,
                        'disableNavigationControl'  => true,
                        'disableScaleControl'       => true,
                        'scrollwheel'               => false,
                        'zoomControlStyle'          => 'SMALL',
                        'zoomControlPosition'       => 'TOP_RIGHT',
                        'jsWithHtmlTags'            => false,
                    ]);
                    $phpgmaps->add_circle([
                        'centerLat'                 => $lat,
                        'centerLng'                 => $lng,
                        'radius'                    => $radius*1000,        //pass it in meters!!!
                        'strokeColor'               => '#'.$borderColor,
                        'strokeOpacity'             => '0.2',
                        'strokeWeight'              => '1',
                        'fillColor'                 => '#'.$fillColor,
                        'fillOpacity'               => '0.2',
                        'clickable'                 => false,
                    ]);
                    $phpgmaps->add_marker([
                        'positionLat'               => $lat,
                        'positionLng'               => $lng,
                    ]);
                    $gmaps = $phpgmaps->create_map();

                    $gmapsStaticImg = \App\Lib\Geo::getGoogleMapsStaticImageURL([
                        'width'                     => $width,
                        'height'                    => $height,
                        'lat'                       => $lat,
                        'lng'                       => $lng,
                        'zoom'                      => $zoom,
                        'addCircle'                 => true,
                        'radius'                    => $radius,             //pass it in km!!!
                        'circleBorderColor'         => $borderColor,
                        'circleFillColor'           => $fillColor,
                        'addMarker'                 => true
                    ]);
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>HTML</h3>
                <pre><code class="html">
                    &lt;div class="text-center"&gt;
                        &lt;img id="staticImg-layer" src="&lbrace;&lbrace; $gmapsStaticImg['url'] &rbrace;&rbrace;"/&gt;
                        &lt;div id="gMaps-layer" class="hidden" style="display:inline-block;"&gt;
                            &lbrace;!! $gmaps['html'] !!&rbrace;
                        &lt;/div&gt;
                    &lt;/div&gt;
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>jQuery</h3>
                <pre><code class="js">
                    $(document).on("click", "#staticImg-layer", function() {
                        $(this).hide();
                        $('#gMaps-layer').removeClass('hidden');
                        initialize_map();
                    });
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>HTML output</h3>
                <pre><code class="html">
                    {{ $gmaps['html'] }}
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>JS output</h3>
                <pre><code class="js">
                    {{ $gmaps['js'] }}
                </code></pre>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{--Beautify code--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    
    {{--load gmap on click event--}}
    <script>
        {!! $gmaps['js'] !!}

        $(document).ready(function () {
            $(document).on('click', '#staticImg-layer', function() {
                $(this).hide();
                $('#gMaps-layer').removeClass('hidden');
                initialize_map();
            });
        });
    </script>
@endsection
