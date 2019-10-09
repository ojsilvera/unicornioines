<?php

namespace App\Http\Requests;

use App\models\datogenerales;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class validarusuario extends FormRequest
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
            'documento' =>'required',
            'tpDocumentoid' => 'required',
            'rolid' => 'required',
            'primerNombre' => 'required',
            'segundoNombre' => 'nullable',
            'primerApellido' => 'required',
            'segundoApellido' => 'nullable',
          
        ];
    }

}
