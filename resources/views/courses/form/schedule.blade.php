@isset($course)
@switch($day)
@case('mon')
@php
$start_time = $course->start_time_mon;
$end_time = $course->end_time_mon;
@endphp
@break
@case('tue')
@php
$start_time = $course->start_time_tue;
$end_time = $course->end_time_tue;
@endphp
@break
@case('wed')
@php
$start_time = $course->start_time_wed;
$end_time = $course->end_time_wed;
@endphp
@break
@case('thu')
@php
$start_time = $course->start_time_thu;
$end_time = $course->end_time_thu;
@endphp
@break
@case('fri')
@php
$start_time = $course->start_time_mon;
$end_time = $course->end_time_mon;
@endphp
@break
@case('sat')
@php
$start_time = $course->start_time_sat;
$end_time = $course->end_time_sat;
@endphp
@break
@default
@php
$start_time = $course->start_time_sun;
$end_time = $course->end_time_sun;
@endphp
@endswitch
@endisset
<div class="flex flex-wrap">
    <div class="w-full md:w-1/2 p-2">
        <input type="time" id="start_time_{{ $day }}" name="start_time_{{ $day }}"
            value="{{ $start_time ?? old('value') }}">
    </div>
    <div class="w-full md:w-1/2 p-2">
        <input type="time" id="end_time_{{ $day }}" name="end_time_{{ $day }}" value="{{ $end_time ?? old('value') }}">
    </div>
</div>