@extends('layout.app')
@section('main')

</div>
<!--Linha PRODUTOS EM DESTAQUE-->
<section class="produtos">
    <span class="title-secundary">Produtos em Destaque</span>
    <hr>
    <div class="row row-cols-1 row-cols-md-3 g-3">
        @foreach(\App\Models\Produto::all()->take(3) as $produto)

        <div class="col">
            <div class="card">
                <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
                    <p class="card-text">R${{$produto->PRODUTO_PRECO}}</p>
                    <a href="{{route('produto.show', $produto->PRODUTO_ID)}}">
                        <button type="submit" class="buttonLogin">Comprar <i class="ri-shopping-cart-line"></i></button></a>
                </div>
            </div>
        </div>

        @endforeach

        <!-- Segundo Card mais vendidos -->
        <section class="produtos02">
            <span class="title-secundary">Mais Vendidos</span>
            <hr>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach(\App\Models\Produto::all()->take(6) as $produto)

                <div class="col">
                    <div class="card">
                        @if (count($produto->ProdutoImagem)>0 )
                        <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top" alt="...">
                        @else
                        <img src="../img/indisponivel.jpg" class="card-img-top" alt="...">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$produto->PRODUTO_NOME}}</h5>
                            <p class="card-text">R${{$produto->PRODUTO_PRECO}}</p>
                            <a href="{{route('produto.show', $produto->PRODUTO_ID)}}"><button type="submit" class="buttonLogin">Comprar <i class="ri-shopping-cart-line"></i></button></a>
                        </div>
                    </div>
                </div>

                @endforeach

        </section>
</section>
@endsection

