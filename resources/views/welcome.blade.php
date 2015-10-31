@extends('layouts.basic')

@section('title')
    <title>Welcome!</title>
@endsection

@section('css')
    <style>
        @font-face {
            font-family: hobitton;
            src: url(../fonts/hobbitonbrushhand.ttf);
        }

        body {
            font-size: 26px;
        }

        .lotr {
            font-family: hobitton, serif;
        }

        a.lotr, a.lotr:hover, a.lotr:active, a.lotr:focus {
            text-decoration: none;
            color: #333;
        }

        .well {
            height: 200px;
            width: 100%;
            display: table;
            text-align: center;
        }

        wrapper {
            display: table-cell;
            vertical-align: middle;
            position: relative;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-12 text-center" style="padding:50px 0;">
                    <img src="{{ asset('img/logo-verde.png') }}">
                </div>
                <div class="col-lg-6">
                    <div class="well well-lg text-center">
                        <wrapper>
                            I'm a customer,<br>
                            show me what you've got!<br>
                        </wrapper>
                    </div>
                    <a class="btn btn-lg btn-block btn-primary" href="{{ route('public.portfolio') }}">Portfolio</a>
                </div>
                <div class="col-lg-6">
                    <div class="well well-lg text-center">
                        <wrapper>
                            I'm a developer,<br>
                            <a class="lotr" href="{{ route('dashboard') }}">speak friend and enter</a><br>
                            (credentials may help too)<br>
                        </wrapper>
                    </div>
                    <a class="btn btn-lg btn-block btn-success" href="{{ route('public.examples') }}">Boilerplate</a>
                    <a class="btn btn-lg btn-block btn-warning" href="{{ route('public.templates') }}">Templates</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
