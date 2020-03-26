<?php
    require_once 'index.php';
    $SelecionarImagensDoObjeto = "select caminho from imagemobjeto where idobjeto ='".$IdDoObjetoASerDetalhado."';";
    $ContadorImagens = 1;
    $ResultadoDeSelecionarImagens = $Conexao->query($SelecionarImagensDoObjeto);
    if($ResultadoDeSelecionarImagens->num_rows>0){
        while($LinhaDetalheImagem = $ResultadoDeSelecionarImagens->fetch_assoc()){
            $CaminhoImagemObjeto = $LinhaDetalheImagem['caminho'];
            include 'ListaImagens.php';
            $ContadorImagens++;
        }
    }
?>
