<!-- Name Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="name" class="text-xs uppercase text-gray-800 font-semibold ml-1">Name</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <input type="text" name="name" id="name" class="df-textfield @error('name') error-field @enderror"
            placeholder="Course name" value="{{ $course->name ?? old('value') }}">
        @error('name')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">


<!-- tagline Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="tagline" class="text-xs uppercase text-gray-800 font-semibold ml-1">Tagline</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <input type="text" name="tagline" id="tagline" class="df-textfield @error('tagline') error-field @enderror"
            placeholder="Tagline / Slogan" value="{{ $course->tagline ?? old('value') }}">
        @error('tagline')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">


<!-- Excerpt Field -->
<div class="flex flex-wrap items-top -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="excerpt" class="text-xs uppercase text-gray-800 font-semibold ml-1">Excerpt</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <textarea name="excerpt" id="excerpt" cols="30" rows="3" placeholder="Excerpt"
            class="df-textarea w-full @error('excerpt') error-field @enderror">{{ $course->excerpt ?? old('value') }}</textarea>
        <p class="text-sm text-gray-600 italic">This field is used for fast description, bullet points and SEO Meta
            description</p>
        @error('excerpt')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- Description Field -->
<div class="flex flex-wrap items-top -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="description" class="text-xs uppercase text-gray-800 font-semibold ml-1">Description</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <textarea name="description" id="description" cols="30" rows="5" placeholder="Description"
            class="df-textarea w-full @error('description') error-field @enderror">{{ $course->description ?? old('value') }}</textarea>
        @error('description')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">

<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="to_waiting" class="text-xs uppercase text-gray-800 font-semibold ml-1">Waiting list</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <div class="flex items-center">
            <input id="to_waiting" name="to_waiting" value="1" type="checkbox" @isset($course)
                {{ $course->to_waiting == 1 ? 'checked':'' }} @endisset
                class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
            <label for="to_waiting" class="ml-2 block text-sm leading-5 text-gray-600">
                Check this box when you want students's status to be waiting instead of pre-registered
            </label>
        </div>
        @error('to_waiting')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">