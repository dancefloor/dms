<?php

namespace App\Repositories;

use App\Models\Course;
use App\Repositories\BaseRepository;

/**
 * Class CourseRepository
 * @package App\Repositories
 * @version May 26, 2020, 3:43 pm UTC
*/

class CourseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'promo_video',
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'level',
        'full_price',
        'reduced_price',
        'promo_price',
        'color',
        'cover_image',
        'icon',
        'styles'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Course::class;
    }

}
