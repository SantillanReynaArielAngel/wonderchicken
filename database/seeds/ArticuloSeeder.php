<?php

use App\Articulo;
use App\Plato;
use App\Bebida;
use App\Extra;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articulos = [
            'platos' => [
                [
                    'nombre' => 'Cuarto Pollo',
                    'precio' => 17.00,
                ],
                [
                    'nombre' => 'Porcion Media',
                    'precio' => 23.00,
                ],
                [
                    'nombre' => 'Wonder',
                    'precio' => 28.00,
                ],
                [
                    'nombre' => 'Medio Pollo',
                    'precio' => 34.00,
                ],
                [
                    'nombre' => 'Porcion Completa',
                    'precio' => 40.00,
                ],
                [
                    'nombre' => 'Super Wonder',
                    'precio' => 44.00,
                ],
                [
                    'nombre' => 'Wonder Pop',
                    'precio' => 22.00,
                ],
            ],
            'bebidas' => [
                ['nombre' => 'Cocacola', 'precio' => 7.00],
                ['nombre' => 'Fanta', 'precio' => 7.00],
                ['nombre' => 'Sprite', 'precio' => 7.00],
                ['nombre' => 'Acuarius', 'precio' => 7.00],
                ['nombre' => 'Mocochinchi', 'precio' => 7.00],
            ],
            'extras' => [
                ['nombre' => 'Papas Fritas', 'precio' => 7.00],
                ['nombre' => 'Arroz', 'precio' => 7.00],
            ],
        ];

        for ($i = 0; $i < count($articulos['platos']); $i++) {
            $articulo = factory(Articulo::class)->make([
                'nombre' => $articulos['platos'][$i]['nombre'],
                'precio' => $articulos['platos'][$i]['precio'],
            ]);
            $plato = factory(Plato::class)->create();
            $articulo->articuloable()->associate($plato); // articulo => articulo_type=App\Plato, articulo_id=1,2,3
            $articulo->save();
        }

        for ($i = 0; $i < count($articulos['bebidas']); $i++) {
            $articulo = factory(Articulo::class)->make([
                'nombre' => $articulos['bebidas'][$i]['nombre'],
                'precio' => $articulos['bebidas'][$i]['precio'],
            ]);
            $bebida = factory(Bebida::class)->create();
            $articulo->articuloable()->associate($bebida);
            $articulo->save();
        }

        for ($i = 0; $i < count($articulos['extras']); $i++) {
            $articulo = factory(Articulo::class)->make([
                'nombre' => $articulos['extras'][$i]['nombre'],
                'precio' => $articulos['extras'][$i]['precio'],
            ]);
            $extra = factory(Extra::class)->create();
            $articulo->articuloable()->associate($extra);
            $articulo->save();
        }
    }
}
