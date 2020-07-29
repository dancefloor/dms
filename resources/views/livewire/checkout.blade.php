<div>
    <div class="flex justify-between mb-5">
        <h1 class="my-3 text-3xl">List of pre-registered courses</h1>
        <p class="my-3 text-xl text-gray-700">{{ now()->format('d.m.yy') }}</p>
    </div>
    <div class="border rounded-lg mb-10">
        <table class="w-full">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="text-left pl-3 py-2" width="30%">Course</th>
                    <th class="text-left" width="30%">Period</th>
                    <th class="text-left" width="15%">Level</th>
                    <th class="text-left" width="15%">Status</th>
                    <th class="text-right pr-3" width="10%">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach (auth()->user()->pendingCourses as $item)
                <tr>
                    <td class="{{ $loop->last ? '' : 'border-b'}} pl-3">{{ $item->name }}</td>
                    <td class="{{ $loop->last ? '' : 'border-b'}}">
                        {{ $item->start_date->format('d F Y') }} - {{ $item->end_date->format('d M yy') }}
                    </td>
                    <td class="{{ $loop->last ? '' : 'border-b'}}">{{ $item->level }}</td>
                    <td class="{{ $loop->last ? '' : 'border-b'}}">
                        {{-- {{ $item->pivot->status }} --}}
                        <x-registration-status uid="{{ auth()->user()->id }}" cid="{{ $item->id }}" />
                    </td>
                    <td class="{{ $loop->last ? '' : 'border-b'}} text-right py-2 pr-3">
                        CHF {{ $item->full_price }}
                        {{-- ($item->full_price * 0.08) --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <h2 class="text-2xl">Payment methods</h2>
    <div class="flex flex-wrap mb-5 -mx-5">
        <div class="w-full md:w-3/12 px-3">
            <div class="{{ $method == 'credit-card' ? 'bg-gray-200': 'bg-white'}} rounded-lg py-2 px-3">
                <label for="method" class="inline-flex items-center">
                    <input type="radio" name="method" value="credit-card" class="text-center" wire:model="method">
                    <span class="ml-2">Credit Card</span>
                    <span class="text-sm italic text-gray-700 ml-2">(+ 5CHF)</span>
                </label>
            </div>
            <div class="{{ $method == 'bank-transfer' ? 'bg-gray-200': 'bg-white'}} rounded-lg py-2 px-3">
                <label for="method" class="inline-flex items-center">
                    <input type="radio" name="method" value="bank-transfer" class="text-center" wire:model="method">
                    <span class="ml-2">Bank transfer</span>
                </label>
            </div>
            <div class="{{ $method == 'revolut' ? 'bg-gray-200': 'bg-white'}} rounded-lg py-2 px-3">
                <label for="method" class="inline-flex items-center">
                    <input type="radio" name="method" value="revolut" class="text-center" wire:model="method">
                    <span class="ml-2">Revolut</span>
                </label>
            </div>
            <div class="{{ $method == 'paypal' ? 'bg-gray-200': 'bg-white'}} rounded-lg py-2 px-3">
                <label for="method" class="inline-flex items-center">
                    <input type="radio" name="method" value="paypal" class="text-center" wire:model="method">
                    <span class="ml-2">Paypal </span>
                    <span class="text-sm italic text-gray-700 ml-2">(3,4 % + 0,55 CHF)</span>
                </label>
            </div>
            <div class="{{ $method == 'cash' ? 'bg-gray-200': 'bg-white' }} rounded-lg py-2 px-3">
                <label for="method" class="inline-flex items-center">
                    <input type="radio" name="method" value="cash" class="text-center" wire:model="method">
                    <span class="ml-2">Cash</span>
                </label>
            </div>
        </div>
        <div class="w-full md:w-5/12 px-5 mb-1">
            @if ($method == 'bank-transfer')
            @include('partials.bank-transfer')
            @endif
            @if ($method == 'revolut')
            @include('partials.revolut')
            @endif
            @if ($method == 'paypal')
            @include('partials.paypal')
            @endif
            @if ($method == 'cash')
            @include('partials.cash')
            @endif
        </div>
        <div class="w-full md:w-4/12 px-5">
            <div class="border rounded-lg">
                <table class="w-full">
                    <tr>
                        <td></td>
                        <td class=""></td>
                        <td class="">Subtotal:</td>
                        <td class="font-bold py-2 text-right pr-3">
                            CHF {{ $subtotal }}
                        </td>
                    </tr>
                    {{-- <tr>
                        <td class="border-t pl-3"></td>
                        <td class="border-t"></td>
                        <td class="border-t">VAT (8%)</td>
                        <td class="border-t font-bold py-2 text-right pr-3">
                            CHF {{ $subtotal * 0.08 }}
                    </td>
                    </tr> --}}

                    @if ($count > 1)
                    <tr>
                        <td class="border-t pl-3"></td>
                        <td class="border-t"></td>
                        <td class="border-t">Discount ({{ $discountText }})</td>
                        <td class="border-t font-bold py-2 text-right pr-3">
                            CHF {{ $discount }}
                        </td>
                    </tr>
                    @endif
                    @if ($method == 'credit-card' || $method == 'paypal')
                    <tr>
                        <td class="border-t pl-3"></td>
                        <td class="border-t"></td>
                        <td class="border-t">{{ $method == 'credit-card' ? 'Credit card' : 'PayPal'}}</td>
                        <td class="border-t font-bold py-2 text-right pr-3">
                            CHF {{ $commission }}
                        </td>
                    </tr>
                    @endif
                    <tr>
                        <td class="border-t pl-3"></td>
                        <td class="border-t"></td>
                        <td class="border-t font-bold">Total</td>
                        <td class="border-t font-bold py-2 text-right pr-3">
                            CHF {{ $total }}
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="w-full">
                @if ($method == 'credit-card')
                <a href="{{ route('mollie.payment', ['amount' => $total, 'name' => auth()->user()->firstname . ' ' . auth()->user()->lastname, 'email' => auth()->user()->email ])}}"
                    class="bg-red-700 text-white px-3 py-2 rounded-full block text-center w-full">
                    Pay by Credit Card
                </a>
                @endif
                <form
                    action="{{ route('orders.store',['courses' => auth()->user()->pendingCourses()->pluck('course_id')->toArray(), 'user' => Auth::id() ]) }}"
                    method="post">
                    @csrf
                    <input type="hidden" value="{{ $total }}" name="total">
                    <input type="hidden" value="{{ $discount }}" name="discount">
                    <input type="hidden" value="{{ $subtotal }}" name="subtotal">
                    <input type="hidden" value="{{ $method }}" name="method">
                    @if ($method == 'bank-transfer')
                    <button type="submit" class="bg-red-700 text-white px-3 py-2 rounded-full block text-center w-full">
                        Pay by Bank Transfer
                    </button>
                    @endif
                    @if ($method == 'revolut')
                    <button type="submit" class="bg-red-700 text-white px-3 py-2 rounded-full block text-center w-full">
                        Pay with Revolut
                    </button>
                    @endif
                    @if ($method == 'paypal')
                    <button type="submit" class="bg-red-700 text-white px-3 py-2 rounded-full block text-center w-full">
                        Pay by PayPal
                    </button>
                    @endif
                    @if ($method == 'cash')
                    <button type="submit" class="bg-red-700 text-white px-3 py-2 rounded-full block text-center w-full">
                        Pay in cash
                    </button>
                    @endif
                </form>
            </div>
        </div>


    </div>
</div>