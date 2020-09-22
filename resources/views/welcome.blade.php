@extends('layouts.front')

@section('css')
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
@endsection

@section('content')


@include('partials.banner')

@include('partials.landing')


{{-- {{ env('APP_URL').'/storage' }}
<br>
{{ base_path('public/paypal.png') }} --}}

{{-- {{auth()->user()->email}} --}}
<section class="my-20">

    @include('partials.testimonials')
</section>

<div id="live" class="container mx-auto my-20">
    <div class="py-5 border-t border-gray-300 space-y-2 px-3 mb-5">
        <h2 class="text-4xl leading-6 font-bold text-gray-800">
            Live classes
        </h2>
        <p class="max-w-4xl text-base leading-5 text-gray-500">
            You don't live in Geneva or Lausanne, No problem! Take the opportunity to follow our live classes, feel the
            classroom energy, ask direct questions to the teachers, and review the videos of the class afterwards.
        </p>
    </div>
    <x-catalogue :courses="$live" />
    <br>
</div>

<div class="bg-gray-800 py-10">
    <div id="online" class="container mx-auto my-20">
        <div class="py-5 border-t border-gray-300 space-y-2 px-3 mb-5">
            <h2 class="text-4xl leading-6 font-bold text-gray-100">
                Online classes
            </h2>
            <p class="max-w-4xl text-base leading-5 text-gray-500">
                With our online classes you get access to the videos from live classes, you'll have access our the
                private facebook group and you can decide to progress at your own pace
            </p>
        </div>
        <x-image-catalog :courses="$online" />
    </div>
</div>


<section id="about" class="container mx-auto my-20">
    @include('partials.about')
</section>

@endsection

@push('scripts')
<!-- Development -->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>


<!-- Production -->
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script>
    tippy('#register',      {content: "{{ "Register to class" }}",});
    tippy('#registered',    {content: "{{ "You are registered" }}",});
    tippy('#waiting',       {content: "{{ "This class is full, you are in the waiting list" }}",});
    tippy('#pending',       {content: "{{ "You are pre-registered, proceed to pay to complete registration" }}",});
</script>
@endpush