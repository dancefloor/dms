<?php

namespace App\Repositories;

use App\Models\Location;
use App\Repositories\BaseRepository;

/**
 * Class LocationRepository
 * @package App\Repositories
 * @version May 26, 2020, 5:29 pm UTC
*/

class LocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'address_info',
        'postal_code',
        'city',
        'state',
        'country',
        'm2',
        'capacity',
        'limit_couples',
        'price_hour',
        'price_month',
        'dance_shoes',
        'comments',
        'contact',
        'email',
        'phone',
        'contract',
        'video',
        'public'
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
        return Location::class;
    }
}
