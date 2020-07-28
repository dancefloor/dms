<div class="table-responsive">
    <table class="table w-full" id="payments-table">
        <thead>
            <tr>
                <th class="text-left">ID</th>
                <th class="text-left">Method</th>
                <th class="text-left">Amount</th>
                <th class="text-left">Code</th>
                <th class="text-left">Order</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{ $payment->id }}</td>
                <td>{{ $payment->method }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->code }}</td>
                <td>{{ $payment->order->id }}</td>
                <td>
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('payments.show', [$payment->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('payments.edit', [$payment->id]) }}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' =>
                        'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>