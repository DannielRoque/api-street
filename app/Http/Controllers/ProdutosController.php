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
        return response()->json(Produto::create($request->all()), 201);
    }

    public function show(int $id)
    {
        $produto = Produto::find($id);
        if (is_null($produto)){
            return response()->json('', 204);
        }
        return response()->json($produto);
    }

    public function update(int $id, Request $request)
    {
        $produto = Produto::find($id);
        if(is_null($produto)){
            return response()->json([
                'erro'=> 'recurso não encontrado'
            ], 404);
        }
        $produto->fill($request->all());
        $produto->save();

        return$produto;
    }

    public function destroy(int $id)
    {
     $qtdRecursosRemovidos =   Produto::destroy($id);
     if ($qtdRecursosRemovidos === 0){
         return response()->json([
             'erro' => 'Recurso não encontrado'
         ], 404);
     }
     return response()->json('', 204);
    }
}
