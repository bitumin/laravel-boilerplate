<?php
    $trashed        = ($trashed) ? 1 : 0;
    $currentPage    = (Request::has('page')) ? Request::get('page') : '1';
?>
@extends('blog.dashboard.layouts.dashboard')
@section('page_heading', trans("posts.overview.page_title") )
@section('section')
    @if ( session()->get('notify') )
        @include('blog.dashboard.snippets.notify')
    @endif
    @if ( session()->has('success') )
        @include('blog.dashboard.widgets.alert', ['class'=>'success', 'dismissable'=>true, 'message'=> session()->get('success'), 'icon'=> 'check'])
    @endif

    <p>
        <a href="{{ ($trashed) ? route('blog.admin.posts.index') : route('blog.admin.posts.overview', ['trashed']) }}" title=""> {{ ($trashed) ? trans('posts.overview.links.active') : trans('posts.overview.links.trashed') }} </a>
    </p>

@section ('cotable_panel_title', ($trashed) ? trans("posts.overview.table_head.title_trashed") : trans("posts.overview.table_head.title_active"))
@section ('cotable_panel_body')
    <table class="table table-bordered sortable">
        <thead>
        <tr>
            <th role="title"><a href="{!! route('blog.admin.api.sort', ['posts', 'title', 'asc', $trashed]).'?page='.$currentPage !!}" title="Order by title" class="sort"> {{ trans("posts.overview.table_head.title") }} </a></th>
            <th role="slug"><a href="{!! route('blog.admin.api.sort', ['posts', 'slug', 'asc', $trashed]).'?page='.$currentPage !!}" title="Order by slug" class="sort"> {{ trans("posts.overview.table_head.slug") }} </a></th>
            <th role="status_id"><a href="{!! route('blog.admin.api.sort', ['posts', 'status_id', 'asc', $trashed]).'?page='.$currentPage !!}" title="Order by status" class="sort"> {{ trans("posts.overview.table_head.status") }} </a></th>
            <th role="publish_date"><a href="{!! route('blog.admin.api.sort', ['posts', 'publish_date', 'asc', $trashed]).'?page='.$currentPage !!}" title="Order by publish date" class="sort"> {{ trans("posts.overview.table_head.publish_date") }} <span class="fa fa-sort-down fa-fw"></span> </a></th>
            <th> {{ trans("posts.overview.table_head.actions") }} </th>
        </tr>
        </thead>
        <tbody>
        @if ( count($posts) <= 0 )
            <tr>
                <td colspan="7">
                    <em>@lang('posts.overview.no_results')</em>
                </td>
            </tr>
        @endif
        @foreach ( $posts as $post )
            <tr>
                <td>{!! $post->title !!}</td>
                <td>{!! $post->slug !!}</td>
                <td>{!! $post->status->name !!}</td>
                <td>{!! $post->publish_date !!}</td>
                <td>
                    @if(!$trashed)
                        <a href="{{ route('blog.admin.posts.edit', [$post->slug] ) }}"><span class="fa fa-edit fa-fw"></span></a>
                        <a href="{{ route('blog.admin.posts.show', [$post->slug] ) }}"><span class="fa fa-eye fa-fw"></span></a>
                        
                        <form action="{{route('blog.admin.posts.destroy')}}" class="{{$post->slug . ' form-delete'}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        
                        <a href="#" title="{{$post->name}}" class="delete" id="{{$post->slug}}"><span class="fa fa-trash-o fa-fw"></span></a>
                        </form>
                    @else
                        <a href="{{route('blog.admin.posts.restore', [$post->slug])}}" title="">Restore</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@include('blog.dashboard.widgets.panel', ['header'=>true, 'as'=>'cotable'])

{!! $posts->render() !!}

@stop
