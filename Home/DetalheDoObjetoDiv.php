<?php
    require_once 'index.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-1"></div>
        <div class="col-lg-8 col-md-10 bg-light shadow m-md-3 m-1 p-1">
            <div class="row p-1">
                <div class="col-md-6">
                    <h2 class="mb-3">
                        <font class="text-dark"><?php echo $NomeDoObjeto;?></font>
                    </h2>
                    <p><font class="mb-1 text-muted">Data de anúncio:</font> <?php echo $DataDeCadastro;?> às <?php echo $HoraDeCadastro;?></p>
                    <p><font class="text-muted">Descrição: </font></p>
                    <p><font class="pl-5"><?php echo $DescricaoDoObjeto;?></font></p>
                    <p><font class="text-muted">Observações:</font></p>
                    <p><font class="pl-5"><?php echo $ObservacoesDoObjeto;?></font></p>
                    <p><?php echo $QuantidadeDeGritos;?> pessoa(s) gritaram.</p>
                    <?php if ($_SESSION['nomeusuario']!=""){include 'UsuarioLogado.php';}?>
                </div>
                <div class="col-md-6">
                    <div class="row d-flex">
                        <div class="col-9 my-auto mx-auto">
                            <img id="DisplayImagem" src="" class="img-fluid">
                        </div>
                        <div id="links" class="col-3">
                            <?php include 'GeraImagemDetalhe.php'?>
                        </div>
                    </div>
                </div>
                <div id="blueimp-gallery" class="blueimp-gallery">
                    <div class="slides"></div>
                    <h3 class="title"></h3>
                    <a class="prev">‹</a>
                    <a class="next">›</a>
                    <a class="close text-light">×</a>
                    <a class="play-pause"></a>
                    <ol class="indicator"></ol>
                </div>
                <script type="text/javascript">
                    document.getElementById('links').onclick = function (event) {
                    event = event || window.event;
                    var target = event.target || event.srcElement,
                        link = target.src ? target.parentNode : target,
                        options = {index: link, event: event},
                        links = this.getElementsByTagName('a');
                    blueimp.Gallery(links, options);
                    };
                </script> 
            </div>
        </div>
    </div>
</div>          

