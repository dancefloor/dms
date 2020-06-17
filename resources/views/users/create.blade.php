{{-- tutorial https://hdtuto.com/article/laravel-57-image-upload-with-validation-example --}}
@extends('layouts.back')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/min/dropzone.min.css" rel="stylesheet">

@endsection

@section('content')
<section class="bg-black pt-10 pb-24 border-t border-gray-900">
</section>
<div class="container mx-auto -mt-24 px-4 bg-white rounded-lg shadow">


    {{-- <h1>Upload Multiple Images using dropzone.js and Laravel</h1>
    {!! Form::open([ 'route' => [ 'users.store' ], 'files' => true, 'enctype' => 'multipart/form-data', 'class'
    => 'dropzone', 'id' => 'image-upload' ]) !!}
    <div>
        <h3>Upload Multiple Image By Click On Box</h3>
    </div>
    {!! Form::close() !!} --}}

    <form action="{{ route('users.store') }}" method="post" class="py-5 px-8" enctype="multipart/form-data">
        @csrf
        <h1 class="text-2xl font-bold leading-7 text-gray-700 md:text-4xl sm:leading-9 sm:truncate mt-5 mb-10">
            New User
        </h1>


        @include('users.form.default')
        @include('users.form.user-info')
        @include('users.form.address')
        @include('users.form.social')
        @include('users.form.roles')





        <button type="submit" class="bg-red-700 text-white hover:bg-red-800 py-2 px-3 inline-flex rounded-full mt-10">
            @include('icons.add')
            <span class="ml-2">Add User</span>
        </button>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.1/min/dropzone.min.js"></script>
<script src="{!!url('/js/jquery.min.js')!!}"></script>
<script>
    flatpickr("#birthday");

    // let $dropzone = $('#dropzone');

    $("#dropzone").dropzone({ url: "{{ route('users.store') }}" });
    // var dropzone = new Dropzone("div#dropzone", {url: "{{ route('users.store') }}" });
    
    dropzone.on('drag dragstart dragend dragover dragenter dragleave drop', function (event) {        
        event.preventDefault();
        event.stopPropagation();
    }).on('drop', function(event) {
        document.querySelector('#picture').files = event.originalEvent.dataTransfer.files;
    });
    
    dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
    };
    
        
</script>
@endpush