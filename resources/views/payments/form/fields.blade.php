<select name="order" id="order" required="required">
    <option default selected disabled>Select Order</option>
    @foreach ($orders as $item)
    <option value="{{ $item->id }}">
        #{{$item->id}} | CHF {{ $item->total }} ({{ $item->user->firstname }} {{ $item->user->lastname }})
    </option>
    @endforeach
</select>

<div class="mb-4">
    <select name="method" id="method" required>
        <option default selected disabled>Payment method</option>
        <option value="bank-transfer">Bank transfer</option>
        <option value="revolut">Revolut</option>
        <option value="paypal">Paypal</option>
        <option value="cash">Cash</option>
        <option value="sumup">SumUp</option>
    </select>
</div>


<div class="w-full md:w-1/6 mb-4">
    <input type="number" name="amount" id="amount" step="0.01" min="0" value="{{ old('value') }}" placeholder="Amount"
        required
        class="w-full border rounded-lg px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500">
</div>

<div class="mb-4">
    <select name="currency" id="currency">
        <option value="CHF" selected>CHF</option>
        <option value="EUR">Euro</option>
    </select>
</div>

<div class="w-full md:w-1/6 mb-4">
    <input type="text" name="code" id="code" value="{{ old('value') }}" placeholder="Code"
        class="w-full border rounded-lg px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500">
</div>

<div class="w-full md:w-1/6 mb-4">
    <input type="text" name="provider" id="provider" value="{{ old('value') }}" placeholder="Provider"
        class="w-full border rounded-lg px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500">
</div>

<div class="w-full mb-4">
    <textarea name="comments" id="comments" cols="30" rows="5"
        class="w-full border rounded-lg px-3 py-2 bg-gray-200 border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500">{{ old('value') }}</textarea>
</div>