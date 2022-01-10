@component('mail::message')

@if(setting('email-template.password.greeting'))
    {{setting('email-template.password.greeting')}}
@else
    # @lang('Hello!')
@endif

@if(setting('email-template.password.header'))
    {{setting('email-template.password.header')}}
@else
    @lang('You are receiving this email because we received a password reset request for your account.')
@endif

@component('mail::button', ['url' => route('password.reset', ['token' => $token])])
    @lang('Reset Password')
@endcomponent

@lang('This password reset link will expire in :count minutes.', [
    'count' => config('auth.passwords.users.expire')
])
@lang('If you did not request a password reset, no further action is required.')

@if(setting('email-template.password.footer'))
    {{setting('email-template.password.footer')}}
@else
    @lang('Regards'),<br>
@endif

{{ setting('app_name') }}

@endcomponent
