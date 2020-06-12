@extends('layouts.back')



@section('content')
@include('adminlte-templates::common.errors')
<section class="bg-black pt-10 pb-24 border-t border-gray-900">
    <h1>New Style</h1>
</section>
<div class="container mx-auto -mt-24 px-4 bg-white rounded-lg shadow">

    {!! Form::open(['route' => 'styles.store', 'files' => true, 'class'=> 'df-form']) !!}

    @include('styles.fields')

    {!! Form::close() !!}

</div>
@endsection