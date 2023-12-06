@extends('layout.app')
@section('main')

<script>
        function login() {
            window.alert('Você precisa de uma conta para acessar o carrinho!');
        }
        // function aviso(){
        //     alert('Você deve inserir a quantidade que deseja!');
        //     document.location.reload(true);
        // }
</script>
    


    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-container m-container--responsive m-container--xxl m-page__container m-body">
            <div id="contents" class="m-grid__item m-grid__item--fluid m-wrapper">
                
			<style>
				@media (min-width: 1025px) {
					.m-header--fixed .m-body {
						padding-top: 127px !important;
					}
				}

				.alert.m-alert--icon .m-alert__icon {
					padding: 0 1rem 0 1.5rem !important;
				}

				.alert.m-alert--icon .m-alert__text {
					padding: 0.75rem 0 0 0;
				}

				.m-alert__text>h4 {
					font-size: 1.1rem;
					margin-bottom: .25rem;
				}

				.m-alert__text>p {
					margin-bottom: .5rem;
				}
			</style>

<div class="m-content">

    <div class="row">
        <div class="col-lg-12">
                    </div>
    </div>

    <div class="m-portlet m-portlet--mobile m-portlet--responsive-mobile">
    <div class="m-portlet__head--fit">
                <img src="{{$produto->ProdutoImagem[0]->IMAGEM_URL}}" alt="{{$produto->PRODUTO_NOME}}" width="100%" style="max-height: 200px;" class="img-fluid">
    </div>
    <div class="m-portlet__body m--padding-bottom-5">
        <div class="m-section m--margin-bottom-5">
            <div class="m-section__content">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="media-heading notranslate">{{$produto->PRODUTO_NOME}}</h4>
                        <p>
                             &nbsp;
                            Quantidade disponivel:{{$produto->PRODUTO_QTD}} </p>
                    </div>
                </div>

                <div class="row m-row--col-separator-xl m--padding-top-10 m--padding-bottom-10">
                    <div class="col-lg-4 notranslate">
                        <strong>Descrição de Valores:</strong>
                        <br>
                        Valor original: R${{$produto->PRODUTO_PRECO}}
                        <br>
                        Desconto: R${{$produto->PRODUTO_DESCONTO}}
                    </div>
                    
                    <div class="col-lg-4">
                        <strong>Valor final:</strong><br>
                        Produto com desconto: R${{$produto->PRODUTO_PRECO - $produto->PRODUTO_DESCONTO}}
                    </div>

                    <div class="col-lg-4">
                        <strong>Categoria:</strong><br>
                        {{$produto->Categoria->CATEGORIA_NOME}}</div>
                </div>
            </div>
		 </div>
</div>
	
	<!-- Informação-->
    <div class="m-accordion m-accordion--bordered" id="m_accordion_event" role="tablist">      
        
		<div class="m-accordion__item">
			<div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_event_item_5_head" data-toggle="collapse" href="#m_accordion_event_item_5_body" aria-expanded="false">
				<span class="m-accordion__item-icon">
					<i class="flaticon-list-2"></i>
				</span>
				<span class="m-accordion__item-title">Descrições</span>
				<span class="m-accordion__item-mode"></span>
			</div>
			<div class="m-accordion__item-body collapse" id="m_accordion_event_item_5_body" role="tabpanel" aria-labelledby="m_accordion_event_item_5_head" data-parent="#m_accordion_event">
				<div class="m-accordion__item-content">
					<div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-height="380">
						<p style="text-align: justify;"><span style="font-size: small;"><strong>{{$produto->PRODUTO_NOME}}</strong></span></p>
						<p style="text-align: justify;"><span style="font-size: small;">{{$produto->PRODUTO_DESC}}</span></p>
				</div>
			</div>
		</div>
               
		<div class="m-accordion__item">
            <p></p>
        </div>

        @if(!Auth::check())

                <div style="text-align: center; display: block; margin: 0 auto;">
                    <label for="">&nbsp Adicionar quantidade</label>
                    <input type="number" name="ITEM_QTD" min="1" value="1">
                </div>

                    <a href="/login">
                        <button type="submit" class="btn btn-warning btn-block buttonLogin fixed-width-button"" onclick="login()">Adicionar ao carrinho</button>
                    </a>


                @else
                <form method="POST" action="{{route('carrinho.store', $produto->PRODUTO_ID)}}">
                @csrf

                <div style="text-align: center; display: block; margin: 0 auto;">
                    <label for="">Adicionar quantidade</label>
                    <input type="number" name="ITEM_QTD" min="1" value="1">

                    <button type="submit" class="btn btn-warning btn-block buttonLogin fixed-width-button"" onclick="aviso()">Adicionar ao carrinho</button>
                </div>

                </form>
                @endif

                

        
      
		<script type="text/javascript">
			window.addEventListener("load", function(event) {
				$('#lightgallery').lightGallery({
					download: false
				});
			});
		</script>
    
		<script type="text/javascript">
			window.addEventListener("load", function(event) {
				$('#m_accordion_event').one('show.bs.collapse', function(e) {
					if (e.target.id == "m_accordion_event_item_6_body") {
						$('#cboPdvs').change();
					}
				});

				$('#cboPdvs').change(function() {
					$('.pdv').hide();
					document.getElementById(this.value).style.display = 'block';
				});
			});
		</script>
    </div>




       
</div>

              
          </div>
        </div>
@endsection