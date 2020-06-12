<?php

namespace App\Repositories;

use App\Models\Style;
use App\Repositories\BaseRepository;

/**
 * Class StyleRepository
 * @package App\Repositories
 * @version May 26, 2020, 10:03 pm UTC
*/

class StyleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'icon',
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
        return Style::class;
    }
}
