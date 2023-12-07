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
    
    <script async="" src="../js/gtm.js"></script>
    <script async="" src="../js/gtm_1.js"></script>

    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script src="../js/vendors.bundle.js"></script>

    <link href="/css/vendors.bundle.css" rel="stylesheet" type="text/css">
    <link href="/css/style.bundle.css" rel="stylesheet" type="text/css">
    <link href="/css/override.css" rel="stylesheet" type="text/css">
    <script data-ad-client="ca-pub-3376281802197214" async="" src="../js/adsbygoogle.js"></script>
    <script id="kdtjs" type="text/javascript" async="" src="../js/k.js"></script>

    </head>

    <script>

     function semLetra(a){
       var x= a.which || e.keycode;
       if ((x>=48 && x<=57) || (x==44))
       {
         return true;
       }else{
         return false;
       }
     }
     </script>

     <style>
            .principal-yt{
                font-family: Arial, Helvetica, sans-serif;
            width: 30%;
            background-color: white;
            position:static;
            top:0px;
            left:0%;
            padding: 0px;
            border-radius: 30px;
            color:black;
            margin-top: 5%;
            margin-bottom: 0;
            text-align: center;
            transform: translate(115%,-10%);
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
                
        .button-nxy{
            background-color: #ffd700;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color:white;
            font-size: 15px;    
        }

     </style>


    <div class="principal-yt">
    <h3>Endereço:</h3>
    <section>
        <table>
            <ol>
                <li>
                <form action="{{route('endereco.update',['endereco'=>$endereco->ENDERECO_ID])}}" method="post" >
                      @csrf
                      <input type="hidden" name="_method" value="PUT">
                        <div>
                            <label for="">Nome(Ex:casa, trabalho e etc.)</label>
                            <input class="inputLogin" type="text" name="ENDERECO_NOME" value="{{$endereco->ENDERECO_NOME}}" required>
                        </div>

                        <div>
                            <label for="">Logradouro</label>
                            <input class="inputLogin" type="text" name="ENDERECO_LOGRADOURO" value="{{$endereco->ENDERECO_LOGRADOURO}}" required>
                        </div>

                        <div>
                            <label for="">N° Residência</label>
                            <input class="inputLogin" type="text" name="ENDERECO_NUMERO" value="{{$endereco->ENDERECO_NUMERO}}" required>
                        </div>

                        <div>
                            <label for="">Complemento</label>
                            <input class="inputLogin" type="text" name="ENDERECO_COMPLEMENTO" value="{{$endereco->ENDERECO_COMPLEMENTO}}"required>
                        </div>

                        <div>
                            <label for="">CEP</label>
                            <input class="inputLogin" type="text" name="ENDERECO_CEP" value="{{$endereco->ENDERECO_CEP}}" required minlength=8 maxlength=8 onkeypress="return semLetra(event)">
                        </div>
                        <div>
                            <label for="">Cidade</label>
                            <input class="inputLogin" type="text" name="ENDERECO_CIDADE" value="{{$endereco->ENDERECO_CIDADE}}" required>
                        </div>
                        <div>
                            <label for="">Estado</label>
                            <select  class="inputLogin" name="ENDERECO_ESTADO" required>

                                <option selected value="{{$endereco->ENDERECO_ESTADO}}">{{$endereco->ENDERECO_ESTADO}}</option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="MG">MG</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PR">PR</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SP">SP</option>
                                <option value="SE">SE</option>
                                <option value="TO">TO</option>
                        </select>
                        <div class="form-check">

                    

                    </div>
                      <button type="submit" class="button-nxy">Atualizar</button>
                    </form>
                </li>
            </ol>
        </table>
    </section>
    </div>

@endsection
