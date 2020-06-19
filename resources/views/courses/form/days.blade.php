<div class="flex flex-wrap -mx-3 mb-5">
    <div class="w-full md:w-1/3 px-3">
        <input type="text" id="start_date" name="start_date" placeholder="Start date"
            value="{{ $course->start_date ?? old('value') }}">
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input type="text" id="end_date" name="end_date" placeholder="End date"
            value="{{ $course->end_date ?? old('value') }}">
    </div>
</div>

<div class="flex flex-wrap -mx-3 my-5 items-center" x-data="{ day: {{ isset($course->monday) ? 'true' : 'false' }}}">
    <div class="w-full md:w-1/5 px-3">
        <input type="checkbox" name="monday" id="monday" value="1" {{ isset($course->monday) ? 'checked': ''}}
            @change="day = !day">
        <label class="ml-1 text-gray-700" for="monday">Monday</label>
    </div>
    <div class="w-full md:w-2/5 px-3" x-show="day">
        @include('courses.form.schedule', ['day'=> 'mon'])
    </div>
</div>

<div class="flex flex-wrap -mx-3 my-5 items-center" x-data="{ day: {{ isset($course->tuesday) ? 'true': 'false'}} }">
    <div class="w-full md:w-1/5 px-3">
        <input type="checkbox" name="tuesday" id="tuesday" value="1" {{ isset($course->tuesday) ? 'checked':''}}
            @change="day = !day">
        <label class="ml-1 text-gray-700" for="tuesday">Tuesday</label>
    </div>
    <div class="w-full md:w-2/5 px-3" x-show="day">
        @include('courses.form.schedule', ['day'=> 'tue'])
    </div>
</div>

<div class="flex flex-wrap -mx-3 my-5 items-center" x-data="{ day: {{ isset($course->wednesday) ? 'true': 'false'}} }">
    <div class="w-full md:w-1/5 px-3">
        <input type="checkbox" name="wednesday" id="wednesday" value="1" @change="day = !day"
            {{ isset($course->wednesday) ? 'checked':''}}>
        <label class="ml-1 text-gray-700" for="wednesday">Wednesday</label>
    </div>
    <div class="w-full md:w-2/5 px-3" x-show="day">
        @include('courses.form.schedule', ['day'=> 'wed'])
    </div>
</div>

<div class="flex flex-wrap -mx-3 my-5 items-center" x-data="{ day: {{ isset($course->thursday) ? 'true': 'false'}} }">
    <div class="w-full md:w-1/5 px-3">
        <input type="checkbox" name="thursday" id="thursday" value="1" @change="day = !day"
            {{ isset($course->thursday) ? 'checked':''}}>
        <label class="ml-1 text-gray-700" for="thursday">Thursday</label>
    </div>
    <div class="w-full md:w-2/5 px-3" x-show="day">
        @include('courses.form.schedule', ['day'=> 'thu'])
    </div>
</div>

<div class="flex flex-wrap -mx-3 my-5 items-center" x-data="{ day: {{ isset($course->friday) ? 'true': 'false'}} }">
    <div class="w-full md:w-1/5 px-3">
        <input type="checkbox" name="friday" id="friday" value="1" @change="day = !day"
            {{ isset($course->friday) ? 'checked':''}}>
        <label class="ml-1 text-gray-700" for="friday">Friday</label>
    </div>
    <div class="w-full md:w-2/5 px-3" x-show="day">
        @include('courses.form.schedule', ['day'=> 'fri'])
    </div>
</div>

<div class="flex flex-wrap -mx-3 my-5 items-center" x-data="{ day: {{ isset($course->saturday) ? 'true': 'false'}} }"
    {{ isset($course->saturday) ? 'checked':''}}>
    <div class="w-full md:w-1/5 px-3">
        <input type="checkbox" name="saturday" id="saturday" value="1" @change="day = !day">
        <label class="ml-1 text-gray-700" for="saturday">Saturday</label>
    </div>
    <div class="w-full md:w-2/5 px-3" x-show="day">
        @include('courses.form.schedule', ['day'=> 'sat'])
    </div>
</div>

<div class="flex flex-wrap -mx-3 my-5 items-center" x-data="{ day: {{ isset($course->sunday) ? 'true': 'false'}} }"
    {{ isset($course->sunday) ? 'checked':''}}>
    <div class="w-full md:w-1/5 px-3">
        <input type="checkbox" name="sunday" id="sunday" value="1" @change="day = !day">
        <label class="ml-1 text-gray-700" for="sunday">Sunday</label>
    </div>
    <div class="w-full md:w-2/5 px-3" x-show="day">
        @include('courses.form.schedule', ['day'=> 'sun'])
    </div>
</div>