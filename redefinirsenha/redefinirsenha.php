<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
    if(isset($_POST['enviar1'])){
        $email = $_POST['emailredef'];
        $sql = "select pergunta from usuario where email='".$email."';";
        $result = mysqli_query($Conexao, $sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                $_SESSION['pergunta'] = $row["pergunta"];
                $_SESSION['email'] = $email;
                include 'redefinirsenhapasso2.php';
            }
        }
        else{
            echo"<script>alert('Email não encontrado!');</script>";
            include'redefinirsenhapasso1.php';
        }
    }
    else if(isset($_POST['enviar2'])){
        $resposta = $_POST['resp'];
        $resposta = Criptografa($resposta);
        $sql = "select * from usuario where email='".$_SESSION["email"]."' and resposta='".$resposta."';";
        $result = mysqli_query($Conexao, $sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                include 'redefinirsenhapasso3.php';
            }
        }
        else{
            echo "<script>alert('Resposta errada!');</script>";
            include 'redefinirsenhapasso2.php';
        }
    } 
    else if(isset($_POST['enviar3'])){
        $cpf = $_POST['cpf'];
        $cpf = retiramascara($cpf);
        $cpf = Criptografa($cpf);
        $sql="select * from usuario where email='".$_SESSION["email"]."' and cpf='".$cpf."';";
        $result = mysqli_query($Conexao, $sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                include 'redefinirsenhapasso4.php';
            }
        }
        else{
            echo "<script>alert('CPF errado!');</script>";
            include 'redefinirsenhapasso3.php';
        }
    }
    else if(isset($_POST['enviar4'])){
        $senha = $_POST['senha'];
        $senha = Criptografa($senha);
        $sql = "update usuario set senha = '".$senha."' where email = '".$_SESSION['email']."';";
        if (mysqli_query($Conexao, $sql)){
            echo '<script>window.location ="index";</script>';
        }
    }
    else{
        include 'redefinirsenhapasso1.php';
    }
?>

