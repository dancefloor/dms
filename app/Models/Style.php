<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Style
 * @package App\Models
 * @version May 26, 2020, 10:03 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $icon
 * @property string $image
 */
class Style extends Model
{
    use SoftDeletes;

    public $table = 'styles';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'name',
        'description',
        'icon',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'icon' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    public function courses()
    {

        return $this->belongsToMany(Course::class);
    }

    
}
