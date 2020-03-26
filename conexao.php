<?php
    require_once 'index.php';
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "compartilhatrem";
    $Conexao = new mysqli($servername, $username, $password, $dbname);
    if ($Conexao->connect_error) {
        die("Connection failed: " . $Conexao->connect_error);
    }
?>