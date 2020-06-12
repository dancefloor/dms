<x-listing title="Courses" add="courses.create" model="Course">
    <x-slot name="icon">
        @include('icons.classroom',['style' => 'h-16 w-16'])
    </x-slot>
    <x-slot name="stats">
        <span class="text-sm text-gray-500">400 Total</span>
        <span class="text-sm text-gray-500 px-3">15 Classes</span>
        <span class="text-sm text-gray-500 px-3">300 Workshops</span>
        <span class="text-sm text-gray-500 px-3">85 Active</span>
        <span class="text-sm text-gray-500 px-3">33 Passed</span>
    </x-slot>
    <main>
        @include('courses.table')
    </main>
</x-listing>