<?php
    require_once 'index.php';
    //deletar as doações e suas respectivas imagens
    //busca os objetos doados pelo cliente
    $Doacoes = "select * from objeto where iddoador = '".$_SESSION['idusuario']."';";
    $ResultadoDoacoes = $Conexao->query($Doacoes);
    if($ResultadoDoacoes->num_rows>0){
        while($LinhaDoacoes = $ResultadoDoacoes->fetch_assoc()){
            //pega o id do objeto e deleta as imagens associadas a ele
            $IdObjetoExclusao = $LinhaDoacoes['idobjeto'];
            //busca imagens
            $BuscaImagens = "select caminho from imagemobjeto where idobjeto = '".$IdObjetoExclusao."';";
            $ResultadoImagens = $Conexao->query($BuscaImagens);
            if($ResultadoImagens->num_rows>0){
                while($LinhaImagens = $ResultadoImagens->fetch_assoc()){
                    unlink($LinhaImagens['caminho']);
                }
            }
            //deleta o objeto
            $DeletarObjetos = "delete from imagemobjeto where idobjeto = '".$IdObjetoExclusao."';";
            $DeletarObjetos .= "delete from objeto where idobjeto = '".$IdObjetoExclusao."';";
            if($Conexao->multi_query($DeletarObjetos)){
            }
            else{
                echo "erro!".$Conexao->error;
            }
            
        }
    }
    //deletar foto do perfil
    unlink($_SESSION['caminhoimgusuario']);
    //deletar categorias de preferência
    $Deletar = "delete from usuarioxcategoria where idusuario = '".$_SESSION['idusuario']."';";
    //deletar endereço
    $Deletar .= "delete from endereco where id endereco = '".$_SESSION['idendereco']."';";
    //deletar dados do usuario
    $Deletar .= "delete from usuario where idusuario = '".$_SESSION['idusuario']."';";
    if ($Conexao->multi_query($Deletar)){
        echo "sucesso";
    }
    else{
        echo "erro".$Deletar."<br>".$Conexao->error;
    }
    session_unset();
    session_destroy();
    echo '<script>window.location="index"</script>';
?>
