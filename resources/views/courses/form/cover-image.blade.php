<div class="my-5">
    @isset($course->thumbnail)
    <img src="{{ asset($course->thumbnail) }}" alt="{{ $course->name}}">
    @endisset
    <label for="thumbnail">Cover Image</label>
    <input type="file" name="thumbnail" id="thumbnail" @isset($course->cover_image)
    value="{{ $course->thumbnail }}" @endisset>
    {{-- <label
        class="w-full inline-flex justify-center items-center px-3 py-2 bg-gray-300 text-gray-800 rounded hover:shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-gray-700 hover:text-white">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
            <path
                d="M18.072 16.278c-1.002-.232-1.936-.435-1.484-1.289 1.378-2.599.366-3.989-1.088-3.989-1.482 0-2.469 1.443-1.088 3.989.465.859-.504 1.062-1.484 1.289-1.004.232-.927.761-.927 1.722h6.998c0-.961.077-1.49-.927-1.722zm-10.072-9.259v16.981h15v-16.981h-15zm13 12.981h-11v-11h11v11zm-15-1.132l-5-13.738 14.095-5.13 1.827 5h-2.128l-.9-2.455-10.38 3.778 2.486 6.832v5.713z" />
        </svg>
        <span class="ml-2 text-base leading-normal">{{ isset($course->cover_image) ? 'Change':'Add'}} Cover
    Image</span>
    <input type="file" name="cover_image" id="cover_image" class="hidden">
    </label> --}}
</div>