<?php
    $trashed        = ($trashed) ? 1 : 0;
    $currentPage    = (Request::has('page')) ? Request::get('page') : '1';
?>
@extends('blog.dashboard.layouts.dashboard')
@section('page_heading', trans("tags.overview.page_title") )
@section('section')
    @if ( session()->get('notify') )
        @include('blog.dashboard.snippets.notify')
    @endif
    @if ( session()->has('success') )
        @include('blog.dashboard.widgets.alert', ['class'=>'success', 'dismissable'=>true, 'message'=> session()->get('success'), 'icon'=> 'check'])
    @endif

    <p>
        <a href="{{ ($trashed) ? route('blog.admin.tags.index') : route('blog.admin.tags.overview', ['trashed']) }}" title=""> {{ ($trashed) ? trans('tags.overview.links.active') : trans('tags.overview.links.trashed') }} </a>
    </p>

@section ('cotable_panel_title', ($trashed) ? trans("tags.overview.table_head.title_trashed") : trans("tags.overview.table_head.title_active"))
@section ('cotable_panel_body')
    <table class="table table-bordered sortable">
        <thead>
        <tr>
            <th role="name"><a href="{{ route('blog.admin.api.sort', ['tags', 'name', 'asc', $trashed]).'?page='.$currentPage }}" title="Order by name" class="sort"> {{ trans("tags.overview.table_head.name") }} </a></th>
            <th role="created_at"><a href="{{ route('blog.admin.api.sort', ['tags', 'created_at', 'asc', $trashed]).'?page='.$currentPage }}" title="Order by created at" class="sort"> {{ trans("tags.overview.table_head.created_at") }} <span class="fa fa-sort-down fa-fw"></span> </a></th>
            <th> {{ trans("tags.overview.table_head.actions") }} </th>
        </tr>
        </thead>
        <tbody>
        @if ( count($tags) <= 0 )
            <tr>
                <td colspan="7">
                    <em>@lang('tags.overview.no_results')</em>
                </td>
            </tr>
        @endif
        @foreach ( $tags as $tag )
            <tr>
                <td>{!! $tag->name !!}</td>
                <td>{!! $tag->created_at !!}</td>
                <td>
                    @if(!$trashed)
                        <a href="{{ route('blog.admin.tags.edit', [$tag->slug] ) }}"><span class="fa fa-edit fa-fw"></span></a>
                        <form action="{{'admin.tags.destroy', $tag->slug}}" method="post" class="{{$tag->slug . ' form-delete'}}">

                        <input type="submit" name="_method" value="delete">
                        
                        <a href="#" title="{{$tag->name}}" class="delete" id="{{$tag->slug}}"><span class="fa fa-trash-o fa-fw"></span></a>
                        </form>
                    @else
                        <a href="{{route('blog.admin.tags.restore', [$tag->slug])}}" title="">Restore</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@include('blog.dashboard.widgets.panel', ['header'=>true, 'as'=>'cotable'])

{!! $tags->render() !!}

@stop
