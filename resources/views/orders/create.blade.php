@extends('layouts.back')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container mx-auto my-10">
    <h1 class="text-gray-800 font-bold text-4xl mb-5">
        New Order
    </h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <livewire:order-registration />

        <div class="mb-4">
            <textarea name="comments" id="comments" cols="30" rows="4"
                class="w-full border rounded-lg px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500"
                placeholder="Comments">{{ old('value') }}</textarea>
        </div>

        <div class="mb-4">
            <div class="w-full md:w-56 relative">
                <select
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-full leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="method" name="method" required>
                    <option default selected disabled>Payment Method</option>
                    <option value="credit-card" disabled>Credit Card + 5CHF</option>
                    <option value="bank-transfert">Bank transfer</option>
                    <option value="revolut">Revolut</option>
                    <option value="cash">Cash</option>
                    <option value="paypal">Paypal</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>
        </div>


        <button type="submit" class="bg-red-700 hover:bg-red-800 rounded-full px-4 py-2 text-gray-100">Create
            Order
        </button>
    </form>

</div>
@endsection


@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {        
        $('#courses').select2({
            placeholder: "Select a course(s)",
        });
    });
</script>
@endpush