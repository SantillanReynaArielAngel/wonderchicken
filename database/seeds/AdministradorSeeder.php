<?php

use Illuminate\Database\Seeder;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Administrador::class)->times(1)->create()->each(function ($administrador) {
            $persona = factory(App\Persona::class)->make();
            $administrador->persona()->save($persona);
        });
    }
}
