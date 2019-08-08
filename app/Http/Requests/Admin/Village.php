<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Village extends FormRequest
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
        $rules = [
            'name' => 'required|unique:villages,name',
            'subdistrict' => 'required|numeric'

        ];

        if ($this->village) {
            $concatId = ',' . $this->village;

            $rules['name'] .= $concatId;
        }

        return $rules;
    }
}
