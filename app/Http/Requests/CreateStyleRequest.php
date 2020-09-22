<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Style;

class CreateStyleRequest extends FormRequest
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
            'name'          => 'required|string|min:3|max:30',
            'icon'          => 'nullable|string|min:3|max:40',
            'origin'        => 'nullable|string|min:3|max:50',
            'color'         => 'nullable|string|min:3|max:30',
            'family'        => 'nullable|string|min:3|max:30',
            'music'         => 'nullable|string|min:3|max:100',
            'year'          => 'nullable|string|min:3|max:20',
            'description'   => 'nullable|string|min:3|max:1200',
            'image'         => 'nullable|image|max:1024|mimes:png,jpg,jpeg,gif'
        ];
    }
}