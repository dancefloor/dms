<!-- Promo Video Field -->
<div class="flex justify-center my-10">
    @if ($course->teaser_video_1 && $course->teaser_video_2 && $course->teaser_video_3)
    <div class="w-full flex flex-wrap -mx-3">
        <div class="w-full md:w-1/3 px-3">
            <div class="rounded-lg overflow-hidden">{!! $course->teaser_video_1 !!}</div>
        </div>
        <div class="w-full md:w-1/3 px-3 rounded-lg overflow-hidden">{!! $course->teaser_video_2 !!}</div>
        <div class="w-full md:w-1/3 px-3 rounded-lg overflow-hidden">{!! $course->teaser_video_3 !!}</div>
    </div>
    @elseif($course->teaser_video_1 && $course->teaser_video_2)
    <div class="w-full flex flex-wrap -mx-3">
        <div class="w-full md:w-1/2 px-3 rounded-lg overflow-hidden">
            <div class="rounded-lg overflow-hidden">{!! $course->teaser_video_1 !!}</div>
        </div>
        <div class="w-full md:w-1/2 px-3 rounded-lg overflow-hidden">
            <div class="rounded-lg overflow-hidden">{!! $course->teaser_video_2 !!}</div>
        </div>
    </div>
    @else
    <div>{!! $course->teaser_video_1 !!}</div>
    @endif
</div>

<br>
<!-- Description Field -->
@if ($course->description)
<div class="flex justify-center my-5">
    <div class="max-w-3xl border rounded-lg my-5 p-10 shadow">
        <h3 class="text-sm uppercase text-gray-600 text-center mb-5">Description</h3>
        <p>{{ Illuminate\Mail\Markdown::parse($course->description) }}</p>
    </div>
</div>
@endif