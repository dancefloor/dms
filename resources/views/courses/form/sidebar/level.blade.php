<!-- Name Field -->
<div class="flex flex-wrap items-center -mx-3 my-5">
    <div class="w-full md:w-2/12 px-3 my-1">
        <label for="level" class="text-xs uppercase text-gray-800 font-semibold ml-1">Level</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full md:w-1/2 px-3">
                <div class="relative">
                    <select id="level" name="level"
                        class="block appearance-none w-full border border-gray-300 text-gray-700 py-2 px-3 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <option disabled selected>Select level</option>
                        <option value="all levels" @isset($course->
                            level){{ $course->level == 'all levels' ? 'selected' : old('value') }}@endisset>
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
            <div class="w-full md:w-1/2 px-3">
                <input type="number" placeholder="Level number" id="level_number" name="level_number"
                    class="df-textfield" value="{{ $course->level_number ?? old('value') }}">
            </div>
        </div>
        @error('name')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">