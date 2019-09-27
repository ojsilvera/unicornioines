<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarinst extends FormRequest
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
            'nombreInstitucion' =>'required|max:50|unique:institucion,nombreInstitucion,' . $this->route('id'),
            'poblacionTotal' =>'required|max:10',
            'muestra' =>'required|max:10',
        ];
    }
}
