@component('mail::message')

@if(setting('email-template.login.greeting'))
    {{setting('email-template.login.greeting')}}
@else
    # @lang('Hello!')

    @lang('New user was just registered on :app website.', ['app' => setting('app_name')])
@endif

@if(setting('email-template.login.header'))
    {{setting('email-template.login.header')}}
@else
    @lang('To view the user details just visit the link below.')
@endif


@component('mail::button', ['url' => route('users.show', $user)])
    @lang('View User')
@endcomponent

@if(setting('email-template.login.footer'))
    {{setting('email-template.login.footer')}}
@else
    @lang('Regards'),<br>
@endif

{{ setting('app_name') }}


@endcomponent
