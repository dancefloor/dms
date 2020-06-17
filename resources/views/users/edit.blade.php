@extends('layouts.back')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection

@section('content')
<section class="bg-black pt-10 pb-24 border-t border-gray-900">
</section>
<div class="container mx-auto -mt-24 px-4 bg-white rounded-lg shadow">
    <form action="{{ route('users.update', $user->id) }}" method="post" class="py-5 px-8" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1 class="text-2xl font-bold leading-7 text-gray-700 md:text-4xl sm:leading-9 sm:truncate mt-5 mb-10">Edit User
        </h1>
        @include('users.form.default')
        @include('users.form.user-info')
        @include('users.form.address')
        @include('users.form.social')
        @include('users.form.roles')
        <button type="submit" class="bg-red-700 text-white hover:bg-red-800 py-2 px-3 inline-flex rounded-full mt-10">
            @include('icons.add')
            <span class="ml-2">Edit User</span>
        </button>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#birthday");
</script>
@endpush