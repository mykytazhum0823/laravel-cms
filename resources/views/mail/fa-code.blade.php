@component('mail::message')

@if(setting('email-template.twofa.greeting'))
    {{setting('email-template.twofa.greeting')}}
@else
    # @lang('Hello!')
@endif

@if(setting('email-template.twofa.header'))
    {{setting('email-template.twofa.header')}}
@else
    @lang('You are receiving this email because we received a password reset request for your account.')
@endif

{{$number}}

@if(setting('email-template.twofa.footer'))
    {{setting('email-template.twofa.footer')}}
@else
    @lang('Regards'),<br>
@endif

{{ setting('app_name') }}

@endcomponent
