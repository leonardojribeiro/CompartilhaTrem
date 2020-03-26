<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
    //verifica se o objeto foi gritado pelo usuario
    $IdDoObjeto = $IdDoObjetoASerDetalhado;
    $Grito=0;
    $BuscaGrito = "select * from transacao where id_objeto = '".$IdDoObjeto."' and id_usuario = '"
            .$_SESSION['idusuario']."';";
    $ResultadoBuscaGrito = $Conexao->query($BuscaGrito);
    if($ResultadoBuscaGrito->num_rows>0){
        $Grito=1;
    }
    //verifica quantos usuarios gritaram
    $BuscaQuantidadeGritos = "select count(id_objeto) as quantidade from transacao where id_objeto= '".$IdDoObjeto."';";
    $ResultadoBuscaQuantidadeGritos = $Conexao->query($BuscaQuantidadeGritos);
    if($ResultadoBuscaQuantidadeGritos->num_rows>0){
        while($LinhaGritos = $ResultadoBuscaQuantidadeGritos->fetch_assoc()){
            $QuantidadeDeGritos = $LinhaGritos['quantidade'];
        }
    }
    $SelecionarDeObjetosDetalhes = "select usuario.nome, endereco.cidade, endereco.uf, objeto.nome_objeto, objeto.descricao, "
            . "date_format(objeto.datacadastro, '%d/%m/%Y') as datacad, "
            . "date_format(objeto.datacadastro, '%H:%i:%s') as horacad, "
            . " objeto.observacoes from objeto inner join usuario on usuario.idUsuario = objeto.iddoador" 
            ." inner join endereco on endereco.idEndereco = usuario.idendereco where idobjeto = '".$IdDoObjeto."';";
    $ResultadoSelecionarDeObjetosDetalhes = $Conexao->query($SelecionarDeObjetosDetalhes);
    if($ResultadoSelecionarDeObjetosDetalhes->num_rows>0){
        while($LinhaDetalhe = $ResultadoSelecionarDeObjetosDetalhes->fetch_assoc()){
            $NomeDoador = $LinhaDetalhe['nome'];
            $CidadeDoador = $LinhaDetalhe['cidade'];
            $UfDoador = $LinhaDetalhe['uf'];
            $NomeDoObjeto = $LinhaDetalhe['nome_objeto'];
            $DescricaoDoObjeto  = $LinhaDetalhe['descricao'];
            $ObservacoesDoObjeto = $LinhaDetalhe['observacoes'];
            $DataDeCadastro = $LinhaDetalhe['datacad'];
            $HoraDeCadastro = $LinhaDetalhe['horacad'];
            include 'DetalheDoObjetoDiv.php';
        }
    }
    
?>