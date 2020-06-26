<div>
    @if ($students->count() > 0)
    <div class="mb-5">
        <select id="students" name="students[]" multiple="multiple" class="w-full focus:bg-red-400">
            @foreach ($students as $student)
            @if ($course ?? '')
            <option value="{{ $student->id }}" @if($course->hasStudent($student->id)) selected @endif>
                {{ $student->firstname }} {{ $student->lastname }}
            </option>
            @else
            <option value="{{ $student->id }}">{{ $student->firstname }}</option>
            @endif
            @endforeach
        </select>
    </div>
    @endif
</div>