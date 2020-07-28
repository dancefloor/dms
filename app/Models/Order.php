<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'subtotal',
        'tax',
        'discount',
        'discount_code',
        'total',
        'status',
        'method'
    ];

    protected $casts = [
        'id' => 'integer'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
    public function author()
    {
            return $this->belongsTo('App\User', 'author_id');
    }
    

    public function courses(){
        return $this->belongsToMany(\App\Models\Course::class);
    }

    public function registrations()
    {
        return $this->hasMany(\App\Models\Registration::class);
    }

    public function payments()
    {
        return $this->hasMany(\App\Models\Payment::class);
    }

    public function scopeIsOpen($query)
    {
        return $query->whereStatus('open');
    }

    

}







