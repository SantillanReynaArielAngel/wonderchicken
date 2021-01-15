<?php

use Illuminate\Database\Seeder;

class BebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bebida::class)->times(10)->create()->each(function ($bebida) {
            $articulo = factory(App\Articulo::class)->make();
            $bebida->articulo()->save($articulo);
        });
    }
}
