@extends('layout.app')

@section('main')

<style>
    #invisivel {
        display: none;
    }

    .img-carrinho {
        max-height: 100px;
        width: 50px; 
    }
</style>
<p></p>
<p></p>
<section class="h-100 h-custom" style="background-color: #ffffff">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <h1 class="fw-bold mb-0 text-black">Obrigado pela compra!</h1>
                            <p></p>
                            <p></p>
                            <h3 class="fw-bold mb-0 text-black">Número do pedido:*{{$pedido->PEDIDO_ID}}</h3>
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <br><br><br>
                            </div>
                            <h6 class="mb-0 text-muted">Data da compra:{{$pedido->PEDIDO_DATA}}</h6>
                            <hr class="my-4">

                            @foreach($carrinho as $item)
                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                        <img src="{{$item->Produto->ProdutoImagem[0]->IMAGEM_URL}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                        <h6 class="text-black mb-0">{{$item->Produto->PRODUTO_NOME}}</h6>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">                  
                                        <input id="form1" min="1" name="quantity" value="{{$item->ITEM_QTD}}" type="number" class="form-control form-control-sm" disabled/>
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                        @if($item->ITEM_QTD==1)
                                            <h6 class="mb-0">R${{$item->Produto->PRODUTO_PRECO}}</h6>
                                        @else
                                            <h6 class="mb-0">{{$item->Produto->PRODUTO_PRECO * $item-> ITEM_QTD}}</h6>
                                        @endif
                                        
                                    </div>
                                </div>
                                <hr class="my-4">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-registration card-registration-2 bg-grey">
                    <div class="card-body p-6">
                        <h4 class="media-heading notranslate">Resumo da compra</h4>
                        <hr class="my-4">

                        <?php
                        $desconto = 0;
                        ?>
                        <div id="invisivel">
                            @foreach($carrinho as $item)
                                {{ $desconto+= $item->Produto->PRODUTO_DESCONTO * $item-> ITEM_QTD}}
                            @endforeach
                        </div>

                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="mr-2">Desconto: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h5>
                            <h5 class="ml-2">R${{$desconto}}</h5>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-between mb-7">
                            <h5>Total: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h5>
                            <?php
                            $preco = 0;
                            ?>
                            <div id="invisivel">
                                @foreach($carrinho as $item)
                                    @if($item->ITEM_QTD > 0)
                                        {{$preco+=($item->Produto->PRODUTO_PRECO*$item->ITEM_QTD)-$desconto}}
                                    @endif
                                @endforeach
                            </div>
                            <h5>R${{$preco}},00</h5>
                        </div>

                        <hr class="my-4">

                        <div class="d-flex justify-content-between mb-4">
                            <a href="/">
                                <button type="submit" class="btn btn-warning btn-block buttonLogin fixed-width-button">Tela Principal</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
