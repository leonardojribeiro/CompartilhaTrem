<?php
    require_once 'index.php';
    if(isset($_FILES['attperfil'])){
        $caminho_imagem = UploadImagem('attperfil', "userimg/");
        $sql = "update usuario set caminhofoto = '$caminho_imagem' where idUsuario = ".$_SESSION['idusuario'].";";
        if (mysqli_query($Conexao, $sql)){
            unlink($_SESSION['caminhoimgusuario']);
            $_SESSION['caminhoimgusuario']=$caminho_imagem;
            echo '<script>window.location ="index?acao=contausuario";</script>';
        }
    }
    else{
        include_once 'contausuario.php';
    }
?>  

