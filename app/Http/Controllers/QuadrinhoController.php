<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuadrinhoController extends Controller
{
    public function index_json() {
        $listaQuadrinhos = Quadrinho::all();
        return response()->json(["data"=>$listaQuadrinhos]);
    }

    public function index() {
        $listaQuadrinhos = Quadrinho::all();
        return view('quadrinho.index',["data"=>$listaQuadrinhos]);
    }

    public function show($id){
        $quadrinho = Quadrinho::find($id);

        return view('quadrinho.show',[
                "quadrinho"=>$quadrinho
            ]);
    }
}
