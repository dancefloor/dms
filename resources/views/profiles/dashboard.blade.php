@extends('layouts.back')

@section('content')

<section id="profile" class="container mx-auto py-10">
    <h1 class="capitalize mb-10 font-bold text-2xl">Welcome {{ auth()->user()->firstname}},</h1>
    <section>
        <header class="flex justify-between items-baseline">
            <h2 class="uppercase text-sm font-semibold text-gray-600 mb-3">My courses</h2>
            @if (auth()->user()->pendingCourses()->count() > 0)
            <div class="mb-3">
                {{-- <a href="{{ route('checkout') }}"
                class="bg-red-700 text-white py-2 px-3 hover:bg-red-800 rounded-full">Proceed to
                Checkout</a> --}}
            </div>
            @endif
        </header>

        <ul class="border bg-white rounded-lg">
            @forelse (auth()->user()->learns as $item)
            <li
                class="grid grid-cols-5 gap-4 items-center px-3 py-2 {{ $loop->last ? '' : 'border-b border-gray-300'}}">
                <div>
                    <strong class="block"><a href="{{ route('courses.show', $item) }}">{{ $item->name }}</a></strong>
                    {{ implode(',',$item->days)}}
                </div>
                <div>
                    @if ($item->start_date)
                    {{ $item->start_date->format('d F y') }} - {{ $item->end_date->format('d F y') }}
                    @endif
                </div>
                <div>
                    <div class="inline-flex">
                        @foreach ($item->teachers as $t)
                        <img src="{{ asset($t->avatar)}}" alt="" class="w-8 rounded-full">
                        @endforeach
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="inline-flex items-center">
                        <x-registration-status status="{{ $item->pivot->status }}" />
                    </div>
                </div>
                <div class="capitalize text-right">
                    <form action="{{ route('registration.remove', $item)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove</button>
                    </form>
                </div>
            </li>

            @empty
            <li>
                <dt class="text-center">You have not signed to any class yet</dt>
                <dd class="text-center my-3">
                    <a href="/" class="bg-red-700 text-white px-3 py-2 rounded-full capitalize hover:bg-red-800">Find
                        courses</a>
                </dd>
            </li>
            @endforelse
        </ul>
    </section>
    <br>
    <br>
    <section>
        <h2 class="uppercase text-sm font-semibold text-gray-600 mb-3">Payment methods</h2>
        <div class="flex flex-wrap -mx-3">
            <div class="w-full md:w-1/4 px-3">

                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/swiss-post.png') }}" alt="Swiss Post" class="w-full h-24 object-cover">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Bank transferts</div>
                        <p class="text-gray-700 text-base">
                            You can make a bank transfert or if you live in Switzerland you can pay directly at your
                            nearest post office using the red
                            payment Slip
                        </p>
                    </div>
                    <div class="px-6 pb-6">
                        <a target="_blank" class="bg-red-700 px-4 py-2 rounded-full text-white hover:bg-red-800"
                            href="https://www.dancefloorgenevasalsa.ch/wp-content/uploads/2019/01/2019-01-15_bulletin-de-versement.jpg?fbclid=IwAR0m2F7_qAw12KFrYsJvNOKPaKsSKdlMLD1Xpf8OQtwfOHKSNNyFi8zEHJI">
                            Payment Slip
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-3">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/paypal.png') }}" alt="paypal"
                        class="w-full h-24 object-cover px-3 bg-white">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Paypal payment</div>
                        <p class="text-gray-700 text-base">
                            If you have a PayPal account you can make a transfert to the following email
                        </p>
                    </div>
                    <div class="px-6 pb-4">
                        <a href="#"
                            class="bg-red-700 px-4 py-2 rounded-full text-white hover:bg-red-800">dancefloor.geneva@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/4 px-3">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <img src="{{ asset('images/revolut.png') }}" alt="Revolut" class="w-full p-4 bg-white">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Revolut money transfert</div>
                        <p class="text-gray-700 text-base">
                            If you have a revolut account you can easily transfert the money to this phone number
                        </p>
                    </div>
                    <div class="px-6 pb-6" class="bg-red-700 px-4 py-2 rounded-full text-white">
                        <a href="tel:+41 78 657 50 56"
                            class="bg-red-700 px-4 py-2 rounded-full text-white hover:bg-red-800">+41 78 657
                            50 56</a>
                    </div>
                </div>


            </div>
            <div class="w-full md:w-1/4 px-3">
                <div class="max-w-sm rounded overflow-hidden shadow-lg">
                    <div class="w-full h-24 flex justify-center text-gray-800 bg-white">
                        @include('icons.credit-cards', ['style'=>'h-24'])
                    </div>
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Credit & Debit Cards</div>
                        <p class="text-gray-700 text-base">
                            Comming soon...
                        </p>
                    </div>
                    <div class="px-6 pb-6" class="bg-red-700 px-4 py-2 rounded-full text-white">

                    </div>
                </div>

            </div>
        </div>
    </section>
</section>

@endsection