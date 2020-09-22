<div class="my-3 mx-3">
    <div>
        <input type="radio" name="type" id="class" value="class" @isset($course->type)
        {{ $course->type == 'class' ? 'checked' : old('value') }} @endisset
        required>
        <label class="ml-2" for="class">Class</label>
    </div>
    <div>
        <input type="radio" name="type" id="workshop" value="workshop" @isset($course->type)
        {{ $course->type == 'workshop' ? 'checked' : old('value') }} @endisset>
        <label class="ml-2" for="class">Workshop</label>
    </div>
    <div>
        <input type="radio" name="type" id="bootcamp" value="bootcamp" @isset($course->type)
        {{ $course->type == 'bootcamp' ? 'checked' : old('value') }} @endisset>
        <label class="ml-2" for="bootcamp">Bootcamp</label>
    </div>
</div>
<hr class="my-5 -mx-3">