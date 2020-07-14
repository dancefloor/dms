<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mollie\Laravel\Facades\Mollie;

class MollieWebhookController extends Controller
{
    public function handle(Request $request) {
        
        if (! $request->has('id')) {
            return;
        }

        $payment = Mollie::api()->payments()->get($request->id);

        dd($payment);

        if ($payment->isPaid()) {
            return "No se pudo";
            return view('payments.status');
            //auth()->user()->setRegistrationStatus()
            //$course->students()->attach(auth()->user()->id, ['role'=>'student', 'status'=>'pending', 'created_at'=> now()]);
        }

        if ($payment->isFailed()) {
            return "No se pudo";
        }

        if ($payment->isExpired()) {
            return "Expiro esta mierda";
        }

        if ($payment->isExpired()) {
            return "Expiro esta mierda";
        }

        if ($payment->isCanceled()) {
            return "se cancelo lo que se dijo";
        }

        if ($payment->isOpen()) {
            return "Abierto";
        }
    }
}
