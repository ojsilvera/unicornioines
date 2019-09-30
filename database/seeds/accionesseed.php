<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class accionesseed extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $acciones = [
            'Dilgenciar',
            'Crear',
            'Eliminar',
            'Modificar',
            'Leer'
        ];
      foreach ($acciones as $key => $value) {
          DB::table('acciones')->insert([
            'descrpAccion'=> $value,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
           ]);
    }
}
}
