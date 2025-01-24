<?php
    $gasolina = 4.5;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // arredondar para media
            echo "Arredondando para média: ";
            echo round($gasolina);
            echo "<br>";

            // arredondar para cima
            echo "Arredondando para cima: ";
            echo ceil($gasolina);
            echo "<br>";

            // arredondar para baixo
            echo "Arredondando para cima: ";
            echo floor($gasolina);
            echo "<br>";

            
        ?>
        
        
    </body>
</html>