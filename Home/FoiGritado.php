<?php
    require_once 'index.php';
?>
<p>Você já gritou esse trem!</p>

<a href="index?acao=Desgritar&DesgritarObjetoId=<?php echo $IdDoObjeto;?>">
    <button type="button" class="btn btn-outline-secondary form-control">Desgritar! <span class="glyphicon glyphicon-bullhorn"></span></button>
</a>

