@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url'), 'borderColor' => $borderColor??'#1c8966', 'backColor' => $backColor??'#F8FAFC' ])
            <img src="{{ url('assets/img/vanguard-logo.png') }}" alt="{{ config('app.name') }}" height="50">
        @endcomponent
    @endslot
    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
