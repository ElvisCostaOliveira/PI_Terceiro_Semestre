@extends('layout.app')
@section('main')

<div class="container text-center" style="margin-top: 100px;">
    <h1>Informações de Usuário</h1>
    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Nome de Usuário</th>
                <th scope="col">E-mail</th>
                <th scope="col">CPF</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tr>
            <td>{{$user->USUARIO_NOME}}</td>
            <td>{{$user->USUARIO_EMAIL}}</td>
            <td>{{$user->USUARIO_CPF}}</td>
            <td>
                <a href="{{route('usuarios.edit',['user'=>$user->USUARIO_ID])}}" class="btn btn-dark" role="button">Editar</a>
                <a href="/">
                    <button type="submit" class="btn btn-danger">Voltar</button>
                </a>
            </td>
        </tr>
    </table>
</div>



@endsection
