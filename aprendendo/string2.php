<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            // strlen - Retorna tamanho da string
            echo "Tamanho da string: ";
            echo strlen(string: $_nome)."<br>";
            
            // stripos  - Retorna primeira ocorrência 
            echo "Primeira ocorrência da string: ";
            echo stripos($_nome, "F")."<br>";

            // strripos - Retorna última ocorrência
            echo "Última ocorrência da string: ";
            echo strripos($_nome, "a")."<br>";
            
            // strtolower - converte para letras min.
            echo "Converte letras para minúsculo: ";
            echo strtolower($_nome)."<br>";

            // strtoupper - converte para letras min.
            echo "Converte letras para maiúsculo: ";
            echo strtoupper($_nome)."<br>";

            // SUBSTR_COUNT - Conta quantas ocorreram
            echo "Conta quantas ocerrêcias do caractere há: ";
            echo substr_count($_nome, "a")."<br>";

            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            
        ?>
        
        
    </body>
</html>