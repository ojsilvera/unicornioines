<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(generoseeder::class);
         $this->call(tpdocseed::class);
         $this->call(rolseed::class);
         $this->call(accionesseed::class);
         $this->call(categoriaseed::class);
         $this->call(factorseed::class);
         $this->call(indicadorseed::class);
         $this->call(preguntasseed::class);
         $this->call(rolaccionseed::class);
         $this->call(respuestaseed::class);
         $this->call(catfactseed::class);
         $this->call(prrespseed::class);
         $this->call(institucionseed::class);
    }
}
