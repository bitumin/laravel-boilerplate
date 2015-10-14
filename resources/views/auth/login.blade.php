@extends('layouts.basic')

@section('title')
    <title>Login form</title>
@endsection

@section('css')

@endsection

@section('content')
    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('auth.postLogin') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label class="col-md-4 control-label">Email</label>
                <div class="col-md-6">
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label">Password</label>
                <div class="col-md-6">
                    <input class="form-control" type="password" name="password" id="password">
                </div>
            </div>
            <div class="form-group">
                <div class="checkbox col-md-offset-4 col-md-6">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="{{ route('auth.getRegister') }}" class="btn btn-default">New user</a>
                    <a href="{{ route('auth.getEmail') }}" class="btn btn-default">Forgot password</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')

@endsection
