@extends('layouts.auth')

@section('page-title', __('Reset Password'))

@section('content')

<div class="auth-full-page-content d-flex p-sm-5 p-4">
    <div class="w-100">
        <div class="d-flex flex-column h-100">
            <div class="mb-4 mb-md-5 text-center">
                <a href="<?= url("/") ?>" class="d-block auth-logo">
                    <img src="{{ url(setting('logo')) }}" alt="" height="28"> <span class="logo-txt">@lang('Minia')</span>
                </a>
            </div>
            <div class="auth-content my-auto">
                <div class="text-center">
                    <h5 class="mb-0">@lang('Reset Password')</h5>
                    <p class="text-muted mt-2">@lang('Reset Password with Minia.')</p>
                </div>

                @include('partials.messages')

                <form class="custom-form mt-4"  action="<?= route('password.email') ?>" method="POST" id="remind-password-form" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label class="form-label">@lang('Email')</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="@lang('Enter email')">
                    </div>
                    <div class="mb-3 mt-4">
                        <button class="btn btn-primary w-100 waves-effect waves-light signbtn" type='submit' name='submit' value='Submit'>@lang('Reset')</button>
                    </div>
                </form>

                <div class="mt-5 text-center">
                    <p class="text-muted mb-0">@lang('Remember It') ? <a href="<?= url("login") ?>" class="text-primary fw-semibold"> @lang('Sign In') </a> </p>
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
    {!! JsValidator::formRequest('Vanguard\Http\Requests\Auth\PasswordRemindRequest', '#remind-password-form') !!}
@stop
