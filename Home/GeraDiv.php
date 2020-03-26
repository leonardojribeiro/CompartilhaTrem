<?php
    require_once 'index.php';
    $SelecionaDeImagemObjeto = "select caminho from imagemobjeto where idobjeto = '".$IdDoObjeto."'and tipo='1';";
    $ResultadoSelecionaDeImagemObjeto = $Conexao->query($SelecionaDeImagemObjeto);
    if($ResultadoSelecionaDeImagemObjeto->num_rows>0){
        while($LinhaImagem = $ResultadoSelecionaDeImagemObjeto->fetch_assoc()){
            $CaminhoImagemObjeto = $LinhaImagem['caminho']; 
        }
    }
    //verifica se o objeto foi gritado pelo usuario
    $Grito=0;
    $BuscaGrito = "select * from transacao where id_objeto = '".$IdDoObjeto."' and id_usuario = '"
            .$_SESSION['idusuario']."';";
    $ResultadoBuscaGrito = $Conexao->query($BuscaGrito);
    if($ResultadoBuscaGrito->num_rows>0){
        $Grito=1;
    }
?>

<div class="col-lg-6 d-flex">
    <div class="row bg-light m-md-2 m-1 p-md-3 shadow CartaoHome" style="width: 100%">
        <div class="col-md-6 my-auto p-2">
            <h4 class="mb-3">
                <font class="text-dark"><?php echo $NomeDoObjeto;?></font>
            </h4>
            <p class="mb-1"><font class="text-muted">Ofertado em:</font> <?php echo $DataDeCadastro;?> às <?php echo $HoraDeCadastro;?></p>
            <p><font class="text-muted">Descrição:</font>
            <p><font class="pl-5"><?php echo $DescricaoDoObjeto;?></font></p>
            <p><font class="text-muted">Categoria:</font> <?php echo $CategoriaDoObjeto;?></p>
            <?php if($Grito==1){include 'FoiGritado.php';}?>
            <a href="index?acao=ver&detalheobjetoid=<?php echo $IdDoObjeto;?>"><p>Ver mais detalhes</p></a>
        </div>
        <div class="col-md-6 d-msd-flex my-auto mx-auto p-3 links">
            <a href="index?acao=ver&detalheobjetoid=<?php echo $IdDoObjeto;?>">
                <img src="<?php echo $CaminhoImagemObjeto;?>" class="Item img-fluid img-thumbnail my-auto mx-auto" alt="Imagem de <?php echo $NomeDoObjeto;?>">
            </a>
        </div>
    </div>
</div>