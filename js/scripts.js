//previsualizar imagem no formulário
function PreviaImagemPerfilAtt(){ 
    var oFReader = new FileReader(); 
    oFReader.readAsDataURL(document.getElementById("attimgperf").files[0]);
    oFReader.onload = function (oFREvent) { 
        document.getElementById("imagemusuario").src = oFREvent.target.result; 
        $(document).ready(function(){
            $("#cancelaimagem").show(250);
            $("#salvaimagem").show(250);
        });
    }; 
};
$(document).ready(function(){
    $("#cancelaimagem").click(function(){
        $("#cancelaimagem").hide(250);
        $("#salvaimagem").hide(250);
        document.getElementById("attimgperf").value="";
        document.getElementById("imagemusuario").src="";  
    });
});
function PreviewImage(){ 
    var oFReader = new FileReader(); 
    oFReader.readAsDataURL(document.getElementById("imagemperfil").files[0]);
    oFReader.onload = function (oFREvent) { 
        document.getElementById("previaimgperfil").src = oFREvent.target.result; 
        $(document).ready(function(){
            $("#cancelaimagemperfil").show(250);
        });
    }; 
};
$(document).ready(function(){
    $("#cancelaimagemperfil").click(function(){
        $("#cancelaimagemperfil").hide(250);
        document.getElementById("imagemperfil").value="";
        document.getElementById("previaimgperfil").src="img/default_avatar_form.png";  
    });
});
function PreviewImage0(){ 
    var oFReader = new FileReader(); 
    oFReader.readAsDataURL(document.getElementById("Imagem1DoObjeto").files[0]);
    oFReader.onload = function (oFREvent) { 
        document.getElementById("previaimg0").src = oFREvent.target.result; 
        $(document).ready(function(){
            $("#CancelaImagemObjeto1").show(250);
        });
    }; 
};
$(document).ready(function(){
    $("#CancelaImagemObjeto1").click(function(){
        $("#CancelaImagemObjeto1").hide(250);
        document.getElementById("Imagem1DoObjeto").value="";
        document.getElementById("previaimg0").src="img/icone_camera.png";  
    });
});
function PreviewImage1() { 
    var oFReader = new FileReader(); 
    oFReader.readAsDataURL(document.getElementById("Imagem2DoObjeto").files[0]);
    oFReader.onload = function (oFREvent) { 
        document.getElementById("previaimg1").src = oFREvent.target.result;  
        $(document).ready(function(){
            $("#CancelaImagemObjeto2").show(250);
        });
    }; 
};
$(document).ready(function(){
    $("#CancelaImagemObjeto2").click(function(){
        $("#CancelaImagemObjeto2").hide(250);
        document.getElementById("Imagem2DoObjeto").value="";
        document.getElementById("previaimg1").src="img/icone_camera.png";  
    });
});
function PreviewImage2() { 
    var oFReader = new FileReader(); 
    oFReader.readAsDataURL(document.getElementById("Imagem3DoObjeto").files[0]);
    oFReader.onload = function (oFREvent) { 
        document.getElementById("previaimg2").src = oFREvent.target.result;  
        $(document).ready(function(){
            $("#CancelaImagemObjeto3").show(250);
        });
    }; 
};
$(document).ready(function(){
    $("#CancelaImagemObjeto3").click(function(){
        $("#CancelaImagemObjeto3").hide(250);
        document.getElementById("Imagem3DoObjeto").value="";
        document.getElementById("previaimg2").src="img/icone_camera.png";  
    });
});
function PreviewImage3() { 
    var oFReader = new FileReader(); 
    oFReader.readAsDataURL(document.getElementById("Imagem4DoObjeto").files[0]);
    oFReader.onload = function (oFREvent) { 
        document.getElementById("previaimg3").src = oFREvent.target.result;  
        $(document).ready(function(){
            $("#CancelaImagemObjeto4").show(250);
        });
    }; 
};
$(document).ready(function(){
    $("#CancelaImagemObjeto4").click(function(){
        $("#CancelaImagemObjeto4").hide(250);
        document.getElementById("Imagem4DoObjeto").value="";
        document.getElementById("previaimg3").src="img/icone_camera.png";  
    });
});
function PreviewImage4() { 
    var oFReader = new FileReader(); 
    oFReader.readAsDataURL(document.getElementById("Imagem5DoObjeto").files[0]);
    oFReader.onload = function (oFREvent) { 
        document.getElementById("previaimg4").src = oFREvent.target.result; 
        $(document).ready(function(){
            $("#CancelaImagemObjeto5").show(250);
        }); 
    }; 
};
$(document).ready(function(){
    $("#CancelaImagemObjeto5").click(function(){
        $("#CancelaImagemObjeto5").hide(250);
        document.getElementById("Imagem5DoObjeto").value="";
        document.getElementById("previaimg4").src="img/icone_camera.png";  
    });
});
    
