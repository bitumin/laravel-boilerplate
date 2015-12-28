<?php
    $trashed        = ($trashed) ? 1 : 0;
    $currentPage    = (Request::has('page')) ? Request::get('page') : '1';
?>
@extends('blog-admin.layouts.dashboard')
@section('page_heading', trans("users.overview.page_title") )
@section('section')
    @if ( session()->get('notify') )
        @include('blog-admin.snippets.notify')
    @endif
    @if ( session()->has('success') )
        @include('blog-admin.widgets.alert', ['class'=>'success', 'dismissable'=>true, 'message'=> session()->get('success'), 'icon'=> 'check'])
    @endif

    <p>
        <a href="{{ ($trashed) ? route('admin.users.index') : route('admin.users.overview', ['trashed']) }}" title=""> {{ ($trashed) ? trans('users.overview.links.active') : trans('users.overview.links.trashed') }} </a>
    </p>

@section ('cotable_panel_title', ($trashed) ? trans("users.overview.table_head.title_trashed") : trans("users.overview.table_head.title_active"))
@section ('cotable_panel_body')
    <table class="table table-bordered sortable">
        <thead>
            <tr>
                <th role="lastname"><a href="{{ route('admin.api.sort', ['users', 'name', 'asc', $trashed]).'?page='.$currentPage }}" title="Order by name" class="sort"> {{ trans("users.overview.table_head.name") }} <span class="fa fa-sort-down fa-fw"></span> </a></th>
                <th role="firstname"><a href="{{ route('admin.api.sort', ['users', 'firstname', 'asc', $trashed]).'?page='.$currentPage }}" title="Order by first name" class="sort"> {{ trans("users.overview.table_head.firstname") }} </a></th>
                <th role="username"><a href="{{ route('admin.api.sort', ['users', 'username', 'asc', $trashed]).'?page='.$currentPage }}" title="Order by username" class="sort"> {{ trans("users.overview.table_head.username") }} </a></th>
                <th role="email"><a href="{{ route('admin.api.sort', ['users', 'email', 'asc', $trashed]).'?page='.$currentPage }}" title="Order by E-mail" class="sort"> {{ trans("users.overview.table_head.email") }} </a></th>
                <th role="role_id"><a href="{{ route('admin.api.sort', ['users', 'role_id', 'asc', $trashed]).'?page='.$currentPage }}" title="Order by Role" class="sort"> {{ trans("users.overview.table_head.role") }} </a></th>
                <th> {{ trans("users.overview.table_head.actions") }} </th>
            </tr>
        </thead>
        <tbody>
            @if ( count($users) <= 0 )
                <tr>
                    <td colspan="7">
                        <em>@lang('users.overview.no_results')</em>
                    </td>
                </tr>
            @endif
            @foreach ( $users as $user )
                <tr>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->getBloggerRoleName() }}</td>
                    <td>
                        @if(!$trashed)
                            <a href="{{ route('admin.users.edit', [$user->slug] ) }}"><span class="fa fa-edit fa-fw"></span></a>

                            <form action="{{route('admin.users.destroy', $user->slug)}}" class="{{$user->slug.' form-delete'}}">
                                <input type="hidden" name="_method" value="delete">
                                <a href="#" title="{{$user->name}}" class="delete" id="{{$user->slug}}"><span class="fa fa-trash-o fa-fw"></span></a>
                            </form>
                        @else
                            <a href="{{route('admin.users.restore', [$user->slug])}}" title="">Restore</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@include('blog-admin.widgets.panel', ['header'=>true, 'as'=>'cotable'])

{{ $users->render() }}

@endsection
