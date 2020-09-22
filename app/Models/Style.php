<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
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
        'slug',
        'icon',
        'image',
        'music',
        'family',
        'color',        
        'origin',        
        'music',
        'year',
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

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function scopeSearch($query, $term){
        $term = trim($term);
        return $query->where(function($query) use ($term){
            $query->where('name', 'LIKE', "%{$term}%")
                  ->orWhere('family', 'LIKE', "%{$term}%")
                  ->orWhere('origin', 'LIKE', "%{$term}%");
        });
    }

    public function scopeCubanSalsa($query){
        return $this->where('family','Cuban Salsa');
    }

    public function scopelineSalsa($query){
        return $this->where('family','Line Salsa');
    }

    public function scopeUrban($query){
        return $this->where('family','Urban');
    }

    public function scopeSensual($query){
        return $this->where('family','Sensual');
    }

    public function scopeSport($query){
        return $this->where('family','Sport');
    }

    public function scopeFusion($query){
        return $this->where('family','Fusion');
    }

    
}
