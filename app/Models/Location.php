<?php

namespace App\Models;

//use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Location
 * @package App\Models
 * @version May 26, 2020, 5:29 pm UTC
 *
 * @property string $name
 * @property string $address
 * @property string $address_info
 * @property string $postal_code
 * @property string $city
 * @property string $state
 * @property string $country
 * @property number $m2
 * @property integer $capacity
 * @property integer $limit_couples
 * @property number $price_hour
 * @property number $price_month
 * @property boolean $dance_shoes
 * @property string $comments
 * @property string $contact
 * @property string $email
 * @property string $phone
 * @property string $contract
 * @property string $video
 * @property transportation $public
 */
class Location extends Model
{
    use SoftDeletes;

    public $table = 'locations';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'address',
        'address_info',
        'postal_code',
        'city',
        'state',
        'country',
        'm2',
        'capacity',
        'limit_couples',
        'price_hour',
        'price_month',
        'dance_shoes',
        'comments',
        'contact',
        'email',
        'phone',
        'contract',
        'video',
        'public'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'address' => 'string',
        'address_info' => 'string',
        'postal_code' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string',
        'm2' => 'float',
        'capacity' => 'integer',
        'limit_couples' => 'integer',
        'price_hour' => 'float',
        'price_month' => 'float',
        'dance_shoes' => 'boolean',
        'comments' => 'string',
        'contact' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'contract' => 'string',
        'video' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'address' => 'required',
        'postal_code' => 'required',
        'city' => 'required',
        'state' => 'required',
        'country' => 'required',
        'contract' => 'rules text textarea ii'
    ];

    public function comments()
    {
        return $this->hasMany(Classroom::class);
    }
}
