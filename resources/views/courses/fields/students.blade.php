@if ($course->students()->count() > 0)
<h3 class="uppercase mt-20 mb-10 text-3xl text-center text-gray-700 font-bold">Students</h3>

<section id="students-list">

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    {{-- Title --}}
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Registered at
                                </th>
                                <th class="px-6 py-3 bg-gray-50"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($course->students as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ asset($item->avatar)}}" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm leading-5 font-medium text-gray-900">
                                                {{$item->firstname}} {{$item->lastname}}
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">
                                                {{$item->email}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{-- <div class="text-sm leading-5 text-gray-900">Regional Paradigm Technician</div>
                                    <div class="text-sm leading-5 text-gray-500">Optimization</div> --}}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{-- {{ auth()->user()->registrationStatus($course->id) }} --}}
                                    <x-registration-status uid="{{ $item->id }}" cid="{{ $course->id }}" />
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    {{ $item->registrationDate($course->id) }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                    <a href="{{ route('users.show', $item) }}"
                                        class="text-red-800 hover:text-red-700">View</a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- More rows... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endif