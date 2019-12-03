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
        $factor = [
            'Misión y Proyecto Institucional',
            'Estudiantes',
            'Profesores',
            'Procesos académicos',
            'Visibilidad nacional e internacional',
            'Investigación y creación artística y cultural',
            'Pertinencia e impacto social',
            'Procesos de autoevaluación y autorregulación',
            'Organización, administración y gestión',
            'Planta física y recursos de apoyo académico',
            'Bienestar institucional',
            'Recursos financieros'
        ];
      foreach ($factor as $key => $value) {
          DB::table('factor')->insert([
            'descrpFactor'=> $value,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
           ]);
    }
}
}
