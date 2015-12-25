{{--
    Use the toastr ready layout for the pages that are expected to produce status messages
    or/and receive status messages (flashed in session) from the controllers
--}}
@extends('layouts.toastr')

@section('title')
    <title>Toastr example</title>
@endsection

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6 text-center">
                    <br><br>
                    <a class="btn btn-primary" href="javascript:showToastr('info','Once upon a time...');">Info</a>
                    <a class="btn btn-success" href="javascript:showToastr('success','Fuck yeah!');">Success</a>
                    <a class="btn btn-warning" href="javascript:showToastr('warning','Take care you fool!');">Warning</a>
                    <a class="btn btn-danger" href="javascript:showToastr('error','Something went wrong!');">Error</a>

                    <br><br>
                    <div class="well">
                        Check the original
                        <a href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js" target="_blank">plugin js file</a>
                        for custom and default toastr options.
                        <br>
                        Git repo and basic readme <a href="//github.com/CodeSeven/toastr">here</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
