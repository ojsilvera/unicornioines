<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class institucionseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
          DB::table('institucion')->insert([
            'nombreInstitucion'=> 'icsa',
            'poblacionTotal'=>'250',
            'muestra'=>'60',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
           ]);
    }
}
