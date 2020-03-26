<?php
    require_once 'config.php';
    if(isset($_GET['IdObjeto'])){
        $IdObjeto=$_GET['IdObjeto'];
    }
    if(isset($_GET['IdUsuario'])){
        $IdUsuario=$_GET['IdUsuario'];
    }
    if(isset($_GET['DesgritarObjetoId'])){
        $IdObjetoASerDesgritado = $_GET['DesgritarObjetoId'];
    }
    if(isset($_GET['GritarObjetoId'])){
        $IdObjetoASerGritado = $_GET['GritarObjetoId'];
    }
    if(isset($_GET['ExcluirObjetoId'])){
        $IdDoObjetoASerExcluido = $_GET['ExcluirObjetoId'];
    }
    if(isset($_GET['detalheobjetoid'])){
        $IdDoObjetoASerDetalhado = $_GET['detalheobjetoid'];
    }
    if(isset($_GET['busca'])){
        $Busca = $_GET['busca'];
    }
    if(isset($_GET['acao'])){ 
        $acao = $_GET['acao'];
    }
    else{
        $acao="home";
    }
    switch ($acao) {
        case "home":{
            include_once 'Home/Home.php';
            break;
        }
        case "doar":{
            if(!$_SESSION["idusuario"]==""){
                include_once 'Objeto/Adicionar/AdicionaObjeto.php';
                break;
            }
            else{
                include_once 'login/login.php';
                break;
            }
        }
        case "Gritar":{
            include_once 'Transacoes/Gritar.php';
            break;
        }
        case "Desgritar":{
            include_once 'Transacoes/Desgritar.php';
            break;
        }
        case "VerGritos":{
            include_once 'Usuario/Doacoes/Gritos/VerGritos.php';
            break;
        }
        case "VerPretendentes":{
            include_once 'Usuario/Doacoes/Pretendentes/Pretendentes.php';
            break;
        }
        case "Autorizar":{
            include_once 'Transacoes/Autorizar.php';
            break;
        }
        case "Avaliar":{
            include_once 'Transacoes/Avaliacao/Avaliacao.php';
            break;
        }
        case "login":{
            include_once 'login/login.php';
            break;
        }
        case "redefinirsenha":{
            include_once 'redefinirsenha/redefinirsenha.php';
            break;
        }
        case "cadastro":{
            include_once 'cadastro/cadastro.php';
            break;
        }
            
        case "contausuario":{
            include_once 'Usuario/Perfil.php';
            break;
        }
        case "alterarenderecousuario" :{
            include_once 'Usuario/AlteraDados/alteraendereco.php';
            break;
        }
        case "alteracategoriausuario":{
            include_once 'Usuario/AlteraDados/alteracategoria.php';
            break;
        }
        case "VerDoacoes":{
            include_once 'Usuario/Doacoes/VerDoacoes.php';
            break;
        }
        case "ExcluirDoacao":{
            include_once 'Objeto/Remover/ExcluirObjeto.php';
            break;
        }
        case "ApagarConta":{
            include_once 'Usuario/AlteraDados/ApagaConta/ApagaConta.php';
            break;
        }
        case "termo":{
            include_once 'includes/Termos.php';
            break;
        }
        case "Admin":{
            include_once 'Admin/Admin.php';
            break;
        }
        default:{
            include_once 'Home/Home.php';
            break;
        }
    }
    include_once 'includes/footer.php';
    $Conexao->close();
?>
