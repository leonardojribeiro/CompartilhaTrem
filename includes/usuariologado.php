<?php
    require_once 'index.php';
?>
<li class="nav-item d-flex">
    <a href="index.php?acao=contausuario" class="nav-link my-auto">
        <img src="<?php echo $_SESSION['caminhoimgusuario'];?>" class="rounded-circle" width="40px"> 
        <?php echo $_SESSION["nomeusuario"];?>
    </a>
</li>
<li class="nav-item d-flex">
    <a href="index?acao=logout" class="nav-link my-auto">
        <span class="glyphicon glyphicon-log-out"></span> Sair
    </a>
</li>
