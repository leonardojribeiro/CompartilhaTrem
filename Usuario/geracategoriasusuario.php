<?php
    require_once 'index.php';
    $BuscaCategoria = "select categoria from usuarioxcategoria "
            . "inner join categoria on categoria.idcategoria = usuarioxcategoria.idcategoria "
            . "where usuarioxcategoria.idusuario = ".$_SESSION['idusuario'].";";
    $ResultadoBuscaCategoria = $Conexao->query($BuscaCategoria);
    if ($ResultadoBuscaCategoria->num_rows > 0){
        while($LinhaCategoria = $ResultadoBuscaCategoria->fetch_assoc()) {
            $Categoria=$LinhaCategoria["categoria"];
            include 'MostraCategoria.php';
        }
    }
?>
            
