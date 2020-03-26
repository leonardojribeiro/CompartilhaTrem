<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
    $BuscaDoacoesUsuario = "select objeto.idobjeto, objeto.nome_objeto, objeto.descricao, objeto.observacoes, "
            ."date_format(objeto.datacadastro, '%d/%m/%Y') as datacad, "
            . "date_format(objeto.datacadastro, '%H:%i:%s') as horacad, "
            . "objeto.status, categoria.categoria from objeto "
            . "inner join categoria on objeto.id_categoria = categoria.idcategoria where "
            . "iddoador= '".$_SESSION['idusuario']."';";
    $ResultadoBuscaDoacoes= $Conexao->query($BuscaDoacoesUsuario);
    if($ResultadoBuscaDoacoes->num_rows>0){
        while($LinhaDoacoes=$ResultadoBuscaDoacoes->fetch_assoc()){
            $IdObjeto=$LinhaDoacoes['idobjeto'];
            $NomeObjeto=$LinhaDoacoes['nome_objeto'];
            $DescricaoObjeto=$LinhaDoacoes['descricao'];
            $DataCadastro=$LinhaDoacoes['datacad'];
            $HoraCadastro=$LinhaDoacoes['horacad'];
            $CategoriaObjeto=$LinhaDoacoes['categoria'];
            $ObservacoesObjeto=$LinhaDoacoes['observacoes'];
            $StatusObjeto=$LinhaDoacoes['status'];
            //busca gritos (isso já tá ficando até engraçado kkkk)
            $BuscaQuantidaDeGritos = "select count(id_objeto) as quantidade from transacao where id_objeto= '".$IdObjeto."';";
            $ResultadoBuscaQuantidadeGritos = $Conexao->query($BuscaQuantidaDeGritos);
            if($ResultadoBuscaQuantidadeGritos->num_rows>0){
                while($LinhaGritos = $ResultadoBuscaQuantidadeGritos->fetch_assoc()){
                    $QuantidadeDeGritos = $LinhaGritos['quantidade'];
                }
            }
            include 'GeraDivDoacoes.php';
        }
    }
?>

