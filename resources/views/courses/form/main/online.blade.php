<div x-data="{ online: false }">

    <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 my-6 text-center">Online options</h3>
    <!-- Description Field -->
    <div class="flex flex-wrap items-center -mx-3">
        <div class="w-full md:w-2/12 px-3">
            <label for="is_online" class="text-xs uppercase text-gray-800 font-semibold ml-1">Online</label>
        </div>
        <div class="w-full md:w-10/12 px-4">
            <div class="flex items-center">
                <input id="is_online" name="is_online" type="checkbox" x-on:click="online = !online" @isset($course)
                    {{ $course->is_online == 1 ? 'checked':'' }} @endisset
                    class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out">
                <label for="is_online" class="ml-2 block text-sm leading-5 text-gray-600">
                    Check if this course will be online
                </label>
            </div>
            @error('description')
            <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <hr class="my-5 -mx-3">

    <div x-show="online" @click.away="online = online">
        <!-- online url Field -->
        <div class="flex flex-wrap items-center -mx-3">
            <div class="w-full md:w-2/12 px-3">
                <label for="online_link" class="text-xs uppercase text-gray-800 font-semibold ml-1">Online URL</label>
            </div>
            <div class="w-full md:w-10/12 px-4">
                <div class="flex items-center">
                    <input type="text" id="online_link" name="online_link" placeholder="Website URL"
                        class="df-textfield" value="{{ $course->online_link ?? old('value') }}">
                </div>
                @error('online_link')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <hr class="my-5 -mx-3">
    </div>


    <div x-show="online" @click.away="online = online">
        <!-- online url Field -->
        <div class="flex flex-wrap items-center -mx-3">
            <div class="w-full md:w-2/12 px-3">
                <label for="online_price" class="text-xs uppercase text-gray-800 font-semibold ml-1">Online
                    Price</label>
            </div>
            <div class="w-full md:w-4/12 px-4">
                <div class="flex items-center">
                    <input type="number" id="online_price" name="online_price" placeholder="Price (optional)"
                        class="df-textfield" value="{{ $course->online_price ?? old('value') }}">
                </div>
                @error('online_price')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <hr class="my-5 -mx-3">
    </div>
</div>

<!-- online url Field -->
{{-- <div class="flex flex-wrap items-center -mx-3">
        <div class="w-full md:w-2/12 px-3">
            <label for="online_id" class="text-xs uppercase text-gray-800 font-semibold ml-1">ZOOM ID</label>
        </div>
        <div class="w-full md:w-10/12 px-4">
            <div class="flex items-center">
                <input type="text" id="online_id" name="online_id" placeholder="ZOOM ID (optional)" class="df-textfield"
                    value="{{ $course->online_id ?? old('value') }}">
</div>
@error('online_id')
<p class="text-red-600 text-sm">{{ $message }}</p>
@enderror
</div>
</div>
<hr class="my-5 -mx-3">

<!-- online url Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="online_password" class="text-xs uppercase text-gray-800 font-semibold ml-1">Zoom
            password</label>
    </div>
    <div class="w-full md:w-10/12 px-4">
        <div class="flex items-center">
            <input type="text" id="online_password" name="online_password" placeholder="ZOOM password (optional)"
                class="df-textfield" value="{{ $course->online_password ?? old('value') }}">
        </div>
        @error('online_password')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">--}}