<?php
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form name="alterarenderecousuario" method="post" action="">
            <div class="bg-light shadow p-2 m-2">
                <fieldset><legend>Preencha os dados abaixo para alterar o seu endereço.</legend>
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="cep">CEP <font color="ff0000">*</font></label>
                            <input type="text" id="cep" name="cep" placeholder="00000-000" requiredd="" onblur="pesquisacep(this.value);" class="cep form-control">
                        </div>
                        <div class="col-md-8 form-group">
                            <label for="rua">Rua <font color="ff0000">*</font></label>
                            <input type="text" id="rua" name="rua" placeholder="Rua" requiredd="" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" id="bairro" name="bairro" placeholder="Bairro" class="form-control">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="quad">Quadra</label>
                            <input type="text" id="quad" name="quad" placeholder="Ex: A" class="form-control">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="lote">Lote</label>
                            <input type="text" id="lote" name="lote" placeholder="Ex: 2" class="form-control">
                        </div>
                        <div class="col-md-2 form-group">
                            <label for="num">Número</label>
                            <input type="text" id="num" name="numero" placeholder="Ex: 413" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="cidade">Cidade <font color="ff0000">*</font></label>
                            <input type="text" id="cidade" name="cidade" placeholder="Ex: Goiânia" class="form-control" requiredd="">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="uf">Estado <font color="ff0000">*</font></label>
                            <select id="uf" name="uf" class="form-control" requiredd="">
                                <option value="" selected="">Selecione</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col">
                            <a href="index?acao=contausuario"><button type="button" class="btn btn-outline-secondary form-control"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</button></a>
                        </div>
                        <div class="col">
                            <button type="submit" name="alteraendereco" class="btn btn-outline-secondary form-control">Salvar</button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </form>
    </div>
</div>
