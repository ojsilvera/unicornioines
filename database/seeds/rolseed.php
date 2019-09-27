<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class rolseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin'
        ];
      foreach ($roles as $key => $value) {
          DB::table('rol')->insert([
            'descrpRol'=> $value,
            'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
           ]);
    }
}
}