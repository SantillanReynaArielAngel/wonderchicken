<?php

use Illuminate\Database\Seeder;

class PlatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Plato::class)->times(7)->create()->each(function ($plato) {
            $articulo = factory(App\Articulo::class)->make();
            $plato->articulo()->save($articulo);
        });
    }
}
