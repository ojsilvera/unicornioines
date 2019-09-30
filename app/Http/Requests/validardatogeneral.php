<?php

namespace App\Http\Requests;

use App\models\usuario;
use Illuminate\Support\Facades\DB;
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


    public function crearusuario(){

        DB::transaction(function ()  {
            $data = $this->validated();

            $user = usuario::create([
               'documento' => $data['documento'],
               'tpDocumentoid' => $data['tpDocumentoid'],
               'primerNombre' => $data['primerNombre'],
                'rolid' => $data['rolid']
            ]);

            $user->datogenerales()->create([
                'fechaNacimiento' => $data['fechaNacimiento'],
                'institucionid' => $data['institucionid'],
                'generoid' => $data['generoid'],
            ]);
        });
    }
}
