<?php
    require_once 'index.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <!-- Brand -->
    <a class="navbar-brand">
        <img src="img/logo.png" class="d-none d-lg-flex" alt="logo" height="35px">
        <img src="img/logo-sm.png" class="d-lg-none" alt="logo" height="35px">
    </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="">Adicionar Categorias</a>
            </li>
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
    </div>
</nav>