<!-- Name Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="name" class="text-xs uppercase text-gray-800 font-semibold ml-1">Name</label>
    </div>
    <div class="w-full md:w-11/12 px-4">
        <input type="text" name="name" id="name" class="df-textfield @error('name') error-field @enderror"
            value="{{ $classroom->name ?? old('value') }}">
        @error('name')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- Shortname Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="m2" class="text-xs uppercase text-gray-800 font-semibold ml-1">m2</label>
    </div>
    <div class="w-full md:w-2/12 px-4">
        <input type="number" name="m2" id="m2" class="df-textfield @error('m2') error-field @enderror"
            value="{{ $classroom->m2 ?? old('value') }}" placeholder="Squared meters">
        @error('m2')
        <p class="text-red-600 text-sm">{{ $message }}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- capacity Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="capacity" class="text-xs uppercase text-gray-800 font-semibold ml-1">capacity</label>
    </div>
    <div class="w-full md:w-2/12 px-3">
        <input type="number" name="capacity" id="capacity" class="df-textfield @error('capacity') error-field @enderror"
            placeholder="Capacity" value="{{ $classroom->capacity ?? old('value') }}">
        @error('capacity')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">




<!-- limit_couples info Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="limit_couples" class="text-xs uppercase text-gray-800 font-semibold ml-1">Couples</label>
    </div>
    <div class="w-full md:w-2/12 px-3">
        <input type="number" name="limit_couples" id="limit_couples"
            class="df-textfield @error('limit_couples') error-field @enderror" placeholder="Limit of couples"
            value="{{ $classroom->limit_couples ?? old('value') }}">
        @error('limit_couples')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- price_hour Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="price_hour" class="text-xs uppercase text-gray-800 font-semibold ml-1">price/hour</label>
    </div>
    <div class="w-full md:w-2/12 px-3">
        <input type="number" name="price_hour" id="price_hour" value="{{ $classroom->price_hour ?? old('value') }}"
            class="df-textfield @error('price_hour') error-field @enderror" placeholder="Price per hour">
        @error('price_hour')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">



<!-- price_month Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="price_month" class="text-xs uppercase text-gray-800 font-semibold ml-1">price_month</label>
    </div>
    <div class="w-full md:w-2/12 px-3">
        <input type="number" name="price_month" id="price_month"
            class="basic df-textfield @error('price_month') error-field @enderror"
            value="{{ $classroom->price_month ?? old('value') }}" placeholder="Price per month">
        @error('price_month')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">




<!-- color Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="color" class="text-xs uppercase text-gray-800 font-semibold ml-1">color</label>
    </div>
    <div class="w-full md:w-2/12 px-3">
        <input type="text" name="color" id="color" class="df-textfield @error('color') error-field @enderror"
            value="{{ $classroom->color ?? old('value') }}">
        @error('color')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">




<!-- dance_shoes Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="dance_shoes" class="text-xs uppercase text-gray-800 font-semibold ml-1">Shoes</label>
    </div>
    <div class="w-full md:w-4/12 px-3">
        <select name="dance_shoes" id="dance_shoes" class="border py-2 w-full px-2 rounded">
            <option value="0" @isset($classroom) {{ $classroom->dance_shoes == 0 ? 'selected' : '' }} @endisset>
                No, It doesn't required dancing shoes
            </option>
            <option value="1" @isset($classroom) {{ $classroom->dance_shoes == 1 ? 'selected' : '' }} @endisset>
                Yes, dancing shoes are obligatory
            </option>
        </select>
    </div>
</div>
<hr class="my-5 -mx-3">


<!-- location_id Field -->
<div class="flex flex-wrap items-center mb-6 -mx-3">
    <div class="w-full md:w-1/12 px-3">
        <label for="location" class="text-xs uppercase text-gray-800 font-semibold ml-1">location</label>
    </div>
    <div class="w-full md:w-4/12 px-3">
        <select name="location" id="location"
            class="border py-2 w-full px-2 rounded @error('location') error-field @enderror"">
            <option default selected disabled>Select a Location</option>
            @foreach ($locations as $item)            
            <option value=" {{ $item->id }}" @isset($classroom)
            {{ $classroom->location->id == $item->id ? 'selected' : '' }} @endisset>
            {{ $item->shortname ?? $item->name }}
            </option>
            @endforeach
        </select>
        @error('location')
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
            class="df-textfield @error('comments') error-field @enderror">{{ $classroom->comments ?? old('value') }}</textarea>
        @error('comments')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">