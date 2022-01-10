@extends('layouts.auth')

@section('page-title', __('Sign Up'))

@if (setting('registration.captcha.enabled'))
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endif

@section('content')
    <div class="auth-full-page-content d-flex p-sm-5 p-4">
        <div class="w-100">
            <div class="d-flex flex-column h-100">
                <div class="mb-4 mb-md-5 text-center">
                    <a href="<?= url("/") ?>" class="d-block auth-logo">
                        <img src="{{ url(setting('logo')) }}" alt="" height="28"> <span class="logo-txt">Minia</span>
                    </a>
                </div>
                <div class="auth-content my-auto">
                    <div class="text-center">
                        <h5 class="mb-0">Register Account</h5>
                        <p class="text-muted mt-2">Get your free Minia account now.</p>
                    </div>
                    @include('partials/messages')

                    <form class="needs-validation custom-form mt-4 pt-2" action="<?= url('register') ?>" method="post" id="registration-form"  autocomplete="off">
                        <input type="hidden" value="<?= csrf_token() ?>" name="_token">
                        <div class="mb-3">
                            <label for="email" class="form-label">@lang('Email')</label>
                            <input type="email" class="form-control" id="email" placeholder="@lang('Enter email')" required name="email" value="">
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">@lang('Username')</label>
                            <input type="text" class="form-control" id="username" placeholder="@lang('Enter username')" required name="username" value="">
                        </div>

                        <div class="mb-3">
                            <label for="first_name" class="form-label">@lang('First Name')</label>
                            <input type="text" class="form-control" id="first_name" placeholder="@lang('Enter first name')" required name="first_name" value="">
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">@lang('Last Name')</label>
                            <input type="text" class="form-control" id="last_name" placeholder="@lang('Enter last name')" required name="last_name" value="">
                        </div>

                        <div class="mb-3">
                            <label for="company" class="form-label">@lang('Company')</label>
                            <input type="text" class="form-control" id="company" placeholder="@lang('Enter company')" required name="company" value="">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">@lang('Phone')</label>
                            <input type="text" class="form-control" id="phone" placeholder="@lang('Enter phone')" required name="phone" value="">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">@lang('Password')</label>
                            <input type="password" class="form-control" id="password" placeholder="@lang('Enter password')" required name="password" value="">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="userpassword">@lang('Confirm Password')</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="@lang('Enter confirm password')" name="password_confirmation" value="">
                        </div>
                        
                        <div class="mb-4 custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="tos" id="tos" value="1"/>
                            <label for="tos" class="mb-0 custom-control-label font-weight-normal">@lang('By registering you agree to the Minia') <a href="#" class="text-primary">@lang('Terms of Use')</a></label>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary w-100 waves-effect waves-light signbtn" type="submit">@lang('Register')</button>
                        </div>
                    </form>

                    <div class="mt-5 text-center">
                        <p class="text-muted mb-0">@lang('Already have an account ?') <a href="<?= url("login") ?>" class="text-primary fw-semibold"> @lang('Login') </a> </p>
                    </div>
                </div>
                <div class="mt-4 mt-md-5 text-center">
                    <p class="mb-0 copyright">© <script>
                            document.write(new Date().getFullYear())
                        </script> {{setting('copyright')? setting('copyright'):  'Minia . Crafted with by Themesbrand'}}
                        </p>
                </div>
            </div>
        </div>
    </div>
 

@stop

@section('scripts')
    {!! JsValidator::formRequest('Vanguard\Http\Requests\Auth\RegisterRequest', '#registration-form') !!}
@stop
