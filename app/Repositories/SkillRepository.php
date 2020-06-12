<?php

namespace App\Repositories;

use App\Models\Skill;
use App\Repositories\BaseRepository;

/**
 * Class SkillRepository
 * @package App\Repositories
 * @version May 26, 2020, 9:12 pm UTC
*/

class SkillRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'icon',
        'description',
        'image'
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
        return Skill::class;
    }
}
