<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
    $BuscarGritos = "select objeto.idObjeto, objeto.nome_objeto, objeto.descricao, objeto.observacoes, "
            . "date_format(objeto.datacadastro, '%d/%m/%Y') as datacad, "
            . "date_format(objeto.datacadastro, '%H:%i:%s') as horacad, categoria.categoria, usuario.idUsuario, "
            . "usuario.nome, usuario.sobrenome, usuario.celular, usuario.telefone , endereco.rua, endereco.quadra, "
            . "endereco.lote, endereco.numero, endereco.bairro, "
            . "endereco.cidade, endereco.uf, endereco.cep, transacao.status_transacao, "
            . "date_format(transacao.data_autorizacao, '%d/%m/%Y') as dataaut, "
            . "date_format(transacao.data_autorizacao, '%H:%i:%s') as horaaut, categoria.categoria from usuario "
            . "inner join objeto on usuario.idUsuario = objeto.iddoador "
            . "inner join endereco on endereco.idEndereco = usuario.idendereco "
            . "inner join transacao on transacao.id_objeto = objeto.idobjeto "
            . "inner join categoria on categoria.idcategoria = objeto.id_categoria where transacao.id_usuario = '"
            .$_SESSION['idusuario']."';";
    $ResultadoBuscaGritos = $Conexao->query($BuscarGritos);
    if($ResultadoBuscaGritos->num_rows>0){
        while ($LinhaGritos = $ResultadoBuscaGritos->fetch_assoc()){
            $IdObjeto = $LinhaGritos['idObjeto'];
            $NomeObjeto = $LinhaGritos['nome_objeto'];
            $DescricaoObjeto = $LinhaGritos['descricao'];
            $ObservacoesObjeto = $LinhaGritos['observacoes'];
            $CategoriaObjeto = $LinhaGritos['categoria'];
            $DataCadastro = $LinhaGritos['datacad'];
            $HoraCadastro = $LinhaGritos['horacad'];
            $DataAutorizacao = $LinhaGritos['dataaut'];
            $HoraAutorizacao = $LinhaGritos['horaaut'];
            $IdDoador = $LinhaGritos['idUsuario'];
            $NomeDoador = $LinhaGritos['nome'];
            $TelefoneDoador = $LinhaGritos['telefone'];
            $CelularDoador = $LinhaGritos['celular'];
            $RuaDoador = $LinhaGritos['rua'];
            $QuadraDoador = $LinhaGritos['quadra'];
            $LoteDoador = $LinhaGritos['lote'];
            $NumeroDoador = $LinhaGritos['numero'];
            $BairroDoador = $LinhaGritos['bairro'];
            $CidadeDoador = $LinhaGritos['cidade'];
            $UfDoador = $LinhaGritos['uf'];
            $StatusTransacao = $LinhaGritos['status_transacao'];
            include 'GeraDivGritos.php';
        }
    }
?>
