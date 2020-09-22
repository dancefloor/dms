<!-- Name Field -->
<div class="flex flex-wrap items-center -mx-3 my-5">
    <div class="w-full md:w-2/12 px-3 my-1">
        <label for="status" class="text-xs uppercase text-gray-800 font-semibold ml-1">Status</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <div class="relative">
            <select id="status" name="status"
                class="block appearance-none w-full border border-gray-300 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option disabled selected>Select status</option>
                <option value="active" @isset($course->
                    status){{ $course->status == 'active' ? 'selected' : old('value') }} @endisset>
                    Active
                </option>
                <option value="finished" @isset($course->
                    level){{ $course->level == 'finished' ? 'selected' : old('value') }}@endisset>
                    Finished
                </option>
                <option value="draft" @isset($course->level)
                    {{ $course->level == 'draft' ? 'selected' : old('value') }}
                    @endisset>
                    Draft
                </option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>
        </div>
        @error('status')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">