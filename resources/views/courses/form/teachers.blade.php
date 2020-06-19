<div class="mb-5">
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
</div>