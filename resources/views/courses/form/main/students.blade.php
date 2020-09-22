<h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 my-6 text-center">Registered Students</h3>

<!-- Name Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="students" class="text-xs uppercase text-gray-800 font-semibold ml-1">Students</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
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
        @error('students')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
{{-- <hr class="my-5 -mx-3"> --}}