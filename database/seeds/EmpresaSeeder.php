<?php

use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'nombre'=>'WonderChicken',
            'direccion'=>'Av. de las Americas',
            'numero_domicilio'=>317,
            'propietario'=>'Erick Antonio Hurtado Zardan',
            'telefono'=>'64-64864',
            'cuenta_bancaria'=>'1234567890',
            'logotipo'=>'estaesunacadenadedatosdeunlogotipo',
            'latitud'=>'-19.044470222559507',
            'longitud'=>'-65.24537198842745',
            'estado'=>'abierto',

            'nit_emisor'=>5640971015,
            'municipio'=>'Sucre',
            'cuf'=>'',
            'cufd'=>'',
            'codigo_sucursal'=>1,
            'leyenda'=>'Donde Mucho Nunca Es Suficiente',
            'actividad_economica'=>'',
        ]);
        //
    }
}
