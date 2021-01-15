<?php

use Illuminate\Database\Seeder;

class CajeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cajero::class)->times(4)->create()->each(function ($cajero) {
            $persona = factory(App\Persona::class)->make();
            $cajero->persona()->save($persona);
        });
    }
}
