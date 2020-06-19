<div x-data="{ choreography:false }" class="mb-5">
    <div>
        <input x-on:click="choreography = false" type="radio" name="focus" id="partnerwork" value="partnerwork"
            @isset($course->focus) {{ $course->focus == 'partnerwork' ? 'checked' : old('value') }} @endisset
        required>
        <label class="ml-2" for="partnerwork">Partnerwork</label>
    </div>
    <div>
        <input x-on:click="choreography = false" type="radio" name="focus" id="footwork" value="footwork"
            @isset($course->focus) {{ $course->focus == 'footwork' ? 'checked' : old('value') }} @endisset>
        <label class="ml-2" for="footwork">Footwork</label>
    </div>
    <div>
        <input x-on:click="choreography = true" type="radio" name="focus" id="choreography" value="choreography"
            @isset($course->focus) {{ $course->focus == 'choreography' ? 'checked' : old('value') }} @endisset>
        <label class="ml-2" for="choreography">Choreography</label>
    </div>
    <div>
        <input x-on:click="choreography = false" type="radio" name="focus" id="styling" value="styling"
            @isset($course->focus) {{ $course->focus == 'styling' ? 'checked' : old('value') }} @endisset>
        <label class="ml-2" for="styling">Styling</label>
    </div>
    <div x-show="choreography" class="mt-3">
        <input type="number" placeholder="Limit of students" min="0" id="limit" name="limit">
    </div>
</div>