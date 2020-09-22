<!-- Name Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="name" class="text-xs uppercase text-gray-800 font-semibold ml-1">Name</label>
    </div>
    <div class="w-full md:w-11/12 px-4">
        <input type="text" name="name" id="name" class="df-textfield @error('name') error-field @enderror"
            value="{{ $style->name ?? old('value') }}">
        @error('name')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">
<!-- Origin Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="origin" class="text-xs uppercase text-gray-800 font-semibold ml-1">Origin</label>
    </div>
    <div class="w-full md:w-2/12 px-3">
        <input type="text" name="origin" id="origin" class="df-textfield @error('origin') error-field @enderror"
            placeholder="Place of origin" value="{{ $style->origin ?? old('value') }}">
        @error('origin')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>

<hr class="my-5 -mx-3">
<!-- Year of Origin Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="year" class="text-xs uppercase text-gray-800 font-semibold ml-1">Year</label>
    </div>
    <div class="w-full md:w-2/12 px-3">
        <input type="text" name="year" id="year" class="df-textfield @error('year') error-field @enderror"
            placeholder="Year of origin" value="{{ $style->year ?? old('value') }}">
        @error('year')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>

<hr class="my-5 -mx-3">
<!-- Image Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="image" class="text-xs uppercase text-gray-800 font-semibold ml-1">Image</label>
    </div>
    <div class="w-full md:w-2/12 px-3">
        <input type="file" name="image" id="image">
        @error('image')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>

<hr class="my-5 -mx-3">
<!-- Color Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="color" class="text-xs uppercase text-gray-800 font-semibold ml-1">Color</label>
    </div>
    <div class="w-full md:w-2/12 px-3">
        <input type="text" name="color" id="color" class="basic df-textfield @error('color') error-field @enderror"
            value="{{ $style->color ?? old('value') }}">
        @error('color')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>

<hr class="my-5 -mx-3">

<!-- Icon Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="icon" class="text-xs uppercase text-gray-800 font-semibold ml-1">Icon</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <input type="text" name="icon" id="icon" class="df-textfield @error('icon') error-field @enderror"
            value="{{ $style->icon ?? old('value') }}">
        @error('icon')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>

<hr class="my-5 -mx-3">

<!-- Music Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="music" class="text-xs uppercase text-gray-800 font-semibold ml-1">Music</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <input type="text" name="music" id="music" class="df-textfield @error('music') error-field @enderror"
            value="{{ $style->music ?? old('value') }}">
        @error('music')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>

<hr class="my-5 -mx-3">

<!-- Music Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="family" class="text-xs uppercase text-gray-800 font-semibold ml-1">Family</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <select name="family" id="family" class="w-full px-3 py-2 rounded-md border border-gray-200 text-gray-700">
            <option selected default disabled>Select dance family</option>
            <option value="Cuban" @isset($style) {{ $style->family == "Cuban" ? 'selected': '' }} @endisset>
                Cuban Salsa
            </option>
            <option value="Line Salsa" @isset($style) {{ $style->family == "Line Salsa" ? 'selected': '' }} @endisset>
                Line Salsa
            </option>
            <option value="Urban" @isset($style) {{ $style->family == "Urban" ? 'selected': '' }} @endisset>
                Urban
            </option>
            <option value="Sensual" @isset($style) {{ $style->family == "Sensual" ? 'selected': '' }} @endisset>
                Sensual
            </option>
            <option value="Fusion" @isset($style) {{ $style->family == "Fusion" ? 'selected': '' }} @endisset>
                Fusion
            </option>
            <option value="Sport" @isset($style) {{ $style->family == "Sport" ? 'selected': '' }} @endisset>
                Sport
            </option>
            <option value="Others" @isset($style) {{ $style->family == "Others" ? 'selected': '' }} @endisset>
                Others
            </option>
        </select>
    </div>
</div>

<hr class="my-5 -mx-3">

<!-- Description Field -->
<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="name" class="text-xs uppercase text-gray-800 font-semibold ml-1">Description</label>
    </div>
    <div class="w-full md:w-11/12 px-4">
        <textarea name="description" id="description" cols="30" rows="10"
            class="df-textfield @error('color') error-field @enderror">{{ $style->description ?? old('value') }}</textarea>
        @error('description')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>

<hr class="my-5 -mx-3">