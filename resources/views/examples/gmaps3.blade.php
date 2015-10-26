@extends('layouts.basic')

{{-- EXAMPLE 3: MULTIPLE MAPS WITH PHPGMAPS--}}
<?php
    $phpgmaps1 = new \App\Lib\Phpgmaps();
    $phpgmaps1->initialize([
        'map_name'                  => 'map1',          //IMPORTANT!
        'map_div_id'                => 'map_canvas1',   //IMPORTANT!
        'map_height'                => '220px',
        'map_width'                 => '100%',
        'centerLat'                 => 41.5451,
        'centerLng'                 => 1.1242,
        'zoom'                      => 7,
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
    $map1 = $phpgmaps1->create_map();

    $phpgmaps2 = new \App\Lib\Phpgmaps();
    $phpgmaps2->initialize([
        'map_name'                  => 'map2',          //IMPORTANT!
        'map_div_id'                => 'map_canvas2',   //IMPORTANT!
        'map_height'                => '220px',
        'map_width'                 => '100%',
        'centerLat'                 => 50.1488,
        'centerLng'                 => 21.1152,
        'zoom'                      => 8,
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
    $map2 = $phpgmaps2->create_map();
?>

@section('title')
    <title>Multiple maps with phpgmaps</title>
@endsection

@section('css')
    {{--Beautify code--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.8.0/styles/darkula.min.css">

    {{--The Google maps API reference must be included within the <header> (only ONCE!)--}}
    {!! $map1['api'] !!}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Multiple maps with phpgmaps</h2>
                <div>{!! $map1['html'] !!}</div>
                <br>
                <div>{!! $map2['html'] !!}</div>
            </div>
            <div class="col-lg-12">
                <h3>PHP example</h3>
                <pre><code class="php">
                    $phpgmaps1 = new \App\Lib\Phpgmaps();
                    $phpgmaps1->initialize([
                        'map_name'                  => 'map1',          //IMPORTANT!
                        'map_div_id'                => 'map_canvas1',   //IMPORTANT!
                        'map_height'                => '220px',
                        'map_width'                 => '100%',
                        'centerLat'                 => 41.5451,
                        'centerLng'                 => 1.1242,
                        'zoom'                      => 7,
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
                    $map1 = $phpgmaps1->create_map();

                    $phpgmaps2 = new \App\Lib\Phpgmaps();
                    $phpgmaps2->initialize([
                        'map_name'                  => 'map2',          //IMPORTANT!
                        'map_div_id'                => 'map_canvas2',   //IMPORTANT!
                        'map_height'                => '220px',
                        'map_width'                 => '100%',
                        'centerLat'                 => 50.1488,
                        'centerLng'                 => 21.1152,
                        'zoom'                      => 8,
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
                    $map2 = $phpgmaps2->create_map();
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>JS Output</h3>
                <pre><code class="js">
                    {{ $map1['js'] }}
                    {{ $map2['js'] }}
                </code></pre>
            </div>
            <div class="col-lg-12">
                <h3>HTML Output</h3>
                <pre><code class="html">
                    {{ $map1['html'] }}
                    {{ $map2['html'] }}
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
        {!! $map1['js'] !!}
        {!! $map2['js'] !!}
    </script>
@endsection
