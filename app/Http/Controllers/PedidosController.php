<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;


class PedidosController extends Controller
{
    //
    public function getPedidosDeCiclo($ciclo){
        $pedidos = Pedido::all();
        foreach ($pedidos as $pedido){
            echo $pedido->getAttribute("user_id");
        }
    }
}
