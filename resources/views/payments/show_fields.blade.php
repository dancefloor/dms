<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $payment->code }}</p>
</div>

<!-- Method Field -->
<div class="form-group">
    {!! Form::label('method', 'Method:') !!}
    <p>{{ $payment->method }}</p>
</div>

<!-- Done Field -->
<div class="form-group">
    {!! Form::label('done', 'Done:') !!}
    <p>{{ $payment->done }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $payment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $payment->updated_at }}</p>
</div>

