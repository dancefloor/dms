<div>
    <div class="flex flex-wrap -mx-3 mb-4">
        <div class="w-full md:w-1/4 px-3 mb-1">
            <div class="relative">
                <select
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-full leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="user" name="user" wire:model="uid">
                    <option default disabled selected>Select student</option>
                    @foreach (\App\User::all() as $item)
                    <option value="{{ $item->id }}">{{ $item->firstname }} {{ $item->lastname }}</option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-full md:w-3/4 px-3 mb-1">
            @isset($user)
            <select name="courses[]" id="courses" class="w-full" style="width: 100%" multiple>
                @foreach (\App\Models\Course::all() as $item)
                <option value="{{ $item->id }}" {{ $user->isRegistered($item->id) ? 'selected':''}}>
                    {{ $item->name }}
                </option>
                @endforeach
            </select>
            @endisset
        </div>
    </div>
</div>