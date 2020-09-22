@if ($styles->count() > 0)
<!-- Style Field -->
<div class="flex flex-wrap items-center -mx-3 my-5">
    {{-- <div class="w-full px-4">
        <label for="name" class="text-xs uppercase text-gray-800 font-semibold ml-1">styles</label>
    </div> --}}
    <div class="w-full px-4">
        <select id="styles" name="styles[]" multiple="multiple" class="w-full focus:bg-red-400" required>
            @foreach ($styles as $style)
            @if ($course ?? '')
            <option value="{{ $style->id }}" @if($course->hasStyle($style->id)) selected @endif>
                {{ $style->name }}
            </option>
            @else
            <option value="{{ $style->id }}">{{ $style->name }}</option>
            @endif
            @endforeach
        </select>
        @error('name')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">
@endif