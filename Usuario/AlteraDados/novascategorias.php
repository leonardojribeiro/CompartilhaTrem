<?php  
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
?>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div id="formaltend" class="bg-light shadow m-2 p-2">
            <form name="alterarcategoriasusuario" method="post" action="">
                <fieldset><legend>Escolha as categorias que você tem preferência</legend>
                    <div class="row">
                        <?php include'includes/geracategoria.php'?>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col">
                            <a href="index?acao=contausuario"><button type="button" class="btn btn-outline-secondary form-control"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</button></a>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-secondary form-control" name="alteracategoria">Salvar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

