@extends('layouts.basic')

@section('title')
    <title>Login form</title>
@endsection

@section('css')
    @if(strpos(config('auth.method'), 'social') === 0)
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.min.css">
    @endif
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="
                @if(strpos(config('auth.method'), 'social') === 0)
                    col-lg-offset-1 col-lg-5
                @else
                    col-lg-offset-3 col-lg-6
                @endif
            ">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
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
                            <br/>
                            <a href="{{ route('auth.getEmail') }}" class="btn btn-link" style="padding-left:0;">I forgot my password!</a>
                        </div>
                    </div>
                </form>
            </div>
            @if(strpos(config('auth.method'), 'social') === 0)
            <div class="col-lg-5">
                <div class="well">
                    <a href="{{ route('facebook.provider') }}" class="btn btn-block btn-social btn-facebook">
                        <i class="fa fa-facebook"></i> Sign in with Facebook
                    </a>
                    <a href="{{ route('twitter.provider') }}" class="btn btn-block btn-social btn-twitter">
                        <i class="fa fa-twitter"></i> Sign in with Twitter
                    </a>
                    <a href="{{ route('google.provider') }}" class="btn btn-block btn-social btn-google">
                        <i class="fa fa-google"></i> Sign in with Google
                    </a>
                    <a href="{{ route('linkedin.provider') }}" class="btn btn-block btn-social btn-linkedin">
                        <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                    </a>
                    <a href="{{ route('github.provider') }}" class="btn btn-block btn-social btn-github">
                        <i class="fa fa-github"></i> Sign in with GitHub
                    </a>
                    <a href="{{ route('bitbucket.provider') }}" class="btn btn-block btn-social btn-bitbucket">
                        <i class="fa fa-bitbucket"></i> Sign in with Bitbucket
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection

@section('js')

@endsection
