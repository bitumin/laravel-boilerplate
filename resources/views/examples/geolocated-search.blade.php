@extends('layouts.basic')

@section('title')
    <title>Geo-located search example</title>
@endsection

@section('css')
    {{--Beautify numerical inputs--}}
    <link rel="stylesheet" href="{{ asset('css/plugins/jquery.bootstrap-touchspin.min.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    <form role="form" action="javascript:submitForm();">
                        {!! csrf_field() !!}

                        <div class="row">
                            <div class="form-group col-xs-12">
                                <label>Your address:</label>
                                <input name="address" class="form-control" placeholder="Your address" required="required" type="text">
                                <p class="help-block">Example: Carrer València, 12, Barcelona</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>Minimum distance:</label>
                                <input name="minDistance" class="form-control" placeholder="Minimum distance" required="required" type="text">
                                <p class="help-block">Example: 5</p>
                            </div>
                            <div class="form-group col-xs-6">
                                <label>Maximum distance:</label>
                                <input name="maxDistance" class="form-control" placeholder="Maximum distance" required="required" type="text">
                                <p class="help-block">Example: 500</p>
                            </div>
                        </div>

                        <button id="search-btn" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    <h2>Results</h2>
                    <div id="results-container" class="well">
                        -
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    {{--Beautify (and validate) numerical inputs--}}
    <script src="{{ asset('js/plugins/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script>
        $('input[name=minDistance]').add('input[name=maxDistance]')
                .TouchSpin({min: 0, max: 1000, step: 1, decimals: 0, postfix: 'km'});

        var submitForm = function() {
            var yourAddress = $('input[name=address]').val();
            var mind = $('input[name=minDistance]').val();
            var maxd = $('input[name=maxDistance]').val();
            $.post('/example/geolocated-search', {
                '_token': $('input[name=_token]').val(),
                address: yourAddress,
                minDistance: mind,
                maxDistance: maxd
            }).done(function (objectResults) {
                printResults(objectResults, mind, maxd, yourAddress);
            }).fail(function () {
                alert('Something went wrong!')
            }).always(function () {
                //do this always, no matter what
            });
        };

        var targetContainer = $('#results-container');
        var printResults = function(results, min, max, address) {
            targetContainer.empty().append('Results within '+min+'-'+max+' km of '+address+'<br><br>');
            $.each(results, function(key,result) {
                targetContainer.append(result['formatted_address']+'<br>');
            });
            targetContainer.append('<br>'+results.length+' results found!');
        };
    </script>
@endsection
