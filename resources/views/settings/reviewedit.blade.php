@extends('layouts.app')

@section('page-title', __('Add User'))
@section('page-heading', __('Create New User'))

@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('users.index') }}">@lang('Review')</a>
    </li>
    <li class="breadcrumb-item active">
        @lang('Create')
    </li>
@stop

@section('content')

@include('partials.messages')

<form action="{{ route('settings.reviews.store') }}"
    method="POST"
    id="review-form"
    enctype="multipart/form-data">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="card-title">
                        @lang('Review Edit')
                    </h5>
                    @include('settings.partials.review-avatar')
                </div>
                <div class="col-md-9">
                    @if(isset($data))
                        <input type="hidden" name="id" value={{$data['id']}}>
                        <input type="hidden" name="avatar" value={{$data['avatar']}}>
                    @endif
                    <div class="form-group">
                        <label for="full_name">@lang('Full Name')</label>
                        @if(isset($data))
                            <input class="form-control input-solid" id="full_name" name="fullname" 
                            aria-invalid="false" value={{$data['fullname']}}>
                        @else
                            <input class="form-control input-solid" id="full_name" name="fullname" 
                            aria-invalid="false" >
                        @endif   
                        
                    </div>
                    <div class="form-group">
                        <label for="job">@lang('Job')</label>
                        @if(isset($data))
                            <input class="form-control input-solid" id="job" name="job" aria-invalid="false" value="{{$data['job']}}">
                        @else
                            <input class="form-control input-solid" id="job" name="job" aria-invalid="false" >
                        @endif    
                    </div>
                    <div class="form-group">
                        <label for="review">@lang('Review')</label>
                        @if(isset($data))
                            <textarea class="form-control input-solid" name="review" rows="5" >{{$data['review']}}</textarea>
                        @else
                            <textarea class="form-control input-solid" name="review" rows="5"></textarea>
                        @endif
                    <div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary add-btn">
                @lang('Create Review')
            </button>
        </div>
    </div>
</form>

<br>
@stop

@section('scripts')
    {!! HTML::script('assets/js/as/setting-review-edit.js') !!}
    {!! JsValidator::formRequest('Vanguard\Http\Requests\User\CreateUserRequest', '#user-form') !!}
@stop