@extends('layout.basic')

@section('title')
    <title>Login form</title>
@endsection

@section('css')

@endsection

@section('content')
    <div class="container">
        <div class="content">
            <form method="POST" action="/auth/login">
                {!! csrf_field() !!}
                <div>
                    Email
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>
                <div>
                    Password
                    <input type="password" name="password" id="password">
                </div>
                <div>
                    <input type="checkbox" name="remember"> Remember Me
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')

@endsection
