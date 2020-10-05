<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Facades\App;

class Registration extends Pivot
{
    protected $table = 'registrations';   
    
    protected $fillable = [
        'course_id',
        'user_id',
        'order_id',
        'status',
        'role',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function order()
    {
        return $this->BelongsTo(\App\Models\Order::class);
    }

    public function user()
    {
        return $this->BelongsTo(\App\User::class);
    }

    public function course()
    {
        return $this->BelongsTo(\App\Models\Course::class);
    }
}
