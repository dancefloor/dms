<div class="bg-gray-100 -mt-20">
    <div class="container mx-auto">
        <header class="flex justify-between mx-3 mb-6 items-center">
            <h1 class="text-2xl font-bold leading-7 text-gray-700 md:text-4xl sm:leading-9 sm:truncate inline-flex ">
                @include('icons.keys', ['style'=>'w-12 h-12']) Permissions
            </h1>
            <a href="{{ route('permissions.create') }}"
                class="bg-red-600 hover:bg-red-800 py-2 px-4 rounded-full text-white inline-flex">
                @include('icons.add') <span class="ml-2">Add Permission</span>
            </a>
        </header>
        <section id="permissions-list" class="mx-3 pb-16">
            <ul class="border rounded-lg bg-white">
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
                @forelse ($permissions as $p)
                <li class="py-3 px-4 hover:bg-gray-200 grid grid-cols-4 gap-4 {{ $loop->last ? '': 'border-b'}} items-top
                    text-gray-600">
                    <div>
                        <a href="{{ route('permissions.show', $p) }}"
                            class="hover:underline font-semibold">{{ $p->name }}</a>
                    </div>
                    <div>
                        {{ $p->slug }}
                    </div>
                    <div>
                        {{ $p->label }}
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('permissions.edit', $p->id) }}" class="mx-3 hover:underline">
                            Edit
                        </a>
                        <form action="{{ route('permissions.destroy', $p) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-700 hover:underline">Remove</button>
                        </form>
                    </div>
                </li>
                @empty
                <li>There are no permissions yet</li>
                @endforelse
            </ul>
            <div class="my-2">
                {{ $permissions->links() }}
            </div>
        </section>
    </div>
</div>