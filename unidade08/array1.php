<?php
    $_salada = array("maçã", "abacaxi", "laranja");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>

        <?php
            
            echo $_salada[0]."<br>";
            $_salada[]="abacate";
            echo count($_salada)."<br>";
        ?>

        <pre>
        <?php
            
            print_r($_salada);
        ?>
        </pre>

    </body>
</html>