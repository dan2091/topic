<?php

use Illuminate\Database\Seeder;

class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Articulo::class,30)->create();
    }
}
