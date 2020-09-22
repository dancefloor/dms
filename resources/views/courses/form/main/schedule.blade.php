@isset($course)
@switch($day)
@case('monday')
@php
$start_time = $course->start_time_mon;
$end_time = $course->end_time_mon;
@endphp
@break
@case('tuesday')
@php
$start_time = $course->start_time_tue;
$end_time = $course->end_time_tue;
@endphp
@break
@case('wednesday')
@php
$start_time = $course->start_time_wed;
$end_time = $course->end_time_wed;
@endphp
@break
@case('thursday')
@php
$start_time = $course->start_time_thu;
$end_time = $course->end_time_thu;
@endphp
@break
@case('friday')
@php
$start_time = $course->start_time_mon;
$end_time = $course->end_time_mon;
@endphp
@break
@case('saturday')
@php
$start_time = $course->start_time_sat;
$end_time = $course->end_time_sat;
@endphp
@break
@case('sunday')
@php
$start_time = $course->start_time_sun;
$end_time = $course->end_time_sun;
@endphp
@break
@endswitch
@endisset
<div class="flex flex-wrap items-top">
    <div class="w-full md:w-1/2 px-2">
        <input class="df-textfield" type="time" id="start_time_{{ $day }}" name="start_time_{{ $day }}"
            value="{{ $start_time ?? old('value') }}">
    </div>
    <div class="w-full md:w-1/2 px-2">
        <input class="df-textfield" type="time" id="end_time_{{ $day }}" name="end_time_{{ $day }}"
            value="{{ $end_time ?? old('value') }}">
    </div>
</div>