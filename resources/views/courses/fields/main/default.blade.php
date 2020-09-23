<p class="text-gray-700 text-base">{!! $course->excerpt !!}</p>

<div class="pt-4 mt-1">
    <span
        class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800 mr-2 mb-1">#{{ $course->type }}</span>
    <span
        class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800 mr-2 mb-1">#{{ $course->focus }}</span>

    @if ($course->is_online == 1)
    <span
        class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-800 mr-2 mb-1">#online</span>
    @endif

</div>

@if ($course->description)
<hr class="my-5">

<p class="text-gray-700 text-base">{!! $course->description !!}</p>

@endif

@if ($course->teachers->count() > 0)
<hr class="my-5">

<h3 class="font-semibold text-sm uppercase text-gray-700 block my-2">Teachers</h3>
<div class="flex items-center">
    @forelse ($course->teachers as $teacher)
    <div class="inline-flex mr-5 items-center">
        <img class="w-10 h-10 rounded-full mr-4 border border-3 border-gray-400" src="{{ asset($teacher->avatar) }}"
            alt="{{ $teacher->firstname }}">
        <div class="text-sm">
            <p class="text-gray-900 leading-none">{{ $teacher->firstname }} {{ $teacher->lastname }}</p>
        </div>
    </div>
    @empty

    @endforelse
</div>
@endif

@if ($course->teaser_video_2)
<br>
<hr class="my-5">
<br>
{!! $course->teaser_video_2 !!}
<br>
@endif

@if ($course->teaser_video_3)
<br>
{!! $course->teaser_video_3 !!}
@endif