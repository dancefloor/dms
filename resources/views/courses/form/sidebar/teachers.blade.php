<!-- Teachers Field -->
<div class="flex flex-wrap items-center -mx-3 my-5">
    <div class="w-full px-4">
        <select id="teachers" name="teachers[]" multiple="multiple" class="w-full focus:bg-red-400">
            @foreach ($teachers as $teacher)
            @if ($course ?? '')
            <option value="{{ $teacher->id }}" @if($course->hasTeacher($teacher->id)) selected @endif>
                {{ $teacher->firstname }} {{ $teacher->lastname }}
            </option>
            @else
            <option value="{{ $teacher->id }}">{{ $teacher->firstname }} {{ $teacher->lastname }}</option>
            @endif
            @endforeach
        </select>
        @error('name')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">