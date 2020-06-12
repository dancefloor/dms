<!-- Promo Video Field -->
<div class="flex justify-center my-10">
    @if ($course->teaser_video_1 && $course->teaser_video_2 && $course->teaser_video_3)
    <div class="w-full flex flex-wrap -mx-3">
        <div class="w-full md:w-1/3 px-3">
            <div class="rounded-lg overflow-hidden">{!! $course->teaser_video_1 !!}</div>
        </div>
        <div class="w-full md:w-1/3 px-3 rounded-lg overflow-hidden">{!! $course->teaser_video_2 !!}</div>
        <div class="w-full md:w-1/3 px-3 rounded-lg overflow-hidden">{!! $course->teaser_video_3 !!}</div>
    </div>
    @elseif($course->teaser_video_1 && $course->teaser_video_2)
    <div class="w-full flex flex-wrap -mx-3">
        <div class="w-full md:w-1/2 px-3 rounded-lg overflow-hidden">
            <div class="rounded-lg overflow-hidden">{!! $course->teaser_video_1 !!}</div>
        </div>
        <div class="w-full md:w-1/2 px-3 rounded-lg overflow-hidden">
            <div class="rounded-lg overflow-hidden">{!! $course->teaser_video_2 !!}</div>
        </div>
    </div>
    @else
    <div>{!! $course->teaser_video_1 !!}</div>
    @endif
</div>

<br>
<!-- Description Field -->
@if ($course->description)
<div class="flex justify-center my-5">
    <div class="max-w-3xl border rounded-lg my-5 p-10 shadow">
        <h3 class="text-sm uppercase text-gray-600 text-center mb-5">Description</h3>
        <p>{{ Illuminate\Mail\Markdown::parse($course->description) }}</p>
    </div>
</div>
@endif

@if ($course->students()->count() > 0)
<section id="students-list" class="mb-6">
    <h3 class="font-semibold text-lg text-gray-700">Students</h3>
    <ul class="border rounded-lg">
        @foreach ($course->students as $item)
        <li class="py-2 px-3 {{ $loop->first ? '' : 'border-b'}}">
            <div class="inline-flex items-center">
                <img src="{{ asset($item->avatar)}}" alt="" class="w-8 rounded-full">
                <div class="ml-2">
                    {{$item->firstname}} {{$item->lastname}}
                    <span class="italic text-gray-600">{{$item->email}} </span>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</section>
@endif

@if ($course->online_link)
<section>
    <table>
        <tr>
            <td>zoom</td>
            <td>{{ $course->online_link }}</td>
        </tr>
        @if ($course->online_id)
        <tr>
            <td>id</td>
            <td>{{ $course->online_id }}</td>
        </tr>
        <tr>
            <td>password</td>
            <td>{{ $course->online_password }}</td>
        </tr>
        @endif
    </table>
</section>
@endif