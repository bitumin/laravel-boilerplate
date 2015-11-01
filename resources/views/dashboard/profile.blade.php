@extends('layouts.dashboard')

@section('title')
    <title>Dashboard | Users management</title>
@endsection

@section('css')
    <style>
        .required {
            color: #b92720;
        }
    </style>
@endsection

@section('content')
    <div class="row" style="padding-top: 25px;">
        <div class="col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    Personal data
                </div>
                <div class="panel-body">
                    <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-3">
                                Name <span class="required">*</span>
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control"
                                   name="name" type="text" placeholder="My name"
                                   @if(!empty($me->name)) value="{{ $me->name }}" @endif
                                   required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">
                                Email
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control"
                                   name="email" type="email" placeholder="My email"
                                   @if(!empty($me->email)) value="{{ $me->email }}" @endif />
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-offset-3 col-lg-9">
                            <a class="btn btn-primary" href="javascript:">Save changes</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    Change password
                </div>
                <div class="panel-body">
                    <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-3">
                                New password <span class="required">*</span>
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control"
                                   name="password" type="text" placeholder="New password"
                                   value="" required="required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-3">
                                Confirm password <span class="required">*</span>
                            </label>
                            <div class="col-lg-9">
                                <input class="form-control"
                                   name="password_confirmation" type="password" placeholder="Confirm new password"
                                   value="" required="required"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-offset-3 col-lg-9">
                            <a class="btn btn-primary" href="javascript:">Save changes</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
           //
        });
    </script>
@endsection