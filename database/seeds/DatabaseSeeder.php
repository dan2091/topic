<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticulosTableSeeder::class);
        /*DB::table('articulos')->insert([
            'titulo' => str_random(50),
            'cuerpo' => str_random(200),
        ]);*/
    }
}
