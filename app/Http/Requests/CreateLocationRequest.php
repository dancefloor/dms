<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Location;

class CreateLocationRequest extends FormRequest
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
            'name'          => 'required|string|unique:locations|min:3|max:50',
            'shortname'     => 'required|string|unique:locations|min:3|max:20',            
            'address'       => 'required|string',
            'address_info'  => 'nullable|string',
            'postal_code'   => 'required|string|min:3|max:10',
            'city'          => 'required|string|min:2|max:25',
            'neighborhood'  => 'required|string|min:2|max:30',
            'state'         => 'required|string|min:3|max:25',
            'country'       => 'required|string|min:3|max:25',
            'comments'      => 'nullable|string',
            'contract'      => 'nullable|file|mimes:png,jpg,pdf,jpeg,gif',
            'contact'       => 'nullable|string',
            'email'         => 'nullable|email',
            'phone'         => 'nullable|string',
            'entry_code'    => 'nullable|string|min:3|max:10',
            'public_transportation'=> 'nullable|string',
            'google_maps_shortlink'=> 'nullable|url',
        ];
    }
}