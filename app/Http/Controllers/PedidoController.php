<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Carrinho;
use App\Models\PeditoItem;
use Illuminate\Http\Request;
use App\Models\Endereco;
use illuminate\Support\Facades\Auth;


class PedidoController extends Controller
{
    public function index(){

        $pedidos = Pedido::where('USUARIO_ID', Auth::user()->USUARIO_ID)->get();
      
        
        //console.log($pedidos);

      return view('pedido.index')->with('pedidos',$pedidos);
    }
    public function checkout(){

      $usuario = Auth::user();      
      
      // Falar desse problema com o Professor!
      // SQLSTATE[23000]: Integrity constraint violation: 1216 Cannot add or update a child row: a foreign key constraint fails
      // (Connection: mysql, SQL: insert into `PEDIDO` (`USUARIO_ID`, `STATUS_ID`, `ENDERECO_ID`, `PEDIDO_DATA`)
      //  values (4, 2, 1, 2023/10/29))

        $enderecoId = Endereco::where('USUARIO_ID','=',$usuario->USUARIO_ID)->value('ENDERECO_ID');

        $pedido =Pedido::create([
            'USUARIO_ID' => $usuario->USUARIO_ID,
            'ENDERECO_ID' => $enderecoId,
            'STATUS_ID' => 1,
            'PEDIDO_DATA'=> now()
        ]);

        $itens = Carrinho::where([['USUARIO_ID','=', $usuario->USUARIO_ID], ['ITEM_QTD', '>', 0]])
               ->get();
               foreach($itens as $item){
                PeditoItem::create([
                  'PEDIDO_ID' =>$pedido->PEDIDO_ID,
                  'PRODUTO_ID' => $item->PRODUTO_ID,
                  'ITEM_QTD' => $item->ITEM_QTD,
                  'ITEM_PRECO'=>$item->Produto->PRODUTO_PRECO
              ]);

              $item->update([
                'ITEM_QTD'=>0

              ]);

               }


      return redirect(route('pedido.show',$pedido->PEDIDO_ID));
    }
    public function show(Pedido $pedido)
    {      
        $carrinho = PeditoItem::where([['PEDIDO_ID','=', $pedido->PEDIDO_ID]])->get();
         return view ('pedido.show', ['pedido' =>$pedido,'carrinho'=>$carrinho]);

    }


}
