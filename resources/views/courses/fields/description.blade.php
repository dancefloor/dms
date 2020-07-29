<!-- Description Field -->
@if ($course->description)
<h3 class="text-3xl uppercase text-gray-700 text-center font-bold">Description</h3>
<div class="flex justify-center">
    <div class="w-full md:w-3/5 my-5 p-10">
        <p>{!! $course->description !!}</p>
    </div>
</div>
@endif