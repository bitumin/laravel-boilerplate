@extends('layouts.basic')

@section('title')
    <title>Basic</title>
@endsection

@section('css')
    <style>
        html, body {
            height: 100%;
        }
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
        }
        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
        .content {
            text-align: center;
            display: inline-block;
        }
        .title {
            font-size: 96px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="title">Basic</div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            //JS code goes here
        });
    </script>
@endsection
