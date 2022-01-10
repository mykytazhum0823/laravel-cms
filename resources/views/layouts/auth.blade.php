<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page-title') - {{ setting('app_name') }}</title>

    <!-- <link  rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url(setting('favicon')) }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ url(setting('favicon')) }}" /> -->
    <link rel="icon" type="image/png" href="{{ url(setting('favicon')) }}" sizes="32x32" />
    <!-- <link rel="icon" type="image/png" href="{{ url(setting('favicon')) }}" sizes="16x16" /> -->
    <!-- <meta name="application-name" content="{{ setting('app_name') }}"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ url(setting('favicon')) }}" /> -->

    {!! HTML::style('assets/css/preloader.min.css') !!}
    {!! HTML::style('assets/css/bootstrap.min.css') !!}
    {!! HTML::style('assets/css/icons.min.css') !!}
    {!! HTML::style('assets/css/app.css') !!}
    {!! HTML::style('assets/css/fontawesome-all.min.css') !!}

    @yield('header-scripts')

    @hook('auth:styles')
    
    @include('custom.style')
</head>
<body>

    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    @yield('content')
                </div>
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay bg-primary"></div>
                        <ul class="bg-bubbles">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!-- end bubble effect -->
                        <div class="row justify-content-center align-items-center" style="width:100%;">
                            <div class="col-xl-7">
                                <div class="p-0 p-sm-4 px-xl-0">
                                    <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                            @for($i = 0; $i < count(setting('slide')); $i++)
                                                <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="{{$i}}" class="active" aria-current="true" aria-label="Slide {{$i}}"></button>
                                            @endfor
                                        </div>
                                        <!-- end carouselIndicators -->
                                        <div class="carousel-inner">
                                            @foreach(setting('slide') as $row)
                                            @if ($loop->first)
                                                <div class="carousel-item active">
                                            @else
                                                <div class="carousel-item ">
                                            @endif
                                            
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-left text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">
                                                        {{$row['review']}}
                                                    </h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-start">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ $row['avatar'] }}" class="avatar-md img-fluid rounded-circle" alt="...">
                                                            </div>
                                                            <div class="flex-grow-1 ms-3 mb-4">
                                                                <h5 class="font-size-18 text-white">{{$row['fullname']}}
                                                                </h5>
                                                                <p class="mb-0 text-white-50">{{$row['job']}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           

                                            
                                        <!-- end carousel-inner -->
                                    </div>
                                    <!-- end review carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        paceOptions = {
            eventLag:false
        };
    </script>
    {!! HTML::script('assets/js/vendor.js') !!}
    <script src="{{ url('assets/js/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/js/feather-icons/feather.min.js') }}"></script>
    <script src="{{ url('assets/js/pace-js/pace.min.js') }}"></script>
    {!! HTML::script('assets/js/as/app.js') !!}
    {!! HTML::script('assets/js/as/btn.js') !!}
    {!! HTML::script('assets/js/pages/pass-addon.init.js') !!}
    @yield('scripts')
    @hook('auth:scripts')
</body>
</html>
