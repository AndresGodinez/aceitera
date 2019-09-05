<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroundUpdateRequest extends FormRequest
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
            'palm_farmer_id'  => 'required',
            'location'        => 'required',
            'municipality_id' => 'required',
            'state_id'        => 'required',
            'latitude'        => 'required',
            'longitude'       => 'required'
        ];
    }
}
