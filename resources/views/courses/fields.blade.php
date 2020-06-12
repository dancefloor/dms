{{-- tutorials https://codepen.io/ryangjchandler/pen/qBOEgjg?editors=1010 --}}

<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-4/6 px-3">
        <!-- Name Field -->
        <div class="my-5 w-full md:w-1/2">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Course name"]) !!}
        </div>

        <!-- Description Field -->
        <div class="my-5">
            <textarea name="description" id="description" cols="30" rows="5"
                placeholder="Description">{{ $course->description ?? old('value') }}</textarea>
        </div>


        <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Promotion</h3>

        <div class="mb-5">
            <input type="text" id="tagline" name="tagline" value="{{ $course->tagline ?? old('value')}}"
                placeholder="Tagline">
        </div>

        <div class="my-5">
            <textarea name="excerpt" id="excerpt" cols="30" rows="2"
                placeholder="Excerpt">{{ $course->excerpt ?? old('value') }}</textarea>
            <p class="text-sm text-gray-600 italic">This field is used for fast description and SEO Meta description</p>
        </div>
        <!-- Teaser Video 1 Field -->
        <div class="mb-5">
            {!! Form::text('teaser_video_1', null, [ 'placeholder' => 'Primary teaser video'])!!}
        </div>

        <!-- Teaser Video 2 Field -->
        <div class="mb-6">
            {!! Form::text('teaser_video_2', null, ['placeholder' => 'Seconday teaser video']) !!}
        </div>

        <!-- Teaser Video 3 Field -->
        <div class="mb-6">
            {!! Form::text('teaser_video_3', null, ['placeholder' => 'Third teaser video']) !!}
        </div>

        <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Pricing</h3>

        <div class="flex flex-wrap -mx-3 my-5">
            <!-- Full Price Field -->
            <div class="w-full md:w-1/3 px-3 my-1">
                {!! Form::number('full_price', null, ['class' => 'form-control', 'placeholder' => 'Full Price']) !!}
            </div>

            <!-- Reduced Price Field -->
            <div class="w-full md:w-1/3 px-3 my-1">
                {!! Form::number('reduced_price', null, ['class' => 'form-control', 'placeholder' => 'Reduced Price'])
                !!}
            </div>

            <!-- Promo Price Field -->
            <div class="w-full md:w-1/3 px-3 my-1">
                {!! Form::number('promo_price', null, ['class' => 'form-control', 'placeholder' => 'Promo Price']) !!}
            </div>
        </div>

        <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Schedule</h3>

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

        <div class="flex flex-wrap -mx-3 my-5 items-center"
            x-data="{ day: {{ isset($course->monday) ? 'true' : 'false' }}}">
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="monday" id="monday" value="1" {{ isset($course->monday) ? 'checked': ''}}
                    @change="day = !day">
                <label class="ml-1 text-gray-700" for="monday">Monday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.schedule', ['day'=> 'mon'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 my-5 items-center"
            x-data="{ day: {{ isset($course->tuesday) ? 'true': 'false'}} }">
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="tuesday" id="tuesday" value="1" {{ isset($course->tuesday) ? 'checked':''}}
                    @change="day = !day">
                <label class="ml-1 text-gray-700" for="tuesday">Tuesday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.schedule', ['day'=> 'tue'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 my-5 items-center"
            x-data="{ day: {{ isset($course->wednesday) ? 'true': 'false'}} }">
            <div class="w-full md:w-1/5 px-3">
                <input type="checkbox" name="wednesday" id="wednesday" value="1" @change="day = !day"
                    {{ isset($course->wednesday) ? 'checked':''}}>
                <label class="ml-1 text-gray-700" for="wednesday">Wednesday</label>
            </div>
            <div class="w-full md:w-2/5 px-3" x-show="day">
                @include('courses.form.schedule', ['day'=> 'wed'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 my-5 items-center"
            x-data="{ day: {{ isset($course->thursday) ? 'true': 'false'}} }">
            <div class="w-full md:w-1/6 px-3">
                <input type="checkbox" name="thursday" id="thursday" value="1" @change="day = !day"
                    {{ isset($course->thursday) ? 'checked':''}}>
                <label class="ml-1 text-gray-700" for="thursday">Thursday</label>
            </div>
            <div class="w-full md:w-5/6 px-3" x-show="day">
                @include('courses.form.schedule', ['day'=> 'thu'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 my-5 items-center"
            x-data="{ day: {{ isset($course->friday) ? 'true': 'false'}} }">
            <div class="w-full md:w-1/6 px-3">
                <input type="checkbox" name="friday" id="friday" value="1" @change="day = !day"
                    {{ isset($course->friday) ? 'checked':''}}>
                <label class="ml-1 text-gray-700" for="friday">Friday</label>
            </div>
            <div class="w-full md:w-5/6 px-3" x-show="day">
                @include('courses.form.schedule', ['day'=> 'fri'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 my-5 items-center"
            x-data="{ day: {{ isset($course->saturday) ? 'true': 'false'}} }"
            {{ isset($course->saturday) ? 'checked':''}}>
            <div class="w-full md:w-1/6 px-3">
                <input type="checkbox" name="saturday" id="saturday" value="1" @change="day = !day">
                <label class="ml-1 text-gray-700" for="saturday">Saturday</label>
            </div>
            <div class="w-full md:w-5/6 px-3" x-show="day">
                @include('courses.form.schedule', ['day'=> 'sat'])
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 my-5 items-center"
            x-data="{ day: {{ isset($course->sunday) ? 'true': 'false'}} }" {{ isset($course->sunday) ? 'checked':''}}>
            <div class="w-full md:w-1/6 px-3">
                <input type="checkbox" name="sunday" id="sunday" value="1" @change="day = !day">
                <label class="ml-1 text-gray-700" for="sunday">Sunday</label>
            </div>
            <div class="w-full md:w-5/6 px-3" x-show="day">
                @include('courses.form.schedule', ['day'=> 'sun'])
            </div>
        </div>

        <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Students</h3>
        <div>
            @if ($students->count() > 0)
            <div class="mb-5">
                <select id="students" name="students[]" multiple="multiple" class="w-full focus:bg-red-400" required>
                    @foreach ($students as $student)
                    @if ($course ?? '')
                    <option value="{{ $student->id }}" @if($course->hasStudent($student->id)) selected @endif>
                        {{ $student->firstname }}
                    </option>
                    @else
                    <option value="{{ $student->id }}">{{ $student->firstname }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            @endif
        </div>
    </div>

    <div class="w-full md:w-2/6 px-3">
        <!-- Cover Image Field -->
        <div class="my-5">
            @isset($course->cover_image)
            <img src="{{ asset($course->cover_image) }}" alt="{{ $course->name}}">
            @endisset
            <label
                class="w-full inline-flex justify-center items-center px-3 py-2 bg-gray-300 text-gray-800 rounded hover:shadow-lg tracking-wide border border-blue cursor-pointer hover:bg-gray-700 hover:text-white">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M18.072 16.278c-1.002-.232-1.936-.435-1.484-1.289 1.378-2.599.366-3.989-1.088-3.989-1.482 0-2.469 1.443-1.088 3.989.465.859-.504 1.062-1.484 1.289-1.004.232-.927.761-.927 1.722h6.998c0-.961.077-1.49-.927-1.722zm-10.072-9.259v16.981h15v-16.981h-15zm13 12.981h-11v-11h11v11zm-15-1.132l-5-13.738 14.095-5.13 1.827 5h-2.128l-.9-2.455-10.38 3.778 2.486 6.832v5.713z" />
                </svg>
                <span class="ml-2 text-base leading-normal">{{ isset($course->cover_image) ? 'Change':'Add'}} Cover
                    Image</span>
                <input type="file" name="cover_image" id="cover_image" class="hidden">
            </label>
        </div>


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

        <div class="mb-5">
            <div class="flex flex-wrap -mx-3 mb-5">
                <!-- Level Field -->
                <div class="w-full md:w-1/2 px-3 my-1">
                    <div class="relative">
                        <select id="level" name="level"
                            class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded-full leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option disabled selected>Select level</option>
                            <option value="beginner" {{ $course->level == 'beginner' ? 'selected' : old('value') }}>
                                Beginner</option>
                            <option value="intermediate"
                                {{ $course->level == 'intermediate' ? 'selected' : old('value') }}>Intermediate
                            </option>
                            <option value="advanced" {{ $course->level == 'advanced' ? 'selected' : old('value') }}>
                                Advanced</option>
                            <option value="expert" {{ $course->level == 'expert' ? 'selected' : old('value') }}>Expert
                            </option>
                            <option value="master" {{ $course->level == 'master' ? 'selected' : old('value') }}>Master
                            </option>
                            <option value="pro" {{ $course->level == 'pro' ? 'selected' : old('value') }}>Pro</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
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

        <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Teaching focus</h3>
        <div x-data="{choreography:false}" class="mb-5">
            <div>
                <input x-on:click="choreography = false" type="radio" name="focus" id="partnerwork" value="partnerwork"
                    {{ $course->focus == 'partnerwork' ? 'checked' : old('value') }} required>
                <label class="ml-2" for="partnerwork">Partnerwork</label>
            </div>
            <div>
                <input x-on:click="choreography = false" type="radio" name="focus" id="footwork" value="footwork"
                    {{ $course->focus == 'footwork' ? 'checked' : old('value') }}>
                <label class="ml-2" for="footwork">Footwork</label>
            </div>
            <div>
                <input x-on:click="choreography = true" type="radio" name="focus" id="choreography" value="choreography"
                    {{ $course->focus == 'choreography' ? 'checked' : old('value') }}>
                <label class="ml-2" for="choreography">Choreography</label>
            </div>
            <div>
                <input x-on:click="choreography = false" type="radio" name="focus" id="styling" value="styling"
                    {{ $course->focus == 'styling' ? 'checked' : old('value') }}>
                <label class="ml-2" for="styling">Styling</label>
            </div>
            <div x-show="choreography" class="mt-3">
                <input type="number" placeholder="Limit of students" min="0" id="limit" name="limit">
            </div>
        </div>

        <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Type of course</h3>

        <div x-data="{ online: false }">
            <div class="mb-5">
                <div>
                    <input x-on:click="online = false" type="radio" name="type" id="class" value="class"
                        {{ $course->type == 'class' ? 'checked' : old('value') }} required>
                    <label class="ml-2" for="class">Class</label>
                </div>
                <div>
                    <input x-on:click="online = false" type="radio" name="type" id="workshop" value="workshop"
                        {{ $course->type == 'workshop' ? 'checked' : old('value') }}>
                    <label class="ml-2" for="class">Workshop</label>
                </div>
                <div>
                    <input x-on:click="online = false" type="radio" name="type" id="bootcamp" value="bootcamp"
                        {{ $course->type == 'bootcamp' ? 'checked' : old('value') }}>
                    <label class="ml-2" for="bootcamp">Bootcamp</label>
                </div>
                <div>
                    <input x-on:click="online = true" type="radio" name="type" id="online" value="online"
                        {{ $course->type == 'online' ? 'checked' : old('value') }}>
                    <label class="ml-2" for="online">Online</label>
                </div>
            </div>

            <div x-show="online">
                <div class="mb-5">
                    <input type="text" id="online_link" name="online_link" placeholder="Zoom link or Instagram"
                        value="{{ $course->online_link }}">
                </div>
                <div class="flex flex-wrap -mx-3 my-5">
                    <div class="w-full md:w-1/2 px-3">
                        <input type="text" id="online_id" name="online_id" placeholder="ID (optional)"
                            value="{{ $course->online_id}}">
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <input type="text" id="online_password" name="online_password" placeholder="Password (optional)"
                            value="{{ $course->online_password }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Submit Field -->
<div class="my-10">
    <button type="submit" class="btn-save inline-flex">
        @include('icons.save')
        <span class="ml-2">Save Course</span>
    </button>
    <a href="{{ route('courses.index') }}" class="btn-cancel">Cancel</a>
</div>