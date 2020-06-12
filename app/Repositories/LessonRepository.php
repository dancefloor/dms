<?php

namespace App\Repositories;

use App\Models\Lesson;
use App\Repositories\BaseRepository;

/**
 * Class LessonRepository
 * @package App\Repositories
 * @version May 26, 2020, 9:41 pm UTC
*/

class LessonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'date',
        'course_id'
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
        return Lesson::class;
    }
}
