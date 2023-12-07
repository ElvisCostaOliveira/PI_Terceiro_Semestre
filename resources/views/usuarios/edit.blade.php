@extends('layout.app')
@section('main')

@if(session()->has('message'))
{{session()->get('message')}}
@endif

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="/css/vendors.bundle.css" rel="stylesheet" type="text/css">
    <link href="/css/style.bundle.css" rel="stylesheet" type="text/css">
    <link href="/css/override.css" rel="stylesheet" type="text/css">

</head>

<style>
    body {
        font-family: arial;
    }

    .principal-yt {
        width: 30%;
        background-color: ghostwhite;
        position: static;
        top: 0px;
        left: 0%;
        padding: 0px;
        border-radius: 30px;
        color: black;
        margin-top: 5%;
        margin-bottom: 0;
        text-align: center;
        transform: translate(115%, -10%);
    }

    .container {
        background-color: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(40px);
        padding: 30px;
        width: 560px;
        border-radius: 2%;
        font-size: 20px;
        box-shadow: 5px 5px 5px black;
    }

    .posicao {

        width: 330px;
        margin-top: 200px;
        margin-left: 590px;
        margin-bottom: 0px;
    }

    .posicao {
        padding: 10px 50px 20px;
    }

    .font-secundaria {
        font-size: 20px;
    }

    .titulo {

        margin-bottom: 20px;
    }

    #exampleInputEmail1,
    #exampleInputPassword1 {
        font-size: 20px;
    }

    .salvar-editar {
        margin-top: 20px;
        margin-left: 30px;
    }

    #saveEditor {
        margin-right: 10px;
    }

    #saveEditor {
        background-color: yellow;
        border: none;
        padding: 15px;
        width: 40%;
        border-radius: 10px;
        color: white;
        font-size: 15px;
    }

    .btn,
    .btn-danger {
        background-color: green;
        border: none;
        padding: 15px;
        width: 50%;
        border-radius: 10px;
        color: white;
        font-size: 15px;

    }
</style>

<div class="principal-typ">
    <form action="{{route('usuarios.update',['user'=>$user->USUARIO_ID])}}" method="post">

        @csrf

        <div class="posicao">
            <h1 class="titulo">Editar Usuário</h1>


            <input type="hidden" name="_method" value="PUT">

            <div class="form-group">

                <label class="font-secundaria" for="exampleInputEmail1">Nome:</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="USUARIO_NOME" value="{{$user->USUARIO_NOME}}" required>
                <small id="emailHelp" class="form-text text-muted"></small>

            </div>

            <div class="form-group">
                <label class="font-secundaria" for="exampleInputPassword1">E-mail:</label>
                <input type="email" class="form-control" id="exampleInputPassword1" name="USUARIO_EMAIL" value="{{$user->USUARIO_EMAIL}}" required>
            </div>

            <div class="salvar-editar">
                <button id="saveEditor" type="submit" class="btn btn-primary">Salvar</button>
                <a href="/">
                    <button type="submit" class="btn btn-danger">Voltar</button>
                </a>
            </div>

        </div>
    </form>
</div>



@endsection