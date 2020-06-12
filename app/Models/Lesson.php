<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lesson
 * @package App\Models
 * @version May 26, 2020, 9:41 pm UTC
 *
 * @property string $date
 * @property integer $course_id
 */
class Lesson extends Model
{
    use SoftDeletes;

    public $table = 'lessons';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'date',
        'course_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'date' => 'date',
        'course_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required',
        'course_id' => 'required'
    ];

    
}
