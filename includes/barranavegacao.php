<?php
    require_once 'index.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow mb-3 pt-1 pb-1 pl-2 pr-2">
            <!-- Brand -->
            <a class="navbar-brand">
                <img src="img/logo.png" class="d-none d-lg-flex" alt="logo" height="35px">
                <img src="img/logo-sm.png" class="d-lg-none" alt="logo" height="35px">
            </a>
            <form class="form-inline my-2 my-md-0 d-lg-none" method="get" action="index">
                <div class="input-group">
                    <input type="text" class="form-control" name="busca" size="10pt" placeholder="Buscar trem">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary form-control" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </div>
                </div>
            </form> 
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if($acao =="home"){echo "active";}?>" href="index.php?acao=home">Home</a>
                    </li>
                    <?php if($_SESSION['idusuario']!=""){include 'BarraNavegacaoUsuarioLogado.php';}?>
                    <li class="nav-item">
                        <form class="form-inline my-2 my-md-0 d-none d-lg-flex" method="get" action="index">
                            <div class="input-group">
                                <input type="text" class="form-control" name="busca" placeholder="Buscar trem">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary form-control" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                        </form> 
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php 
                        if($_SESSION['nomeusuario'] == ""){
                            include 'botaologin.php';
                        }
                        else{
                            include 'usuariologado.php';
                        }
                    ?>
                </ul>
            </div> 
        </nav>