@foreach ($activities as $activity)
    <tr>
        @if (isset($adminView))
            <td>
                @if (isset($user))
                    {{ $activity->user->present()->nameOrEmail }}
                @else
                    <a href="{{ route('activity.user', $activity->user_id) }}"
                        data-toggle="tooltip" title="@lang('View Activity Log')">
                        {{ $activity->user->present()->nameOrEmail }}
                    </a>
                @endif
            </td>
        @endif
        <td>{{ $activity->ip_address }}</td>
        <td>{{ $activity->description }}</td>
        <td>{{ $activity->created_at->format(config('app.date_time_format')) }}</td>
        <td class="text-center">
            <a tabindex="0" role="button" class="btn btn-icon"
                data-trigger="focus"
                data-placement="left"
                data-toggle="popover"
                data-bs-trigger="focus"
                title="@lang('User Agent')"
                data-bs-content="{{ $activity->user_agent }}">
                <i class="fas fa-info-circle"></i>
            </a>
        </td>
    </tr>
@endforeach
<tr class="tr-pagination">
    <td colspan="3" align="center">
        {!! $activities->links() !!}
    </td>
</tr>
