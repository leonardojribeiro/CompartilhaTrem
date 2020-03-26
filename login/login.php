<?php
    require_once 'config.php';
    include_once 'includes/barranavegacao.php';
    if(isset($_POST['login'])){
        $email = $_POST['emailusuario'];
        $senha = $_POST['senhausuario'];
        $senha = md5($senha);
        $sql = "select idUsuario, nome, sobrenome, caminhofoto, idendereco from usuario where email='$email' and senha='$senha'";
        $result = $Conexao->query($sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $idendereco=$row["idendereco"];
                echo $idendereco;
                $_SESSION['nomeusuario']=$row["nome"];
                $_SESSION['caminhoimgusuario']=$row["caminhofoto"];
                $_SESSION['idusuario']=$row["idUsuario"];
                $_SESSION['sobrenome']=$row["sobrenome"];
            }
            $sql = "select idEndereco, cep, rua, bairro, quadra, lote, numero, cidade, uf from endereco where idEndereco='$idendereco';";
            $result = mysqli_query($Conexao, $sql);
            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    $_SESSION['idendereco']=$row["idEndereco"];
                    $_SESSION['cep']=$row["cep"];
                    $_SESSION['rua']=$row["rua"];
                    $_SESSION['bairro']=$row["bairro"];
                    $_SESSION['quadra']=$row["quadra"];
                    $_SESSION['lote']=$row["lote"];
                    $_SESSION['numero']=$row["numero"];
                    $_SESSION['cidade']=$row["cidade"];
                    $_SESSION['uf']=$row["uf"];
                    echo "<script> window.location='index';</script>";
                }
            }    
        }
        else{
            echo "<script>alert('Não encontramos o seu cadastro. Verifique o que você digitou.');</script>";
            include 'formulariologin.php';
        }
    }
    else{
        include 'formulariologin.php';
    }
?>