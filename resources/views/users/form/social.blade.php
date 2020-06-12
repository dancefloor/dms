<h2 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Address</h2>

<div class="flex flex-wrap mb-4 -mx-3 items-center">
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500 @error('facebook') border-red-500 @enderror"
            id="facebook" type="text" placeholder="facebook" name="facebook"
            value="{{ $user->facebook ?? old('facebook') }}" autocomplete="facebook">
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('instagram') border-red-500 @enderror"
            id="instagram" type="text" placeholder="instagram" name="instagram"
            value="{{ $user->instagram ?? old('instagram') }}" autocomplete="instagram">
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('youtube') border-red-500 @enderror"
            id="youtube" type="text" placeholder="youtube" name="youtube" value="{{ $user->youtube ?? old('youtube') }}"
            autocomplete="youtube">
    </div>
</div>

<div class="flex flex-wrap mb-4 -mx-3 items-center">
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('tiktok') border-red-500 @enderror"
            id="tiktok" type="text" placeholder="tiktok" name="tiktok" value="{{ $user->tiktok ?? old('tiktok') }}"
            autocomplete="tiktok">
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('twitter') border-red-500 @enderror"
            id="twitter" type="text" placeholder="twitter" name="twitter" value="{{ $user->twitter ?? old('twitter') }}"
            autocomplete="twitter">
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('snapchat') border-red-500 @enderror"
            id="snapchat" type="text" placeholder="snapchat" name="snapchat"
            value="{{ $user->snapchat ?? old('snapchat') }}" autocomplete="snapchat">
    </div>
</div>

<div class="flex flex-wrap mb-4 -mx-3 items-center">
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('linkedin') border-red-500 @enderror"
            id="linkedin" type="text" placeholder="linkedin" name="linkedin"
            value="{{ $user->linkedin ?? old('linkedin') }}" autocomplete="linkedin">
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('skype') border-red-500 @enderror"
            id="skype" type="text" placeholder="skype" name="skype" value="{{ $user->skype ?? old('skype') }}"
            autocomplete="skype">
    </div>
    <div class="w-full md:w-1/3 px-3">
        <input
            class="appearance-none block w-full bg-gray-200 text-gray-700 rounded-full py-2 px-3 leading-tight focus:outline-none focus:bg-white border border-gray-200 focus:border-gray-500  @error('pinterest') border-red-500 @enderror"
            id="pinterest" type="text" placeholder="pinterest" name="pinterest"
            value="{{ $user->pinterest ?? old('pinterest') }}" autocomplete="pinterest">
    </div>
</div>