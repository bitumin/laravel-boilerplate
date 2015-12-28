@extends('blog-admin.layouts.dashboard')
@section('page_heading', trans('profiles.form.page_title') )
@section('section')

@include('blog-admin.snippets.validation-errors')

    <form action="{{route('admin.profile.update', $user->slug)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="slug" value="{{$user->slug}}">
        {!! csrf_field() !!}

        <div class="row form-group {{ $errors->has('username') ? 'has-error' : '' }}">
            <div class="col-sm-3">
                <label for="username">{{trans("profiles.form.username.label")}}</label>
            </div>
            <div class="col-sm-9">
                <input type="text" name="username" value="{{isset($user) ? $user->username : ''}}" class="form-control form-small">
            </div>
        </div>

        <div class="row form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
            <div class="col-sm-3">
                <label for="firstname">{{trans("profiles.form.firstname.label")}}</label>
            </div>
            <div class="col-sm-9">
                <input type="text" name="firstname" value="{{isset($user) ? $user->firstname : ''}}" class="form-control form-small">
            </div>
        </div>

        <div class="row form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
            <div class="col-sm-3">
                <label for="lastname">{{trans("profiles.form.lastname.label")}}</label>
            </div>
            <div class="col-sm-9">
                <input type="text" name="lastname" value="{{isset($user) ? $user->lastname : ''}}" class="form-control form-small">
            </div>
        </div>

        <div class="row form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <div class="col-sm-3">
                <label for="email">{{trans("profiles.form.email.label")}}</label>
            </div>
            <div class="col-sm-9">
                <input type="text" name="email" value="{{isset($user) ? $user->email : ''}}" class="form-control form-small">
            </div>
        </div>

        <div class="row form-group {{ $errors->has('newpassword') ? 'has-error' : '' }}">
            <div class="col-sm-3">
                <label for="newpassword">{{trans("profiles.form.newpassword.label")}}</label>
            </div>
            <div class="col-sm-9">
                <input type="password" name="newpassword" class="form-control form-small">
            </div>
        </div>

        <div class="row form-group {{ $errors->has('newpasswordconfirm') ? 'has-error' : '' }}">
            <div class="col-sm-3">
                <label for="newpasswordconfirm">{{trans("profiles.form.newpasswordconfirm.label")}}</label>
            </div>
            <div class="col-sm-9">
                <input type="password" name="newpasswordconfirm" class="form-control form-small">
            </div>
        </div>

        <div class="row form-group {{ $errors->has('profilepicture') ? 'has-error' : '' }}">
            <div class="col-sm-3">
                <label for="profilepicture">{{trans("profiles.form.profilepicture.label")}}</label>
            </div>
            <div class="col-sm-9">
                @if($user->profilepicture != null)
                    <img src="{{URL::asset($user->profilepicture)}}" class="img-rounded">
                @else
                    <img src="{{URL::asset('img/blog/profile-icon.png')}}" class="img-rounded">
                @endif
                <input type="file" name="profilepicture">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <input type="submit" value="{{trans("profiles.form.submit_button.value")}}" class="btn btn-success">
            </div>
        </div>

    </form>

@stop