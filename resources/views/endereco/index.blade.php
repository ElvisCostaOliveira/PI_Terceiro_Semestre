@extends('layout.app')
@section('main')

<p></p>
<p></p>
<p>&nbsp</p>
<p></p>
<p></p>
<p>&nbsp</p>
<p>&nbsp</p>
<p></p>
<p></p>

@if(count($enderecos) < 1 )
    <h1>Você ainda não tem nenhum endereço cadastrado.</h1>
    <a href="{{route('endereco.create')}}">
        <button type="submit" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Cadastrar novo endereço</button>
    </a>
@else
    <section>
        <div class="principal-rty ml-5"> 
                <div class="text-center">
            <h1>Meus endereços</h1>
        </div>
            <div class="tabela-ty">
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">LOGRADOURO</th>
                            <th scope="col">NUMERO</th>
                            <th scope="col">COMPLEMENTO</th>
                            <th scope="col">CEP</th>
                            <th scope="col">CIDADE</th>
                            <th scope="col">ESTADO</th>
                            <th scope="col">ATUALIZAR</th>
                        </tr>
                    </thead>
                    @foreach($enderecos as $endereco)
                        <tr>
                            <td>{{$endereco->ENDERECO_NOME}}</td>
                            <td>{{$endereco->ENDERECO_LOGRADOURO}}</td>
                            <td>{{$endereco->ENDERECO_NUMERO}}</td>
                            <td>{{$endereco->ENDERECO_COMPLEMENTO}}</td>
                            <td>{{$endereco->ENDERECO_CEP}}</td>
                            <td>{{$endereco->ENDERECO_CIDADE}}</td>
                            <td>{{$endereco->ENDERECO_ESTADO}}</td>
                            <td> <a href="{{route('endereco.edit',['endereco'=>$endereco->ENDERECO_ID])}}" class="btn btn-primary" role="button">Editar</a></td></td>
                        </tr>
                    @endforeach
                </table>
                <ul class="btn btn-block fixed-width-button mx-auto" style="width: 300px;">
                <li>
                    <a href="{{route('endereco.create')}}">
                        <button type="submit" class="btn btn-warning btn-block buttonLogin fixed-width-button mx-auto" style="width: 300px;">Inserir novo endereço</button>
                    </a>
                </li>

                </ul>
            </div>
        </div>
    </section>
@endif
@endsection
