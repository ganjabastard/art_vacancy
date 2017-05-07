{{--<!DOCTYPE html>--}}
{{--<html lang="{{ config('app.locale') }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}

    {{--<meta name="viewport" content="width=device-width, initial-scale=1.0"/>--}}
    {{--<meta name="description" content=""/>--}}
    {{--<meta name="author" content=""/>--}}

    {{--<title>{{ config('app.name', 'MyCredit') }}</title>--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">--}}
    {{--<link rel="stylesheet" href="{!! asset('assets/css/fonts/linecons/css/linecons.css') !!}">--}}
    {{--<link rel="stylesheet" href="{!! asset('assets/css/fonts/fontawesome/css/font-awesome.min.css') !!}">--}}
    {{--<link rel="stylesheet" href="{!! asset('assets/css/bootstrap.css') !!}">--}}
    {{--<link rel="stylesheet" href="{!! asset('assets/css/xenon-core.css') !!}">--}}
    {{--<link rel="stylesheet" href="{!! asset('assets/css/xenon-forms.css') !!}">--}}
    {{--<link rel="stylesheet" href="{!! asset('assets/css/xenon-components.css') !!}">--}}
    {{--<link rel="stylesheet" href="{!! asset('assets/css/xenon-skins.css') !!}">--}}
    {{--<link rel="stylesheet" href="{!! asset('assets/css/custom.css') !!}">--}}

    {{--<script src="{!! asset('assets/js/jquery-1.11.1.min.js') !!}"></script>--}}

    {{--<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->--}}
    {{--<!--[if lt IE 9]>--}}
    {{--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
    {{--<![endif]-->--}}


{{--</head>--}}
{{--<body class="page-body">--}}

{{--<nav class="navbar horizontal-menu navbar-fixed-top navbar-minimal"><!-- set fixed position by adding class "navbar-fixed-top" -->--}}
    {{--<div class="navbar-inner">--}}
        {{--<!-- Navbar Brand -->--}}
        {{--<div class="navbar-brand">--}}
            {{--<a href="{!! url('dashboard') !!}" class="logo">--}}
                {{--<img src="{{ url('assets/images/logo_last.svg') }}" width="80" alt="" class="hidden-xs"/>--}}
                {{--<img src="{{ url('assets/images/logo_last.svg') }}" width="80" alt="" class="visible-xs"/>--}}
            {{--</a>--}}
            {{--<a href="#" data-toggle="settings-pane" data-animate="true">--}}
                {{--<i class="linecons-cog"></i>--}}
            {{--</a>--}}
        {{--</div>--}}

        {{--<!-- Mobile Toggles Links -->--}}
        {{--@include('navigations.mobile')--}}

        {{--<div class="navbar-mobile-clear"></div>--}}

        {{--<!-- main menu -->--}}
        {{--@include('navigations.main')--}}

    {{--<!-- notifications and other links -->--}}
        {{--@include('navigations.userinfo')--}}
    {{--</div>--}}
{{--</nav>--}}


{{--<div class="page-container" style="margin-top: 55px;"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->--}}
    {{--<div class="main-content">--}}
        {{--@yield('pagetitle')--}}
        {{--@include('layouts.alerts')--}}
        {{--@yield('content')--}}
    {{--</div>--}}
{{--</div>--}}

{{--<footer class="main-footer sticky footer-type-1">--}}
    {{--<div class="footer-inner">--}}
        {{--<!-- Add your copyright text here -->--}}
        {{--<div class="footer-text">--}}
            {{--&copy; {!! \Carbon\Carbon::now()->format("Y") !!}--}}
            {{--<strong>{{ config('app.name', 'Laravel') }}</strong>--}}
        {{--</div>--}}

        {{--<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->--}}
        {{--<div class="go-up">--}}
            {{--<a href="#" rel="go-top">--}}
                {{--<i class="fa-angle-up"></i>--}}
            {{--</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}


{{--@yield('styles')--}}
{{--<!-- Bottom Scripts -->--}}
{{--<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>--}}
{{--<script src="{!! asset('assets/js/TweenMax.min.js') !!}"></script>--}}
{{--<script src="{!! asset('assets/js/resizeable.js') !!}"></script>--}}
{{--<script src="{!! asset('assets/js/joinable.js') !!}"></script>--}}
{{--<script src="{!! asset('assets/js/xenon-api.js') !!}"></script>--}}
{{--<script src="{!! asset('assets/js/xenon-toggles.js') !!}"></script>--}}

{{--@yield('scripts')--}}

{{--<!-- JavaScripts initializations and stuff -->--}}
{{--<script src="{!! asset('assets/js/xenon-custom.js') !!}"></script>--}}

{{--</body>--}}
{{--</html>--}}


<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>{{ config('app.name', 'MyCredit') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts/linecons/css/linecons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/xenon-core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/xenon-forms.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/xenon-components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/xenon-skins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}'">

    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
    <!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
    <!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
    <div class="sidebar-menu toggle-others fixed">
        <div class="sidebar-menu-inner">
            <header class="logo-env">
                <!-- logo -->
                <div class="logo">
                    <a href="{{ url('/') }}" class="logo-expanded">
                        <img src="{{ asset('assets/images/art-logo2.jpg') }}" width="80" alt="" />
                    </a>
                    <a href="{{ url('/') }}" class="logo-collapsed">
                        <img src="{{ asset('assets/images/art-logo2.jpg') }}" width="40" alt="" />
                    </a>
                </div>
                <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                <div class="mobile-menu-toggle visible-xs">
                    <a href="#" data-toggle="user-info-menu">
                        <i class="fa-bell-o"></i>
                        <span class="badge badge-success">7</span>
                    </a>
                    <a href="#" data-toggle="mobile-menu">
                        <i class="fa-bars"></i>
                    </a>
                </div>
            </header>
            @include('navigations.main')
        </div>
    </div>

    <div class="main-content">
        <nav class="navbar user-info-navbar"  role="navigation"><!-- User Info, Notifications and Menu Bar -->
            <ul class="user-info-menu left-links list-inline list-unstyled">
                <li class="hidden-sm hidden-xs">
                    <a href="#" data-toggle="sidebar">
                        <i class="fa-bars"></i>
                    </a>
                </li>
            </ul>
            @include('navigations.userinfo')
        </nav>
        @yield('pagetitle')
        <br />

        <div class="panel panel-default panel-headerless">
            <div class="panel-body layout-variants">
                <div class="row">

                    @include('layouts.alerts')
                    @yield('content')
                </div>
            </div>
        </div>

        <footer class="main-footer sticky footer-type-1">
            <div class="footer-inner">
                <!-- Add your copyright text here -->
                <div class="footer-text">
                    &copy; 2014
                    <strong>Xenon</strong>
                    theme by <a href="http://laborator.co" target="_blank">Laborator</a> - <a href="http://themeforest.net/item/xenon-bootstrap-admin-theme/9059661?ref=Laborator" target="_blank">Purchase for only <strong>23$</strong></a>
                </div>
                <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
                <div class="go-up">
                    <a href="#" rel="go-top">
                        <i class="fa-angle-up"></i>
                    </a>
                </div>

            </div>
        </footer>
    </div>
</div>

@yield('styles')
<!-- Bottom Scripts -->
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/TweenMax.min.js') }}"></script>
<script src="{{ url('assets/js/resizeable.js') }}"></script>
<script src="{{ url('assets/js/joinable.js') }}"></script>
<script src="{{ url('assets/js/xenon-api.js') }}"></script>
<script src="{{ url('assets/js/xenon-toggles.js') }}"></script>

@yield('scripts')
<!-- JavaScripts initializations and stuff -->
<script src="{{ url('assets/js/xenon-custom.js') }}"></script>

</body>
</html>
