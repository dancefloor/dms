<div x-data="{ online: false }">
    <div class="mb-5">
        <div>
            <input x-on:click="online = false" type="radio" name="type" id="class" value="class" @isset($course->type)
            {{ $course->type == 'class' ? 'checked' : old('value') }} @endisset
            required>
            <label class="ml-2" for="class">Class</label>
        </div>
        <div>
            <input x-on:click="online = false" type="radio" name="type" id="workshop" value="workshop"
                @isset($course->type) {{ $course->type == 'workshop' ? 'checked' : old('value') }} @endisset>
            <label class="ml-2" for="class">Workshop</label>
        </div>
        <div>
            <input x-on:click="online = false" type="radio" name="type" id="bootcamp" value="bootcamp"
                @isset($course->type) {{ $course->type == 'bootcamp' ? 'checked' : old('value') }} @endisset>
            <label class="ml-2" for="bootcamp">Bootcamp</label>
        </div>
        <div>
            <input x-on:click="online = true" type="radio" name="type" id="online" value="online" @isset($course->type)
            {{ $course->type == 'online' ? 'checked' : old('value') }} @endisset>
            <label class="ml-2" for="online">Online</label>
        </div>
    </div>

    <div x-show="online">
        <div class="mb-5">
            <input type="text" id="online_link" name="online_link" placeholder="Zoom link or Instagram"
                value="{{ $course->online_link ?? old('value') }}">
        </div>
        <div class="flex flex-wrap -mx-3 my-5">
            <div class="w-full md:w-1/2 px-3">
                <input type="text" id="online_id" name="online_id" placeholder="ID (optional)"
                    value="{{ $course->online_id ?? old('value') }}">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <input type="text" id="online_password" name="online_password" placeholder="Password (optional)"
                    value="{{ $course->online_password ?? old('value') }}">
            </div>
        </div>
    </div>
</div>