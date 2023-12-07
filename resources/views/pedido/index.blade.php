@extends('layout.app')
@section('main')

<style>
    .pedido-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .pedido {
        width: 30%;
        margin: 1%;
    }

    .card {
        display: inline-block;
        position: relative;
        width: 100%;
        margin-bottom: 20px;
    }

    .img-carrinho {
        max-height: 100px;
        width: 50px; 
    }

    .produtos {
        display: none; /* Inicialmente, os produtos estão ocultos */
    }

    .btn-expandir {
        display: block;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<p></p>
<p></p>
<p>&nbsp</p>

<h1 class="text-center">Meus pedidos</h1>
<div class="pedido-container">
    @foreach($pedidos as $pedido)
        <div class="pedido">
            <hr size="10">
            <h4 class="fw-bold mb-0 text-black">Pedido de Nº{{$pedido->PEDIDO_ID}}</h4>
            <h6 class="mb-0 text-muted">Data do pedido: {{$pedido->PEDIDO_DATA}} </h6>

            <button class="btn btn-primary btn-expandir" data-target="{{ $pedido->PEDIDO_ID }}">Detalhes do pedido</button>

            <div class="produtos" id="produtos-{{ $pedido->PEDIDO_ID }}">
                @foreach($pedido->peditoItem as $item)
                    @if($item->ITEM_QTD > 0)
                        <div class="card" style="width: 100%;">
                            <img src="{{ $item->Produto->ProdutoImagem[0]->IMAGEM_URL }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->Produto->PRODUTO_NOME }}</h5>
                                <p class="card-text">Valor: R${{ $item->Produto->PRODUTO_PRECO - $item->Produto->PRODUTO_DESCONTO }}</p>
                                <p class="card-text">Quantidade: {{ $item->ITEM_QTD }}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    @endforeach
</div>

<script>
    // Adiciona um listener de evento para cada botão de expansão
    document.querySelectorAll('.btn-expandir').forEach(function(button) {
        button.addEventListener('click', function() {
            var targetId = this.getAttribute('data-target');
            var produtosDiv = document.getElementById('produtos-' + targetId);
            produtosDiv.style.display = produtosDiv.style.display === 'none' ? 'block' : 'none';
        });
    });
</script>

@endsection
