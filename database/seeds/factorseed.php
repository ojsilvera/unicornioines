<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class factorseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $factores = [
            'MISIÓN Y PROYECTO INSTITUCIONAL',
            'ESTUDIANTES',
            'PROFESORES',
            'PROCESOS ACADÉMICOS',
            'VISIBILIDAD NACIONAL E INTERNACIONAL',
            'ESPACIOS DE INVESTIGACIÓN, INNOVACIÓN Y CREACIÓN ARTÍSTICA Y CULTURAL',
            'PERTINENCIA E IMPACTO SOCIAL',
            'AUTOEVALUACIÓN Y AUTORREGULACIÓN',
            'BIENESTAR INSTITUCIONAL',
            'ORGANIZACIÓN, GESTIÓN Y ADMINISTRACIÓN',
            'RECURSOS DE APOYO ACADÉMICO E INFRAESTRUCTURA FÍSICA',
            'RECURSOS FINANCIEROS'

        ];
      foreach ($factores as $key => $value) {
          DB::table('factor')->insert([
            'descrpFactor'=> $value,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
           ]);
    }
    }
}
