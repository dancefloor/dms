<header class="flex justify-center mt-10">
    <div class="text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-5 leading-6">{{ $course->name }}</h1>
        <h3 class="text-2xl font-bold text-gray-600">
            {{ $course->tagline }}
            @if (now() < $course->end_date)
                @if ($course->is_online == 1)
                <span class="text-red-700 italic">Live</span>
                @endif
                @endif

        </h3>
    </div>
</header>

<div class="flex justify-center mt-5 mb-10">
    @if ($course->teaser_video_1)
    {!! $course->teaser_video_1 !!}
    @else
    @if ($course->thumbnail)
    <img src="{{ asset('images/' . $course->thumbnail) }}" alt="" class="rounded-lg">
    @else
    <img src="{{ asset('images/coco-fred.jpg') }}" alt="" class="rounded-lg">
    @endif
    @endif
</div>