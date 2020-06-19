{{-- Filters --}}
<div class="bg-white px-4 border-b border-gray-200 sm:px-6">
    <div class="pt-3 pb-4 sm:p-0">
        <div class="sm:hidden">
            <select
                class="form-select block w-full text-gray-900 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition ease-in-out duration-150">
                <option>All</option>
                <option>Active</option>
                <option selected="">Workshops</option>
                <option>Salsa on1</option>
                <option>Salsa on2</option>
                <option>Cuban</option>
                <option>Afro-beats</option>
                <option>Men-styling</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <div>
                <nav class="-mb-px flex">
                    <a href="#"
                        class="whitespace-no-wrap py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        All
                    </a>
                    <a href="{{ route('courses.index', ['type' => 'class'])}}"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Classes
                    </a>
                    <a href="#"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-red-500 font-medium text-sm leading-5 text-red-600 focus:outline-none focus:text-red-800 focus:border-red-700 transition ease-in-out duration-150">
                        Salsa on1
                    </a>
                    <a href="#"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Salsa on2
                    </a>
                    <a href="#"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Cuban
                    </a>
                    <a href="#"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Men stying
                    </a>
                    <a href="#"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Lady stying
                    </a>
                    <a href="#"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Afro-beats
                    </a>
                    <a href="#"
                        class="whitespace-no-wrap ml-8 py-4 px-1 border-b-2 border-transparent font-medium text-sm leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition ease-in-out duration-150">
                        Dancehall
                    </a>
                </nav>
            </div>
        </div>
    </div>
</div>


{{-- Seach field  --}}
<div class="px-4 pt-5 pb-3 sm:px-6">

    <form action="{{ route('courses.index') }}" method="get">
        <div>
            <label for="filter" class="sr-only">Search courses</label>
            <div class="flex rounded-md shadow-sm">
                <div class="relative flex-grow focus-within:z-10">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input id="search" type="search" name="search"
                        class="appearance-none rounded-none block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-l-md text-gray-900 placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 transition ease-in-out duration-150"
                        placeholder="Search..." value="{{ request()->query('search') }}">
                </div>
                <button
                    class="-ml-px relative flex items-center px-3 py-2 rounded-r-md border border-gray-300 text-sm leading-5 bg-gray-200 text-gray-900 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 transition ease-in-out duration-150">
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-2">Filter</span>
                </button>
            </div>
        </div>
    </form>
</div>


{{-- List of students --}}
<ul class="mt-2">
    @forelse ($courses as $item)
    <li class="border-t border-gray-200">
        <a href="{{ route('courses.show', $item) }}"
            class="block hover:bg-gray-200 focus:outline-none focus:bg-gray-200 transition duration-150 ease-in-out">
            <div class="flex items-center px-4 py-4 sm:px-6">
                <div class="min-w-0 flex-1 flex items-center">
                    <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-3 md:gap-4 items-center">
                        <div>
                            <div class="text-sm leading-5 font-medium text-red-800 truncate uppercase">
                                {{ $item->name }}
                            </div>
                            <div class="flex items-center text-sm leading-5 text-gray-500">
                                {{ $item->type }} {{ implode(', ', $item->days) }}
                            </div>
                        </div>
                        <div class="hidden md:block">
                            <div class="flex">
                                @foreach ($item->teachers as $teacher)
                                <img src="{{$teacher->avatar}}" alt=""
                                    class="w-10 rounded-full border hover:border-white shadow-solid -ml-1">
                                @endforeach
                            </div>
                        </div>

                        <div class="text-gray-700">
                            {{-- {{$item->students->count()}} --}}
                            20 students registered
                        </div>
                    </div>
                </div>
                <div>
                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
        </a>
    </li>
    @empty
    <li>
        <div class="flex justify-center py-10">
            There are no courses availables currently
        </div>
    </li>
    @endforelse
</ul>



{{-- Pagination --}}

<div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
    {{ $courses->links() }}
</div>



{{-- <div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Promo Video</th>
                <th>Start Date</th>
                <th>Start Time</th>
                <th>End Date</th>
                <th>End Time</th>
                <th>Level</th>
                <th>Full Price</th>
                <th>Reduced Price</th>
                <th>Promo Price</th>
                <th>Color</th>
                <th>Cover Image</th>
                <th>Icon</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
<td>{{ $course->promo_video }}</td>
<td>{{ $course->start_date }}</td>
<td>{{ $course->start_time }}</td>
<td>{{ $course->end_date }}</td>
<td>{{ $course->end_time }}</td>
<td>{{ $course->level }}</td>
<td>{{ $course->full_price }}</td>
<td>{{ $course->reduced_price }}</td>
<td>{{ $course->promo_price }}</td>
<td>{{ $course->color }}</td>
<td>{{ $course->cover_image }}</td>
<td>{{ $course->icon }}</td>
<td>
    {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
    <div class='btn-group'>
        <a href="{{ route('courses.show', [$course->id]) }}" class='btn btn-default btn-xs'><i
                class="glyphicon glyphicon-eye-open"></i></a>
        <a href="{{ route('courses.edit', [$course->id]) }}" class='btn btn-default btn-xs'><i
                class="glyphicon glyphicon-edit"></i></a>
        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' =>
        'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
    </div>
    {!! Form::close() !!}
</td>
</tr>
@endforeach
</tbody>
</table>
</div> --}}