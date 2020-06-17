<h2 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Address</h2>

<div class="flex flex-wrap mb-4 -mx-3">
    <div class="w-full md:w-5/6 px-3 mb-2">
        <input
            class="appearance-none pl-5 block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500 @error('street') border-red-500 @enderror"
            id="street" type="text" placeholder="Address / Street" name="street"
            value="{{ $user->street ?? old('street') }}" autocomplete="street">
    </div>
    <div class="w-full md:w-1/6 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500 @error('street_number') border-red-500 @enderror"
            id="street_number" type="text" placeholder="Street number" name="street_number"
            value="{{ $user->street_number ?? old('street_number') }}" autocomplete="street_number">
    </div>
</div>

<div class="mb-4">
    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
        </svg>
    </div>
    <input
        class="appearance-none pl-5 block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('address_info') border-red-500 @enderror"
        id="address_info" type="text" placeholder="Address extra" name="address_info"
        value="{{ $user->address_info ?? old('address_info') }}" autocomplete="address_info">
</div>

<div class="flex flex-wrap mb-4 -mx-3">
    <div class="w-full md:w-1/4 px-3 mb-2">
        <input
            class="appearance-none pl-5 block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('postal_code') border-red-500 @enderror"
            id="postal_code" type="text" placeholder="Postal Code" name="postal_code"
            value="{{ $user->postal_code ?? old('postal_code') }}" autocomplete="postal_code">
    </div>
    <div class="w-full md:w-1/4 px-3">
        <input
            class="appearance-none pl-5 block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('city') border-red-500 @enderror"
            id="city" type="text" placeholder="City" name="city" value="{{ $user->city ?? old('city') }}"
            autocomplete="city">
    </div>
    <div class="w-full md:w-1/4 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500 @error('state') border-red-500 @enderror"
            id="state" type="text" placeholder="State" name="state" value="{{ $user->state ?? old('state') }}"
            autocomplete="state">
    </div>
    <div class="w-full md:w-1/4 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500 @error('country') border-red-500 @enderror"
            id="country" type="text" placeholder="Country" name="country" value="{{ $user->country ?? old('country') }}"
            autocomplete="country">
    </div>
</div>

<input type="text" id="lat" name="lat">
<input type="text" id="lng" name="lng">

{{-- <div class="flex rounded-md shadow-sm">
    <div class="relative flex-grow focus-within:z-10">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <input id="filter"
            class="appearance-none rounded-none block w-full pl-10 border bg-gray-200 border-gray-200 rounded-full text-gray-900 py-2 px-3 placeholder-gray-600 focus:outline-none focus:border-gray-300 sm:text-sm sm:leading-5 transition ease-in-out duration-150"
            placeholder="John Doe">
    </div>
</div> --}}


{{-- 


$table->decimal('price_hour')->nullable();

$table->timestamp('mobile_verified_at')->nullable();
$table->timestamp('phone_verified_at')->nullable();


--}}