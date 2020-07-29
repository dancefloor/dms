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
                <img src="{{ asset('images/paypal.png') }}" alt="paypal" class="w-full h-24 object-cover px-3 bg-white">
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