@extends('layouts.auth')

@section('page-title', trans('Two-Factor Authentication'))

@section('content')

<div class="auth-full-page-content d-flex p-sm-5 p-4">
    <div class="w-100">
        <div class="d-flex flex-column h-100">
            <div class="text-center">
                <img src="{{ url('assets/img/vanguard-logo.png') }}" alt="{{ setting('app_name') }}" height="50">
            </div>

            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title text-center mt-4 text-uppercase">
                        @lang('Two-Factor Authentication')
                    </h5>

                    <div class="p-4">
                        @include('partials/messages')

                        <form role="form" action="<?= route('auth.token.validate') ?>" method="POST" autocomplete="off">
                        <input type="hidden" value="<?= csrf_token() ?>" name="_token">

                        <div class="form-group">
                            <label for="password" class="sr-only">@lang('Token')</label>
                            <input type="text"
                                name="token"
                                id="token"
                                class="form-control input-solid"
                                placeholder="@lang('Authy 2FA Token')">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary update-btn btn-lg btn-block" id="btn-reset-password">
                                @lang('Validate')
                            </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop
