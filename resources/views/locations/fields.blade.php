<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Info Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address_info', 'Address Info:') !!}
    {!! Form::text('address_info', null, ['class' => 'form-control']) !!}
</div>

<!-- Postal Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postal_code', 'Postal Code:') !!}
    {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state', 'State:') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- M2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('m2', 'M2:') !!}
    {!! Form::text('m2', null, ['class' => 'form-control']) !!}
</div>

<!-- Capacity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacity', 'Capacity:') !!}
    {!! Form::number('capacity', null, ['class' => 'form-control']) !!}
</div>

<!-- Limit Couples Field -->
<div class="form-group col-sm-6">
    {!! Form::label('limit_couples', 'Limit Couples:') !!}
    {!! Form::number('limit_couples', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Hour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_hour', 'Price Hour:') !!}
    {!! Form::text('price_hour', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Month Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price_month', 'Price Month:') !!}
    {!! Form::text('price_month', null, ['class' => 'form-control']) !!}
</div>

<!-- Dance Shoes Field -->
<div class="form-group col-sm-12">
    {!! Form::label('dance_shoes', 'Dance Shoes:') !!}
    <label class="radio-inline">
        {!! Form::radio('dance_shoes', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('dance_shoes', "0", null) !!} No
    </label>

</div>

<!-- Comments Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comments', 'Comments:') !!}
    {!! Form::textarea('comments', null, ['class' => 'form-control']) !!}
</div>

<!-- Contact Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contact', 'Contact:') !!}
    {!! Form::text('contact', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Contract Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contract', 'Contract:') !!}
    {!! Form::file('contract') !!}
</div>
<div class="clearfix"></div>

<!-- Video Field -->
<div class="form-group col-sm-6">
    {!! Form::label('video', 'Video:') !!}
    {!! Form::text('video', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('locations.index') }}" class="btn btn-default">Cancel</a>
</div>
