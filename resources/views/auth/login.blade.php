@extends('layouts.auth')

@section('page-title', trans('Login'))

@section('content')

    <div class="auth-full-page-content d-flex p-sm-5 p-4"  id="login">
        <div class="w-100">
            <div class="d-flex flex-column h-100">
                <div class="mb-4 mb-md-5 text-center">
                    <a href="<?= url("/") ?>" class="d-block auth-logo">
                        <img src="{{ url(setting('logo')) }}" alt="" height="28"> <span class="logo-txt">Minia</span>
                    </a>
                </div>
                <div class="auth-content my-auto">
                    <div class="text-center">
                        <h5 class="mb-0">@lang('Welcome Back') !</h5>
                        <p class="text-muted mt-2">@lang('Sign in to continue to Minia.')</p>
                    </div>
                    @include('partials.messages')
                    <form class="custom-form mt-4 pt-2" action="<?= url('login') ?>" method="POST" id="login-form">
                        <input type="hidden" value="<?= csrf_token() ?>" name="_token">

                        @if (Request::has('to'))
                            <input type="hidden" value="{{ Request::get('to') }}" name="to">
                        @endif
                        
                        <div class="mb-3">
                            <label class="form-label" for="username">@lang('Email or Username')</label>
                            <input type="text" class="form-control" id="username" placeholder="@lang('Enter email or username')" name="username" value="admin">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <label class="form-label" for="password">@lang('Password')</label>
                                </div>
                                @if (setting('forgot_password'))
                                <div class="flex-shrink-0">
                                    <div class="">
                                        <a href="<?= route('password.request') ?>" class="text-muted">Forgot password?</a>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="app-search">
                                <div class="position-relative">
                                    <input type="password"  class="form-control input-solid input-search"
                                        name="password"
                                        value="{{ Request::get('search') }}"
                                        placeholder="@lang('Search for Action')"
                                        aria-label="Password" aria-describedby="password-addon">
                                       
                                        <button class="btn btn-light ms-0" type="button" id="password-addon">
                                            <i class="mdi mdi-eye-outline"></i>
                                        </button>
                                       
                                </div>
                            </div>

                        </div>
                        @if (setting('remember_me'))
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  name="remember"  id="remember"  value="1">
                                    <label class="form-check-label" for="remember-check">
                                        @lang('Remember me?')
                                    </label>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="mb-3">
                            <button class="btn btn-primary w-100 waves-effect waves-light signbtn"  id="btn-login" type="submit">@lang('Log In')</button>
                        </div>
                    </form>

                   

                    <div class="mt-5 text-center">
                        <p class="text-muted mb-0">@lang("Dont have an account ?") <a href="<?= url("register") ?>" class="text-primary fw-semibold"> @lang('Signup now') </a> </p>
                    </div>
                </div>
                <div class="mt-4 mt-md-5 text-center">
                    <p class="mb-0 copyright" >© <script>
                            document.write(new Date().getFullYear())
                        </script> 
                        {{setting('copyright')? setting('copyright'):  'Minia . Crafted with by Themesbrand'}}
                    </p>
                </div>
            </div>
        </div>
    </div>


@stop

@section('scripts')
    {!! HTML::script('assets/js/as/login.js') !!}
    {!! JsValidator::formRequest('Vanguard\Http\Requests\Auth\LoginRequest', '#login-form') !!}
@stop
