<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title') - {{ setting('app_name') }}</title>

    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url(setting('favicon')) }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url(setting('favicon')) }}" /> -->
    <link rel="icon" type="image/png" href="{{ url(setting('favicon')) }}" sizes="32x32" />
    <!-- <link rel="icon" type="image/png" href="{{ url(setting('favicon')) }}" sizes="16x16" />
    <meta name="application-name" content="{{ setting('app_name') }}"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ url(setting('favicon')) }}" /> -->

    {!! HTML::style('assets/css/bootstrap.min.css') !!}

    <link media="all" type="text/css" rel="stylesheet" href="{{ url(mix('assets/css/vendor.css')) }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ url(mix('assets/css/app.css')) }}">
    {!! HTML::style('assets/css/preloader.min.css') !!}
    {!! HTML::style('assets/css/icons.min.css') !!}
    {!! HTML::style('assets/rwd-table/rwd-table.min.css') !!}

    @yield('styles')

    @hook('app:styles')
@include('custom.style')
</head>
    
@if( auth()->user()->present()->theme_mode && auth()->user()->present()->sidebar == 1)
<body data-layout-mode="dark" data-topbar="dark" data-sidebar="dark" >
@elseif( auth()->user()->present()->theme_mode && auth()->user()->present()->sidebar == 0)
<body data-layout-mode="dark" data-topbar="dark" data-sidebar="dark" data-sidebar-size ="sm" >
@elseif(auth()->user()->present()->sidebar == 1)
<body>
@else
<body data-sidebar-size ="sm">
@endif
    <div id="layout-wrapper">
        @include('partials.navbar')
        @include('partials.sidebar.main')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script>
        paceOptions = {
            eventLag:false
        };
    </script>
    <script src="{{ url(mix('assets/js/vendor.js')) }}"></script>
    <script src="{{ url('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('assets/js/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/js/pace-js/pace.min.js') }}"></script>
    <script src="{{ url('assets/js/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/js/as/app.js') }}"></script>
    <script src="{{ url('assets/rwd-table/rwd-table.js') }}"></script>
    
    @yield('scripts')

    @hook('app:scripts')
</body>
</html>