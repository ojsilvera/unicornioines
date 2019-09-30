<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validardatogeneral extends FormRequest
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
            'fechaNacimiento' =>'required',
            'institucionid' => 'required|max:50|unique:institucion,nombreInstitucion,' . $this->route('id'),
            'generoid' => 'required|max:50|unique:genero,descrpGenero,' . $this->route('id'),
            'descrpRol' =>'required|max:50|unique:rol,descrpRol,' . $this->route('id')
        ];
    }
}
