<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "O elemento 'Laranja' existe? ";
            $resposta = in_array("UVA", $_salada);
            echo ($resposta)?"Sim":"Não";
            echo "<br>";

            echo "O elemento 'Uva' existe em qual índice? ";
            $resposta = array_search("Abacate", $_salada);
            echo $resposta;
        ?>
    </body>
</html>