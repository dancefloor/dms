<ul>
    <li
        class="py-3 px-4 hover:bg-gray-200 grid grid-cols-4 gap-4 border-b bg-gray-200 rounded-t-lg items-top text-gray-600 text-sm uppercase">
        <div>
            Name
        </div>
        <div>
            Slug
        </div>
        <div>
            Label
        </div>
        <div class="flex justify-end">
        </div>
    </li>
    @foreach ($roles as $role)
    <li
        class="py-3 px-4 hover:bg-gray-200 grid grid-cols-4 gap-4 {{ $loop->last ? '': 'border-b'}} items-top text-gray-600">
        <div>
            <a href="{{ route('roles.show', $role->id) }}" class="font-semibold hover:underline">{{ $role->name }}</a>
        </div>
        <div>
            {{ $role->slug }}
        </div>
        <div>
            {{ $role->label }}
        </div>
        <div class="flex justify-end">
            <a href="{{ route('roles.edit', $role->id) }}" class="mx-3 hover:underline">
                Edit
            </a>
            <form action="" method="post">
                <button type="submit" class="text-red-700 hover:underline">Remove</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>