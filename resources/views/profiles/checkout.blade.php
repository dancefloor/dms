@extends('layouts.front')


@section('content')
<section>
    <div class="bg-gray-800 pt-10 pb-24 border-t border-gray-900">
        <div class="container mx-auto px-4">
            <div class="flex justify-between mb-8 items-center">
                <div>
                    <h1
                        class="text-2xl font-bold leading-7 text-white md:text-4xl sm:leading-9 sm:truncate inline-flex">
                        @include('icons.checkout', ['style'=> 'h-10'])
                        <span class="self-center ml-3">Checkout</span>
                    </h1>
                </div>
            </div>

        </div>
    </div>
    <div class="container mx-auto -mt-24 px-4">
        <div class="bg-white rounded-lg shadow mb-20 px-10 py-5">
            <livewire:checkout />
        </div>
    </div>

</section>
@endsection