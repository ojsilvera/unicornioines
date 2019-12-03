<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class rolaccionseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rollaccion')->insert([
            'rolid' => '2',
            'accionid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('rollaccion')->insert([
            'rolid' => '3',
            'accionid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('rollaccion')->insert([
            'rolid' => '4',
            'accionid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('rollaccion')->insert([
            'rolid' => '1',
            'accionid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('rollaccion')->insert([
            'rolid' => '1',
            'accionid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('rollaccion')->insert([
            'rolid' => '1',
            'accionid' => '4',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('rollaccion')->insert([
            'rolid' => '1',
            'accionid' => '5',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
