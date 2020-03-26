<?php
    require_once 'index.php';
    $DataAutorizacao = date("Y-m-d-H-i-s");
    //muda o status do objeto
    $AtualizarStatusDoObjeto = "update objeto set status = '2' where idobjeto = '".$IdObjeto."';";
    $Conexao->query($AtualizarStatusDoObjeto);
    //muda o status da transacao
    $AtualizarStatusDaTransacao = "update transacao set data_autorizacao = '".$DataAutorizacao
            ."' , status_transacao = '1' where id_usuario = '".$IdUsuario."' and id_objeto = '".$IdObjeto."';";
    $Conexao->query($AtualizarStatusDaTransacao);
    echo "<script> window.location='index';</script>";
?>