<?php
    require_once 'config.php';
    if(isset($_POST['enviarcadastro'])){
        $Email = $_POST['email'];
        $BuscaEmail = "select email from usuario where email = '$Email'"; //verifica se o email já foi cadastrado
        $ResultadoBuscaEmail = $Conexao->query($BuscaEmail);
        if ($ResultadoBuscaEmail->num_rows > 0){
            echo "<script>alert('Email já cadastrado. Utilize outro.');</script>";
            include 'FormularioCadastro.php'; //se já foi, alerta o usuario e volta pro formulário
        }
        else{
            $IpCliente = $_SERVER['REMOTE_ADDR'];
            $DataCadastro = date("Y-m-d-H-i-s");
            //pega os dados restantes
            $Nome = $_POST['nome'];
            $Sobrenome = $_POST['sobren'];
            $Apelido = $_POST['apelido'];
            $DataNascimento = $_POST['datan'];
            $Sexo = $_POST['sexo'];
            $CPF = $_POST['cpf'];
            $Celular = $_POST['cel'];
            $Telefone = $_POST['tel'];
            $CEP = $_POST['cep'];
            $Rua = $_POST['rua'];
            $Bairro = $_POST['bairro'];
            $Quadra = $_POST['quad'];
            $Lote = $_POST['lote'];
            $Numero = $_POST['numero'];
            $Cidade = $_POST['cidade'];
            $Estado= $_POST['uf'];
            $Pergunta = $_POST['pergunta'];
            $Resposta = $_POST['resposta'];
            $Senha = $_POST['senha'];
            //inicia o procedimentos de salvamento no banco de dados
            //retira as máscaras e Criptografa
            $CPF = RetiraMascara($CPF);
            $Telefone = RetiraMascara($Telefone);
            $Celular = RetiraMascara($Celular);
            $CEP = RetiraMascara($CEP);
            $CPF = Criptografa($CPF);
            $Senha = Criptografa($Senha);
            $Resposta = Criptografa($Resposta);
            //faz o upload da imagem
            $CaminhoFoto = UploadImagem('perfil', 'userimg/');
            //insere os dados na tabels endereço
            $InsereEmEndereco = "insert into endereco (cep, rua, bairro, quadra, lote, numero, cidade, uf) values "
                    . "('$CEP','$Rua','$Bairro','$Quadra','$Lote','$Numero','$Cidade','$Estado')";
            if ($Conexao->query($InsereEmEndereco)){
                $IdEndereco = $Conexao->insert_id;
                $_SESSION['idendereco']=$IdEndereco;
                $_SESSION['cep']=$CEP;
                $_SESSION['rua']=$Rua;
                $_SESSION['bairro']=$Bairro;
                $_SESSION['quadra']=$Quadra;
                $_SESSION['lote']=$Lote;
                $_SESSION['numero']=$Numero;
                $_SESSION['cidade']=$Cidade;
                $_SESSION['uf']=$Estado;
            }
            else{
                echo "Erro: " . $InsereEmEndereco . "<br>" . $Conexao->error;
            }
            //insere os dados na tabela cliente
            $InserirEmUsuario = "insert into usuario (nome, sobrenome, apelido, sexo, datanascimento, cpf, celular, telefone," 
                    . "email, senha, caminhofoto, dataderegistro, pergunta, resposta, idendereco, ipcadastro)
                    values('$Nome', '$Sobrenome', '$Apelido', '$Sexo', '$DataNascimento', '$CPF', '$Celular', '$Telefone', "
                    . "'$Email', '$Senha', '$CaminhoFoto', '$DataCadastro', '$Pergunta', '$Resposta', '$IdEndereco', "
                    . "'$IpCliente')";
            if ($Conexao->query($InserirEmUsuario)){
                $IdUsuario = $Conexao->insert_id;
                $_SESSION ["nomeusuario"] = $Nome;
                $_SESSION ["caminhoimgusuario"] = $CaminhoFoto;
                $_SESSION ["idusuario"] = $IdUsuario;
            }
            else{
                echo "Erro: " . $InserirEmUsuario . "<br>" . $Conexao->error;
            }
            //busca as categorias pra depois procurar referências no formulário
            $BucarCategorias = "select idcategoria from categoria";
            $ResuldoBuscaCategoria = $Conexao->query($BucarCategorias);
            if ($ResuldoBuscaCategoria->num_rows > 0){
                while($LinhaResultado = $ResuldoBuscaCategoria->fetch_assoc()) {
                    $IdCategoria = $LinhaResultado["idcategoria"];
                    if(isset($_POST['categoria'.$IdCategoria])){
                        $sql = "insert into usuarioxcategoria (idusuario, idcategoria) values ('$IdUsuario', '$IdCategoria')";
                        $Conexao->query($sql);
                    }
                }
            }
            echo "<script> window.location='index';</script>";
        }
    }
    else{
        include 'FormularioCadastro.php';
    }
?>
