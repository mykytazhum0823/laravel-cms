<tr>

    <td style="width: 40px;">
        <!-- <a href="#"> -->
            <img
                class="rounded-circle img-responsive"
                width="40"
                src="{{$user['avatar'] }}"
                alt="">
        <!-- </a> -->
    </td>
    <td class="align-middle">
        <!-- <a href="#"> -->
            {{ $user['fullname'] }}
        <!-- </a> -->
    </td>
    <td class="align-middle">{{ $user['job'] }}</td>
    <td class="align-middle">{{ $user['review'] }}</td>
    
    <td class="text-center align-middle">

        <a href="{{ route('settings.reviews.edit', $user) }}"
           class="btn btn-icon edit"
           title="@lang('Edit Review')"
           data-toggle="tooltip" data-placement="top">
            <i class="fas fa-edit"></i>
        </a>

        <a href="{{ route('settings.reviews.delete', $user) }}"
           class="btn btn-icon"
           title="@lang('Delete Review')"
           data-toggle="tooltip"
           data-placement="top"
           data-method="DELETE"
           data-confirm-title="@lang('Please Confirm')"
           data-confirm-text="@lang('Are you sure that you want to delete this review?')"
           data-confirm-delete="@lang('Yes, delete this!')">
            <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>