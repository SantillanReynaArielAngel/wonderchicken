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
        $this->call([
            ClienteSeeder::class,
            CajeroSeeder::class,
            AdministradorSeeder::class,
            BebidaSeeder::class,
            ExtraSeeder::class,
            PlatoSeeder::class,
            CostoDeliverySeeder::class,
        ]);
    }
}
