@extends('templates.struct')
@section('title')
    Login
@endsection

@section('body')
<div id="login">
    <form method="POST" action="">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-5 col-md-3 col">
                    <div class="form-login">
                            <img src="css/user.jpg"><br>
                            <input type="text" id="nome" class="form-control input-sm chat-input" placeholder="Usuário"  required/>
                            <br>
                            <input type="password" id="senha" class="form-control input-sm chat-input" placeholder="Senha"  required/>
                            <br>
                        <div class="wrapper">
                            <span class="group-btn">     
                                <button class="btn btn-outline-success btn-block">Entrar<i class="fa fa-sign-in"></i></button>
                            </span> 
                            <br>
                            <a id="a" class="bt text-primary" data-toggle="modal" data-target="#EsqueceuSenha">Esqueceu a senha?<i class="fa fa-sign-in"></i></a>
                        </div>
                    </div>
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