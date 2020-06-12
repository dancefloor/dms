@extends('layouts.back')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
@endsection

@section('content')
@include('adminlte-templates::common.errors')
<section class="bg-black pt-10 pb-24 border-t border-gray-900">
    <div class="container mx-auto">
        <h1 class="text-white font-bold text-4xl mb-5">
            Edit Course
        </h1>
    </div>
</section>

<div class="container mx-auto -mt-24 px-4 bg-white rounded-lg shadow">
    {!! Form::model($course, ['route' => ['courses.update', $course->id ], 'class' =>
    'df-form', 'files' => true, 'method' => 'patch']) !!}

    @include('courses.fields')

    {!! Form::close() !!}
</div>
@endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#start_date");
    flatpickr("#end_date");

    $(document).ready(function() {        
        $('#styles').select2({
            placeholder: "Select a style",
        });
        $('#teachers').select2({
            placeholder: "Select a teacher(s)",
        });
    });
</script>
@endpush