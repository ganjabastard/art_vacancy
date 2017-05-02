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
    <link rel="stylesheet" href="{!! asset('assets/css/fonts/linecons/css/linecons.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/fonts/fontawesome/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/xenon-core.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/xenon-forms.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/xenon-components.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/xenon-skins.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/custom.css') !!}">

    <script src="{!! asset('assets/js/jquery-1.11.1.min.js') !!}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body">

<nav class="navbar horizontal-menu navbar-fixed-top navbar-minimal"><!-- set fixed position by adding class "navbar-fixed-top" -->
    <div class="navbar-inner">
        <!-- Navbar Brand -->
        <div class="navbar-brand">
            <a href="{!! url('dashboard') !!}" class="logo">
                <img src="{{ url('assets/images/logo_last.svg') }}" width="80" alt="" class="hidden-xs"/>
                <img src="{{ url('assets/images/logo_last.svg') }}" width="80" alt="" class="visible-xs"/>
            </a>
            <a href="#" data-toggle="settings-pane" data-animate="true">
                <i class="linecons-cog"></i>
            </a>
        </div>

        <!-- Mobile Toggles Links -->
        @include('navigations.mobile')

        <div class="navbar-mobile-clear"></div>

        <!-- main menu -->
        @include('navigations.main')

    <!-- notifications and other links -->
        @include('navigations.userinfo')
    </div>
</nav>


<div class="page-container" style="margin-top: 55px;"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    <div class="main-content">
        @yield('pagetitle')
        @include('layouts.alerts')
        @yield('content')
    </div>
</div>

<footer class="main-footer sticky footer-type-1">
    <div class="footer-inner">
        <!-- Add your copyright text here -->
        <div class="footer-text">
            &copy; {!! \Carbon\Carbon::now()->format("Y") !!}
            <strong>{{ config('app.name', 'Laravel') }}</strong>
        </div>

        <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
        <div class="go-up">
            <a href="#" rel="go-top">
                <i class="fa-angle-up"></i>
            </a>
        </div>
    </div>
</footer>


@yield('styles')
<!-- Bottom Scripts -->
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('assets/js/TweenMax.min.js') !!}"></script>
<script src="{!! asset('assets/js/resizeable.js') !!}"></script>
<script src="{!! asset('assets/js/joinable.js') !!}"></script>
<script src="{!! asset('assets/js/xenon-api.js') !!}"></script>
<script src="{!! asset('assets/js/xenon-toggles.js') !!}"></script>

@yield('scripts')

<!-- JavaScripts initializations and stuff -->
<script src="{!! asset('assets/js/xenon-custom.js') !!}"></script>

</body>
</html>