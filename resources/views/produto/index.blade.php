@extends('layout.app')
@section('main')
    <style>
        .produto {
            margin: 1%;
            position: relative;
            width: 190px;
        }

        .produto img {
            max-width: 100%;
            height: auto;
        }

        .m-widget19__pic {
            height: 253px;
            overflow: hidden;
        }

        .m-widget19__content {
            margin-top: 15px;
            margin-right: 5px;
            margin-bottom: 5px;
        }

        .m-widget3__item {
            margin: 0;
        }

        .m-widget3__header {
            margin: 0;
        }

        .m-widget3__info {
            display: block;
            height: 40px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .m-widget3__time {
            font-size: 0.90rem;
        }

        .m--padding-bottom-15 {
            padding-bottom: 15px;
        }

        .fixed-width-button {
            width: 165px;
            color: #4adedd;
        }

        /* Adicionando estilo ao botão "Comprar" */
        .buttoncarrinho {
            width: 100%;
            margin-top: 10px;
        }
    </style>

    <p></p>
    <p></p>
    <p>&nbsp</p>

    <div class="principal-rty ml-5"> 
                <div class="text-center">
            <h1>Resultados para "{{$search}}"</h1>
        </div>
    <div class="row">
        @if(count($produtos) < 1 )
            <h3>Não existem resultados para "{{$search}}"</h3>
        @else
            @foreach ($produtos as $produto)
                <div class="col-6 col-md-3 col-lg-2 produto" data-categoria="{{ $produto->categoria->CATEGORIA_ID }}">
                    <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                        <a title="{{$produto->PRODUTO_NOME}}" style="text-decoration: none;">
                            <div class="m-portlet__head m-portlet__head--fit">
                                <div class="m-portlet__head-caption">&nbsp;</div>
                            </div>
                            <div class="m-portlet__body m-portlet__body--no-padding">
                                <div class="m-widget19">
                                    <div class="m-widget19__pic m-portlet-fit--top">
                                        @if (!empty($produto->ProdutoImagem[0]->IMAGEM_URL))
                                            <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" class="card-img-top"
                                                alt="...">
                                        @else
                                            <img src="../img/indisponivel.jpg" class="card-img-top" alt="...">
                                        @endif
                                    </div>

                                    <div class="m-widget19__content m--margin-top-15 m--margin-right-5 m--margin-bottom-5">
                                        <div class="m-widget3">
                                            <div class="m-widget3__item m--marginless">
                                                <div class="m-widget3__header">
                                                    <div class="m-widget3__info">
                                                        <span class="m-widget3__username">
                                                            {{$produto->PRODUTO_NOME}}
                                                        </span>
                                                        <div class="m-widget3__time">
                                                            R${{$produto->PRODUTO_PRECO}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-widget3__body">
                                                    <form action="{{route('produto.show', $produto->PRODUTO_ID)}}">
                                                        @csrf
                                                        <button type="submit"
                                                            class="btn btn-warning btn-block buttonLogin fixed-width-button">Detalhes</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
