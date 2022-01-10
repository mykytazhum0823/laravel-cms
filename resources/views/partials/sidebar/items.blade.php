@if ($item && $item->authorize(auth()->user()))
<li class="{{ Request::is($item->getActivePath()) ? 'mm-active' : '' }}">
    <a href="{{ $item->getHref() }}"
       @if($item->isDropdown())
       class="has-arrow"
        @endif
    >
        @if ($item->getIcon())
            <i class="{{ $item->getIcon() }}"></i>
        @endif

        <span data-key="t-{{ $item->getTitle() }}">{{ $item->getTitle() }}</span>
    </a>

    @if ($item->isDropdown())
        <ul class="sub-menu mm-collapse {{ Request::is($item->getExpandedPath()) ?  'mm-show' : '' }} "
            id="{{ str_replace('#', '', $item->getHref()) }}">
            @foreach ($item->children() as $child)
                @include('partials.sidebar.items', ['item' => $child])
            @endforeach
        </ul>
    @endif
</li>
@endif
