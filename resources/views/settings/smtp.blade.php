@extends('layouts.app')

@section('page-title', __('General Settings'))
@section('page-heading', __('General Settings'))

@section('breadcrumbs')
    <li class="breadcrumb-item text-muted">
        @lang('Settings')
    </li>
    <li class="breadcrumb-item active">
        @lang('General')
    </li>
@stop

@section('content')

@include('partials.messages')

{!! Form::open(['route' => 'settings.general.smtp', 'id' => 'general-settings-smtp-form']) !!}

    @include('settings.partials.email')

{{ Form::close() }}

@stop

@section('scripts')
    {!! HTML::script('assets/js/as/btn.js') !!}
@stop