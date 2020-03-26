<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 redefinirsenha">
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="senha">Agora, digite a sua nova senha:</label>
                        <input type="password" id="senharedf" name="senha" class="form-control" minlength="6" placeholder="Digite sua senha" autofocus="" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="senha1">Confirme a sua senha:</label>
                        <input type="password" id="senha1redf" name="senha1" class="form-control" placeholder="Repita sua senha" autofocus="" required="" onchange="validasenharedf()">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="submit" name="enviar4" value="enviar" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>