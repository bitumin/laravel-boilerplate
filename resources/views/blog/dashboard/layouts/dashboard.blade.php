@extends('blog.dashboard.layouts.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('blog.index') }}">Blogify</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ route('blog.admin.profile.edit', Auth::user()->slug ) }}"><i class="fa fa-user fa-fw"></i> {{ trans("navigation.profile") }} </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ route('auth.getLogout') }}"><i class="fa fa-sign-out fa-fw"></i> {{ trans("navigation.logout") }} </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ route('blog.admin.dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> {{ trans("navigation.dashboard.title") }} </a>
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-pencil fa-fw"></i>{{ trans("navigation.posts.title") }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                @if ( Auth::user()->is('Owner') || Auth::user()->is('Author') )
                                    <li>
                                        <a href="{{ route('blog.admin.posts.create') }}"><span class="fa fa-plus fa-fw"></span> {{ trans("navigation.posts.new") }}</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('blog.admin.posts.index' ) }}"><span class="fa fa-th-list fa-fw"></span> {{ trans("navigation.posts.overview") }}</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        @if ( ! Auth::user()->is('Reviewer') )
                            <li>
                                <a href="{{ route('blog.admin.comments.index') }}"><i class="fa fa-comment fa-fw"></i>{{ trans("navigation.comments.title") }}</a>
                            </li>
                        @endif

                        @if ( Auth::user()->is('Owner') )
                            <li >
                                <a href="#"><i class="fa fa-th-large fa-fw"></i>{{ trans("navigation.categories.title") }}<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('blog.admin.categories.create') }}"><span class="fa fa-plus fa-fw"></span> {{ trans("navigation.categories.new") }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.admin.categories.index' ) }}"><span class="fa fa-th-list fa-fw"></span> {{ trans("navigation.categories.overview") }}</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        @endif

                        @if ( ! Auth::user()->is('Reviewer') )
                            <li >
                                <a href="#"><i class="fa fa-tags fa-fw"></i>{{ trans("navigation.tags.title") }}<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('blog.admin.tags.create') }}"><span class="fa fa-plus fa-fw"></span> {{ trans("navigation.tags.new") }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.admin.tags.index' ) }}"><span class="fa fa-th-list fa-fw"></span> {{ trans("navigation.tags.overview") }}</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        @endif

                        @if ( Auth::user()->is('Owner') )
                            <li >
                                <a href="#"><i class="fa fa-users fa-fw"></i>{{ trans("navigation.users.title") }}<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{ route('blog.admin.users.create') }}"><span class="fa fa-plus fa-fw"></span> {{ trans("navigation.users.new") }}</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog.admin.users.index' ) }}"><span class="fa fa-th-list fa-fw"></span> {{ trans("navigation.users.overview") }}</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">

				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@endsection
