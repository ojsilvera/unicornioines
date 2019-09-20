<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class generoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generos = [
            'Femenino',
            'Masculino',
            'LGTBI'
        ];
      foreach ($generos as $key => $value) {
          DB::table('genero')->insert([
            'descrpGenero'=> $value,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
           ]);
    }
}
}

