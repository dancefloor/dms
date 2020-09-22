<?php

namespace App\Models;

//use Eloquent as Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

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
    use Sluggable;

    public $table = 'locations';


    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'slug',
        'shortname',
        'address',
        'address_info',
        'postal_code',
        'city',
        'neighborhood',
        'state',
        'country',
        'contact',
        'email',
        'phone',
        'contract',
        'video',
        'entry_code',
        'comments',
        'google_maps_shortlink',
        'google_maps',
        'public_transportation',        
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

    public function sluggable()
    {
        return [
            'slug' => [ 'source' => 'name' ]
        ];
    }

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
