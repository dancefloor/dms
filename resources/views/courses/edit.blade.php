@extends('layouts.back')


@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
@endsection


@section('content')

<section>
    <h1 class="mb-5">Edit Course</h1>
    <div class="border rounded-lg bg-white px-3">
        <form action="{{ route('courses.update', $course) }}" method="post" class="df-form"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-4/6 px-3 py-5 border-r">

                    @include('courses.form.main.default')

                    @include('courses.form.main.online')

                    @include('courses.form.main.prices')

                    @include('courses.form.main.videos')

                    @include('courses.form.main.days')

                    @include('courses.form.main.students')
                </div>

                <div class="w-full md:w-2/6 px-3">

                    @include('courses.form.sidebar.styles')

                    @include('courses.form.sidebar.teachers')

                    @include('courses.form.sidebar.level')

                    @include('courses.form.sidebar.cover-image')


                    <h3 class="text-gray-700 font-semibold uppercase mb-3 ml-1 mt-5">Type of course</h3>

                    @include('courses.form.sidebar.type')

                    <h3 class="text-gray-700 font-semibold uppercase ml-1 mt-5">Teaching focus</h3>

                    @include('courses.form.sidebar.focus')

                    @include('courses.form.sidebar.status')

                    <div class="flex items-center">
                        <button type="submit"
                            class="inline-flex items-center bg-red-700 text-white hover:bg-red-800 py-2 px-4 rounded-lg mr-2">
                            @include('icons.save')
                            <span class="ml-2">Save Course</span>
                        </button>
                        <a href="{{ route('courses.index') }}"
                            class="inline-flex py-2 px-4 bg-gray-300 items-center rounded-lg hover:bg-gray-500 ml-1">
                            @include('icons.x', ['style'=>'w-3'])
                            <span class="ml-2">Cancel</span>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection



@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#start_date");
    flatpickr("#end_date");

    $(document).ready(function() {        
        $('#styles').select2({
            placeholder: "Enter style(s)",
        });
        $('#teachers').select2({
            placeholder: "Enter teacher(s)",
        });
        $('#students').select2({
            placeholder: "Enter student(s)",
        });
    });
</script>
@endpush