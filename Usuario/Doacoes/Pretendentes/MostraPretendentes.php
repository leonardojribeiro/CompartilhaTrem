<?php
    require_once 'index.php';
?>
<div class="col-md-6">
    <div class="row bg-light m-md-2 m-1 d-flex shadow">
        <div class="col-md-6 col-8 my-auto mx-auto">
            <p><font class="text-muted">Nome: </font><?php echo $NomeDoGritante;?></p>
            <p><font class="text-muted">Cidade: </font><?php echo $CidadeDoGritante;?> - <?php echo $UfDoGritante;?></p>
            <a href="index?acao=Autorizar&IdObjeto=<?php echo $IdObjeto;?>&IdUsuario=<?php echo $IdUsuarioGritante;?>">
                <center>
                    <button type="button" class="btn btn-outline-secondary">Doar para <?php echo $NomeDoGritante;?></button>
                </center>
            </a>
        </div>
        <div class="col-md-6 col-4 my-auto mx-auto p-1">
            <img src="<?php echo $CaminhoImagemPerfilGritante;?>" class="img-fluid img-thumbnail" alt="Foto de <?php echo $NomeDoGritante;?>">
        </div>
    </div>
</div>
