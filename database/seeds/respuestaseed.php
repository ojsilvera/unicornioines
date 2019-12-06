<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class respuestaseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $respuesta = [
            'Existe y se implementa',
            'Existe y no se implementa',
            'No existe',
            'No sabe',
            'Siempre',
            'Algunas veces',
            'Nunca',
            'No',
            'Si'

        ];
      foreach ($respuesta as $key => $value) {
          DB::table('respuesta')->insert([
            'descrpRespuesta'=> $value,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
           ]);
    }
    }
}
