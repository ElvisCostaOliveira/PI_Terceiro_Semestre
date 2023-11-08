@extends('layout.app')
    @section('main')

    <div class="principal-poy">

      <h1> Informações de Usuário </h1>
      <table id="tabelaPerfil">
        <tr>
          <th>Nome de Usuário</th>
          <th>E-mail</th>
          <th>CPF</th>
        </tr>
    
   
        <tr>
          <td>{{$user->USUARIO_NOME}}</td>
          <td>{{$user->USUARIO_EMAIL}}</td>
          <td>{{$user->USUARIO_CPF}}</td>
        </tr>

  </table>
  
  <div class="voltar">
      <a href="{{route('usuarios.edit',['user'=>$user->USUARIO_ID])}} " class="btn btn-dark" role="button">Editar</a></td>

                        <a href="/">
                          <button type="submit" class="btn btn-danger">Voltar</button>
                        </a>

      </div>
    </div>
@endsection
