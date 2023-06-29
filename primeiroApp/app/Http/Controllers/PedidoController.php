<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function alterarStatus($id, $novoStatus)
    {
        $pedido = Pedido::find($id);

        if (!$pedido){
            redirect() ->back()->with('Erro','Não foi encontrado um pedido com esse ID.');
    
        }
        
        $pedido->status = $novoStatus;
        $pedido->save;

        return redirect()->back()->with('Sucesso','Status alterado com Sucesso');
    }
    

     //LISTAR PEDIDOS
     public function ListarItem(Request $request)
     {
         $produtos = Pedido::all(); 
         $valorTotal = $this->CalcularTotal();
 
         return view ('enviado',compact('produtos','valorTotal'));
     }


      //CALCULAR VALOR TOTAL DO CARRINHO
    public function CalcularTotal()
    {
        $produtos = Pedido::all();
        $total = 0;

        foreach ($produtos as $produto){
            $total += $produto->valor;
        }
        return $total;
    }
}
