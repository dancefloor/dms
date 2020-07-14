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
        <div class="bg-white rounded-lg shadow mb-20 px-4 py-3">
            <div class="border rounded-lg">
                @php $total = 0; @endphp
                <table class="w-full">
                    @foreach (auth()->user()->pendingCourses as $item)
                    <tr>
                        <td class="border-b pl-3">{{ $item->name }}</td>
                        <td class="border-b">{{ $item->pivot->status }}</td>
                        <td class="border-b text-right py-2 pr-3">CHF {{ $item->full_price }}</td>
                    </tr>
                    @php $total = $total + $item->full_price; @endphp
                    @endforeach
                    <tr>
                        <td class="border-t-2 pl-3">
                            Total price:
                        </td>
                        <td class="border-t-2"></td>
                        <td class="border-t-2 font-bold py-2 text-right pr-3">
                            EUR {{ $total }}
                        </td>
                    </tr>
                </table>
            </div>

            <div class="my-5">
                <a href="{{ route('mollie.payment', ['amount' => $total, 'name' => auth()->user()->firstname . ' ' . auth()->user()->lastname, 'email' => auth()->user()->email ])}}"
                    class="bg-red-700 text-white px-3 py-2 rounded-full">Pay now</a>
            </div>


        </div>
    </div>

</section>
@endsection