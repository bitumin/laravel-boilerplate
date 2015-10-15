@extends('layouts.basic')

@section('title')
    <title>Register form</title>
@endsection

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
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
                <form method="POST" class="form" action="{{ route('auth.postRegister') }}">
                    {!! csrf_field() !!}
                    @if(config('auth.method') == 'invitation')
                    <div class="form-group">
                        <label>Invitation keyword</label>
                        <input class="form-control" type="text" name="keyword">
                    </div>
                    @endif
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                        <a href="{{ route('auth.getLogin') }}" class="btn btn-default">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
