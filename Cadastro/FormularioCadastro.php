<?php 
    require_once 'index.php';
    include_once 'includes/barranavegacao.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="bg-light p-2 mb-5 shadow">
                <center><h2>Crie sua conta</h2></center>
                <h4></h4>
                <h5>Campos com <font color="ff0000">*</font> são obrigatórios.</h5>
                <br>
                <form method="post" enctype="multipart/form-data" action="">
                    <div id="formularioparte1" class="Invisivel">
                        <fieldset><legend>Dados da conta</legend>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">E-mail <font color="ff0000">*</font><br>
                                                    <font id="AlertaEmail" class="Invisivel">Esse é um campo obrigatório!</font>
                                                </label>
                                                <input type="email" id="email" title="abd" name="email" placeholder="nome@exemplo.com" required="" autofocus="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="senha">Senha (mínimo 6 caracteres)<font color="ff0000">*</font><br>
                                                    <font id="AlertaSenha1" class="Invisivel">Esse é um campo obrigatório!<br></font>
                                                    <font id="AlertaSenha1Tamanho" class="Invisivel">Deve ter pelo menos 6 caracteres!</font>
                                                </label>
                                                <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" minlength="6" required="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="senha1">Repita a sua senha <font color="ff0000">*</font><br>
                                                    <font id="AlertaSenha2" class="Invisivel">Esse é um campo obrigatório!</font>
                                                </label>
                                                <input type="password" id="senha1" placeholder="Repita a sua senha" required="" class="form-control" onchange="validasenha()">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Categorias de interesse</label>
                                                <br>
                                                <div class="row">
                                                    <?php include 'includes/geracategoria.php';?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <center><label>Escolha uma imagem para o seu perfil (opcional)</label></center>
                                    <div class="imagem">
                                        </label><button id="cancelaimagemperfil" type="button" class="btn btn-light shadow border"><span class="glyphicon glyphicon-remove"></span></button></label>
                                        <center><label for="imagemperfil"><img src="" id="previaimgperfil" onError="this.onerror=null;this.src='img/default_avatar_form.png';" class="img-thumbnail"><label></center> 
                                        <input id="imagemperfil" class="hidden" type="file" name="perfil" accept="image/*" onchange="PreviewImage();">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6">
                                    <button type="button" id="proximopart1" class="btn btn-outline-secondary form-control shadow">Próximo <span class="glyphicon glyphicon-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div id="formularioparte2" class="Invisivel">
                        <fieldset><legend>Dados pessoais</legend>
                           <div class="row">
                                <div class="col-md-5 form-group">
                                    <label for="Nome">Nome <font color="ff0000">*</font><br>
                                        <font id="AlertaNome" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
                                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required="" class="form-control">
                                </div>
                                <div class="col-md-7 form-group">
                                    <label for="sobren">Sobrenome <font color="ff0000">*</font><br>
                                        <font id="AlertaSobrenome" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
                                    <input type="text" id="sobren" name="sobren" placeholder="Digite seu sobrenome" required="" class="form-control">
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="apelido">Apelido <font color="ff0000">*</font><br>
                                        <font id="AlertaApelido" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
                                    <input type="text" id="apelido" name="apelido" placeholder="Ex: Tião da gambira" required="" class="form-control">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="datan">Data de nascimento <font color="ff0000">*</font><br>
                                        <font id="AlertaDataNascimento" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
                                    <input type="date" id="datan" name="datan" class="form-control" required="">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Sexo <font color="ff0000">*</font><br>
                                        <font id="AlertaSexo" class="Invisivel">Escolha um desses campos!</font>
                                    </label><br>
                                    <label class="radio-inline"><input type="radio" id="m" name="sexo" value="M" required="">Masculino</label>
                                    <label class="radio-inline"><input type="radio" id="f" name="sexo" value="F" required="">Feminino</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="cpf">CPF <font color="ff0000">*</font><br>
                                        <font id="AlertaCPF" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
                                    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required="" onchange="validaCPF()" maxlength="14" class="cpf form-control">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="cel">Celular <font color="ff0000">*</font><br>
                                        <font id="AlertaCelular" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
                                    <input type="tel" id="cel" name="cel" placeholder="Digite o número" required="" class="cel form-control">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="tel">Telefone</label>
                                    <input type="tel" id="tel" name="tel" placeholder="Digite o número" class="tel form-control">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" id="anteriorpart2" class="btn btn-outline-secondary shadow form-control"><span class="glyphicon glyphicon-arrow-left"></span> Anterior</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" id="proximopart2" class="btn btn-outline-secondary shadow form-control">Próximo <span class="glyphicon glyphicon-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div id="formularioparte3" class="Invisivel">
                        <fieldset><legend>Endereço</legend>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="cep">CEP <font color="ff0000">*</font><br>
                                        <font id="AlertaCEP" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
                                    <input type="text" id="cep" name="cep" placeholder="00000-000" required="" onblur="pesquisacep(this.value);" class="cep form-control">
                                </div>
                                <div class="col-md-8 form-group">
                                    <label for="rua">Rua <font color="ff0000">*</font><br>
                                        <font id="AlertaRua" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
                                    <input type="text" id="rua" name="rua" placeholder="Rua" required="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="bairro">Bairro <font color="ff0000">*</font><br>
                                        <font id="AlertaBairro" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
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
                                    <label for="cidade">Cidade <font color="ff0000">*</font><br>
                                        <font id="AlertaCidade" class="Invisivel">Esse é um campo obrigatório!</font>
                                    </label>
                                    <input type="text" id="cidade" name="cidade" placeholder="Ex: Goiânia" class="form-control" required="">
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="uf">Estado <font color="ff0000">*</font><br>
                                        <font id="AlertaUf" class="Invisivel">Escolha uma opção!</font>
                                    </label>
                                    <select id="uf" name="uf" class="form-control" required="">
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
                                <div class="col-6">
                                    <button type="button" id="anteriorpart3" class="btn btn-outline-secondary shadow form-control"><span class="glyphicon glyphicon-arrow-left"></span> Anterior</button>
                                </div>
                                <div class="col-6">
                                    <button type="button" id="proximopart3" class="btn btn-outline-secondary shadow form-control">Próximo <span class="glyphicon glyphicon-arrow-right"></span></button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div id="formularioparte4" class="Invisivel">
                        <fieldset><legend>Informações para recuperação de senha</legend>
                            <p> Digite uma pergunta e uma resposta, ela será feita caso você esqueça a sua senha</p>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="pergunta">Pergunta de segurança <font color="ff0000">*</font></label>
                                    <input type="text" id="pergunta" name="pergunta" required="" placeholder="Ex: Nome do irmão mais novo" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="resp">Resposta <font color="ff0000">*</font></label>
                                    <input type="text" id="resp" name="resposta" required="" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" required="">Aceito os <a href="index?acao=termo" target="blank">termos de compromisso</a></label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" id="anteriorpart4" class="btn btn-outline-secondary shadow form-control"><span class="glyphicon glyphicon-arrow-left"></span> Anterior</button>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-outline-secondary shadow form-control" name="enviarcadastro" onclick="validaformulario()">Enviar</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

