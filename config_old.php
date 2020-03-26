<?php
    require_once 'index.php';
    date_default_timezone_set('America/Sao_Paulo');
    require_once 'funcoes.php';
    session_start();
    if(!isset($_SESSION['nomeusuario'])){
        $_SESSION['nomeusuario']="";
        $_SESSION['caminhoimgusuario']="";
        $_SESSION['idusuario']="";
        $_SESSION['sobrenome']="";
        $_SESSION['rua']="";
        $_SESSION['bairro']="";
        $_SESSION['quadra']="";        
        $_SESSION['lote']="";
        $_SESSION['numero']="";
        $_SESSION['cidade']="";
        $_SESSION['uf']="";
        $_SESSION['cep']="";
        $_SESSION['idendereco']="";
    }
    if(isset($_Gee['logout'])){
        if($_POST['logout']=="Sim"){
            session_destroy();
            $_SESSION['nomeusuario'];
            $_SESSION['caminhoimgusuario'];
            $_SESSION['idusuario'];
            $_SESSION['sobrenome'];
            $_SESSION['rua'];
            $_SESSION['bairro'];
            $_SESSION['quadra'];        
            $_SESSION['lote'];
            $_SESSION['numero'];
            $_SESSION['cidade'];
            $_SESSION['uf'];
            $_SESSION['cep'];
            $_SESSION['idendereco'];
            echo "<script> window.location='index';</script>";
        }
    }
    require_once 'conexao.php';
    require_once 'includes/head.php';
?>
