@extends('layouts.back')

@section('content')
<section class="content-header">
    <h1>
        Style
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::model($style, ['route' => ['styles.update', $style->id], 'method' => 'patch', 'files' =>
                true]) !!}

                @include('styles.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection