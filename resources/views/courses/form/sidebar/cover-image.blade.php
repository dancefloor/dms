<!-- Thumbnail Field -->
<div class="flex flex-wrap items-center -mx-3 my-5 py-1">
    <div class="w-full px-4">
        @isset($course->thumbnail)
        <img src="{{ asset($course->thumbnail) }}" alt="{{ $course->name}}">
        @endisset
        <input type="file" name="thumbnail" id="thumbnail" @isset($course->cover_image)
        value="{{ $course->thumbnail }}" @endisset >
        @error('thumbnail')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">