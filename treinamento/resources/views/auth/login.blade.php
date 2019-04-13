@extends('templates.struct')
@section('css')
    <link rel="stylesheet" type="text/css" href="css/index.css">
@endsection
@section('title')
    Login
@endsection

@section('body')
<div id="login" class="col">
    <form method="post" action="/login">
    @csrf
            <div class="row">
                <div class="form-login">
                    <img src="css/usuario.png" width="100" height="100"><br>
                    <input type="text" name='email' id="nome" class="form-control input-sm chat-input" placeholder="Usuário"  required/>
                    <br>
                    <input type="password" name='password' id="senha" class="form-control input-sm chat-input" placeholder="Senha"  required/>
                    <br>
                    <div class="wrapper">
                        <span class="group-btn">     
                            <button class="btn btn-outline-success btn-block">Entrar<i class="fa fa-sign-in"></i></button>
                        </span> 
                            <br>
                        <a style="cursor: pointer;" id="a" class="bt text-primary" data-toggle="modal" data-target="#EsqueceuSenha">Esqueceu a senha?<i class="fa fa-sign-in"></i></a>
                    </div>
                </div>
            </div>
    </form>
</div>
    <form method="POST" action="">
        <div class="modal fade" id="EsqueceuSenha" tabindex="-1" role="dialog" aria-labelledby="RecuperarEmail" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content mc">
                    <div class="modal-header">
                        <h5 class="modal-title" id="RecuperarEmail">Informe seu E-mail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mod">
                        <input type="email" id="email" class="form-control input-sm chat-input" placeholder="E-mail" required/>
                        <div class="modal-footer">
                            <button class="btn btn-outline-success btn-md" id="recuperar">Recuperar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection