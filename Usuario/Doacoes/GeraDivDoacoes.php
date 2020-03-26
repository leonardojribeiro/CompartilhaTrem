<?php
    require_once 'index.php';  
?>
<div class="container-fluid">
    <div class="row flex-row bg-light shadow m-md-3 m-1">
        <div class="col-md-4">
            <div class="m-md-2 m-1 p-md-3">
                <div class="my-auto p-2">
                    <h4 class="mb-3">
                        <font class="text-dark"><?php echo $NomeObjeto;?></font>
                    </h4>
                    <p><font class="mb-1 text-muted">Ofertado em:</font> <?php echo $DataCadastro;?> às <?php echo $HoraCadastro;?> <p>
                    <p><font class="text-muted">Descrição:</font> <?php echo $DescricaoObjeto;?></p>
                    <p><font class="text-muted">Categoria:</font> <?php echo $CategoriaObjeto;?></p>
                    <p><?php echo $QuantidadeDeGritos?> pessoa (s) gritou (aram)</p>
                    <?php 
                        if($StatusObjeto==2){
                            include 'AutorizadoPara.php';
                        }
                        else if($QuantidadeDeGritos>0){
                            include 'VerPretendentes.php'; 
                        }
                        else{
                            include 'ExcluirObjeto.php';
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-8 d-flex">
            <div class="row mx-auto my-auto">
                <?php include 'BuscaImagens.php';?>
            </div>
        </div>
    </div>
</div>