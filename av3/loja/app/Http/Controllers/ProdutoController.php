<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return response()->json($produtos, 200);
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return response()->json($produto, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $produto = Produto::create($request->all());

        return response()->json($produto, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required|numeric',
            'descricao' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
        ]);        

        $produto = Produto::findOrFail($id);
        $produto->update($request->all());

        return response()->json($produto, 200);
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return response()->json(['message' => 'Produto removido com sucesso.'], 204);
    }
}
