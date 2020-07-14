<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'subtotal_amount',
        'tax',
        'discount',
        'discount_code',
        'total_amount',
        'status',
    ];

    protected $casts = [
        'id' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function courses(){
        return $this->belongsToMany(\App\Models\Course::class)->withPivot('quantity');
    }
}







