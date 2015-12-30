<?php
    if (! empty($post) && count($post->tag) > 0) {
        $sluges = '';
        $i      = 0;
        $count  = count($post->tag);

        foreach ($post->tag as $tag) {
            $slug = $tag->slug;

            if ($i < $count - 1) {
                $slug = $slug.',';
            }

            $sluges .= $slug;
            $i++;
        }
    }
?>
@extends('blog.dashboard.layouts.dashboard')
@section('page_heading',trans("posts.form.page.title.create"))
@section('section')
    <form action="{{ route('blog.admin.posts.store') }}" method="post">
    <input type="hidden" name="slug" value="{{(isset($post)) ? $post->slug : ''}}">
    {!! csrf_field() !!}

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-lg-12 col-md-12 form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <input type="text" name="title" value="{{ isset($post) ? $post->title : '' }}" class="form-control" id="title" placeholder="{{trans("posts.form.title.placeholder")}}">
                    @if ( $errors->has('title') )
                        <span class="help-block text-danger">{{$errors->first('title')}}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 form-group {{ $errors->has('post') ? 'has-error' : '' }}">
                    <textarea name="post" id="post" class="form-control">
                        {{ isset($post) ? $post->content : '' }}
                        {{ Input::old('post') }}
                    </textarea>
                    @if ( $errors->has('post') )
                        <span class="text-danger help-block">{{$errors->first('post')}}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 auto-save-log">

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">

            <!-- publish box -->
            <div class="panel-group" id="accordion">
                <div class="panel panel-{{ isset($class) ? $class : 'default' }}">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"
                               href="#collapsePublish">
                                {{ trans("posts.form.publish.title") }}
                            </a>
                        </h4>
                    </div>
                    <div id="collapsePublish" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="status">{{trans("posts.form.publish.status.label")}}</label>
                                </div>
                                <div class="col-sm-8 {{ $errors->has('status') ? 'has-error' : '' }}">
                                    <select name="status" id="status" class="form-control form-small">
                                        @foreach ( $statuses as $status )
                                            @if ( isset($post) )
                                                <option {{ ($status->id === $post->status_id || $status->slug == Input::old('status') ) ? 'selected' : '' }} value="{{$status->slug}}">{{$status->name}}</option>
                                            @else
                                                <option {{  $status->slug == Input::old('status') ? 'selected' : '' }} value="{{$status->slug}}">{{$status->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="visibility">{{trans("posts.form.publish.visibility.label")}}</label>
                                </div>
                                <div class="col-sm-8 {{ $errors->has('visibility') ? 'has-error' : '' }}">
                                    <select name="visibility" id="visibility" class="form-control form-small">
                                        @foreach ( $visibility as $item )
                                            @if ( isset($post) )
                                                <option {{ ( $item->id === $post->visibility_id || $item->slug == Input::old('visibility') ) ? 'selected' : '' }} value="{{$item->slug}}">{{$item->name}}</option>
                                            @else
                                                <option {{  ( $item->slug == Input::old('visibility') ) ? 'selected' : '' }} value="{{$item->slug}}">{{$item->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row" id="password-protected-post">
                                <div class="col-sm-4">
                                    <label for="password">{{trans("posts.form.publish.password.label")}}</label>
                                </div>
                                <div class="col-sm-8 {{ $errors->has('password') ? 'has-error' : '' }}">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="date">{{trans("posts.form.publish.publish_date.label")}}</label>
                                </div>
                                <div class="col-sm-8 form-group {{ $errors->has('publishdate') ? 'has-error' : '' }}">
                                    <input type="text" name="publishdate" value="{{isset($post) ? $post->publish_date : $publish_date}}"
                                        data-field="datetime" class="form-control" readonly="readonly" id="publishdate">
                                    <div id="dtBox"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="{{trans("posts.form.publish.save_button.value")}}" class="btn btn-success">
                                    <a href="{{route('blog.admin.posts.cancel', [isset($post) ? $post->slug : ''])}}" class="btn btn-danger" role="button">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end publish box -->

            <!-- categories box -->
            <div class="panel-group" id="accordion">
                <div class="panel panel-{{ isset($class) ? $class : 'default' }}">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"
                               href="#collapseRevieuwer">
                                {{ trans("posts.form.reviewer.title") }}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseRevieuwer" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <select name="reviewer" id="reviewer" class="form-control">
                                        <option {{ (!isset($post) ? 'selected' : '') }} value="{{Auth::user()->slug}}">{{Auth::user()->fullName}}</option>
                                        @foreach ( $reviewers as $reviewer )
                                            @if ( isset($post) )
                                                <option {{ ($reviewer->id === $post->reviewer_id || $reviewer->slug == Input::old('reviewer') ) ? 'selected' : '' }} value="{{$reviewer->slug}}">{{$reviewer->fullName}}</option>
                                            @else
                                                <option {{ ( $reviewer->slug == Input::old('reviewer') ) ? 'selected' : '' }} value="{{$reviewer->slug}}">{{$reviewer->fullName}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end categories box -->

            <!-- categories box -->
            <div class="panel-group" id="accordion">
                <div class="panel panel-{{ isset($class) ? $class : 'default' }}">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"
                               href="#collapseCategory">
                                {{ trans("posts.form.category.title") }}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseCategory" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 form-group input-group" id="cat-form">
                                    <input type="text" name="newCategory" class="form-control" id="newCategory"
                                        placeholder="{{trans("posts.form.category.placeholder")}}" >
                                    <span class="input-group-btn">
                                    <button type="button" id="create-category" class="btn btn-success"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-danger" id="cat-errors"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12" id="categories">
                                    @if ( count($categories) <= 0 )
                                        <select name="category" id="category" class="form-control form-small" disabled="disabled">
                                            <option id="no-cats-found">{{ trans("posts.form.category.no_results") }}</option>
                                        </select>
                                    @else
                                        <select name="category" id="category" class="form-control form-small">
                                            @foreach ( $categories as $category )
                                                @if ( isset($post) )
                                                    <option {{ ($category->id === $post->category_id || $category->slug == Input::old('category') ) ? 'selected' : '' }} value="{{$category->slug}}">{{$category->name}}</option>
                                                @else
                                                    <option {{  $category->slug == Input::old('category') ? 'selected' : '' }} value="{{$category->slug}}">{{$category->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    @endif

                                    @if( $errors->has('category') )
                                        <p class="text-danger">{{$errors->first('category')}}</p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end categories box -->

            <!-- tags box -->
            <div class="panel-group" id="accordion">
                <div class="panel panel-{{ isset($class) ? $class : 'default' }}">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse"
                               href="#collapseTags">
                                {{ trans("posts.form.tags.title") }}
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTags" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-12 form-group input-group">
                                    <input type="text" name="newTags" class="form-control" id="newTags" placeholder="{{trans("posts.form.tags.placeholder")}}">
                                    <span class="input-group-btn">
                                    <button type="button" class="btn btn-success" id="tag-btn"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" name="tags" value="{{ isset($sluges) ? $sluges : '' }}" id="addedTags">
                                    <span id="helpBlock" class="help-block">{{ trans("posts.form.tags.help_block") }}</span>
                                    <div id="tag-errors" class="text-danger"></div>
                                    <div id="tags">
                                        @if( isset($post) && count($tags = $post->tag) > 0 )
                                            @foreach ( $tags as $tag )
                                                <span class="tag {{$tag->slug}}"><a href="#" class="{{$tag->slug}}" title="Remove tag"><span class="fa fa-times-circle"></span></a> {{ $tag->name }} </span>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end tags box -->


        </div>

    </div>
    </form>
@stop
@section('scripts')
    <link rel="stylesheet" type="text/css" href="{{asset('js/blog/datetimepicker/DateTimePicker.css')}}" />
    <script type="text/javascript" src="{{asset('js/blog/datetimepicker/DateTimePicker.js')}}"></script>
    <script src="{{asset('js/blog/ckeditor/ckeditor.js')}}"></script>
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="{{ asset('js/blog/datetimepicker/DateTimePicker-ltie9.css') }}" />
    <script type="text/javascript" src="{{ asset('js/blog/datetimepicker/DateTimePicker-ltie9.js') }}"></script>
    <![endif]-->
@endsection