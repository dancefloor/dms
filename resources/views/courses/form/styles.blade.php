@if ($styles->count() > 0)
<div class="mb-5">
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
</div>
@endif