<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cliente::class)->times(95)->create()->each(function ($cliente) {
            $persona = factory(App\Persona::class)->make();
            $cliente->persona()->save($persona);
        });
    }
}
