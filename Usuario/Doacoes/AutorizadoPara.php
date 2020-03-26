<?php
    require_once 'index.php'; 
    $BuscarDadosReceptor = "select usuario.idUsuario, usuario.nome, date_format(transacao.data_autorizacao, '%d/%m/%Y') as data_aut, "
            . "date_format(transacao.data_autorizacao, '%H:%i:%s') as hora_aut from usuario inner join transacao "
            . "on transacao.id_usuario = usuario.idUsuario where (status_transacao ='1' or status_transacao ='2') and transacao.id_objeto = '"
            .$IdObjeto."';";
    $ResultadoBuscarDadosReceptor = $Conexao->query($BuscarDadosReceptor);
    if($ResultadoBuscarDadosReceptor->num_rows>0){
        while($LinhaReceptor = $ResultadoBuscarDadosReceptor->fetch_assoc()){
            $IdReceptor = $LinhaReceptor['idUsuario'];
            $NomeReceptor = $LinhaReceptor['nome'];
            $DataAutorizacao = $LinhaReceptor['data_aut'];
            $HoraAutorizacao = $LinhaReceptor['hora_aut'];
        }
    }
    $Avaliacao = 0;
    $BuscaAvaliacao = "select idpontuacao Qtd from pontuacao "
            . "inner join transacao on pontuacao.idtransacao = transacao.idTransacao "
            . "inner join objeto on objeto.idobjeto = transacao.id_objeto "
            . "where objeto.idobjeto = '$IdObjeto' and  pontuacao.idavaliador = '".$_SESSION['idusuario']."';";
    $ResultadoBuscaAvaliacao = $Conexao->query($BuscaAvaliacao);
    if (!$ResultadoBuscaAvaliacao->num_rows>0){
       $Avaliacao = 1;
    }
?>
<p>Você doou esse objeto para <?php echo $NomeReceptor; ?> em <?php echo $DataAutorizacao; ?> às <?php echo $HoraAutorizacao; ?>.</p>
<?php if($Avaliacao == 1){include 'Avaliar.php';}?>