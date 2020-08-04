<div class="mb-4">
    <div class="w-full md:w-1/5 relative">
        <select name="order" id="order" required="required"
            class="block h-12 appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-full leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <option default selected disabled>Select Order</option>
            @foreach ($orders as $item)
            <option value="{{ $item->id }}">
                #{{$item->id}} | CHF {{ $item->total }} ({{ $item->user->firstname }} {{ $item->user->lastname }})
            </option>
            @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </div>
    </div>
</div>

<div class="mb-4">
    <div class="w-full md:w-1/5 relative">
        <select
            class="block h-12 appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-full leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            id="method" name="method" required>
            <option default selected disabled>Payment Method</option>
            <option value="credit-card">Credit Card</option>
            <option value="bank-transfert">Bank transfer</option>
            <option value="revolut">Revolut</option>
            <option value="cash">Cash</option>
            <option value="paypal">Paypal</option>
            <option value="sumup">SumUp</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </div>
    </div>
</div>

<div class="w-full md:w-1/5 mb-4">
    <input type="number" name="amount" id="amount" step="0.01" min="0" value="{{ old('value') }}" placeholder="Amount"
        required
        class="w-full h-12 border rounded-full px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500">
</div>

<div class="w-full md:w-1/5 mb-4">
    <input type="number" name="amount_received" id="amount_received" step="0.01" min="0" value="{{ old('value') }}"
        placeholder="Real Amount Received"
        class="w-full h-12 border rounded-full px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500">
</div>

<div class="mb-4">
    <div class="w-full md:w-1/5 relative">
        <select name="currency" id="currency"
            class="block h-12 appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded-full leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <option value="CHF" selected>CHF</option>
            <option value="EUR">Euro</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </div>
    </div>
</div>

{{-- <div class="w-full md:w-1/6 mb-4">
    <input type="text" name="code" id="code" value="{{ old('value') }}" placeholder="Code"
class="w-full border rounded-lg px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white
focus:border-gray-500">
</div> --}}

<div class="w-full md:w-1/5 mb-4">
    <input type="date" name="received_date" id="received_date"
        class="w-full border rounded-full px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500">
</div>

<div class="w-full md:w-2/6 mb-4">
    <input type="text" name="provider" id="provider" value="{{ old('value') }}" placeholder="Provider"
        class="w-full border rounded-full px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500">
</div>

<div class="w-full mb-4">
    <textarea name="comments" id="comments" cols="30" rows="5"
        class="w-full border rounded-lg px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500">{{ old('value') }}</textarea>
</div>