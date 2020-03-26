<?php
    require_once 'index.php';
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

<p><font class="text-muted">Status da transação: </font>Autorizado em <?php echo $DataAutorizacao;?> às 
    <?php echo $HoraAutorizacao;?></p>
<p>
    <font class="text-muted">Contatos</font><br>
    <font class="text-muted">Celular: </font><?php echo $CelularDoador;?><br>
    <font class="text-muted">Telefone: </font><?php echo $TelefoneDoador;?>
</p>
<p>
    <font class="text-muted">Endereço de retirada</font><br>
    <font>
        <?php echo $RuaDoador;?> Q: <?php echo $QuadraDoador;?> L: <?php echo $LoteDoador;?> N: <?php echo $NumeroDoador;?>
         Bairro: <?php echo $BairroDoador;?> Cidade: <?php echo $CidadeDoador;?>-<?php echo $UfDoador;?>
    </font>
</p>
<?php if($Avaliacao == 1){include 'Avaliar.php';}?>