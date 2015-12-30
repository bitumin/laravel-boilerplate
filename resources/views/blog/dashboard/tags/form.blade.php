@extends('blog.dashboard.layouts.dashboard')
@section('page_heading', isset($tag) ? trans("tags.form.page_title_edit")  : trans("tags.form.page_title_create") )
@section('section')

    @include('blog.dashboard.snippets.validation-errors')
    
    <form action="{{ (! isset($tag)) ? route('blog.admin.tags.store') : route('blog.admin.tags.update', $tag->slug)  }}" method="post">
        
    @if(isset($tag))
        <input type="hidden" name="_method" value="PUT">
    @endif

    <div class="row form-group {{ $errors->has('tags') ? 'has-error' : '' }}">
        <div class="col-sm-1">
            <label for="tags">{{ trans("tags.form.tags.label") }}</label>
        </div>
        <div class="col-sm-11">
            <input type="text" name="tags" value="{{isset($tag) ? $tag->name : ''}}" class="form-control form-small">
            @if ( ! isset($tag) )
                <span id="helpBlock" class="help-block">{{ trans("tags.form.help_block") }}</span>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <input type="submit" value="{{trans("tags.form.submit_button.value")}}" class="btn btn-success">
        </div>
    </div>

    </form>

@stop