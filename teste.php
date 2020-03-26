<?php 
    require_once 'conexao.php';
    
    $sql = "select * from categoria";
    $result = $Conexao->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()) {
            $id = $row["idcategoria"];
            $categoria = $row["categoria"];
            echo
                '<meta charset="utf-8" />'
            . '<div class="col-6">'
                    .'<div class="checkbox">'
                        .'<label><input type="checkbox" name="categoria'.$id.'" value="'.$id.'">'.$categoria.'</label>'
                    .'</div>'
                .'</div>';
            if($id%2==0){
                echo '</div><div class="row">';
            }
        }
    }
    
?>