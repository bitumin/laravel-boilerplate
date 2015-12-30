<?php
    $trashed        = ($trashed) ? 1 : 0;
    $currentPage    = (Request::has('page')) ? Request::get('page') : '1';
?>
@extends('blog.dashboard.layouts.dashboard')
@section('page_heading', trans("categories.overview.page_title") )
@section('section')
    @if ( session()->get('notify') )
        @include('blog.dashboard.snippets.notify')
    @endif
    @if ( session()->has('success') )
        @include('blog.dashboard.widgets.alert', ['class'=>'success', 'dismissable'=>true, 'message'=> session()->get('success'), 'icon'=> 'check'])
    @endif

    <p>
        <a href="{{ ($trashed) ? route('blog.admin.categories.index') : route('blog.admin.categories.overview', ['trashed']) }}" title=""> {{ ($trashed) ? trans('categories.overview.links.active') : trans('categories.overview.links.trashed') }} </a>
    </p>

@section ('cotable_panel_title', ($trashed) ? trans("categories.overview.table_head.title_trashed") : trans("categories.overview.table_head.title_active"))
@section ('cotable_panel_body')
    <table class="table table-bordered sortable">
        <thead>
        <tr>
            <th role="name"><a href="{!! route('blog.admin.api.sort', ['categories', 'name', 'asc', $trashed]).'?page='.$currentPage !!}" title="Order by name" class="sort"> {{ trans("categories.overview.table_head.name") }} </a></th>
            <th role="created_at"><a href="{!! route('blog.admin.api.sort', ['categories', 'created_at', 'asc', $trashed]).'?page='.$currentPage !!}" title="Order by created at" class="sort"> {{ trans("categories.overview.table_head.created_at") }} <span class="fa fa-sort-down fa-fw"></span> </a></th>
            <th> {{ trans("categories.overview.table_head.actions") }} </th>
        </tr>
        </thead>
        <tbody>
        @if ( count($categories) <= 0 )
            <tr>
                <td colspan="7">
                    <em>@lang('categories.overview.no_results')</em>
                </td>
            </tr>
        @endif
        @foreach ( $categories as $category )
            <tr>
                <td>{!! $category->name !!}</td>
                <td>{!! $category->created_at !!}</td>
                <td>
                    @if(!$trashed)
                        <a href="{{ route('blog.admin.categories.edit', [$category->slug] ) }}"><span class="fa fa-edit fa-fw"></span></a>
                        <form action="{{'admin.categories.destroy', $category->slug}}" method="post" class="{{$category->slug . ' form-delete'}}">
                            <input type="hidden" name="_method" value="delete">
                            <a href="#" title="{{$category->name}}" class="delete" id="{{$category->slug}}"><span class="fa fa-trash-o fa-fw"></span></a>
                        </form>
                    @else
                        <a href="{{route('blog.admin.categories.restore', [$category->slug])}}" title="">Restore</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@include('blog.dashboard.widgets.panel', ['header'=>true, 'as'=>'cotable'])

{!! $categories->render() !!}

@stop
