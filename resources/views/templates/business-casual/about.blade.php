@extends('templates.business-casual.layout')

@section('title')
    <title>Business Casual - Start Bootstrap Theme</title>
@endsection

@section('css')

@endsection

@section('content')

<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">About
                    <strong>business casual</strong>
                </h2>
                <hr>
            </div>
            <div class="col-md-6">
                <img class="img-responsive img-border-left" src="{{ asset('img/business-casual/slide-2.jpg') }}" alt="">
            </div>
            <div class="col-md-6">
                <p>This is a great place to introduce your company or project and describe what you do.</p>
                <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">Our
                    <strong>Team</strong>
                </h2>
                <hr>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class="col-sm-4 text-center">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <h3>John Smith
                    <small>Job Title</small>
                </h3>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

</div>
@endsection

@section('js')

@endsection