<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
    if(isset($_POST['alteracategoria'])){
        $sql = "delete from usuarioxcategoria where idusuario =".$_SESSION['idusuario'].";";
        if (mysqli_query($Conexao, $sql)) {
            $sql = "select idcategoria from categoria";
            $result = mysqli_query($Conexao, $sql);
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    $idcategoria = $row["idcategoria"];
                    if(isset($_POST['categoria'.$idcategoria])){
                        $sql = "insert into usuarioxcategoria (idusuario, idcategoria) values ('".$_SESSION['idusuario']."', '$idcategoria')";
                        if (mysqli_query($Conexao, $sql)){
                            echo '<script>window.location ="index?acao=contausuario";</script>';
                        }
                        else{
                            echo "Erro: " . $sql . "<br>" . $Conexao->error;
                        }
                    }
                }
            }
        } 
        else{
            echo "Erro: " . $sql . "<br>" . $Conexao->error;
        }
    }
    else{
        include 'novascategorias.php';
    }

