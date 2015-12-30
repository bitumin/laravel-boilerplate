<?php
$editable = (isset($user)) ? "disabled" : "";
?>
@extends('blog.dashboard.layouts.dashboard')
@section('page_heading', isset($user) ? trans("users.form.page_title_edit")  : trans("users.form.page_title_create") )
@section('section')

@include('blog.dashboard.snippets.validation-errors')

    <form action="
    @if ( isset($user) )
        {{route('blog.admin.users.update', $user->slug)}}
    @else
        {{route('blog.admin.users.store')}}
    @endif
    " method="post">
    <input type="hidden" name="_method" value="put">
    {!! csrf_field() !!}

    <div class="row form-group {{ $errors->has('username') ? 'has-error' : '' }}">
        <div class="col-sm-2">
            <label for="username">{{trans("users.form.username.label")}}</label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="username" value="{{isset($user) ? $user->username : ''}}" class="form-control form-small {{$editable}}">
        </div>
    </div>

    <div class="row form-group {{ $errors->has('firstname') ? 'has-error' : '' }}">
        <div class="col-sm-2">
            <label for="firstname">{{trans("users.form.firstname.label")}}</label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="firstname" value="{{isset($user) ? $user->firstname : ''}}" class="form-control form-small {{$editable}}">
        </div>
    </div>

    <div class="row form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
        <div class="col-sm-2">
            <label for="lastname">{{trans("users.form.lastname.label")}}</label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="lastname" value="{{isset($user) ? $user->lastname : ''}}" class="form-control form-small {{$editable}}">
        </div>
    </div>

    <div class="row form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <div class="col-sm-2">
            <label for="email">{{trans("users.form.email.label")}}</label>
        </div>
        <div class="col-sm-10">
            <input type="text" name="email" value="{{isset($user) ? $user->email : ''}}" class="form-control form-small {{$editable}}">
        </div>
    </div>

    <div class="row form-group {{ $errors->has('role') ? 'has-error' : '' }}">
        <div class="col-sm-2">
            <label for="role">{{trans("users.form.role.label")}}</label>
        </div>
        <div class="col-sm-10">
            <select name="role" class="form-control form-small">
                @foreach ($roles as $role)
                    <option value="{{ $role->slug }}" @if( isset($user) && $user->is($role->name) ) selected="selected" @endif >{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <input type="submit" value="{{trans("users.form.submit_button.value")}}" class="btn btn-success">
        </div>
    </div>

    </form>
@stop