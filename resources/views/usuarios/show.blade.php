@extends('layout.app')
@section('main')

<div class="principal-poy">
  <div style="margin-left:500px; font-size:20px;">
    <h1 style="margin-left:80px; margin-top:100px; margin-bottom: 60px;"> Informações de Usuário </h1>
    <table id="tabelaPerfil">
      <tr style="border:1px solid black;">
        <th style="padding-right:50px; border:1px solid black; padding:0px 20px 0px 20px; text-align:center;">Nome de Usuário</th>
        <th  style="padding-right:50px; border:1px solid black; padding:0px 20px 0px 20px; text-align:center;">E-mail</th>
        <th  style="padding-right:50px; border:1px solid black; padding:0px 20px 0px 20px; text-align:center;">CPF</th>
      </tr>


      <t>
        <td style="border:1px solid black; padding:0px 20px 0px 20px;">{{$user->USUARIO_NOME}}</td>
        <td style="border:1px solid black; padding:0px 20px 0px 20px;">{{$user->USUARIO_EMAIL}}</td>
        <td style="border:1px solid black; padding:0px 20px 0px 20px;">{{$user->USUARIO_CPF}}</td>
      </tr>

    </table>

    <div class="voltar" style="margin-left:200px; margin-top:20px;">
      <a href="{{route('usuarios.edit',['user'=>$user->USUARIO_ID])}} " class="btn btn-dark" role="button">Editar</a></td>

      <a href="/">
        <button type="submit" class="btn btn-danger">Voltar</button>
      </a>
    </div>
  </div>
</div>
@endsection