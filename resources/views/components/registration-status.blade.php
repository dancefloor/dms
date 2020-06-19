<div class="inline-flex items-center px-2 py-1 rounded-full text-xs {{ $color }}">
    @include('icons.'.$icon, ['style'=>'w-4'])
    <span class="ml-2">
        {{ $status }}
    </span>
</div>