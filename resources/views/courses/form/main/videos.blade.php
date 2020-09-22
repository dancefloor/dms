<h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 my-6 text-center">Videos</h3>
<!-- Promo video 1 Field -->
<div class="flex flex-wrap items-top -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="teaser_video_1" class="text-xs uppercase text-gray-800 font-semibold ml-1">1st video</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <textarea name="teaser_video_1" id="teaser_video_1" cols="30" rows="3" placeholder="Main promo video"
            class="df-textarea w-full @error('teaser_video_1') error-field @enderror">{{ $course->teaser_video_1 ?? old('value') }}</textarea>
        <p class="text-sm text-gray-600 italic">Copy the embed code from YouTube/Facebook and paste it here</p>
        @error('teaser_video_1')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">

<!-- Promo video 2 Field -->
<div class="flex flex-wrap items-top -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="teaser_video_2" class="text-xs uppercase text-gray-800 font-semibold ml-1">2nd video</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <textarea name="teaser_video_2" id="teaser_video_2" cols="30" rows="3" placeholder="Second promo video"
            class="df-textarea w-full @error('teaser_video_2') error-field @enderror">{{ $course->teaser_video_2 ?? old('value') }}</textarea>
        <p class="text-sm text-gray-600 italic">Copy the embed code from YouTube/Facebook and paste it here</p>
        @error('teaser_video_2')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">

<!-- Promo video 3 Field -->
<div class="flex flex-wrap items-top -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="teaser_video_3" class="text-xs uppercase text-gray-800 font-semibold ml-1">3rd video</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <textarea name="teaser_video_3" id="teaser_video_3" cols="30" rows="3" placeholder="Third promo video"
            class="df-textarea w-full @error('teaser_video_3') error-field @enderror">{{ $course->teaser_video_3 ?? old('value') }}</textarea>
        <p class="text-sm text-gray-600 italic">Copy the embed code from YouTube/Facebook and paste it here</p>
        @error('teaser_video_3')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">