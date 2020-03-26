<?php 
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
    $BuscarQtdDoacoesRealizadas = "select count(idobjeto) as QtdObj from objeto "
            . "where iddoador = '".$_SESSION['idusuario']."';";
    $ResultadoQtdDoacoes = $Conexao->query($BuscarQtdDoacoesRealizadas);
    if($ResultadoQtdDoacoes->num_rows>0){
        while ($LinhaQtd=$ResultadoQtdDoacoes->fetch_assoc()){
            $DoacoesRealizadas = $LinhaQtd['QtdObj'];
        }
    }
    $BuscarQtdDoacoesRecebidas = "select count(idobjeto) as QtdObj from objeto "
            . "inner join transacao on objeto.idobjeto = transacao.id_objeto "
            . "where transacao.status_transacao = '2' and transacao.id_usuario = '"
            .$_SESSION['idusuario']."';";
    $ResultadoQtdDoacoesRecebidas = $Conexao->query($BuscarQtdDoacoesRecebidas);
    if($ResultadoQtdDoacoesRecebidas->num_rows>0){
        while ($LinhaQtd=$ResultadoQtdDoacoesRecebidas->fetch_assoc()){
            $DoacoesRecebidas = $LinhaQtd['QtdObj'];
        }
    }
    $BuscaPontuacao = "select count(idpontuacao) as QtdAv, avg(pontuacao) as MedPont from pontuacao "
            . "where idavaliado = '".$_SESSION['idusuario']."';";
    $ResultadoPontuacao = $Conexao->query($BuscaPontuacao);
    if($ResultadoPontuacao->num_rows>0){
        while($LinhaPontuacao = $ResultadoPontuacao->fetch_assoc()){
            $PontuacaoUsuario=(int)$LinhaPontuacao['MedPont'];
            $QuantidadeAvaliacao=$LinhaPontuacao['QtdAv'];
        }
    } 
?>
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-8 bg-light shadow m-md-2">
            <center><h2>Meus dados:</h2></center>
            <div class="row">
                <div class="col-md-7">
                    <center><h3><?Php echo $_SESSION["nomeusuario"].' '.$_SESSION['sobrenome']; ?></h3></center>
                    Você fez <?php echo $DoacoesRealizadas;?> doação (ões).<br>
                    Você recebeu <?php echo $DoacoesRecebidas;?> doação (ões).<br>
                    Com base em <?php echo $QuantidadeAvaliacao;?> avaliação (ões), sua pontuação é <?php echo $PontuacaoUsuario;?>.<br>
                    <h4>Endereço</h4>
                    <font class="pl-3"><?php echo $_SESSION['rua']; ?>, Q: <?php echo $_SESSION['quadra'];?> 
                    ,L: <?php echo $_SESSION['lote']; ?>, Nº: <?php echo $_SESSION['numero'];?>
                    ,Bairro: <?php echo $_SESSION['bairro'];?>, <?php echo $_SESSION['cidade'].'-'.$_SESSION['uf'];?>,
                    CEP: <?php echo $_SESSION['cep']; ?></font><br>
                    <a href="index?acao=alterarenderecousuario">
                        <font class="pl-3">Alterar meu endereço</font>
                    </a><br>
                    <h4>Categorias de interesse</h4>
                    <a href="index?acao=alteracategoriausuario">
                        <font class="pl-3">Alterar minhas categorias</font>
                    </a><br>
                    <?php include 'geracategoriasusuario.php';?>


                    <!--<a href="index?acao=ApagarConta">
                        <button type="button" class="btn btn-outline-secondary">Apagar conta</button>
                    </a>-->
                </div>
                <div class="col-md-5">
                    <form method="post" enctype="multipart/form-data" action="">
                        <div id="imagemperfil" class="imagemperfil">
                            <button type="button" id="cancelaimagem" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span></button></a>
                            <label id="atualizaimagem"><div type="button" class="btn btn-outline-secondary">Escolher outra imagem</div>
                            <input id="attimgperf" class="hidden" type="file" name="attperfil" accept="image/*" onchange="PreviaImagemPerfilAtt();"></label>
                            <img id="imagemusuario" src="<?php echo $_SESSION['caminhoimgusuario']; ?>" onError="this.onerror=null;this.src='<?php echo $_SESSION['caminhoimgusuario']; ?>';" class="img-thumbnail">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div id="salvaimagem" class="col-md-6">
                                    <button type="submit" class="btn btn-outline-secondary form-control">Salvar alterações <span class="glyphicon glyphicon-save"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>