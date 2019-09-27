<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class tpdocseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tpdocs = [
            'Cedula',
            'Tarjeta Identidad'
        ];
      foreach ($tpdocs as $key => $value) {
          DB::table('tp_documento')->insert([
            'descrpTpDocumento'=> $value,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
           ]);
        }
    }
}
