<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 col-1"></div>
        <div class="col-md-6 col-10 d-flex h-50">
            <form method="post" action="" class="mx-auto my-auto">
                <fieldset><legend>Escolha uma pontuacão para <?php echo $NomeUsuario;?></legend>
                    <h3>Pontuação: <font id="teste"></font></h3>
                    <input id="test" type="range" name="Pontuacao" class="form-control-range form-group" min="0" max="100" on onmousemove="testepont()" onchange="testepont()" required="">
                    <input type="submit" name="BotaoEnviar" value="Avaliar" class="form-control form-group">
                </fieldset>
            </form>
        </div>
    </div>
</div>