<!-- Promo Video Field -->
@if($course->teaser_video_1)
<h2 class="uppercase mt-20 my-3 text-3xl text-center text-gray-700 font-bold">Videos</h2>
<div class="flex justify-center mx-3">
    <div class="w-full md:w-4/5">

        <div class="rounded-lg overflow-hidden shadow-lg mb-40">{!! $course->displayVideo(1) !!}</div>

        @if($course->teaser_video_2)
        <div class="rounded-lg overflow-hidden shadow-lg mb-40">{!! $course->displayVideo(2) !!}</div>
        @endif

        @if($course->teaser_video_3)
        <div class="rounded-lg overflow-hidden shadow-lg mb-40">{!! $course->displayVideo(3) !!}</div>
        @endif
    </div>
</div>
@endif