<?php
    require_once 'index.php';
    function Criptografa($item){
        $item = md5($item);
        return $item;
    }
    function RetiraMascara($item){
        $caracteres = array('.','(',')',' ', '-',);
        $item = str_replace($caracteres, '', $item);
        return $item;
    }
    function UploadImagem($origem,$destino){
        if(isset($_FILES[$origem])){
            $foto= $_FILES[$origem];
            if (!empty($foto["name"])){
                // Largura máxima em pixels
		$largura = 5000;
		// Altura máxima em pixels
		$altura = 5000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 5242880;
		$error = array();
                if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
                    $error[1] = "Isso não é uma imagem.";
   	 	} 
		$dimensoes = getimagesize($foto["tmp_name"]);
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
                if (count($error) == 0){
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
                    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
                    $caminho_imagem = $destino . $nome_imagem;
                    move_uploaded_file($foto["tmp_name"], $caminho_imagem);
                    return $caminho_imagem;
                }
                if (count($error) != 0) {
                    foreach ($error as $erro) {
                        echo $erro . "<br />";
                    }
		}
            }
            else{
                return "img/default_avatar.png";
            }
        }
    }
    function InverterData($Data, $Separador){
        return implode("/", array_reverse( explode( $Separador, $Data ) ) );
    }   
?> 