@extends('layouts.basic')

{{--EXAMPLE 2: BASIC GOOGLE MAP STATIC IMAGE--}}
<?php
    $staticImgGMap1 = \App\Lib\Geo::getGoogleMapsStaticImageURL([
        'width'                     => 640, //px
        'height'                    => 400, //px
        'lat'                       => 42.5451,
        'lng'                       => 1.1242,
        'zoom'                      => 7
    ]);
    $staticImgGMap2 = \App\Lib\Geo::getGoogleMapsStaticImageURL([
        'width'                     => 640, //px
        'height'                    => 400, //px
        'lat'                       => 42.5451,
        'lng'                       => 1.1242,
        'zoom'                      => 7,
        'addMarker'                 => true,
        'markerURL'                 => 'http://maps.google.com/mapfiles/kml/shapes/volcano.png',
        'addCircle'                 => true,
        'radius'                    => 100, //km
        'circleFillColor'           => 'd20500',
        'circleBorderColor'         => 'd20500',
        'customLandscape'           => true,
        'landSaturation'            => -100,
        'landInvertLightness'       => false,
        'customWater'               => true,
        'waterSaturation'           => -100,
        'waterInvertLightness'      => true,
        'showRoads'                 => false,
        'showLabels'                => false,
        'showStroke'                => false
    ]);
?>

@section('title')
    <title>Google maps static image example</title>
@endsection

@section('css')
    {{--Beautify code--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/darkula.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Google maps static image (Geo library function)</h2>
                <div class="text-center">
                    <img src="{{ $staticImgGMap1['url'] }}" width="{{ $staticImgGMap1['width'] }}" height="{{ $staticImgGMap1['height'] }}"/>
                    <br>
                    <img src="{{ $staticImgGMap2['url'] }}" width="{{ $staticImgGMap2['width'] }}" height="{{ $staticImgGMap2['height'] }}"/>
                </div>
            </div>
            <div class="col-lg-12">
                <h3>PHP example</h3>
                <pre><code class="php">
                    $staticImgGMap1 = \App\Lib\Geo::getGoogleMapsStaticImageURL([
                        'width'                     => 640, //px
                        'height'                    => 400, //px
                        'lat'                       => 42.5451,
                        'lng'                       => 1.1242,
                        'zoom'                      => 7
                    ]);

                    $staticImgGMap2 = \App\Lib\Geo::getGoogleMapsStaticImageURL([
                        'width'                     => 640, //px
                        'height'                    => 400, //px
                        'lat'                       => 42.5451,
                        'lng'                       => 1.1242,
                        'zoom'                      => 7,
                        'addMarker'                 => true,
                        'markerURL'                 => 'http://maps.google.com/mapfiles/kml/shapes/volcano.png',
                        'addCircle'                 => true,
                        'radius'                    => 100, //km
                        'circleFillColor'           => 'd20500',
                        'circleBorderColor'         => 'd20500',
                        'customLandscape'           => true,
                        'landSaturation'            => -100,
                        'landInvertLightness'       => false,
                        'customWater'               => true,
                        'waterSaturation'           => -100,
                        'waterInvertLightness'      => true,
                        'showRoads'                 => false,
                        'showLabels'                => false,
                        'showStroke'                => false
                    ]);
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>URL output</h3>
                <pre><code class="html">
                    {{ $staticImgGMap1['url'] }}

                    {{ $staticImgGMap2['url'] }}
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
