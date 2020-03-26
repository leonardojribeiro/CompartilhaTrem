<?php 
    require_once 'index.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="bg-light shadow p-2 m-2">
                <center><h2>Entrar</h2></center>
                <form method="post" action="index.php?acao=login">
                    <div class="form-group">
                        <label for="emailusuario">E-mail</label>
                        <input type="email" id="emailusuario" name="emailusuario" placeholder="Digite seu E-mail" autofocus="" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="senhausuario">Senha</label>
                        <input type="password" id="senhausuario" name="senhausuario" autocomplete="" placeholder="Digite a sua senha" required="" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5><a href="?acao=redefinirsenha">Esqueci minha senha</a></h5>
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" name="login" class="btn btn-outline-secondary form-control">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Não tem uma conta? Não perca tempo, <a href="index?acao=cadastro"> crie uma agora.</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>