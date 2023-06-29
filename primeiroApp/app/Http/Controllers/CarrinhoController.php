<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carrinho;
use App\Models\Pedido;
use Illuminate\Support\Facades\DB;


class CarrinhoController extends Controller
{

    //LISTAR ITENS DO CARRINHO
    public function ListarItem(Request $request)
    {
        $produtos = carrinho::all(); 
        $valorTotal = $this->CalcularTotal();
        $quantidadeProduto = carrinho::count();

        return view ('meucarro',compact('produtos','quantidadeProduto','valorTotal'));
    }


    //REMOVER ITEM DO CARRINHO
    public function RemoverItem(Request $request,$id){
        carrinho::destroy($id);

        return redirect()->back();
    }
    
    //CALCULAR VALOR TOTAL DO CARRINHO
    public function CalcularTotal()
    {
        $produtos = carrinho::all();
        $total = 0;

        foreach ($produtos as $produto){
            $total += $produto->valor;
        }
        return $total;
    }

    
    //FINALIZAR CARRINHO E FAZER O PEDIDO
    public function finalizarPedido(Request $request)
    {
        $dadosOrigem = DB::table('carrinhos')->get();
        foreach($dadosOrigem as $dado) {
            DB::table('Pedidos')->insert([
                'produto'=> $dado->produto,
                'valor' => $dado->valor,
                'quantidade' => $dado->quantidade,
                'file' => $dado->file,
                'status' => 'processamento'
            ]);
        }
        carrinho::truncate();
        return redirect()->route('pedido.listar')->with('Sucesso','Sua compra foi finalizada');
    }













    //ADICIONAR PRODUTO NO CARRINHO 
    public function adicionar(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/etiqueta1.png'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }

    // Uma função para cada produto cadastrado
    public function adicionar2(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/etiqueta2.PNG'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }

    public function adicionar3(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/etiqueta3.png'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }

    public function adicionar4(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/etiqueta4.PNG'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar5(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/COLAR2.png'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar6(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/COLAR3.png'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar7(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/etiqueta5.png'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar8(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/etiqueta6.PNG'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar9(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/1.PNG'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar10(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/COLAR4.PNG'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar11(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/3.PNG'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar12(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/2.PNG'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar13(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/5.PNG'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar14(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/COLAR1.PNG'    
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar15(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/6.PNG'   
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }
    public function adicionar16(Request $request)
    {
        // Lógica para adicionar os dados à tabela
        $dados = [
            
                'produto' => 'Tag de Identificação',
                'valor' => '35.00',
                'quantidade' => '1',
                'file' => '/imagens/8.PNG'   
        ];
        carrinho::insert($dados);
        return redirect()->back();
    }




}
