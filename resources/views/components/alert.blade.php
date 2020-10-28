<div class="" x-data="{ open: true }" x-show="open">
    <!--Header Alert-->
    <div class="alert-banner w-full mt-16">
        <label
            class="close cursor-pointer flex items-center justify-between w-full py-4 px-5 bg-orange-500 text-orange-100 font-bold"
            title="close" for="banneralert">
            {{ session()->get('alert') }}
            <button type="button" @click="open = false">
                @include('icons.x', ['style'=>'w-4'])
            </button>
        </label>
    </div>
</div>