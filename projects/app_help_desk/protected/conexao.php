<?php

// Dados para a conexão com a base de dados.
$host = "localhost";
$user = "root";
$password = "yes";
$database = "app_help_desk";

// A variável $link recebe a conexão realizada.
$link = mysqli_connect($host, $user, $password, $database);

// Verificação de problemas na conexão.
if(mysqli_connect_errno()){
    echo "Problema na conexão: " . mysqli_connect_error();
    exit;
}