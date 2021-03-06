<div class="table-responsive">
    <table class="table w-full" id="payments-table">
        <thead class="bg-gray-200 border-b">
            <tr>
                <th class="text-left px-3">ID</th>
                <th class="text-left px-3">Method</th>
                <th class="text-left px-3">User</th>
                <th class="text-left px-3">Amount</th>
                <th class="text-left px-3">Mollie id</th>
                <th class="text-left px-3">Order</th>
                <th class="text-left px-3">Status</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td class="px-3">{{ $payment->id }}</td>
                <td class="px-3">{{ $payment->method }}</td>
                <td class="px-3">{{ $payment->user->firstname ?? '' }} {{ $payment->user->lastname ?? '' }}</td>
                <td class="px-3">{{ $payment->amount }}</td>
                <td class="px-3">{{ $payment->molley_payment_id }}</td>
                <td class="px-3">{{ $payment->order->id ?? '' }}</td>
                <td class="px-3">{{ $payment->status }}</td>
                <td class="px-3 flex justify-end">
                    <a href="{{ route('payments.show', $payment) }}" class="hover:underline mx-2">Show</a>
                    {{-- <a href="{{ route('payments.edit', $payment) }}" class='btn btn-default btn-xs'>Edit</a> --}}
                    <form action="{{ route('payments.destroy', $payment)}}" method="post" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>