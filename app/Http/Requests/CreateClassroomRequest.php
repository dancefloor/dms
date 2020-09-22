<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClassroomRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'          => 'required|string|unique:classrooms|min:3|max:50',            
            'm2'            => 'nullable|numeric|min:5',
            'capacity'      => 'required|numeric|min:5',
            'limit_couples' => 'required|numeric',
            'price_hour'    => 'nullable|numeric',
            'price_month'   => 'nullable|numeric',
            'dance_shoes'   => 'required|boolean',
            'comments'      => 'nullable|string',
            'color'         => 'nullable|string',
            'location'      => 'required|integer',
        ];
    }
}
