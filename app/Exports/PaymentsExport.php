<?php

namespace App\Exports;

use App\Models\Payment;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PaymentsExport implements FromQuery, WithHeadings, WithMapping
{    
    use Exportable;

    public function query()
    {
        return Payment::query();
    }

    public function map(): array
    {
        return [
            $payment->id,
            $payment->status,
            $payment->course_id,
            $payment->course->name,
            $payment->user_id,
            $payment->user->firstname .' '. $payment->user->lastname,
            $payment->user->email,
            $payment->role,
            $payment->option,
            $payment->order_id,
            $payment->created_at,                        
        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'provider',
            'method',
            'code',
            'status',            
            'amount',
            'amount_received',
            'currency',
            'molley_payment_id',
            'status',
            'received_date',
            'comments',
            'order_id',
            'user_id',                                    
            'courses',            
            'username',
            'email',                                    
            'created_at',
        ];
    }
}























