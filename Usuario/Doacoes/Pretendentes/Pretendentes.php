<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
    //busca usuarios que gritaram
    $ContadorPretendentes=0;
    $BuscaUsuariosQueGritaram = "select usuario.idUsuario, usuario.nome, usuario.caminhofoto, endereco.cidade, endereco.uf from transacao inner join usuario"
        ." on transacao.id_usuario = usuario.idUsuario inner join endereco on usuario.idendereco = "
            . "endereco.idEndereco  where id_objeto =  '".$IdObjeto."';";
    $ResultadoBuscaUsuarioQueGritaram = $Conexao->query($BuscaUsuariosQueGritaram);
    if($ResultadoBuscaUsuarioQueGritaram->num_rows>0){
        while ($LinhaGritos = $ResultadoBuscaUsuarioQueGritaram->fetch_assoc()){
            $IdUsuarioGritante = $LinhaGritos['idUsuario'];
            $NomeDoGritante = $LinhaGritos['nome'];
            $CidadeDoGritante = $LinhaGritos['cidade'];
            $UfDoGritante = $LinhaGritos['uf'];
            $CaminhoImagemPerfilGritante = $LinhaGritos['caminhofoto'];
            if($ContadorPretendentes==0){
                include 'InicioTabela.php';
            }
            include 'MostraPretendentes.php';
            $ContadorPretendentes++;
            
            if($ContadorPretendentes%2==0 && $ContadorPretendentes>0){
                include 'QuebraDeLinha.php';
            }
        }
        include 'FimLinha.php';
    }
    include 'FimLinha.php';
?>