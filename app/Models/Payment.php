<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package App\Models
 * @version May 26, 2020, 10:01 pm UTC
 *
 * @property string $code
 * @property string $method
 * @property string $done
 */
class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'code',
        'provider',
        'method',
        'amount',
        'currency',
        'molley_payment_id',
        'status',
        'done',
        'done',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'method' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order'     => 'required',
        'method'    => 'required'
    ];

    // public function registrations()
    // {
    //     return $this->hasMany('', 'foreign_key', 'local_key');        
    // }

    public function order()
    {
        return $this->belongsTo(\App\Models\Order::class);
    }
}

