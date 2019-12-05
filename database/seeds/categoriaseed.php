<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class categoriaseed extends Seeder
{
      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = [
            'Exsistencia',
            'Frecuencia',
            'Reconocimiento'
        ];
      foreach ($categoria as $key => $value) {
          DB::table('categoria')->insert([
            'descrpCategoria'=> $value,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
           ]);
    }
}
}
