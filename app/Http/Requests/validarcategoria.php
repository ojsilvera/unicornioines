<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarcategoria extends FormRequest
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
            'descrpCategoria' =>'required|max:50|unique:categoria,descrpCategoria,' . $this->route('id'),
        ];
    }
}
