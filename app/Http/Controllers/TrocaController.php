<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrocaController extends Controller
{
    public function index_json() {
        $listTroca = Troca::all();
        return response()->json(["data"=>$listTroca]);
    }

    public function index() {
        $listTroca = Troca::all();
        return view('troca.index',["data"=>$listTroca]);
    }

    public function show($id){
        $troca = Troca::find($id);

        return view('troca.show',[
                "troca"=>$troca
            ]);
    }
}