function validaCPF(){ 
    var vd0=0, vd1=0, vd2=0;
    var cpf = document.getElementById("cpf").value;
    cpf = cpf.replace(/[^\d]+/g,'');    
    if(cpf === '') return false; 
    // Elimina CPFs invalidos conhecidos    
    if (cpf.length !== 11 || 
        cpf === "00000000000" || 
        cpf === "11111111111" || 
        cpf === "22222222222" || 
        cpf === "33333333333" || 
        cpf === "44444444444" || 
        cpf === "55555555555" || 
        cpf === "66666666666" || 
        cpf === "77777777777" || 
        cpf === "88888888888" || 
        cpf === "99999999999"){
            vd0=1; 
        }
    // Valida 1o digito 
    add = 0;    
    for (i=0; i < 9; i ++){   
        add += parseInt(cpf.charAt(i)) * (10 - i);  
    }
    rev = 11 - (add % 11);  
    if (rev === 10 || rev === 11){   
        rev = 0;    
    }
    if (rev !== parseInt(cpf.charAt(9))){   
        vd1=1;  
    }
    // Valida 2o digito 
    add = 0;    
    for (i = 0; i < 10; i ++){  
        add += parseInt(cpf.charAt(i)) * (11 - i);  
    }
    rev = 11 - (add % 11);  
    if (rev === 10 || rev === 11){
        rev = 0;    
    }
    if (rev !== parseInt(cpf.charAt(10))){
        vd2=1;     
    }
    if (vd0===1 || vd1===1 || vd2===1){
        alert("CPF inválido!");
        cpf="";
        document.getElementById("cpf").value=(cpf); 
    }
}
//verifica se são as mesmas senhas
function validasenha(){
    var senha = document.getElementById("senha").value;
    var senha1 = document.getElementById("senha1").value;
    if (senha !== senha1)
    {
        alert("As senhas não podem ser diferentes!");
        senha1="";
        document.getElementById("senha1").value=(senha1);
    }
}
//verifica se são as mesmas senhas
function validasenharedf(){
    var senha = document.getElementById("senharedf").value;
    var senha1 = document.getElementById("senha1redf").value;
    if (senha !== senha1)
    {
        alert("As senhas não podem ser diferentes!");
        senha1redf="";
        document.getElementById("senha1redf").value=(senha1redf);
    }
}
$(document).ready(function(){
    var pont = document.getElementById("test").value;
    document.getElementById("teste").innerHTML=pont;
});
function testepont(){
    var pont = document.getElementById("test").value;
    document.getElementById("teste").innerHTML=pont;
}
//mostra imagens maiores ao passar o mouse
$(document).ready(function(){
    $("#MiniaturaDetalhe1").hover(function(){
        var Caminho=document.getElementById("MiniaturaImagemDetalhe1").src;
        document.getElementById("DisplayImagem").src=Caminho;
    });
    $("#MiniaturaDetalhe2").hover(function(){
        var Caminho=document.getElementById("MiniaturaImagemDetalhe2").src;
        document.getElementById("DisplayImagem").src=Caminho;
    });
    $("#MiniaturaDetalhe3").hover(function(){
        var Caminho=document.getElementById("MiniaturaImagemDetalhe3").src;
        document.getElementById("DisplayImagem").src=Caminho;
    });
    $("#MiniaturaDetalhe4").hover(function(){
        var Caminho=document.getElementById("MiniaturaImagemDetalhe4").src;
        document.getElementById("DisplayImagem").src=Caminho;
    });
    $("#MiniaturaDetalhe5").hover(function(){
        var Caminho=document.getElementById("MiniaturaImagemDetalhe5").src;
        document.getElementById("DisplayImagem").src=Caminho;
    });
});

$(document).ready(function(){
    $("#categoria").click(function(){
        $("#menucategoria").toggle(250);
    });
    $("#mostrar").show(250);
    });
