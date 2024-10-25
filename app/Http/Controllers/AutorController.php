<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index_json() {
        $listaAutores = Autor::all();
        return response()->json(["data"=>$listaAutores]);
    }

    public function index() {
        $listaAutores = Autor::all();
        return view('autor.index',["data"=>$listaAutores]);
    }

    public function show($id){
        $autor = Autor::find($id);

        return view('autor.show',[
                "autor"=>$autor
            ]);
    }
}
