@extends('layouts.app')

@section('page-title', __('Users'))
@section('page-heading', __('Users'))

@section('breadcrumbs')
    <li class="breadcrumb-item active">
        @lang('Users')
    </li>
@stop

@section('content')

@include('partials.messages')

<div class="row my-3 flex-md-row flex-column-reverse">
    <div class="col-md-12 mt-2">
        <div class="float-right add-btn">
            <a href="{{ route('settings.reviews.create') }}" class="btn btn-primary btn-rounded float-right">
                <i class="fas fa-plus mr-2"></i>
                @lang('Add Review')
            </a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">

        <div class="table-responsive" id="users-table-wrapper">
            <table class="table table-borderless table-striped">
                <thead>
                <tr>
                    <th class="min-width-80">@lang('Avatar')</th>
                    <th class="min-width-80">@lang('Full Name')</th>
                    <th class="min-width-80">@lang('Job')</th>
                    <th class="min-width-200">@lang('Review')</th>
                    <th class="text-center min-width-150">@lang('Action')</th>
                </tr>
                </thead>
                <tbody>
                    @if (setting('slide'))
                        @foreach (setting('slide') as $user)
                            @include('settings.partials.row')
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5"><em>@lang('No reviews found.')</em></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop

@section('scripts')
    <script>
        $("#status").change(function () {
            $("#users-form").submit();
        });
    </script>
@stop
