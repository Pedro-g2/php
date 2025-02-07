<?php
    session_start();

    $titulo = str_replace("#", "-", $_POST  ["titulo"]);
    $categoria = str_replace("#", "-", $_POST  ["categoria"]);
    $descricao = str_replace("#", "-", $_POST  ["descricao"]);

    $texto_formatado = $_SESSION["id"] . "#" . $titulo . "#" . $categoria . "#" . $descricao . PHP_EOL;
    
    $arquivo = fopen("../protected/arquivo.hd","a");
    fwrite($arquivo, $texto_formatado);
    fclose($arquivo);

    header("Location: home.php");
?>