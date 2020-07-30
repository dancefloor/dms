<div class="flex flex-wrap my-20 items-center border shadow-lg rounded-lg bg-white">
    <div class="w-full md:w-1/2">
        @if ($course->thumbnail)
        <img src="{{ asset($course->thumbnail) }}" alt="" class="rounded-l-lg">
        @else
        <img src="{{ asset('images/coco-fred.jpg') }}" alt="" class="rounded-l-lg">
        @endif

    </div>
    <div class="w-full md:w-1/2 px-5">
        <h1 class="text-3xl font-bold">{{ $course->name }}</h1>
        <div class="mb-8">
            <div class="text-sm text-gray-600 flex items-center mb-8">
                <div class="inline-flex items-center mr-3">
                    @include('icons.dance')
                    @foreach ($course->styles as $item)
                    <span class="mx-1">{{ $item->name }}</span>
                    @endforeach
                </div>

                @include('icons.level')
                <span class="ml-2 capitalize">{{ $course->level }} {{ $course->level_number }}</span>
            </div>
            <div class="text-gray-900 font-bold text-xl mb-2">{{ $course->tagline }}</div>
            <p class="text-gray-700 text-base">{{ $course->excerpt }}</p>
        </div>
        <div class="mb-5">
            <table class="w-full">
                <tr>
                    <td class="text-sm uppercase font-bold text-gray-800 inline-flex items-center">
                        @include('icons.calendar')
                        <span class="ml-1">Period</span>
                    </td>
                    @if ($course->start_date)
                    <td class="text-gray-600">{{ $course->start_date->format('d F Y') }} -
                        {{ $course->end_date->format('d F Y') }}</td>
                    @endif
                </tr>
                <tr>
                    <td class=" text-sm uppercase text-gray-800 font-bold inline-flex items-center">
                        @include('icons.time')
                        <span class="ml-1">Time</span>
                    </td>
                    <td class="text-gray-600">
                        @if ($course->monday)
                        <span>Monday</span>
                        {{ date('H:i', strtotime($course->start_time_mon)) }} -
                        {{ date('H:i', strtotime($course->end_time_mon)) }}
                        @endif

                        @if ($course->tuesday)
                        <span>Tuesday</span>
                        {{ date('H:i', strtotime($course->start_time_tue)) }} -
                        {{ date('H:i', strtotime($course->end_time_tue)) }}
                        @endif

                        @if ($course->wednesday)
                        Thursday: {{ date('H:i', strtotime($course->start_time_thu)) }} -
                        {{ date('H:i', strtotime($course->end_time_thu)) }}
                        @endif

                        @if ($course->thursday)
                        Thursday: {{ date('H:i', strtotime($course->start_time_thu)) }} -
                        {{ date('H:i', strtotime($course->end_time_thu)) }}
                        @endif

                        {{ $course->monday }}
                        {{ $course->tuesday }}
                        {{ $course->wednesday }}

                        {{ $course->friday }}
                        {{ $course->saturday }}
                    </td>
                </tr>
                <tr>
                    <td class=" text-sm uppercase text-gray-800 font-bold inline-flex items-center">
                        @include('icons.price-tag')
                        <span class="ml-1">Price</span>
                    </td>
                    <td class="text-gray-600">
                        Full {{ $course->full_price}} CHF / Reduced {{ $course->reduced_price}} CHF /
                        {{ $course->promo_price }}
                    </td>
                </tr>
                <tr>
                    <td width="25%"></td>
                    <td></td>
                </tr>
            </table>
        </div>
        <h3 class="font-semibold text-sm uppercase text-gray-700 block my-2">Teachers</h3>
        <div class="flex items-center">

            @forelse ($course->teachers as $teacher)
            <div class="inline-flex mr-5 items-center">
                <img class="w-10 h-10 rounded-full mr-4 border border-3 border-gray-400"
                    src="{{ asset($teacher->avatar) }}" alt="{{ $teacher->firstname }}">
                <div class="text-sm">
                    <p class="text-gray-900 leading-none">{{ $teacher->firstname }} {{ $teacher->lastname }}</p>
                </div>
            </div>
            @empty

            @endforelse
        </div>
        <a href="#" title="Register"
            class="border border-red-800 text-red-800 py-1 px-3 rounded-full mt-8 mb-6 inline-flex hover:bg-red-700 hover:text-white">
            <span>@include('icons.registration', ['style'=>'w-5 mr-1 inline-flex'])Register</span>
        </a>
        {{-- <a href="{{ route('mollie.payment')}}">Mollie</a> --}}
    </div>
</div>