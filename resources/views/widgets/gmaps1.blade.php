@extends('layouts.basic')

{{-- EXAMPLE 1: GOOGLE MAPS API USING PHPGMAPS CLASS--}}
<?php
    $phpgmaps = new \App\Lib\Phpgmaps();
    $phpgmaps->initialize([
        'map_height'                => '450px',
        'map_width'                 => '100%',
        'centerLat'                 => 41.5451,
        'centerLng'                 => 1.1242,
        'zoom'                      => 7,
        'https'                     => false,
        'disableMapTypeControl'     => true,
        'disableStreetViewControl'  => true,
        'disableDoubleClickZoom'    => true,
        'disableNavigationControl'  => true,
        'disableScaleControl'       => true,
        'scrollwheel'               => false,
        'zoomControlStyle'          => 'SMALL',
        'zoomControlPosition'       => 'TOP_RIGHT',
        'jsWithHtmlTags'            => false, //js code will be printed without <script> tags
    ]);
    for($i=0;$i<9;++$i)
        $phpgmaps->add_circle([
            'centerLat'                 => 41.5450 + pow(-1,$i)*($i/10),
            'centerLng'                 => 1.1240 + pow(-1,$i)*($i/10),
            'radius'                    => 25000, //25 km
            'strokeColor'               => sprintf('#%06X', mt_rand(0, 0xFFFFFF)), //random hex color
            'strokeOpacity'             => '0.5', //%
            'strokeWeight'              => '1', //px
            'fillColor'                 => sprintf('#%06X', mt_rand(0, 0xFFFFFF)), //random hex color
            'fillOpacity'               => '0.4',
            'clickable'                 => false,
        ]);
    for($i=0;$i<9;++$i)
        $phpgmaps->add_marker([
            'positionLat'               => 41.5450 + pow(-1,$i)*($i/10),
            'positionLng'               => 1.1240 + pow(-1,$i)*($i/10),
        ]);
    $gmapOutput = $phpgmaps->create_map();
?>

@section('title')
    <title>Google Maps API using Phpgmaps</title>
@endsection

@section('css')
    {{--Beautify code--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/darkula.min.css">

    {{--The Google maps API reference must be included within the <header>--}}
    {!! $gmapOutput['api'] !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Google maps with phpgmaps class</h2>
                {!! $gmapOutput['html'] !!}
            </div>
            <div class="col-lg-12">
                <h3>PHP example</h3>
                <pre><code class="php">
                    $phpgmaps = new \App\Lib\Phpgmaps();
                    $phpgmaps->initialize([
                        'map_height'                => '450px',
                        'map_width'                 => '100%',
                        'centerLat'                 => 41.5451,
                        'centerLng'                 => 1.1242,
                        'zoom'                      => 7,
                        'https'                     => false,
                        'disableMapTypeControl'     => true,
                        'disableStreetViewControl'  => true,
                        'disableDoubleClickZoom'    => true,
                        'disableNavigationControl'  => true,
                        'disableScaleControl'       => true,
                        'scrollwheel'               => false,
                        'zoomControlStyle'          => 'SMALL',
                        'zoomControlPosition'       => 'TOP_RIGHT',
                        'jsWithHtmlTags'            => false, //js code will be printed without &lt;script&gt; tags
                    ]);
                    for($i=0;$i<9;++$i)
                        $phpgmaps->add_circle([
                            'centerLat'                 => 41.5450 + pow(-1,$i)*($i/10),
                            'centerLng'                 => 1.1240 + pow(-1,$i)*($i/10),
                            'radius'                    => 25000, //25 km
                            'strokeColor'               => sprintf('#%06X', mt_rand(0, 0xFFFFFF)), //random hex color
                            'strokeOpacity'             => '0.5', //%
                            'strokeWeight'              => '1', //px
                            'fillColor'                 => sprintf('#%06X', mt_rand(0, 0xFFFFFF)), //random hex color
                            'fillOpacity'               => '0.4',
                            'clickable'                 => false,
                        ]);
                    for($i=0;$i<9;++$i)
                        $phpgmaps->add_marker([
                            'positionLat'               => 41.5450 + pow(-1,$i)*($i/10),
                            'positionLng'               => 1.1240 + pow(-1,$i)*($i/10),
                        ]);
                    $gmapOutput = $phpgmaps->create_map();
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>JS Output</h3>
                <pre><code class="js">
                    {{ $gmapOutput['js'] }}
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>HTML Output</h3>
                <pre><code class="html">
                    {{ $gmapOutput['html'] }}
                </code></pre>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{--Beautify code--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();

        {!! $gmapOutput['js'] !!}
    </script>
@endsection
