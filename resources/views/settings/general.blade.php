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

{!! Form::open(['route' => 'settings.general.update', 'id' => 'general-settings-form']) !!}

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">@lang('Name')</label>
                    <input type="text" class="form-control input-solid" id="app_name"
                           name="app_name" value="{{ setting('app_name') }}">
                </div>
                <button type="submit" class="btn btn-primary update-btn">
                    @lang('Update')
                </button>
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
{!! Form::open(['route' => 'settings.general.copyright', 'id' => 'general-settings-copyright-form']) !!}
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="copyright">@lang('Copyright')</label>
                    <input type="text" class="form-control input-solid" id="copyright"
                           name="copyright" value="{{ setting('copyright')? setting('copyright'): __('Crafted with by Themesbrand') }}">
                </div>
                <button type="submit" class="btn btn-primary update-btn">
                    @lang('Update')
                </button>
            </div>
        </div>
    </div>
</div>
{{ Form::close() }}
{!! Form::open(['route' => 'settings.general.color', 'id' => 'general-settings-color-form']) !!}
    @include('settings.partials.color')
{{ Form::close() }}
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('Change Image & Text')</h4>
                <!-- <p class="card-title-desc"></p> -->
            </div><!-- end card header -->

            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @if(isset($imagetab))
                            <a class="nav-link mb-2 {{($imagetab == 'v-pills-logo')? 'active':''}}" id="v-pills-logo-tab" data-bs-toggle="pill" href="#v-pills-logo" role="tab" aria-controls="v-pills-logo" aria-selected="true">@lang('Logo')</a>
                            <a class="nav-link mb-2 {{($imagetab == 'v-pills-favicon')? 'active':''}}" id="v-pills-favicon-tab" data-bs-toggle="pill" href="#v-pills-favicon" role="tab" aria-controls="v-pills-favicon" aria-selected="false">@lang('Favicon')</a>
                            <a class="nav-link mb-2 {{($imagetab == 'v-pills-unlimited')? 'active':''}}" id="v-pills-unlimited-tab" data-bs-toggle="pill" href="#v-pills-unlimited" role="tab" aria-controls="v-pills-unlimited" aria-selected="false">@lang('Unlimited Access Setting')</a>
                            <a class="nav-link {{($imagetab == 'v-pills-login')? 'active':''}}" id="v-pills-login-tab" data-bs-toggle="pill" href="#v-pills-login" role="tab" aria-controls="v-pills-login" aria-selected="false">@lang('Login/Registeration Screen Image')</a>
                            @else
                            <a class="nav-link mb-2 active" id="v-pills-logo-tab" data-bs-toggle="pill" href="#v-pills-logo" role="tab" aria-controls="v-pills-logo" aria-selected="true">@lang('Logo')</a>
                            <a class="nav-link mb-2" id="v-pills-favicon-tab" data-bs-toggle="pill" href="#v-pills-favicon" role="tab" aria-controls="v-pills-favicon" aria-selected="false">@lang('Favicon')</a>
                            <a class="nav-link mb-2" id="v-pills-unlimited-tab" data-bs-toggle="pill" href="#v-pills-unlimited" role="tab" aria-controls="v-pills-unlimited" aria-selected="false">@lang('Unlimited Access Setting')</a>
                            <a class="nav-link" id="v-pills-login-tab" data-bs-toggle="pill" href="#v-pills-login" role="tab" aria-controls="v-pills-login" aria-selected="false">@lang('Login/Registeration Screen Image')</a>
                            @endif
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-9">
                        <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                            @if(isset($imagetab))
                            <div class="tab-pane fade {{($imagetab == 'v-pills-logo')? 'show active':''}}" id="v-pills-logo" role="tabpanel" aria-labelledby="v-pills-logo-tab">
                            @else
                            <div class="tab-pane fade show active" id="v-pills-logo" role="tabpanel" aria-labelledby="v-pills-logo-tab">
                            @endif
           
                                <form action="{{ route('settings.general.logo.update') }}"
                                    method="POST"
                                    id="avatar-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="logo_tab" class="change-image-tab" value="v-pills-logo">
                                    @include('settings.partials.logo', ['updateUrl' => route('settings.general.logo.delete')])
                                </form> 
                            </div> 
                            @if(isset($imagetab))
                            <div class="tab-pane fade {{($imagetab == 'v-pills-favicon')? 'show active':''}}" id="v-pills-favicon" role="tabpanel" aria-labelledby="v-pills-favicon-tab">
                            @else
                            <div class="tab-pane fade" id="v-pills-favicon" role="tabpanel" aria-labelledby="v-pills-favicon-tab">
                            @endif  
                                
                                <form action="{{ route('settings.general.favicon.update') }}"
                                    method="POST"
                                    id="favicon-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="favicon_tab" class="change-image-tab" value="">
                                    @include('settings.partials.favicon', ['updateUrl' => route('settings.general.favicon.delete')])
                                </form>  
                            </div> 
                            @if(isset($imagetab))
                            <div class="tab-pane fade {{($imagetab == 'v-pills-unlimited')? 'show active':''}}"" id="v-pills-unlimited" role="tabpanel" aria-labelledby="v-pills-unlimited-tab">
                            @else
                            <div class="tab-pane fade" id="v-pills-unlimited" role="tabpanel" aria-labelledby="v-pills-unlimited-tab">
                            @endif          
                                
                                <form action="{{ route('settings.general.unlimited.update') }}"
                                    method="POST"
                                    id="unlimited-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="unlimited_tab" class="change-image-tab" value="">
                                    @include('settings.partials.unlimited', ['updateUrl' => route('settings.general.unlimited.delete')])
                                </form>
                            </div>
                            @if(isset($imagetab))
                            <div class="tab-pane fade {{($imagetab == 'v-pills-login')? 'show active':''}}" id="v-pills-login" role="tabpanel" aria-labelledby="v-pills-login-tab">
                            @else
                            <div class="tab-pane fade" id="v-pills-login" role="tabpanel" aria-labelledby="v-pills-login-tab">
                            @endif
                                
                                <form action="{{ route('settings.general.logimage.update') }}"
                                    method="POST"
                                    id="logImage-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="login_tab" class="change-image-tab" value="">
                                    @include('settings.partials.loginimage', ['updateUrl' => route('settings.general.logimage.delete')])
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')
    {!! HTML::script('assets/js/as/btn.js') !!}
    {!! HTML::script('assets/js/as/setting-logo.js') !!}
    {!! HTML::script('assets/js/as/setting-favicon.js') !!}
    {!! HTML::script('assets/js/as/setting-unlimited.js') !!}
    {!! HTML::script('assets/js/as/setting-login.js') !!}
    <script>
        $(document).ready(function(){
            $('a[data-bs-toggle="pill"]').on('show.bs.tab', function(e) {
                var val_href = $(e.target).attr('href').substr(1);
                if(val_href == 'v-pills-header' || val_href == 'v-pills-sidebar' || val_href == 'v-pills-elements')
                    $('#color_hash').val(val_href);
                else
                    $('.change-image-tab').val(val_href);
            });
            $('.table-responsive').responsiveTable({
                addDisplayAllBtn: 'btn btn-secondary'
            });
            $('.table-rep-plugin .btn-group').hide();
        });

                
    </script>
@stop
