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
                    <font class="text-muted">Doado por:</font> <?php echo $NomeDoador;?>
                    <p><font class="text-muted">Em:</font> <?php echo $DataCadastro;?> às <?php echo $HoraCadastro;?><p>
                    <p><font class="text-muted">Descrição:</font> <?php echo $DescricaoObjeto;?></p>
                    <p><font class="text-muted">Categoria:</font> <?php echo $CategoriaObjeto;?></p>
                    <?php 
                        switch($StatusTransacao){
                            case 0:{
                                echo '<p><font class="text-muted">Status da transação: </font> Não autorizado</p>';
                                break;
                            }
                            case 1 || 2:{
                                include 'Autorizado.php';
                                break;
                            }
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