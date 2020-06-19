<!-- Name Field -->
<div class="my-5 w-full md:w-1/2">
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Course name"]) !!}
</div>

<!-- Description Field -->
<div class="my-5">
    <textarea name="description" id="description" cols="30" rows="5"
        placeholder="Description">{{ $course->description ?? old('value') }}</textarea>
</div>