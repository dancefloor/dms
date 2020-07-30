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
    {{-- {!! Form::text('teaser_video_1', null, [ 'placeholder' => 'Primary teaser video'])!!} --}}
    <textarea name="teaser_video_1" id="teaser_video_1" cols="30"
        rows="3">{{ $course->teaser_video_1 ?? old('value') }}</textarea>
</div>

<!-- Teaser Video 2 Field -->
<div class="mb-6">
    {{-- {!! Form::text('teaser_video_2', null, ['placeholder' => 'Seconday teaser video']) !!} --}}
    <textarea name="teaser_video_2" id="teaser_video_2" cols="30"
        rows="3">{{ $course->teaser_video_2 ?? old('value') }}</textarea>
</div>

<!-- Teaser Video 3 Field -->
<div class="mb-6">
    {{-- {!! Form::text('teaser_video_3', null, ['placeholder' => 'Third teaser video']) !!} --}}
    <textarea name="teaser_video_3" id="teaser_video_3" cols="30"
        rows="3">{{ $course->teaser_video_3 ?? old('value') }}</textarea>
</div>