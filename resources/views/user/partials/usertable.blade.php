@if (count($users))
    @foreach ($users as $user)
        @include('user.partials.row')
    @endforeach
    <tr class="tr-pagination">
        <td colspan="3" align="center">
        {!! $users->links() !!}
        </td>
    </tr>

@else
    <tr>
        <td colspan="7"><em>@lang('No records found.')</em></td>
    </tr>
@endif