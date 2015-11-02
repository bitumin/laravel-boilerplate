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
    {!! csrf_field() !!}
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
                            <a id="btnUpdateInfo" class="btn btn-primary" href="javascript:">Save changes</a>
                            <img id="infoLoading" src="{{ asset('img/input-spinner.gif') }}" class="hidden">
                            <span id="infoSuccess" style="color:darkgreen;" class="hidden"> <i class="fa fa-check"></i></span>
                            <span id="infoFail" style="color:darkred;" class="hidden"> <i class="fa fa-times"></i></span>
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
                                   name="password" type="password" placeholder="New password"
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
                            <a id="btnUpdatePassword" class="btn btn-primary" href="javascript:">Save changes</a>
                            <img id="pwdLoading" src="{{ asset('img/input-spinner.gif') }}" class="hidden">
                            <span id="pwdSuccess" style="color:darkgreen;" class="hidden"> <i class="fa fa-check"></i></span>
                            <span id="pwdFail" style="color:darkred;" class="hidden"> <i class="fa fa-times"></i></span>
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

            var infoSuccess = $('#infoSuccess');
            var infoFail = $('#infoFail');
            var pwdSuccess = $('#pwdSuccess');
            var pwdFail = $('#pwdFail');

           $(document).on('click', '#btnUpdateInfo', function(){
               if(!infoSuccess.hasClass('hidden'))
                   infoSuccess.addClass('hidden');
               if(!infoFail.hasClass('hidden'))
                   infoFail.addClass('hidden');
               $('#infoLoading').removeClass('hidden');
               $.post('/dashboard/profile/update-info', {
                   _token: $('input[name=_token]').val(),
                   name: $('input[name=name]').val(),
                   email: $('input[name=email]').val()
               }, function() {
                   $('#infoLoading').addClass('hidden');
                   infoSuccess.removeClass('hidden');
               }).fail(function() {
                   $('#infoLoading').addClass('hidden');
                   infoFail.removeClass('hidden');
               });
           });

            $(document).on('click', '#btnUpdatePassword', function(){
                if(!pwdSuccess.hasClass('hidden'))
                    pwdSuccess.addClass('hidden');
                if(!pwdFail.hasClass('hidden'))
                    pwdFail.addClass('hidden');
                $('#pwdLoading').removeClass('hidden');
                $.post('/dashboard/profile/update-password', {
                    _token: $('input[name=_token]').val(),
                    password: $('input[name=password]').val(),
                    "password_confirmation": $('input[name=password_confirmation]').val()
                }, function() {
                    $('#pwdLoading').addClass('hidden');
                    pwdSuccess.removeClass('hidden');
                }).fail(function() {
                    $('#pwdLoading').addClass('hidden');
                    pwdFail.removeClass('hidden');
                });
            });
        });
    </script>
@endsection