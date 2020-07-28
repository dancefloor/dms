@extends('layouts.back')

@section('content')
<div class="container mx-auto">
    <table>
        <tr>
            <td>Order Number</td>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <td>User</td>
            <td>{{ $order->user->firstname }} {{ $order->user->lastname }}</td>
        </tr>
        <tr>
            <td>Classes</td>
            <td></td>
        </tr>
        <tr>
            <td>Method</td>
            <td>{{ $order->method }}</td>
        </tr>
    </table>
    <br>
    user:
    <br>
    <br>
    Courses:
    <ul>
        @foreach ($order->registrations as $item)
        <li>{{ $item }}</li>
        @endforeach
    </ul>

</div>
@endsection