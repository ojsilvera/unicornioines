<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class datoaccesoseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datoacceso')->insert([
            'userName' => 'admin',
            'password' => bcrypt('pass123'),
            'documento' =>'1234094658',
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
