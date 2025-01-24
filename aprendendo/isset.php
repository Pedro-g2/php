<?php
    $idade = 25;
    $nome = "Pedro";
    $salario = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php
            echo "\$idade existe? ".isset($idade)."<br>";
            echo "\$nome existe? ".isset($nome)."<br>";
            echo "\$salario existe? ".isset($salario)."<br>";
            echo "\$preco existe? ".isset($preco)."<br>";
        ?>
    <body>
    </body>
</html>