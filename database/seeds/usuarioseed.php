<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class usuarioseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('usuario')->insert([
            'documento' => '1234094658',
            'rolid' => '3',
            'primerNombre' =>'maryluz',
            'segundoNombre' => '',
            'primerApellido' => 'cardona',
            'segundoApellido' => '',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
