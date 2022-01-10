<tr>
    <td class="header">
        <a href="{{ $url }}">
            {{ $slot }}
        </a>
    </td>
</tr>
<style>
    .header{
        border-top: 5px solid {{$borderColor}} !important;
    }
    table.wrapper{
        background-color: {{$backColor}};
    }
</style>