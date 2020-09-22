<div class="flex flex-wrap -mx-6">
    @forelse ($courses as $course)
    <div class="w-full md:w-1/3 px-6 mb-3">
        <a href="{{route('courses.show', $course )}}">
            <div class="bg-cover bg-center rounded-lg min-h-64 text-white pt-6 pb-4 px-10 object-fill shadow hover:shadow-2xl"
                style="background-image: url({{ asset('uploads/' . $course->thumbnail)}})">
                <div class="flex justify-between items-center pb-8">
                    <div>
                        @foreach ($course->styles as $item)
                        <span
                            class="bg-red-700 text-red-100 font-medium leading-4 text-xs px-3 py-1 rounded-full mb-3 inline-block">
                            {{ $item->name }}
                        </span>
                        @endforeach
                    </div>
                    <h4 class="capitalize text-base font-medium leading-4" style="text-shadow: 1px 1px #000000">
                        {{ $course->level }}
                    </h4>
                </div>
                <div class="md:w-2/3">
                    <br>
                    <br>
                    <br>
                    <h3 class="text-3xl font-bold mt-20" style="text-shadow: 1px 1px #000000">
                        {{ $course->name }}
                    </h3>
                    <br>
                    {{-- <p class="text-2xl mb-10 leading-none">Atractive designs for your brand</p> --}}
                </div>
                <div class="flex justify-between items-center">
                    <div>
                        @foreach ($course->teachers as $teacher)
                        <div class="inline-flex items-center mr-2 my-2">
                            <img src="{{$teacher->avatar}}" alt="" class="w-8 rounded-full">
                            <span class="truncate ml-1"
                                style="text-shadow: 1px 1px #000000">{{ $teacher->firstname }}</span>
                        </div>
                        @endforeach
                    </div>
                    <div class="text-white font-bold uppercase text-base" style="text-shadow: 1px 1px #000000">
                        CHF {{ $course->online_price}}
                    </div>
                </div>
            </div>
        </a>
    </div>
    @empty
    No courses available
    @endforelse
</div>