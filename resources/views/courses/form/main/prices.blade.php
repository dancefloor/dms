<h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 my-6 text-center">Pricing</h3>

<!-- Full price field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="full_price" class="text-xs uppercase text-gray-800 font-semibold ml-1">Full Price</label>
    </div>
    <div class="w-full md:w-4/12 px-4">
        <input type="number" name="full_price" id="full_price"
            class="df-textfield @error('full_price') error-field @enderror" placeholder="Ex: 160"
            value="{{ $course->full_price ?? old('value') }}">
        @error('full_price')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">

<!-- Reduced price field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="reduced_price" class="text-xs uppercase text-gray-800 font-semibold ml-1">Reduced Price</label>
    </div>
    <div class="w-full md:w-4/12 px-4">
        <input type="number" name="reduced_price" id="reduced_price"
            class="df-textfield @error('reduced_price') error-field @enderror" placeholder="Ex: 140"
            value="{{ $course->reduced_price ?? old('value') }}">
        <p class="text-sm text-gray-600 italic">Price for students and unemployed</p>
        @error('reduced_price')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">


<!-- Promo Price Field -->
<div class="flex flex-wrap items-center -mx-3">
    <div class="w-full md:w-2/12 px-3">
        <label for="promo_price" class="text-xs uppercase text-gray-800 font-semibold ml-1">Promo Price</label>
    </div>
    <div class="w-full md:w-4/12 px-4">
        <input type="number" name="promo_price" id="promo_price"
            class="df-textfield @error('promo_price') error-field @enderror" placeholder="Ex: 100"
            value="{{ $course->promo_price ?? old('value') }}">
        @error('promo_price')
        <p class="text-red-600 text-sm">{{ $message}}</p>
        @enderror
    </div>
</div>
<hr class="my-5 -mx-3">