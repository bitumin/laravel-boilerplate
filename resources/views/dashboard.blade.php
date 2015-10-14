@extends('layouts.basic')

@section('title')
    <title>Dashboard</title>
@endsection

@section('css')

@endsection

@section('content')
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><a href="/">Blog Home</a></li>
                    @if(\Auth::check())
                        <li @if(\Request::is('admin/post*')) class="active" @endif>
                            <a href="/admin/post">Posts</a>
                        </li>
                        <li @if(\Request::is('admin/tag*')) class="active" @endif>
                            <a href="/admin/tag">Tags</a>
                        </li>
                        <li @if(\Request::is('admin/upload*')) class="active" @endif>
                            <a href="/admin/upload">Uploads</a>
                        </li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(\Auth::guest())
                        <li><a href="{{ route('auth.getLogin') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">{{ \Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('auth.getLogout') }}">Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('js')

@endsection
