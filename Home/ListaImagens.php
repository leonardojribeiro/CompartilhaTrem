<?php
    require_once 'index.php';
?>
<div class="row">
    <div id="MiniaturaDetalhe<?php echo $ContadorImagens;?>" class="m-2 d-flex Bloco64">
        <a class="my-auto mx-auto" href="<?php echo $CaminhoImagemObjeto;?>" title="<?php echo $NomeDoObjeto;?>" data-gallery="">
            <img src="<?php echo $CaminhoImagemObjeto;?>" id="MiniaturaImagemDetalhe<?php echo $ContadorImagens;?>" class="MiniaturaDetalhe" alt="Imagem de <?php echo $NomeDoObjeto;?>">          
        </a>  
    </div>
</div>