@extends('templates.struct')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Funcionário')

@section('body')

  @component('admin.administrator.administratormenu') @endcomponent

  <div class="text-center">
    <button type="button" class="cadast btn btn-outline-success btn-lg" data-toggle="modal" data-target="#register">Cadastrar</button>
  </div>

  @component('admin.administrator.table')
    @slot('head')
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Status</th>
    @endslot
    <td>Nome1</td>
    <td>Sobrenome1</td>
    <td>Andamento</td>
    <td><button type="button" class="funci btn btn-outline-success btn-sm" data-toggle="modal" data-target="#visualization">Visualizar</button></td>
    <td><button type="button" class="funci btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#change">Alterar</button></td>
    <td><button type="button" class="funci btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#delete">Excluir</button></td>
  @endcomponent


  <!-- Visualizar -->
  @component('admin.administrator.modal')
    @slot('title', 'Visualizar')
    @slot('type', 'visualization')
    
  <form action="#" method="POST">
    <div class="form-group">
      <label for="nome">Nome completo</label>
      <input type="text" id="nome" class="form-control" name="nom" disabled>
    </div><br>
        <div class="row">
          <div class="col">
            <label for="datan">Data de nascimento</label><br>
            <input type="date" id="datan" class="form-control" name="dn" disabled>
          </div>
          <div class="col">
            <label for="cp">CPF</label><br>
            <input type="text" id="cp" class="form-control" name="cpf" disabled>
          </div>
          <div class="col">
            <label for="r">RG</label><br>
            <input type="text" id="rg" class="form-control" name="rg" disabled>
          </div>
        </div><br><br>
        <div class="row"> 
          <div class="col">
            <label for="mat">Matricula</label><br>
            <input type="text" id="mat" class="form-control" name="matricula" disabled>
          </div>
          <div class="col">
            <label for="email">Email</label><br>
            <input type="email" id="email" class="form-control" name="mail" disabled>
          </div>
        </div><br><br>
        <div class="row">
          <div class="col">
            <label for="car">Cargo</label>
            <input type="text" id="car" class="form-control" name="cargo" disabled>
          </div>
          <div class="col">
            <label for="ate">Atividade exercida</label>
            <textarea class="form-control" id="ate" name="atividade" style="resize: none;" disabled></textarea>
          </div>
          <div class="col">
            <label for="edr">Exposição de risco</label>
            <textarea class="form-control" id="edr" name="exposicao" style="resize: none;" disabled></textarea>
          </div>
    </div><br><br>
      <div class="row">
        <div class="col">
          <label for="dini">Data do inicio</label>
          <input type="date" id="dini" class="form-control" name="di" disabled>
        </div>  													
        <div class="col">
          <label for="dpr">Prazo</label>
          <input type="date" id="dpr" class="form-control" name="prazo" disabled>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="ce">CEP</label><br>
          <input type="text" class="form-control" name="cep" disabled>
        </div>
        <div class="col">
          <label for="r">Rua</label><br>
          <input type="text" id="rua" class="form-control" name="rua" disabled>
        </div>
        <div class="col">
          <label for="b">Bairro</label><br>
          <input type="text" id="bairro" class="form-control" name="bairro" disabled>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="c">Cidade</label><br>
          <input type="text" id="cidade" class="form-control" name="cidade" disabled>
        </div>
        <div class="col">
          <label for="e">Estado</label><br>
          <input type="text" id="estado" class="form-control" name="estado" disabled>
        </div>
      </div><br><br>
      <div class="row">
        <div class="col">
          <label for="tlog">Tipo de logradoro</label><br>
          <input type="text" id="tlog" class="form-control" name="tlogra" disabled>
        </div>
        <div class="col">
          <label for="log">Logradoro</label><br>
          <input type="text" id="log" class="form-control" name="logra" disabled>
        </div>
      </div>
    </div>
  </form> 
  @endcomponent

  <!-- Excluir -->
  <form method="POST" action="">
    @component('admin.administrator.modal')
      @slot('title', 'Excluir')
      @slot('type', 'delete')
        <h2 class="lead text-center" style="font-size: 15pt; font-weight: bold;">Tem certerza que deseja excluir?</h2>
          <div class="modal-footer">
              <button type="submit" class="btn btn-danger btn-md" class="btn btn-success">Sim</button>
            <button style="color: white;" class="btn btn-warning btn-md" class="btn btn-success">Não</button>
          </div> 
    @endcomponent
  </form>

  <!-- Alterar -->
  @component('admin.administrator.modal')
    @slot('title', 'Alterar')
    @slot('type', 'change')
  <form action="#" method="POST">
      <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="text" id="nome" class="form-control" name="nom">
          </div><br>

              <div class="row">
                  <div class="col">
                    <label for="datan">Data de nascimento</label><br>
                        <input type="date" id="datan" class="form-control" name="dn">
                  </div>
                  <div class="col">
                    <label for="cp">CPF</label><br>
                        <input type="text" id="cp" class="form-control" name="cpf">
                    </div>
                    <div class="col">
                    <label for="r">RG</label><br>
                        <input type="text" id="rg" class="form-control" name="rg">
                    </div>
                </div><br><br>

                <div class="row"> 
                  <div class="col">
                    <label for="mat">Matricula</label><br>
                        <input type="text" id="mat" class="form-control" name="matricula">
                  </div>
                  <div class="col">
                    <label for="email">Email</label><br>
                        <input type="email" id="email" class="form-control" name="mail">
                    </div>
                </div><br><br>

                <div class="row">
                    <div class="col">
                        <label for="car">Cargo</label>
                        <input type="text" id="car" class="form-control" name="cargo">
                    </div>
                    <div class="col">
                        <label for="ate">Atividade exercida</label>
                        <textarea class="form-control" id="ate" name="atividade" style="resize: none;"></textarea>
                    </div>
                    <div class="col">
                        <label for="edr">Exposição de risco</label>
                        <textarea class="form-control" id="edr" name="exposicao" style="resize: none;"></textarea>
                    </div>
                </div><br><br>

                <div class="row">
                  <div class="col">
                      <label for="dini">Data do inicio</label>
                      <input type="date" id="dini" class="form-control" name="di">
                  </div>  													
                  <div class="col">
                      <label for="dpr">Prazo</label>
                      <input type="date" id="dpr" class="form-control" name="prazo">
                  </div>
              </div><br><br>

                  <div class="row">
                      <div class="col">
                        <label for="ce">CEP</label><br>
                            <input type="text" class="form-control" name="cep">
                      </div>
                      <div class="col">
                        <label for="r">Rua</label><br>
                            <input type="text" id="rua" class="form-control" name="rua">
                        </div>
                        <div class="col">
                        <label for="b">Bairro</label><br>
                            <input type="text" id="bairro" class="form-control" name="bairro">
                        </div>
                    </div><br><br>

                    <div class="row">
                      <div class="col">
                        <label for="c">Cidade</label><br>
                            <input type="text" id="cidade" class="form-control" name="cidade">
                      </div>
                      <div class="col">
                        <label for="e">Estado</label><br>
                            <input type="text" id="estado" class="form-control" name="estado">
                        </div>
        </div><br><br>

        <div class="row">
          <div class="col">
            <label for="tlogradouro">Tipo de logradouro</label>
            <select id="tlogradouro" name="tlog" class="form-control">
              <option value="0" selected></option>
              <option value="1">Aeroporto</option>
              <option value="2">Alameda</option>
              <option value="3">Área</option>
              <option value="4">Avenida</option>
              <option value="5">Campo</option>
              <option value="6">Chácara</option>
              <option value="7">Colônia</option>
              <option value="8">Condomínio</option>
              <option value="9">Conjunto</option>
              <option value="10">Distrito</option>
              <option value="11">Esplanada</option>
              <option value="12">Estação</option>
              <option value="13">Estrada</option>
              <option value="14">Favela</option>
              <option value="15">Feira</option>
              <option value="16">Jardim</option>
              <option value="17">Ladeira</option>
              <option value="18">Lago</option>
              <option value="19">Lagoa</option>
              <option value="20">Largo</option>
              <option value="21">Loteamento</option>
              <option value="22">Morro</option>
              <option value="23">Núcleo</option>
              <option value="24">Parque</option>
              <option value="25">Passarela</option>
              <option value="26">Pátio</option>
              <option value="27">Praça</option>
              <option value="28">Quadra</option>
              <option value="29">Recanto</option>
              <option value="30">Residencial</option>
              <option value="31">Rodovia</option>
              <option value="32">Rua</option>
              <option value="33">Setor</option>
              <option value="34">Sítio</option>
              <option value="35">Travessa</option>
              <option value="36">Trecho</option>
              <option value="37">Trevo</option>
              <option value="38">Vale</option>
              <option value="39">Vereda</option>
              <option value="40">Via</option>
              <option value="41">Viaduto</option>
              <option value="42">Viela</option>
              <option value="43">Vila</option>
            </select>
          </div>

          <div class="col">
            <label for="tlogradouro">Logradouro</label>
            <input type="text" id="tlogradouro" class="form-control" name="log">
          </div>
        </div><br><br>
        <div class="modal-footer">
        <button class="btn btn-danger">Cancelar</button>
          <button class="btn btn-success">Salvar</button>
        </div>
  </form>
  @endcomponent

  <!-- Cadastrar -->
  @component('admin.administrator.modal')
    @slot('title', 'Cadastrar')
    @slot('type', 'register')
    <form action="#" method="POST">
      <div class="form-group">
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" class="form-control" name="nom">
      </div><br>
      
      <div class="row">
        <div class="col">
          <label for="datan">Data de nascimento</label><br>
          <input type="date" id="datan" class="form-control" name="dn">
        </div>
        <div class="col">
          <label for="cp">CPF</label><br>
          <input type="text" onkeypress="return js/somenteNumeros(event)" id="cp" class="form-control" name="cpf">
        </div>
        <div class="col">
          <label for="r">RG</label><br>
          <input type="text" onkeypress="return js/somenteNumeros(event)" id="rg" class="form-control" name="rg">
        </div>
      </div><br><br>
      
      <div class="row">
        <div class="col">
          <label for="mat">Matricula</label><br>
          <input type="text" onkeypress="return somenteNumeros(event)" id="mat" class="form-control" name="matricula">
        </div>
        <div class="col">
          <label for="email">Email</label><br>
          <input type="email" id="email" class="form-control" name="mail">
        </div>
        <div class="col">
          <label for="sen">Senha</label><br>
          <input type="text" id="sen" class="form-control" name="senha">
        </div>
      </div><br><br>
      
      <div class="row">
        <div class="col">
          <label for="car">Cargo</label>
          <input type="text" id="car" class="form-control" name="cargo">
        </div>
        <div class="col">
          <label for="ate">Atividade exercida</label>
          <textarea class="form-control" id="ate" name="atividade" style="resize: none;"></textarea>
        </div>
        <div class="col">
          <label for="edr">Exposição de risco</label>
          <textarea class="form-control" id="edr" name="exposicao" style="resize: none;"></textarea>
        </div>
      </div>
      
      <br><legend>Desenvolvimento</legend><br>
      
      <div class="row">
        <div class="col">
          <label for="dini">Data do inicio</label>
          <input type="date" id="dini" class="form-control" name="di">
        </div>                            
        <div class="col">
          <label for="dpr">Prazo</label>
          <input type="date" id="dpr" class="form-control" name="prazo">
        </div>
      </div>
     
      <br><legend>Endereço</legend><br>
     
      <div class="row">
        <div class="col">
          <label for="ce">CEP</label><br>
          <input type="text" onkeypress="return somenteNumeros(event)" id="cep" onblur="pesquisacep(this.value);" class="form-control" name="cep">
        </div>
        <div class="col">
          <label for="r">Rua</label><br>
          <input type="text" id="rua" class="form-control" name="rua">
        </div>
        <div class="col">
          <label for="b">Bairro</label><br>
          <input type="text" id="bairro" class="form-control" name="bairro">
        </div>
      </div><br><br>
     
      <div class="row">
        <div class="col">
          <label for="c">Cidade</label><br>
          <input type="text" id="cidade" class="form-control" name="cidade">
        </div>
        <div class="col">
          <label for="e">Estado</label><br>
          <input type="text" id="estado" class="form-control" name="estado">
        </div>
      </div><br><br>
     
      <div class="row">
        <div class="col">
          <label for="tlogradouro">Tipo de logradouro</label>
          <select id="tlogradouro" name="tlog" class="form-control">
            <option value="0" selected></option>
            <option value="1">Aeroporto</option>
            <option value="2">Alameda</option>
            <option value="3">Área</option>
            <option value="4">Avenida</option>
            <option value="5">Campo</option>
            <option value="6">Chácara</option>
            <option value="7">Colônia</option>
            <option value="8">Condomínio</option>
            <option value="9">Conjunto</option>
            <option value="10">Distrito</option>
            <option value="11">Esplanada</option>
            <option value="12">Estação</option>
            <option value="13">Estrada</option>
            <option value="14">Favela</option>
            <option value="15">Feira</option>
            <option value="16">Jardim</option>
            <option value="17">Ladeira</option>
            <option value="18">Lago</option>
            <option value="19">Lagoa</option>
            <option value="20">Largo</option>
            <option value="21">Loteamento</option>
            <option value="22">Morro</option>
            <option value="23">Núcleo</option>
            <option value="24">Parque</option>
            <option value="25">Passarela</option>
            <option value="26">Pátio</option>
            <option value="27">Praça</option>
            <option value="28">Quadra</option>
            <option value="29">Recanto</option>
            <option value="30">Residencial</option>
            <option value="31">Rodovia</option>
            <option value="32">Rua</option>
            <option value="33">Setor</option>
            <option value="34">Sítio</option>
            <option value="35">Travessa</option>
            <option value="36">Trecho</option>
            <option value="37">Trevo</option>
            <option value="38">Vale</option>
            <option value="39">Vereda</option>
            <option value="40">Via</option>
            <option value="41">Viaduto</option>
            <option value="42">Viela</option>
            <option value="43">Vila</option>
          </select>
        </div>
        <div class="col">
            <label for="tlogradouro">Logradouro</label>
          <input type="text" id="tlogradouro" class="form-control" name="log">
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger">Cancelar</button>
          <button class="btn btn-success">Salvar</button>
        </div>
    </form>
  @endcomponent

@endsection