<?php

use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Extra::class)->times(3)->create()->each(function ($extra) {
            $articulo = factory(App\Articulo::class)->make();
            $extra->articulo()->save($articulo);
        });
    }
}
