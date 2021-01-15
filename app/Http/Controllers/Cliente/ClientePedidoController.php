<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cliente;
use App\Pedido;
use App\Cajero;
use App\DetallePedido;
use App\Ubicacion;

class ClientePedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param Cliente $cliente
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Cliente $cliente, Request $request)
    {
        // dd($request);
        $ubicacion = new Ubicacion;

        $ubicacion->longitud = $request['ubicacion']['longitud'];
        $ubicacion->latitud = $request['ubicacion']['latitud'];
        $ubicacion->direccion = $request['ubicacion']['direccion'];
        $ubicacion->numero_domicilio = $request['ubicacion']['numero_domicilio'];
        $ubicacion->costo_delivery_id = 1;

        $ubicacion->save();

        $pedido = new Pedido;

        // $cajero = Cajero::where('is_active', 1)->first();

        $pedido->estado = 'vendido';
        $pedido->importe = $request->importe;
        // $pedido->cajero()->associate($cajero);
        $pedido->cajero_id = 1;
        $pedido->cliente()->associate($cliente);
        $pedido->ubicacion()->associate($ubicacion);
        $pedido->save();

        $pedido->detallepedidos()->createMany($request->detalle_pedido);

        return $pedido;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
