@extends('layouts.basic')

@section('title')
    <title>Change locale</title>
@endsection

@section('css')

@endsection

@section('content')
    <form method="POST" action="{{ route('change-language') }}" role="form">
        <div class="form-group">
            <label for="locale">@lang('example.change-language')</label>
            <select name="locale" class="form-control">
                <option selected="selected">@lang('example.spanish')</option>
                <option selected="selected">@lang('example.english')</option>
                <option selected="selected">@lang('example.french')</option>
            </select>
            <button type="submit">@lang('example.submit')</button>
        </div>
    </form>
    @lang('example.life')
@endsection

@section('js')

@endsection
