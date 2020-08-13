<div class="text-gray-600 text-sm mb-1">
    <span class="inline-flex items-center">
        @include('icons.time', ['style' => 'w-4 mr-2'])
        @foreach ($dailySchedule as $item)
        {{ $item['day'] }} {{ $item['start_time'] }} {{ $item['end_time'] }} <br>
        @endforeach
    </span>
</div>