<div class="mb-5">
    <div class="flex flex-wrap -mx-3 mb-5">
        <!-- Level Field -->
        <div class="w-full md:w-1/2 px-3 my-1">
            <div class="relative">
                <select id="level" name="level"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded-full leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option disabled selected>Select level</option>
                    <option value="All levels" @isset($course->
                        level){{ $course->level == 'All levels' ? 'selected' : old('value') }}@endisset>
                        All levels
                    </option>
                    <option value="beginner" @isset($course->
                        level){{ $course->level == 'beginner' ? 'selected' : old('value') }}@endisset>
                        Beginner
                    </option>
                    <option value="intermediate" @isset($course->level)
                        {{ $course->level == 'intermediate' ? 'selected' : old('value') }}
                        @endisset>
                        Intermediate
                    </option>
                    <option value="advanced" @isset ($course->level)
                        {{ $course->level == 'advanced' ? 'selected' : old('value') }} @endisset>
                        Advanced
                    </option>
                    <option value="expert" @isset ($course->level)
                        {{ $course->level == 'expert' ? 'selected' : old('value') }} @endisset>
                        Expert
                    </option>
                    <option value="master" @isset ($course->level)
                        {{ $course->level == 'master' ? 'selected' : old('value') }} @endisset>
                        Master
                    </option>
                    <option value="pro" @isset ($course->level)
                        {{ $course->level == 'pro' ? 'selected' : old('value') }} @endisset>
                        Pro
                    </option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2 px-3 my-1">
            <input type="number" placeholder="Level number" id="level_number" name="level_number"
                value="{{ $course->level_number ?? old('value') }}">
        </div>
    </div>
</div>