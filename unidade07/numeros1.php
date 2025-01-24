<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao

            // Exponencial
            echo "Exponenciação: " . pow(6,3) . "</br>";

            // Raiz Quadrada
            echo "Raiz quadrada: " . sqrt(6) . "</br>";

            // Randômico aleatório
            echo "Randômico aleatório: ".rand()."<br>";

            // Randômico no intervalo
            echo "Randomico no intervalo: " . rand(1,5) . "</br>";
            
            // Valor absoluto
            echo "Valor absoluto: " . abs(-45) . "</br>";
        ?>
    </body>
</html>