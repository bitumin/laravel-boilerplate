<?php
$currentPage = (Request::has('page')) ? Request::get('page') : '1';
?>
@extends('blog.dashboard.layouts.dashboard')
@section('page_heading', trans("comments.overview.page_title") )
@section('section')
    @if ( session()->get('notify') )
        @include('blog.dashboard.snippets.notify')
    @endif
    @if ( session()->has('success') )
        @include('blog.dashboard.widgets.alert', ['class'=>'success', 'dismissable'=>true, 'message'=> session()->get('success'), 'icon'=> 'check'])
    @endif

    <ul class="nav nav-tabs">
        <li role="presentation" class="{{ (Request::segment(3) == 'pending' || Request::segment(3) == null) ? 'active' : '' }}" ><a href="{{ route('blog.admin.comments.index', ['pending']) }}">{{ trans('comments.overview.links.pending') }}</a></li>
        <li role="presentation" class="{{ ( Request::segment(3) == 'approved' ) ? 'active' : '' }} "><a href="{{ route('blog.admin.comments.index', ['approved']) }}">{{ trans('comments.overview.links.approved') }}</a></li>
        <li role="presentation" class="{{ ( Request::segment(3) == 'disapproved' ) ? 'active' : '' }} "><a href="{{ route('blog.admin.comments.index', ['disapproved']) }}">{{ trans('comments.overview.links.disapproved') }}</a></li>
    </ul>

@section ('cotable_panel_title', trans("comments.overview.page_title") )
@section ('cotable_panel_body')
    <table class="table table-bordered sortable">
        <thead>
        <tr>
            <th>@lang("comments.overview.table_head.author")</th>
            <th>@lang("comments.overview.table_head.comment")</th>
            <th>@lang("comments.overview.table_head.post")</th>
            <th>@lang("tags.overview.table_head.created_at")</th>
            <th>@lang("tags.overview.table_head.actions")</th>
        </tr>
        </thead>
        <tbody>
        @if ( count($comments) <= 0 )
            <tr>
                <td colspan="7">
                    <em>@lang('comments.overview.no_results')</em>
                </td>
            </tr>
        @endif
        @foreach ( $comments as $comment )
            <tr>
                <td>{!! $comment->user->fullName !!}</td>
                <td>{!! nl2br($comment->content) !!}</td>
                <td><a href="{{route('blog.admin.posts.show', [$comment->post->hash])}}" title="{{ $comment->post->title }}">{!! $comment->post->title !!}</a></td>
                <td>{!! $comment->created_at !!}</td>
                <td>
                    <a href="{{ route('blog.admin.comments.changeStatus', [$comment->hash, 'approved'] ) }}" title="{{ trans('comments.overview.actions.approve') }}"><span class="fa fa-check fa-fw"></span></a>
                    <a href="{{ route('blog.admin.comments.changeStatus', [$comment->hash, 'disapproved'] ) }}" title="{{ trans('comments.overview.actions.disapprove') }}"><span class="fa fa-times fa-fw"></span></a>
                    <a href="{{ route('blog.admin.comments.changeStatus', [$comment->hash, 'pending'] ) }}" title="{{ trans('comments.overview.actions.pending') }}"><span class="fa fa-question fa-fw"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

@include('blog.dashboard.widgets.panel', ['header'=>true, 'as'=>'cotable'])

{!! $comments->render() !!}

@stop
