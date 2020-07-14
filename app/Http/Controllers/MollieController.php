<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Mollie\Laravel\Facades\Mollie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MollieController extends Controller
{
    public function  __construct()
    {
        $mollieKey = config('services.mollie.key');
        Mollie::api()->setApiKey($mollieKey); // your mollie test api key
    }

    /**
     * Redirect the user to the Payment Gateway.
     *
     * @return Response
     */
    public function preparePayment()
    {
        $payment = Mollie::api()->payments()->create([
            'amount'        => [
                'currency'      => 'EUR', // Type of currency you want to send
                'value'         => request()->amount . '.00', // You must send the correct number of decimals, thus we enforce the use of strings
            ],
            'description'   => 'order 12341423',
            'redirectUrl'   => route('webhooks.mollie'), 
            'webhookUrl'   => route('payment.status')
        ]);

        
        $payment = Mollie::api()->payments()->get($payment->id);

        $user_payment = Payment::create([
            'code'              => Str::random(15),
            'provider'          => 'mollie',
            'method'            => null,
            'amount'            => request()->amount . '.00',
            'currency'          => 'CHF',
            'molley_payment_id' => $payment->id,
            'status'            => 'open',
            'done'              => now(),
        ]);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }

    /**
     * Page redirection after the successfull payment
     *
     * @return Response
     */
    public function paymentSuccess()
    {
        $pay = Payment::latest()->first();
        //dd($pay->molley_payment_id);
        $mollie = Mollie::api()->payments()->get($pay->molley_payment_id);
        if ($mollie->isPaid()) {
            // echo 'Payment Error';
            return view('payments.status');
        } else {
            echo 'Payment Error';
        }
      
    }
}
