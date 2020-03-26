<?php
    require_once 'index.php';
    //verifica se é mesmo o doador 
    $BuscaObjetoDoDoador = "select * from objeto where idobjeto = '".$IdDoObjetoASerExcluido."' and iddoador"
            . " = '".$_SESSION['idusuario']."';";
    $ResultadoObjeto = $Conexao->query($BuscaObjetoDoDoador);
    if($ResultadoObjeto->num_rows>0){
        //busca e apaga as imagens
        $BuscaImagens = "select caminho from imagemobjeto where idobjeto = '".$IdDoObjetoASerExcluido."';";
        $ResultadoBuscaImagens = $Conexao->query($BuscaImagens);
        if($ResultadoBuscaImagens->num_rows>0){
            while($LinhaImagen=$ResultadoBuscaImagens->fetch_assoc()){
                unlink($LinhaImagen['caminho']);
            }
        }
        $ApagaObjeto = "delete from imagemobjeto where idobjeto = '".$IdDoObjetoASerExcluido."';";
        $ApagaObjeto .= "delete from objeto where idobjeto = '".$IdDoObjetoASerExcluido."';";
        if($Conexao->multi_query($ApagaObjeto)){
            echo '<script>window.location="index?acao=VerDoacoes"</script>';
        }
    }
    else{
        echo "Você não pode fazer isso!";
    }
?>

