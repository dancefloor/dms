<div class="mb-5">
    <input type="text" id="tagline" name="tagline" value="{{ $course->tagline ?? old('value')}}" placeholder="Tagline">
</div>

<div class="my-5">
    <textarea name="excerpt" id="excerpt" cols="30" rows="2"
        placeholder="Excerpt">{{ $course->excerpt ?? old('value') }}</textarea>
    <p class="text-sm text-gray-600 italic">This field is used for fast description and SEO Meta description</p>
</div>
<!-- Teaser Video 1 Field -->
<div class="mb-5">
    {!! Form::text('teaser_video_1', null, [ 'placeholder' => 'Primary teaser video'])!!}
</div>

<!-- Teaser Video 2 Field -->
<div class="mb-6">
    {!! Form::text('teaser_video_2', null, ['placeholder' => 'Seconday teaser video']) !!}
</div>

<!-- Teaser Video 3 Field -->
<div class="mb-6">
    {!! Form::text('teaser_video_3', null, ['placeholder' => 'Third teaser video']) !!}
</div>