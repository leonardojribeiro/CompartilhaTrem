<?php
    require_once 'config.php';
    include_once 'includes/barranavegacao.php';
    if(isset($_POST['alteraendereco'])){
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $quadra = $_POST['quad'];
        $lote = $_POST['lote'];
        $numero = $_POST['numero'];
        $cidade = $_POST['cidade'];
        $estado= $_POST['uf'];
        $cep = retiramascara($cep);
        $sql = "update endereco set cep = '$cep', rua = '$rua', bairro = '$bairro', quadra = '$quadra', lote = '$lote'"
                . ", numero = '$numero', cidade = '$cidade', uf = '$estado' where idEndereco = ".$_SESSION['idendereco'].";";
        if (mysqli_query($Conexao, $sql)) {
            $idendereco = $Conexao->insert_id;
            $_SESSION['idendereco']=$idendereco;
            $_SESSION['cep']=$cep;
            $_SESSION['rua']=$rua;
            $_SESSION['bairro']=$bairro;
            $_SESSION['quadra']=$quadra;
            $_SESSION['lote']=$lote;
            $_SESSION['numero']=$numero;
            $_SESSION['cidade']=$cidade;
            $_SESSION['uf']=$estado;
            echo '<script>window.location ="index?acao=contausuario";</script>';
        }
        else{
            echo "Erro: " . $sql . "<br>" . $Conexao->error;
        }
    }
    else{
        include 'novoendereco.php';
    }