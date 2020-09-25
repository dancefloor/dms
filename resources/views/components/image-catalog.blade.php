<div class="flex flex-wrap -mx-6">
    @forelse ($courses as $course)
    <div class="w-full md:w-1/3 px-6 mb-3">
        <a href="{{route('courses.show', $course )}}">
            <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                <div class="flex-shrink-0 h-56">
                    {!! $course->teaser_video_1 !!}
                    {{-- <img class="h-48 w-full object-cover" src="{{ asset('uploads/' . $course->thumbnail)}}" alt="">
                    --}}
                </div>
                <div class="flex-1 bg-white p-6 flex flex-col justify-between -mt-8 sm:-mt-5 md:-mt-2 relative z-10">
                    <div class="flex-1">
                        <div class="flex justify-between items-center">
                            <p class="text-base leading-6 text-gray-500 capitalize">
                                {{ $course->level }}
                            </p>
                            <h3 class="font-bold uppercase leading-6 text-base">CHF {{ $course->online_price }}</h3>
                        </div>
                        <a href="{{route('courses.show', $course )}}" class="block">
                            <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900 hover:text-red-800">
                                {{ $course->name }}
                            </h3>
                        </a>
                        <p class="mt-2 text-sm leading-5 font-medium text-red-700">
                            @foreach ($course->styles as $item)
                            <span
                                class="bg-red-300 text-red-800 font-medium leading-4 text-xs px-3 py-1 rounded-full mb-3 inline-block">
                                {{ $item->name }}
                            </span>
                            @endforeach

                        </p>
                        <div class="">
                            @foreach ($course->teachers as $teacher)
                            <div class="inline-flex items-center mr-2 my-2">
                                <img src="{{$teacher->avatar}}" alt="" class="w-8 rounded-full">
                                <span class="truncate ml-1">{{ $teacher->firstname }} {{ $teacher->lastname }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </a>
    </div>
    @empty
    <h3>No courses available</h3>
    @endforelse
</div>