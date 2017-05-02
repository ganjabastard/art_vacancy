<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="{{ url('assets/css/fonts/linecons/css/linecons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/xenon-core.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/xenon-forms.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/xenon-components.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/xenon-skins.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">

    <script src="{{ url('assets/js/jquery-1.11.1.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body login-page login-light">


<div class="login-container">
    <div class="row">
        <div class="col-sm-6">
            @yield('content')
        </div>
    </div>
</div>

<!-- Bottom Scripts -->
<script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ url('assets/js/TweenMax.min.js') }}"></script>
<script src="{{ url('assets/js/resizeable.js') }}"></script>
<script src="{{ url('assets/js/joinable.js') }}"></script>
<script src="{{ url('assets/js/xenon-api.js') }}"></script>
<script src="{{ url('assets/js/xenon-toggles.js') }}"></script>
<script src="{{ url('assets/js/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ url('assets/js/toastr/toastr.min.js') }}"></script>


<!-- JavaScripts initializations and stuff -->
<script src="{{ url('assets/js/xenon-custom.js') }}"></script>

<!-- Scripts -->
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>

</body>
</html>
