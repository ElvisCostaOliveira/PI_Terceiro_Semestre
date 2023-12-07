@extends('layout.app')
@section('main')

<style>
    .conteiner-principal{
      margin-left:500px; 
      font-size:20px;
    }
    
    .posição-titulo{
      margin-left:80px; 
      margin-top:100px; 
      margin-bottom: 60px;
    }
    .info{
      padding-right:50px; 
      border:1px solid black; 
padding:0px 20px 0px 20px; 
      text-align:center;
    }
    .voltar{
      margin-left:200px; margin-top:20px;
    }
    .btn-dark{
background:red;
    }
    
 
</style>

<div class="principal-poy">
  <div class="conteiner-principal" >
    <h1 class="posição-titulo"> Informações de Usuário </h1>
    <table id="tabelaPerfil">
      <tr>
        <th class="info" >Nome de Usuário</th>
        <th class="info">E-mail</th>
        <th class="info">CPF</th>
      </tr>


      <tr>
        <td class="info">{{$user->USUARIO_NOME}}</td>
        <td class="info">{{$user->USUARIO_EMAIL}}</td>
        <td class="info">{{$user->USUARIO_CPF}}</td>
      </tr>

    </table>

    <div class="voltar">
      <a href="{{route('usuarios.edit',['user'=>$user->USUARIO_ID])}} " class="btn btn-dark" role="button">Editar</a></td>

      <a href="/">
        <button type="submit" class="btn btn-danger">Voltar</button>
      </a>
    </div>
  </div>
</div>
@endsection
