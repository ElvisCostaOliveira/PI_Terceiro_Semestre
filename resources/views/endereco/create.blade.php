@extends('layout.app')
@section('main')

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    // Garante que o código JavaScript seja executado após o carregamento do DOM
    $(document).ready(function () {
        function semLetra(a) {
            var x = a.which || e.keycode;
            if ((x >= 48 && x <= 57) || (x == 44)) {
                return true;
            } else {
                return false;
            }
        }

        function buscarCep() {
            var cep = $('#ENDERECO_CEP').val();

            $.ajax({
                url: 'https://viacep.com.br/ws/' + cep + '/json/',
                dataType: 'json',
                success: function (data) {
                    if (!data.erro) {
                        $('#ENDERECO_LOGRADOURO').val(data.logradouro);
                        $('#ENDERECO_CIDADE').val(data.localidade);
                        $('#ENDERECO_ESTADO').val(data.uf);
                    } else {
                        alert('CEP não encontrado. Verifique o CEP e tente novamente.');
                    }
                },
                error: function (xhr, status, error) {
                    console.log(xhr);
                    console.log(status);
                    console.log(error);
                    alert('Erro ao buscar CEP. Tente novamente.');
                }
            });
        }

        // Adicionado evento de clique para chamar a função buscarCep
        $('#btnBuscarCep').click(function () {
            buscarCep();
        });
    });
</script>

<p></p>
<p></p>
<p>&nbsp</p>
<p></p>
<p></p>
<p>&nbsp</p>
<p></p>
<p></p>
<p>&nbsp</p>

<div class="principal-yt">
    <section>
        <div class="text-center">
            <h1>Cadastro de Endereço</h1>
        </div>
        <div class="tabela-ty">
            <form action="{{route('endereco.store')}}" method="POST">
                @csrf
                <table class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">NOME (EX: Casa, Trabalho)</th>
                            <th scope="col">LOGRADOURO</th>
                            <th scope="col">NUMERO DA RESIDÊNCIA</th>
                            <th scope="col">COMPLEMENTO</th>
                            <th scope="col">CEP</th>
                            <th scope="col">CIDADE</th>
                            <th scope="col">ESTADO</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>
                            <label for="ENDERECO_NOME">&nbsp</label>
                            <input class="inputLogin" type="text" name="ENDERECO_NOME" required>
                        </td>
                        <td>
                            <label for="ENDERECO_LOGRADOURO">&nbsp</label>
                            <input class="inputLogin" type="text" name="ENDERECO_LOGRADOURO" required>
                        </td>
                        <td>
                            <label for="ENDERECO_NUMERO">&nbsp</label>
                            <input class="inputLogin" type="text" name="ENDERECO_NUMERO" onkeypress="return semLetra(event)" required>
                        </td>
                        <td>
                            <label for="ENDERECO_COMPLEMENTO">&nbsp &nbsp</label>
                            <input class="inputLogin" type="text" name="ENDERECO_COMPLEMENTO" required>
                        </td>
                        <td>
                            <label for="ENDERECO_CEP"></label>
                            <input class="inputLogin" type="text" name="ENDERECO_CEP" required minlength=8 maxlength=8 onkeypress="return semLetra(event)">
                            <p></p>
                            <button type="button" id="btnBuscarCep" class="btn btn-info">Buscar CEP</button>
                        </td>
                        <td>
                            <label for="ENDERECO_CIDADE">&nbsp</label>
                            <input class="inputLogin" type="text" name="ENDERECO_CIDADE" required>
                        </td>
                        <td>
                            <label for="ENDERECO_ESTADO">&nbsp</label>
                            <select class="inputLogin" name="ENDERECO_ESTADO" required>
                                <option value="">Selecione</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>

                        </td>
                        
                    </tr>
                    
                </table>

                
                <button type="submit" class="btn btn-warning btn-block buttonLogin fixed-width-button mx-auto" style="width: 300px;">Inserir endereço</button>
            
            </form>
        </div>
    </section>
</div>

@endsection
