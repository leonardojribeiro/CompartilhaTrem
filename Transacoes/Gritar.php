<?php
    require_once 'index.php';
    $DataGrito = date("Y-m-d-H-i-s");
    $InserirEmTransacao = "insert into transacao (id_objeto, id_usuario, data_grito) values('".$IdObjetoASerGritado
            ."','".$_SESSION['idusuario']."','".$DataGrito."');";
    if($Conexao->query($InserirEmTransacao)){
        echo '<script>window.location ="index";</script>';
    }
?>

