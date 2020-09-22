<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Classroom extends Model
{
    use Sluggable;

    protected $fillable = [
        'name',
        'slug',            
        'm2',
        'capacity',
        'limit_couples',
        'price_hour',
        'price_month',
        'dance_shoes',
        'comments',
        'color',
        'location',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [ 'source' => 'name' ]
        ];
    }
}