@extends('layouts.basic')

@section('title')
    <title>Register form</title>
@endsection

@section('css')

@endsection

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('auth.postRegister') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label class="col-md-4 control-label">Name</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                </div>
            </div>
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
                <label class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-6">
                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                    <a href="{{ route('auth.getLogin') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')

@endsection
