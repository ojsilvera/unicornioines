<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class catfactseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factcat')->insert([
            'factorid' => '1',
            'categoriaid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('factcat')->insert([
            'factorid' => '2',
            'categoriaid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('factcat')->insert([
            'factorid' => '3',
            'categoriaid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('factcat')->insert([
            'factorid' => '4',
            'categoriaid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('factcat')->insert([
            'factorid' => '7',
            'categoriaid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('factcat')->insert([
            'factorid' => '8',
            'categoriaid' => '1',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('factcat')->insert([
            'factorid' => '1',
            'categoriaid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
        

        DB::table('factcat')->insert([
            'factorid' => '3',
            'categoriaid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('factcat')->insert([
            'factorid' => '4',
            'categoriaid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('factcat')->insert([
            'factorid' => '6',
            'categoriaid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('factcat')->insert([
            'factorid' => '8',
            'categoriaid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('factcat')->insert([
            'factorid' => '9',
            'categoriaid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('factcat')->insert([
            'factorid' => '10',
            'categoriaid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('factcat')->insert([
            'factorid' => '11',
            'categoriaid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('factcat')->insert([
            'factorid' => '12',
            'categoriaid' => '2',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);


        DB::table('factcat')->insert([
            'factorid' => '5',
            'categoriaid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('factcat')->insert([
            'factorid' => '6',
            'categoriaid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('factcat')->insert([
            'factorid' => '7',
            'categoriaid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);



        DB::table('factcat')->insert([
            'factorid' => '10',
            'categoriaid' => '3',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
