<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Skill
 * @package App\Models
 * @version May 26, 2020, 9:12 pm UTC
 *
 * @property string $name
 * @property string $icon
 * @property string $description
 * @property string $image
 */
class Skill extends Model
{
    use SoftDeletes;

    public $table = 'skills';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'icon',
        'description',
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
        'icon' => 'string',
        'description' => 'string',
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

    
}
