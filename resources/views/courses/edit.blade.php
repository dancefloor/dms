@extends('layouts.back')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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


    {{-- tutorials https://codepen.io/ryangjchandler/pen/qBOEgjg?editors=1010 --}}

    <div class="flex flex-wrap -mx-3">
        <div class="w-full md:w-4/6 px-3">

            @include('courses.form.default')

            <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Promotion</h3>

            @include('courses.form.promotion')

            <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Pricing</h3>

            @include('courses.form.prices')

            <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Schedule</h3>

            @include('courses.form.days')

            <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Students</h3>

            @include('courses.form.students')
        </div>

        <div class="w-full md:w-2/6 px-3">
            <!-- Cover Image Field -->
            @include('courses.form.cover-image')

            @include('courses.form.styles')

            @include('courses.form.teachers')

            @include('courses.form.level')

            <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Teaching focus</h3>

            @include('courses.form.focus')

            <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-10">Type of course</h3>

            @include('courses.form.type')

        </div>
    </div>


    <!-- Submit Field -->
    <div class="my-10">
        <button type="submit" class="btn-save inline-flex">
            @include('icons.save')
            <span class="ml-2">Save Course</span>
        </button>
        <a href="{{ route('courses.index') }}" class="btn-cancel">Cancel</a>
    </div>

    {!! Form::close() !!}
</div>
@endsection


@push('scripts')
{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script> --}}
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
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
        $('#students').select2({
            placeholder: "Select a students",
        });
    });

    $('#description').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });

</script>
@endpush