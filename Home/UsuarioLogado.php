<?php
    require_once 'index.php';
?>
<p><font class="text-muted">Doador(a):</font> <?php echo $NomeDoador;?></p>
<p><font class="text-muted">Cidade:</font> <?php echo $CidadeDoador ." - ".$UfDoador;?></p>
<?php 
    if($Grito==1){
        include 'FoiGritado.php';
    }
    else{
        include 'NaoFoiGritado.php';
    }
?>