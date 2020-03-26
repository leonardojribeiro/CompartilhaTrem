<?php
    require_once 'index.php';
    $SelecionaDeImagemObjeto = "select caminho from imagemobjeto where idobjeto = '".$IdObjeto."';";
    $ResultadoSelecionaDeImagemObjeto = $Conexao->query($SelecionaDeImagemObjeto);
    if($ResultadoSelecionaDeImagemObjeto->num_rows>0){
        while($LinhaImagem = $ResultadoSelecionaDeImagemObjeto->fetch_assoc()){
            $CaminhoImagemObjeto = $LinhaImagem['caminho']; 
            include 'GeraImagem.php';
        }
    }
?>

