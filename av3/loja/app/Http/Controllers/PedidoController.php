<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
        return response()->json($pedidos, 200);
    }

    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return response()->json($pedido, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'total' => 'required|numeric',
        ]);
    
        $pedido = Pedido::create($request->all());
    
        return response()->json($pedido, 201);
    }    

    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente_nome' => 'required',
            'total' => 'required|numeric',
        ]);

        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());

        return response()->json($pedido, 200);
    }

    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return response()->json(['message' => 'Pedido removido com sucesso.'], 204);
    }
}
