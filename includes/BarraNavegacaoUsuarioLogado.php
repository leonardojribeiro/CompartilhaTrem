<?php
    require_once 'index.php';
?>

                    <li class="nav-item">
                        <a class="nav-link <?php if($acao =="doar"){echo "active";}?>" href="index.php?acao=doar">Fazer uma doação</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($acao =="VerDoacoes"){echo "active";}?>" href="index?acao=VerDoacoes">Minhas doações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($acao =="VerGritos"){echo "active";}?>" href="index?acao=VerGritos">Meus gritos</a>
                    </li>
