<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
    if(isset($IdDoObjetoASerDetalhado)){
        include 'DetalheDoObjeto.php';
    }
    else if(isset ($Busca)){
        include_once 'Topo.php';
        $SelecionaDeObjetos = "Select objeto.idobjeto, objeto.nome_objeto, objeto.descricao, "
                . "date_format(objeto.datacadastro, '%d/%m/%Y') as datacad, "
                . "date_format(objeto.datacadastro, '%H:%i:%s') as horacad, "
                . "categoria.categoria, usuario.nome, endereco.cidade, endereco.uf from objeto inner join usuario on usuario.idUsuario "
                . "= objeto.iddoador inner join endereco on endereco.idEndereco = usuario.idendereco inner join "
                . "categoria on objeto.id_categoria = categoria.idcategoria where "
                . "objeto.nome_objeto like '%".$Busca."%' and status = '0';";
        $ResultadoSelecionaDeObjetos = $Conexao->query($SelecionaDeObjetos);
        $ContadorLinha=0;
        if($ResultadoSelecionaDeObjetos->num_rows>0){
            while($Linha = $ResultadoSelecionaDeObjetos->fetch_assoc()){
                $IdDoObjeto = $Linha['idobjeto'];
                $NomeDoObjeto = $Linha['nome_objeto'];
                $DescricaoDoObjeto = $Linha['descricao'];
                $CategoriaDoObjeto = $Linha['categoria'];
                $DataDeCadastro = $Linha['datacad'];
                $HoraDeCadastro = $Linha['horacad'];
                $NomeDoador = $Linha['nome'];
                $CidadeDoador = $Linha['cidade'];
                $UfDoador = $Linha['uf'];
                if($ContadorLinha%2==0 && $ContadorLinha!=0){
                    include 'QuebraDeLinha.php';
                }
                $ContadorLinha++;
                include "GeraDiv.php";
            }
        }
        include_once 'Fundo.php';
    }
    else{
        include_once 'Topo.php';
        $CategoriasParaSelect = "";
        $ContadorCategoria = 0;
        $SelecionaCategorias = "select idcategoria from usuarioxcategoria where idusuario = '".$_SESSION['idusuario']."';";
        $ResultadoSelecionaCategorias = $Conexao->query($SelecionaCategorias);
        if($ResultadoSelecionaCategorias->num_rows>0){
            while($LinhaCategoria = $ResultadoSelecionaCategorias->fetch_assoc()){
                if($ContadorCategoria == 0){
                    $CategoriasParaSelect = "(id_categoria = '".$LinhaCategoria['idcategoria']."'";
                }
                else{
                    $CategoriasParaSelect .= " or id_categoria = '".$LinhaCategoria['idcategoria']."'";
                }
                $ContadorCategoria++;
            }
            $CategoriasParaSelect .=") and";
        }
        if($_SESSION['idusuario']!=""){
            $SelecionaDeObjetos = "select objeto.idobjeto, objeto.nome_objeto, objeto.descricao, "
                    . "date_format(objeto.datacadastro, '%d/%m/%Y') as datacad, "
                    . "date_format(objeto.datacadastro, '%H:%i:%s') as horacad, "
                    . "categoria.categoria, usuario.nome, endereco.cidade, endereco.uf from objeto inner join usuario on usuario.idUsuario "
                    . "= objeto.iddoador inner join endereco on endereco.idEndereco = usuario.idendereco inner join categoria"
                    . " on objeto.id_categoria = categoria.idcategoria where "
                    .$CategoriasParaSelect." status = '0';";
        }
        else{
            $SelecionaDeObjetos = "select objeto.idobjeto, objeto.nome_objeto, objeto.descricao, "
                    . "date_format(objeto.datacadastro, '%d/%m/%Y') as datacad, "
                    . "date_format(objeto.datacadastro, '%H:%i:%s') as horacad, "
                    . "categoria.categoria, usuario.nome, endereco.cidade, endereco.uf from objeto inner join usuario on usuario.idUsuario "
                    . "= objeto.iddoador inner join endereco on endereco.idEndereco = usuario.idendereco inner join categoria"
                    . " on objeto.id_categoria = categoria.idcategoria where status = '0';";
        }
        $ResultadoSelecionaDeObjetos = $Conexao->query($SelecionaDeObjetos);
        $ContadorLinha=0;
        if($ResultadoSelecionaDeObjetos->num_rows>0){
            while($Linha = $ResultadoSelecionaDeObjetos->fetch_assoc()){
                $IdDoObjeto = $Linha['idobjeto'];
                $NomeDoObjeto = $Linha['nome_objeto'];
                $DescricaoDoObjeto = $Linha['descricao'];
                $CategoriaDoObjeto = $Linha['categoria'];
                $DataDeCadastro = $Linha['datacad'];
                $HoraDeCadastro = $Linha['horacad'];
                $NomeDoador = $Linha['nome'];
                $CidadeDoador = $Linha['cidade'];
                $UfDoador = $Linha['uf'];
                if($ContadorLinha%2==0){
                    include 'QuebraDeLinha.php';
                }
                $ContadorLinha++;
                include "GeraDiv.php";
            }
            if($ContadorLinha%2!=0){
                include 'FimLinha.php';
            }
        }
        include_once 'Fundo.php';
    }
?>

