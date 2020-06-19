<div class="flex flex-wrap -mx-3 my-5">
    <!-- Full Price Field -->
    <div class="w-full md:w-1/3 px-3 my-1">
        {!! Form::number('full_price', null, ['class' => 'form-control', 'placeholder' => 'Full Price']) !!}
    </div>

    <!-- Reduced Price Field -->
    <div class="w-full md:w-1/3 px-3 my-1">
        {!! Form::number('reduced_price', null, ['class' => 'form-control', 'placeholder' => 'Reduced Price'])
        !!}
    </div>

    <!-- Promo Price Field -->
    <div class="w-full md:w-1/3 px-3 my-1">
        {!! Form::number('promo_price', null, ['class' => 'form-control', 'placeholder' => 'Promo Price']) !!}
    </div>
</div>