//formulario cadastro
$(document).ready(function(){
    $("#formularioparte1").show(250);
    $("#formaltend").show(250);
    $("#proximopart1").click(function(){
        if($("#email").val()=== null || $("#email").val() ===""){
            $("#email").focus();
            $("#AlertaEmail").show(0);
            setTimeout(function() {
                $('#AlertaEmail').hide(250);
            }, 2000);
        }
        else if($("#senha").val()=== null || $("#senha").val() ===""){ 
            $("#senha").focus();
            $("#AlertaSenha1").show(0);
            setTimeout(function() {
                $('#AlertaSenha1').hide(250);
            }, 2000);
        }
        else if($("#senha").val().length < 6){
            $("#senha").focus();
            $("#AlertaSenha1Tamanho").show(0);
            setTimeout(function() {
                $('#AlertaSenha1Tamanho').hide(250);
            }, 2000);
        }
        else if($("#senha1").val()=== null || $("#senha1").val() ===""){ 
            $("#senha1").focus();
            $("#AlertaSenha2").show(0);
            setTimeout(function() {
                $('#AlertaSenha2').hide(250);
            }, 2000);
        }
        else{
            $("#formularioparte1").hide(250);
            $("#formularioparte2").show(250);
        }
    });
    $("#anteriorpart2").click(function(){
        $("#formularioparte2").hide(250);
        $("#formularioparte1").show(250);
    });
    $("#proximopart2").click(function(){
        if($("#nome").val()=== null || $("#nome").val() ===""){
            $("#nome").focus();
            $("#AlertaNome").show(0);
            setTimeout(function() {
                $('#AlertaNome').hide(250);
            }, 2000);
        }
        else if($("#sobren").val()=== null || $("#sobren").val() ===""){
            $("#sobren").focus();
            $("#AlertaSobrenome").show(0);
            setTimeout(function() {
                $('#AlertaSobrenome').hide(250);
            }, 2000);
        }
        else if($("#apelido").val()=== null || $("#apelido").val() ===""){
            $("#apelido").focus();
            $("#AlertaApelido").show(0);
            setTimeout(function() {
                $('#AlertaApelido').hide(250);
            }, 2000);
        }
        else if($("#datan").val()=== null || $("#datan").val() ===""){
            $("#datan").focus();
            $("#AlertaDataNascimento").show(0);
            setTimeout(function() {
                $('#AlertaDataNascimento').hide(250);
            }, 2000);
        }
        else if(!$("input[name='sexo']").is(':checked')){
            $("#AlertaSexo").show(0);
            setTimeout(function() {
                $('#AlertaSexo').hide(250);
            }, 2000);
        }
        else if($("#cpf").val()=== null || $("#cpf").val() ===""){
            $("#cpf").focus();
            $("#AlertaCPF").show(0);
            setTimeout(function() {
                $('#AlertaCPF').hide(250);
            }, 2000);
        }
        else if($("#cel").val()=== null || $("#cel").val() ===""){
            $("#cel").focus();
            $("#AlertaCelular").show(0);
            setTimeout(function() {
                $('#AlertaCelular').hide(250);
            }, 2000);
        }
        else{
            $("#formularioparte2").hide(250);
            $("#formularioparte3").show(250);
        }
    });
    $("#anteriorpart3").click(function(){
        $("#formularioparte3").hide(250);
        $("#formularioparte2").show(250);
    });
    $("#proximopart3").click(function(){
        if($("#cep").val()=== null || $("#cep").val() ===""){
            $("#cep").focus();
            $("#AlertaCEP").show(0);
            setTimeout(function() {
                $('#AlertaCEP').hide(250);
            }, 2000);
        }
        else if($("#rua").val()=== null || $("#rua").val() ===""){
            $("#rua").focus();
            $("#AlertaRua").show(0);
            setTimeout(function() {
                $('#AlertaRua').hide(250);
            }, 2000);
        }
        else if($("#bairro").val()=== null || $("#bairro").val() ===""){
            $("#bairro").focus();
            $("#AlertaBairro").show(0);
            setTimeout(function() {
                $('#AlertaBairro').hide(250);
            }, 2000);
        }
        else if($("#cidade").val()=== null || $("#cidade").val() ===""){
            $("#cidade").focus();
            $("#AlertaCidade").show(0);
            setTimeout(function() {
                $('#AlertaCidade').hide(250);
            }, 2000);
        }
        else if($("#uf").val()=== null || $("#uf").val() ===""){
            $("uf").focus();
            $("#AlertaUf").show(0);
            setTimeout(function() {
                $('#AlertaUf').hide(250);
            }, 2000);
        }
        else{
            $("#formularioparte3").hide(250);
            $("#formularioparte4").show(250);
        }   
    });
    $("#anteriorpart4").click(function(){
        $("#formularioparte4").hide(250);
        $("#formularioparte3").show(250);
    });
});
//animacoes gerais
$(document).ready(function(){
    $("#enderecousuario").hover(function(){
        $("#alteraend").toggle(250);
    });
    $("#CategoriaDeInteresseConta").hover(function(){
        $("#alteracat").toggle(250);
    });
    $("#imagemperfil").hover(function(){
        $("#atualizaimagem").toggle(100);
    });
});
//máscara   
$(document).ready(function(){
    $('.cpf').mask('999.999.999-99');
    $('.tel').mask('(99) 9999-9999');
    $('.cel').mask('(99) 99999-9999');
    $('.cep').mask('99999-999');
});

//API correios
function limpa_formulario_cep() {
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
}
function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        document.getElementById('rua').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);
    } //end if.
    else {
        alert("CEP não encontrado.");
    }
}
function pesquisacep(valor) {
    var cep = valor.replace(/\D/g, '');
    if (cep !== "") {
        var validacep = /^[0-9]{8}$/;
        if(validacep.test(cep)) {
            var script = document.createElement('script');
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
            document.body.appendChild(script);
        }
        else {
            alert("Formato de CEP inválido.");
        }
    }
    else {
        limpa_formulario_cep();
    }
};
