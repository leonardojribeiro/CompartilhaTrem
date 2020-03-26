<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">      
            <form name="" method="post" enctype="multipart/form-data" action="">
                <div class="formulario p-md-3 shadow">
                    <center><h2>Doar</h2></center>
                    <fieldset><legend>Características do objeto</legend>
                        <div class="row">
                            <div class="col-md-7 form-group">
                                <label for="NomeDoObjeto">Nome do objeto</label>
                                <input type="text" id="NomeDoObjeto" name="NomeDoObjeto" required="" class="form-control" placeholder="Ex: Celular">
                            </div>
                            <div class="col-md-5 form-group">
                                <label for="CategoriaDoObjeto">Categoria</label>
                                <select id="CategoriaDoObjeto" name="CategoriaDoObjeto" required="" class="form-control">
                                    <option value="">Escolha uma opção</option>
                                    <?php include 'GeraCategoriaObjeto.php';?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="DescricaoDoObjeto">Descrição do objeto</label>
                                <textarea id="DescricaoDoObjeto" name="DescricaoDoObjeto" placeholder="Seja objetivo na descrição" rows="3" required="" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="DescricaoDoObjeto">Observações</label>
                                <textarea id="DescricaoDoObjeto" name="ObservacoesDoObjeto" placeholder="Seja objetivo nas observações" rows="3" required="" class="form-control"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <div class="p-1 "></div>
                    <fieldset><legend>Adicione fotos do objeto</legend>
                        <center><h5>Você pode adicionar até 5 fotos.</h5></center>
                        <div class="row">
                            <div class="col-12 col-md-6 align-self-center">
                                <button type="button" id="CancelaImagemObjeto1" class="btn btn-sm btn-light border shadow"><span class="glyphicon glyphicon-remove"></span></button>
                                <font class="carousel-caption text-dark">Essa será a imagem principal</font>
                                <center>    
                                    <label for="Imagem1DoObjeto">
                                        <img src="" id="previaimg0" onError="this.onerror=null;this.src='img/icone_camera.png';"class="img-fluid img-thumbnail ImagensFormularioObjeto">
                                    </label>
                                </center>
                                <input id="Imagem1DoObjeto" class="hidden" type="file" name="Imagem1DoObjeto" accept="image/*" required="" onchange="PreviewImage0();" />   
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                <div class="col-6 col-md-6">
                                    <center>
                                        <button type="button" id="CancelaImagemObjeto2" class="btn btn-sm btn-light border shadow ">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <label for="Imagem2DoObjeto">
                                            <img src="" id="previaimg1" onError="this.onerror=null;this.src='img/icone_camera.png';"class="img-fluid img-thumbnail ImagensFormularioObjeto">
                                        </label>
                                    </center>
                                    <input id="Imagem2DoObjeto" class="hidden" type="file" name="Imagem2DoObjeto" accept="image/*" onchange="PreviewImage1();" />   
                                </div>
                                <div class="col-6 col-md-6"> 
                                    <center>
                                        <button type="button" id="CancelaImagemObjeto3" class="btn btn-sm btn-light border shadow">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <label for="Imagem3DoObjeto">
                                            <img src="" id="previaimg2" onError="this.onerror=null;this.src='img/icone_camera.png';"class="img-fluid img-thumbnail ImagensFormularioObjeto">
                                        </label>
                                    </center>
                                    <input id="Imagem3DoObjeto" class="hidden" type="file" name="Imagem3DoObjeto" accept="image/*" onchange="PreviewImage2();" />   
                                </div>
                                <div class="col-6 col-md-6">
                                    <center>
                                        <button type="button" id="CancelaImagemObjeto4" class="btn btn-sm btn-light border shadow">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <label for="Imagem4DoObjeto">
                                            <img src="" id="previaimg3" onError="this.onerror=null;this.src='img/icone_camera.png';"class="img-fluid img-thumbnail ImagensFormularioObjeto">
                                        </label>
                                    </center>
                                    <input id="Imagem4DoObjeto" class="hidden" type="file" name="Imagem4DoObjeto" accept="image/*" onchange="PreviewImage3();" />   
                                </div>
                                <div class="col-6 col-md-6">
                                    <center>
                                        <button type="button" id="CancelaImagemObjeto5" class="btn btn-sm btn-light border shadow">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <label for="Imagem5DoObjeto">
                                            <img src="" id="previaimg4" onError="this.onerror=null;this.src='img/icone_camera.png';"class="img-fluid img-thumbnail ImagensFormularioObjeto">
                                        </label>
                                    </center>
                                    <input id="Imagem5DoObjeto" class="hidden" type="file" name="Imagem5DoObjeto" accept="image/*" onchange="PreviewImage4();" />   
                                </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6 form-group"></div>
                            <div class="col-sm-6">
                                <button type="submit" name="SalvarObjeto" class="btn btn-outline-secondary form-control shadow">Salvar</button>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div>

