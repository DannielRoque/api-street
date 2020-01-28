<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class ProdutosController
{
    public function index(){
    return Produto::all();
    }

    public function store(Request $request)
    {
        return response()->json(Produto::create(['descricao' => $request->descricao ,'quantidade' => $request->quantidade,'preco' => $request->preco]), 201);
    }

    public function get(int $id)
    {
        $produto = Produto::find($id);
        if (is_null($produto)){
            return response()->json('', 204);
        }
        return response()->json($produto);
    }
}
