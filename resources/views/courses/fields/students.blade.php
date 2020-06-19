@if ($course->students()->count() > 0)
<h3 class="uppercase mt-20 mb-10 text-3xl text-center text-gray-700 font-bold">Students</h3>
<div class="flex justify-center">
    <section id="students-list" class="w-full md:w-3/5 mb-6">
        <ul class="border rounded-lg">
            @foreach ($course->students as $item)
            <li class="py-2 px-3 {{ $loop->last ? '' : 'border-b'}}">
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
</div>
@endif