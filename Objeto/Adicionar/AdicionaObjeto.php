<?php
    require_once 'index.php';
    if(isset($_POST['SalvarObjeto'])){
        $DataCadastroObjeto = date("Y-m-d-H-i-s");
        $NomeObjeto = $_POST['NomeDoObjeto'];
        $CategoriaDoObjeto = $_POST['CategoriaDoObjeto'];
        $DescricaoDoObjeto = $_POST['DescricaoDoObjeto'];
        $ObservacoesDoObjeto = $_POST['ObservacoesDoObjeto'];
        $InsereEmObjeto = "insert into objeto (nome_objeto, descricao, observacoes, id_categoria, datacadastro, "
                . "iddoador) values ('".$NomeObjeto."','".$DescricaoDoObjeto."','"
                .$ObservacoesDoObjeto."','".$CategoriaDoObjeto."','".$DataCadastroObjeto."','".$_SESSION['idusuario']."');";
        if(mysqli_query($Conexao,$InsereEmObjeto)){
            $IdObjeto = $Conexao->insert_id;
            if(isset($_FILES['Imagem1DoObjeto']) && !empty( $_FILES['Imagem1DoObjeto']['tmp_name'])){
                $CaminhoImagemObjeto1 = UploadImagem('Imagem1DoObjeto', 'Objeto/Fotos/');
                $InsereEmImagemObjeto = "insert into imagemobjeto (caminho, tipo, idobjeto) values ('".$CaminhoImagemObjeto1
                    ."','1','".$IdObjeto."');";
                if(mysqli_query($Conexao, $InsereEmImagemObjeto)){
                    
                }
                else{
                    echo 'erro!'.$InsereEmImagemObjeto."<br>". mysqli_error($Conexao);
                }
            }
            if(isset($_FILES['Imagem2DoObjeto']) && !empty( $_FILES['Imagem2DoObjeto']['tmp_name'])){
                $CaminhoImagemObjeto2 = UploadImagem('Imagem2DoObjeto', 'Objeto/Fotos/');
                $InsereEmImagemObjeto = "insert into imagemobjeto (caminho, idobjeto) values ('".$CaminhoImagemObjeto2
                    ."','".$IdObjeto."');";
                if(mysqli_query($Conexao, $InsereEmImagemObjeto)){
                    
                }
            }
            if(isset($_FILES['Imagem3DoObjeto']) && !empty( $_FILES['Imagem3DoObjeto']['tmp_name'])){
                $CaminhoImagemObjeto3 = UploadImagem('Imagem3DoObjeto', 'Objeto/Fotos/');
                $InsereEmImagemObjeto = "insert into imagemobjeto (caminho, idobjeto) values ('".$CaminhoImagemObjeto3
                    ."','".$IdObjeto."');";
                if(mysqli_query($Conexao, $InsereEmImagemObjeto)){
                    
                }
            }
            if(isset($_FILES['Imagem4DoObjeto']) && !empty( $_FILES['Imagem4DoObjeto']['tmp_name'])){
                $CaminhoImagemObjeto4 = UploadImagem('Imagem4DoObjeto', 'Objeto/Fotos/');
                $InsereEmImagemObjeto = "insert into imagemobjeto (caminho, idobjeto) values ('".$CaminhoImagemObjeto4
                    ."','".$IdObjeto."');";
                if(mysqli_query($Conexao, $InsereEmImagemObjeto)){
                    
                }
            }
            if(isset($_FILES['Imagem5DoObjeto']) && !empty( $_FILES['Imagem5DoObjeto']['tmp_name'])){
                $CaminhoImagemObjeto5 = UploadImagem('Imagem5DoObjeto', 'Objeto/Fotos/');
                $InsereEmImagemObjeto = "insert into imagemobjeto (caminho, idobjeto) values ('".$CaminhoImagemObjeto5
                    ."','".$IdObjeto."');";
                if(mysqli_query($Conexao, $InsereEmImagemObjeto)){
                    
                }
            }
            echo "<script> window.location='index';</script>";
        }
        else{
            echo 'erro!'.$InsereEmObjeto."<br>". mysqli_error($Conexao);
        }
        
    }
    else{
        include 'Formulario.php';
    }
?>
