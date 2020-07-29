@extends('layouts.back')



@section('head')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container mx-auto my-10">
    <ul>
        @if (session()->has('errors'))
        <li>{{ session()->get('errors') }}</li>
        @endif
    </ul>

    <h1 class="text-gray-800 font-bold text-4xl mb-5">
        New Payment
    </h1>

    <form action="{{ route('payments.store') }}" method="POST">
        @csrf

        @include('payments.form.fields')


        <button type="submit" class="bg-red-700 hover:bg-red-800 rounded-full px-4 py-2 text-gray-100">
            Add Payment
        </button>

    </form>

</div>
@endsection


@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {        
        $('#courses').select2({
            placeholder: "Select a course(s)",
        });
    });
</script>
@endpush