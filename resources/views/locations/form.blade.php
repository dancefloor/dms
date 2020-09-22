<!-- Name Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="name" class="text-xs uppercase text-gray-800 font-semibold ml-1">Name</label>
    </div>
    <div class="w-full md:w-11/12 px-4">
        <input type="text" name="name" id="name" class="df-textfield @error('name') error-field @enderror"
            value="{{ $location->name ?? old('value') }}">
        @error('name')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- Shortname Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="shortname" class="text-xs uppercase text-gray-800 font-semibold ml-1">Shortname</label>
    </div>
    <div class="w-full md:w-11/12 px-4">
        <input type="text" name="shortname" id="shortname"
            class="df-textfield @error('shortname') error-field @enderror"
            value="{{ $location->shortname ?? old('value') }}">
        @error('shortname')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- address Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="address" class="text-xs uppercase text-gray-800 font-semibold ml-1">Address</label>
    </div>
    <div class="w-full md:w-11/12 px-3">
        <input type="text" name="address" id="address" class="df-textfield @error('address') error-field @enderror"
            placeholder="Address" value="{{ $location->address ?? old('value') }}">
        @error('address')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- additional info Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="address_info" class="text-xs uppercase text-gray-800 font-semibold ml-1">Additional</label>
    </div>
    <div class="w-full md:w-11/12 px-3">
        <input type="text" name="address_info" id="address_info"
            class="df-textfield @error('address_info') error-field @enderror" placeholder="Additional information"
            value="{{ $location->address_info ?? old('value') }}">
        @error('address_info')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- postal_code Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="postal_code" class="text-xs uppercase text-gray-800 font-semibold ml-1">NPA</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <input type="text" name="postal_code" id="postal_code" value="{{ $location->postal_code ?? old('value') }}"
            class="df-textfield @error('postal_code') error-field @enderror" placeholder="Postal code">
        @error('postal_code')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- city Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="city" class="text-xs uppercase text-gray-800 font-semibold ml-1">City</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <input type="text" name="city" id="city" class="basic df-textfield @error('city') error-field @enderror"
            value="{{ $location->city ?? old('value') }}">
        @error('city')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- neighborhood Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="neighborhood" class="text-xs uppercase text-gray-800 font-semibold ml-1">neighborhood</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <input type="text" name="neighborhood" id="neighborhood"
            class="df-textfield @error('neighborhood') error-field @enderror"
            value="{{ $location->neighborhood ?? old('value') }}">
        @error('neighborhood')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- state Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="state" class="text-xs uppercase text-gray-800 font-semibold ml-1">state</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <input type="text" name="state" id="state" class="df-textfield @error('state') error-field @enderror"
            value="{{ $location->state ?? old('value') }}">
        @error('state')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- country Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="country" class="text-xs uppercase text-gray-800 font-semibold ml-1">Country</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <input type="text" name="country" id="country" class="df-textfield @error('country') error-field @enderror"
            value="{{ $location->country ?? old('value') }}">
        @error('country')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- entry_code Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="entry_code" class="text-xs uppercase text-gray-800 font-semibold ml-1">entry code</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <input type="text" name="entry_code" id="entry_code"
            class="df-textfield @error('entry_code') error-field @enderror"
            value="{{ $location->entry_code ?? old('value') }}">
        @error('entry_code')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">


<!-- contact Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="contact" class="text-xs uppercase text-gray-800 font-semibold ml-1">contact</label>
    </div>
    <div class="w-full md:w-4/12 px-3">
        <input type="text" name="contact" id="contact" class="df-textfield @error('contact') error-field @enderror"
            value="{{ $location->contact ?? old('value') }}">
        @error('contact')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- email Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="email" class="text-xs uppercase text-gray-800 font-semibold ml-1">email</label>
    </div>
    <div class="w-full md:w-4/12 px-3">
        <input type="text" name="email" id="email" class="df-textfield @error('email') error-field @enderror"
            value="{{ $location->email ?? old('value') }}">
        @error('email')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- phone Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="phone" class="text-xs uppercase text-gray-800 font-semibold ml-1">phone</label>
    </div>
    <div class="w-full md:w-4/12 px-3">
        <input type="text" name="phone" id="phone" class="df-textfield @error('phone') error-field @enderror"
            value="{{ $location->phone ?? old('value') }}">
        @error('phone')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- Description Field -->
<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="comments" class="text-xs uppercase text-gray-800 font-semibold ml-1">Comments</label>
    </div>
    <div class="w-full md:w-11/12 px-4">
        <textarea name="comments" id="comments" cols="30" rows="5"
            class="df-textfield @error('comments') error-field @enderror">{{ $location->comments ?? old('value') }}</textarea>
        @error('comments')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- video Field -->
<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="video" class="text-xs uppercase text-gray-800 font-semibold ml-1">video</label>
    </div>
    <div class="w-full md:w-11/12 px-4">
        <textarea name="video" id="video" cols="30" rows="3"
            class="df-textfield @error('video') error-field @enderror">{{ $location->video ?? old('value') }}</textarea>
        @error('video')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- google_map Field -->
<div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="google_maps" class="text-xs uppercase text-gray-800 font-semibold ml-1">G-maps</label>
    </div>
    <div class="w-full md:w-11/12 px-4">
        <textarea name="google_maps" id="google_maps" cols="30" rows="3"
            class="df-textfield @error('google_maps') error-field @enderror">{{ $location->google_maps ?? old('value') }}</textarea>
        @error('google_maps')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- google_maps_shortlink Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="google_maps_shortlink" class="text-xs uppercase text-gray-800 font-semibold ml-1">G-maps url</label>
    </div>
    <div class="w-full md:w-11/12 px-3">
        <input type="text" name="google_maps_shortlink" id="google_maps_shortlink"
            class="df-textfield @error('google_maps_shortlink') error-field @enderror"
            value="{{ $location->google_maps_shortlink ?? old('value') }}">
        @error('google_maps_shortlink')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- public_transportation Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="public_transportation" class="text-xs uppercase text-gray-800 font-semibold ml-1">Bus/Tram</label>
    </div>
    <div class="w-full md:w-11/12 px-3">
        <input type="text" name="public_transportation" id="public_transportation"
            class="df-textfield @error('public_transportation') error-field @enderror"
            value="{{ $location->public_transportation ?? old('value') }}" placeholder="Public transportation">
        @error('public_transportation')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- contract Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="contract" class="text-xs uppercase text-gray-800 font-semibold ml-1">contract</label>
    </div>
    <div class="w-full md:w-3/12 px-3">
        <input type="file" name="contract" id="contract" value="{{ $location->contract ?? old('value') }}">
        @error('contract')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">