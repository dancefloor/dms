<h2 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Additional information</h2>

<div class="flex flex-wrap mb-4 -mx-3">
    <div class="w-full md:w-1/3 px-3 mb-2">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('mobile') border-red-500 @enderror"
            id="mobile" type="text" placeholder="Mobile" name="mobile" value="{{ old('mobile') }}" required
            autocomplete="phone">
        @error('mobile')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('phone') border-red-500 @enderror"
            id="phone" type="text" placeholder="Secondary Phone" name="phone" value="{{ old('phone') }}"
            autocomplete="phone">
        @error('phone')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="flex flex-wrap mb-4 -mx-3 items-center">
    <div class="w-full md:w-1/3 px-3">
        <div class="relative">
            <select id="work_status" name="work_status"
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-3 pr-8 rounded-full leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option disabled selected>Work Status</option>
                <option student>Student</option>
                <option value="student">Unemployed</option>
                <option value="student">Working</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('profession') border-red-500 @enderror"
            id="profession" type="text" placeholder="profession" name="profession" value="{{ old('profession') }}"
            autocomplete="profession">
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('branch') border-red-500 @enderror"
            id="branch" type="text" placeholder="branch" name="branch" value="{{ old('branch') }}"
            autocomplete="branch">
    </div>
</div>


<div class="mb-4">
    <textarea name="biography" id="biography" cols="30" rows="5" placeholder="biography"
        class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-lg py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('biography') border-red-500 @enderror">{{ old('biography') }}</textarea>

</div>