@extends('blog.dashboard.layouts.dashboard')
@section('page_heading', isset($category) ? trans("categories.form.page_title_edit") : trans("categories.form.page_title_create") )
@section('section')

    @include('blog.dashboard.snippets.validation-errors')

    <form action="{{ ( ! isset($category) ) ?
    route( 'blog.admin.categories.store' ) :
    route( 'blog.admin.categories.update', $category->slug )
    }}" method="post">

    @if( isset($category) )
        <input type="hidden" name="_method" value="PUT">
    @endif

    {!! csrf_field() !!}

    <div class="row form-group {{ ( $errors->has('name') ? 'has-error' : '' ) }}">
        <div class="col-sm-1">
            <label for="tags">{{trans("categories.form.tags.label")}}</label>
        </div>
        <div class="col-sm-11">
            <input type="text" name="name" value="{{isset($category) ? $category->name : ''}}" class="form-control form-small">
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <input type="submit" value="{{trans("categories.form.submit_button.value")}}" class="btn btn-success">
        </div>
    </div>

    </form>

@stop
