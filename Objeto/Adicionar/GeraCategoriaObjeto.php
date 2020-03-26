<?php 
    require_once 'config.php';
    $sql = "select * from categoria";
    $result = $Conexao->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $id = $row["idcategoria"];
            $categoria = $row["categoria"];
            echo '<option value="'.$id.'">'.$categoria.'</option>';
        }
    }
?>