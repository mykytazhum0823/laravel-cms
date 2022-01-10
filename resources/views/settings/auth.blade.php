@extends('layouts.app')

@section('page-title', __('Authentication Settings'))
@section('page-heading', __('Authentication'))

@section('breadcrumbs')
    <li class="breadcrumb-item text-muted">
        @lang('Settings')
    </li>
    <li class="breadcrumb-item active">
        @lang('Authentication')
    </li>
@stop

@section('content')

@include('partials.messages')

<!-- Nav tabs -->
<ul class="nav nav-pills mb-4 mt-2" id="pills-tab" role="tablist">
    @if(isset($auth_tab))
    <li class="nav-item">
        <a href="#auth"
           class="nav-link  {{($auth_tab == 'auth')? 'active':''}}"
           id="pills-home-tab"
           data-bs-toggle="pill"
           aria-controls="pills-home"
           aria-selected="true">
            <i class="fa fa-lock"></i>
            @lang('Authentication')
        </a>
    </li>
    <li class="nav-item">
        <a href="#registration"
           class="nav-link  {{($auth_tab == 'registration')? 'active':''}}"
           id="pills-home-tab"
           data-bs-toggle="pill"
           aria-controls="pills-home"
           aria-selected="true">
            <i class="fa fa-user-plus"></i>
            @lang('Registration')
        </a>
    </li>
    @else
    <li class="nav-item">
        <a href="#auth"
           class="nav-link active"
           id="pills-home-tab"
           data-bs-toggle="pill"
           aria-controls="pills-home"
           aria-selected="true">
            <i class="fa fa-lock"></i>
            @lang('Authentication')
        </a>
    </li>
    <li class="nav-item">
        <a href="#registration"
           class="nav-link"
           id="pills-home-tab"
           data-bs-toggle="pill"
           aria-controls="pills-home"
           aria-selected="true">
            <i class="fa fa-user-plus"></i>
            @lang('Registration')
        </a>
    </li>
    @endif
    
</ul>

<!-- Tab panes -->
<div class="tab-content">
    @if(isset($auth_tab))
    <div role="tabpanel" class="tab-pane {{($auth_tab == 'auth')? 'active':''}}" id="auth">
    @else
    <div role="tabpanel" class="tab-pane active" id="auth">
    @endif
        <div class="row">
            <div class="col-md-6">
                @include('settings.partials.auth')
                @include('settings.partials.two-factor')
            </div>
            <div class="col-md-6">
                @include('settings.partials.throttling')
            </div>
        </div>
    </div>
    @if(isset($auth_tab))
    <div role="tabpanel" class="tab-pane {{($auth_tab == 'registration')? 'active': ''}}" id="registration">
    @else
    <div role="tabpanel" class="tab-pane" id="registration">
    @endif
        <div class="row">
            <div class="col-md-6">
                @include('settings.partials.registration')
            </div>
            <div class="col-md-6">
                @include('settings.partials.recaptcha')
            </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
    <script>
        $(document).ready(function(){
            $('.nav-item').on('click', function(e) {
                var val_href = $(e.target).attr('href').substr(1);
                console.log(val_href);
                $('.auth-tab').val(val_href);
            });

        });
    </script>
@stop