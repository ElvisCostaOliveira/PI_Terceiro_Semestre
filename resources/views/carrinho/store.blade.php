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

<script>
  function Alerta() {
    alert('Adicione algum item no carrinho');
  }
</script>
<p></p>
<p></p>
<p></p>
<p></p>

<section class="h-100 h-custom d-flex align-items-center justify-content-center" style="background-color: #ffffff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-md-12">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h4 class="media-heading notranslate">Carrinho</h4>
                                        <h6 class="mb-0 text-muted"></h6>
                                    </div>
                                    <hr class="my-4">
                                    @foreach($carrinho as $item)
                                        @csrf
                                        @if($item->ITEM_QTD > 0)
                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="{{$item->Produto->ProdutoImagem[0]->IMAGEM_URL}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">{{$item->Produto->PRODUTO_NOME}}</h6>
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">                  
                                                    <input id="form1" min="1" name="quantity" value="{{$item->ITEM_QTD}}" type="number"
                                                        class="form-control form-control-sm" disabled/>
                                                </div>
                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 d-flex align-items-center">
                                                    @if($item->ITEM_QTD==1)
                                                        <h6 class="mb-0">R${{$item->Produto->PRODUTO_PRECO}}</h6>
                                                    @else
                                                        <h6 class="mb-0">R${{$item->Produto->PRODUTO_PRECO * $item->ITEM_QTD}}</h6>
                                                    @endif

                                                    <form action="{{route('carrinho.remove', $item->Produto->PRODUTO_ID)}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="ml-2 btn btn-link">
                                                            <i class="fas fa-times"></i>
                                                        </button>
                                                    </form>
                                                </div>

                                            </div>
                                            <hr class="my-4">
                                        @endif
                                    @endforeach

                                    @if(session('error'))
                                        <div class="alert alert-warning" role="alert">
                                            Ops, o carrinho está vazio! <a href="/" class="alert-link">Adicionar produtos ao carrinho</a>.
                                        </div>
                                    @else
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <h4 class="media-heading notranslate">Detalhamento da Compra</h4>
                            <hr class="my-4">
                            <div class="row m-row--col-separator-xl m--padding-top-10 m--padding-bottom-8 d-flex align-items-center justify-content-center">
                                <h5 class="mr-2">Desconto: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h5>
                                <?php
                                $desconto = 0;
                                ?>
                                <div id="invisivel">
                                    @foreach($carrinho as $item)
                                        {{ $desconto += $item->Produto->PRODUTO_DESCONTO * $item->ITEM_QTD}}
                                    @endforeach
                                </div>
                                <h5 class="ml-2">R${{$desconto}}</h5>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex justify-content-between mb-5">
                                <h5>Total: </h5>
                                <?php
                                $preco = 0;
                                ?>
                                <div id="invisivel">
                                    @foreach($carrinho as $item)
                                        @if($item->ITEM_QTD > 0)
                                            {{$preco += ($item->Produto->PRODUTO_PRECO * $item->ITEM_QTD) - $desconto}}
                                        @endif
                                    @endforeach
                                </div>
                                <h5>R${{$preco}}</h5>
                            </div>

                            <form action="{{ route('pedido.checkout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-warning btn-block buttonLogin fixed-width-button">Finalizar</button>
                            </form>

                            <div class="d-flex justify-content-center align-items-center">
                                <a href="/">
                                    <p></p>
                                    <p>Voltar</p>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
