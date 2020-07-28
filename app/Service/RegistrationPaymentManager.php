<?php

namespace App\Service;

use App\Models\Order;
use App\Models\Registration;

class RegistrationPaymentManager {
    
    public static function toPayed(){
        
    }

    public static function registrationToOpen($id)
    {
        $registration = Registration::Find($id);
        $registration->status = 'open';
        $registration->save();
    }

    public static function updateOrder($id)
    {
        $order = Order::find($id);
        $amount = 0;
        foreach ($order->payments as $pay) {
            $amount = $amount + $pay->amount;
        }

        if ($amount >= $order->total) {
            $order->status = 'paid';            
            foreach ($order->registrations as $r) {
                self::registrationCompleted($r->id);
            }
            $order->save();
        }else{                        
            foreach ($order->registrations as $r) {
                self::registrationToPartial($r->id);
            }
            $order->status = 'partial';
            $order->save();
        }
    }

    public static function registrationCompleted($id)
    {
        $registration = Registration::Find($id);
        $registration->status = 'registered';
        $registration->save();
    }

    public static function registrationToPartial($id)
    {
        $registration = Registration::Find($id);
        $registration->status = 'partial';
        $registration->save();
    }
    
}