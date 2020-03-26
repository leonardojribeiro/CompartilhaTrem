<?php
    require_once 'index.php';
    //pega o nome do usuario
    if(isset($_POST['BotaoEnviar'])){
        if(isset($_SESSION['temp1']) && isset($_SESSION['temp2']) && isset($_SESSION['temp3'])){
            $Pontuacao= $_POST['Pontuacao'];
            $InserirEmPontuacao = "insert into pontuacao (idtransacao, idavaliador, idavaliado, pontuacao) values "
                    . "('".$_SESSION['temp2']."', '".$_SESSION['idusuario']."','".$_SESSION['temp1']."', '$Pontuacao');";
            echo $InserirEmPontuacao;
            if($Conexao->query($InserirEmPontuacao)){
                $AtualizarStatusDoObjeto = "update transacao set status_transacao ='2' where id_objeto = '"
                        .$_SESSION['temp3']."' and id_usuario = '".$_SESSION['temp1']."';";
                $Conexao->query($AtualizarStatusDoObjeto);
                echo "<script> window.location='index';</script>";
            }
        }
    }
    else{
        $BuscaUsuario = "select nome from usuario where idUsuario = '$IdUsuario';";
        $ResultadoBuscaUsuario = $Conexao->query($BuscaUsuario);
        if($ResultadoBuscaUsuario->num_rows>0){
            while($LinhaUsuario = $ResultadoBuscaUsuario->fetch_assoc()){
                $NomeUsuario=$LinhaUsuario['nome'];
            }
        }
        //valida se existe a transaçao
        $BuscaTransacao = "select idTransacao from transacao where id_objeto = '$IdObjeto' and Id_usuario = '$IdUsuario' and"
                . " status_transacao ='1';";
        $ResultadoBuscaTransacao = $Conexao->query($BuscaTransacao);
        if($ResultadoBuscaTransacao->num_rows>0){
            while ($LinhaTransacao = $ResultadoBuscaTransacao->fetch_assoc()){
                $IdTransacao = $LinhaTransacao['idTransacao'];
                $_SESSION['temp1']=$IdUsuario;
                $_SESSION['temp2']=$IdTransacao;
                $_SESSION['temp3']=$IdObjeto;
                include_once 'FormularioAvaliacao.php';
            }
        }
        else{
            $BuscaTransacao = "select transacao.idTransacao from objeto "
                    . "inner join transacao on objeto.idobjeto = transacao.id_objeto where idobjeto = '$IdObjeto' "
                    . "and iddoador = '$IdUsuario';";
            $ResultadoBuscaTransacao = $Conexao->query($BuscaTransacao);
            if($ResultadoBuscaTransacao->num_rows>0){
                while ($LinhaTransacao = $ResultadoBuscaTransacao->fetch_assoc()){
                    $IdTransacao = $LinhaTransacao['idTransacao'];
                    $_SESSION['temp1']=$IdUsuario;
                    $_SESSION['temp2']=$IdTransacao;
                    $_SESSION['temp3']=$IdObjeto;
                    include_once 'FormularioAvaliacao.php';
                }
            }
            else{
                echo 'Você não pode fazer isso!';
            }
        }
    }
?>
