<div class="inline-flex text-xs items-center py-1 px-2 rounded-full {{ $color }}">
    @include('icons.'. $icon )
    @if ( $status == 'open' )
    <span class="ml-2 capitalize">Pending</span>
    @else
    <span class="ml-2 capitalize">{{ $status }}</span>
    @endif
</div>