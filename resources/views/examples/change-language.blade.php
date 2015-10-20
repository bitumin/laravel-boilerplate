@extends('layouts.basic')

@section('title')
    <title>Change language/locale</title>
@endsection

@section('css')

@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-offset-4 col-lg-4 text-center">
                <form class="form-horizontal" method="POST" action="{{ route('change-language') }}" role="form">
                    {!! csrf_field() !!}
                    <div class="form-inline">
                        <label for="locale">@lang('example.change-language')</label>
                        <select name="locale" class="form-control">
                            @foreach(config('app.languages') as $lang)
                                <option @if(session('locale')==$lang) selected="selected" @endif value="{{ $lang }}">@lang('example.tag-'.$lang)</option>
                            @endforeach
                        </select>
                        <button class="btn btn-primary" type="submit">@lang('example.submit')</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <h1>@lang('example.life')</h1>
        </div>
    </div>

@endsection

@section('js')

@endsection
