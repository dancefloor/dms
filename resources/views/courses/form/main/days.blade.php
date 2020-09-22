<h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 my-6 text-center">Schedule</h3>

<!-- Name Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="start_date" class="text-xs uppercase text-gray-800 font-semibold ml-1">Start date</label>
    </div>
    <div class="w-full md:w-4/12 px-4">
        <input type="text" name="start_date" id="start_date"
            class="df-textfield @error('start_date') error-field @enderror" placeholder="Select start date"
            value="{{ $course->start_date ?? old('value') }}">
        @error('start_date')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">

<!-- end date Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="end_date" class="text-xs uppercase text-gray-800 font-semibold ml-1">End date</label>
    </div>
    <div class="w-full md:w-4/12 px-4">
        <input type="text" name="end_date" id="end_date" class="df-textfield @error('end_date') error-field @enderror"
            placeholder="Select end date" value="{{ $course->end_date ?? old('value') }}">
        @error('end_date')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">


<!-- end date Field -->
<div class="flex flex-wrap items-top -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="end_date" class="text-xs uppercase text-gray-800 font-semibold ml-1">Schedule</label>
    </div>
    <div class="w-full md:w-10/12 px-4">

        <div class="flex flex-wrap -mx-3 items-center h-12"
            x-data="{ day: {{ isset($course->monday) ? 'true' : 'false' }}}">
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="monday" id="monday" value="1" {{ isset($course->monday) ? 'checked': ''}}
                    @change="day = !day">
                <label class="ml-1 text-gray-700" for="monday">Monday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.main.schedule', ['day'=> 'mon'])
            </div>
        </div>


        <div class="flex flex-wrap -mx-3 items-center h-12"
            x-data="{ day: {{ isset($course->tuesday) ? 'true': 'false'}} }">
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="tuesday" id="tuesday" value="1" {{ isset($course->tuesday) ? 'checked':''}}
                    @change="day = !day">
                <label class="ml-1 text-gray-700" for="tuesday">Tuesday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.main.schedule', ['day'=> 'tue'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 items-center h-12"
            x-data="{ day: {{ isset($course->wednesday) ? 'true': 'false'}} }">
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="wednesday" id="wednesday" value="1" @change="day = !day"
                    {{ isset($course->wednesday) ? 'checked':''}}>
                <label class="ml-1 text-gray-700" for="wednesday">Wednesday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.main.schedule', ['day'=> 'wed'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 items-center h-12"
            x-data="{ day: {{ isset($course->thursday) ? 'true': 'false'}} }">
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="thursday" id="thursday" value="1" @change="day = !day"
                    {{ isset($course->thursday) ? 'checked':''}}>
                <label class="ml-1 text-gray-700" for="thursday">Thursday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.main.schedule', ['day'=> 'thu'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 items-center h-12"
            x-data="{ day: {{ isset($course->friday) ? 'true': 'false'}} }">
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="friday" id="friday" value="1" @change="day = !day"
                    {{ isset($course->friday) ? 'checked':''}}>
                <label class="ml-1 text-gray-700" for="friday">Friday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.main.schedule', ['day'=> 'fri'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 items-center h-12"
            x-data="{ day: {{ isset($course->saturday) ? 'true': 'false'}} }"
            {{ isset($course->saturday) ? 'checked':''}}>
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="saturday" id="saturday" value="1" @change="day = !day">
                <label class="ml-1 text-gray-700" for="saturday">Saturday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.main.schedule', ['day'=> 'sat'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 items-center h-12"
            x-data="{ day: {{ isset($course->sunday) ? 'true': 'false'}} }" {{ isset($course->sunday) ? 'checked':''}}>
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="sunday" id="sunday" value="1" @change="day = !day">
                <label class="ml-1 text-gray-700" for="sunday">Sunday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.main.schedule', ['day'=> 'sun'])
            </div>
        </div>
    </div>
</div>
<hr class="my-5 -mx-3">