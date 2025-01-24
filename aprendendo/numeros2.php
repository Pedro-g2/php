<?php
    $salario = 1095;
    $gasolina = 4.55;
    $telefone = "3635-1110"
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "$salario é um número? ";
            if (is_numeric($salario)) echo "Sim";
            else echo "Não";
            echo "<br>";
            
            echo "$gasolina é um número? ";
            if (is_numeric($gasolina)) echo "Sim";
            else echo "Não";
            echo "<br>";
            
            echo "$telefone é um número? ";
            if (is_int($telefone)) echo "Sim";
            else echo "Não";
            echo "<br><br>";

            // testar se é inteiro
            echo "$salario é um inteiro? ";
            if (is_int($salario)) echo "Sim";
            else echo "Não";
            echo "<br>";
            
            echo "$gasolina é um inteiro? ";
            if (is_int($gasolina)) echo "Sim";
            else echo "Não";
            echo "<br>";
            
            echo "$telefone é um inteiro? ";
            if (is_int($telefone)) echo "Sim";
            else echo "Não";
            echo "<br><br>";

            // testar se é float
            echo "$salario é um real? ";
            if (is_float($salario)) echo "Sim";
            else echo "Não";
            echo "<br>";
            
            echo "$gasolina é um real? ";
            if (is_float($gasolina)) echo "Sim";
            else echo "Não";
            echo "<br>";
            
            echo "$telefone é um real? ";
            if (is_float($telefone)) echo "Sim";
            else echo "Não";
            echo "<br><br>";

            // testar se é string
            echo "$salario é uma string? ";
            if (is_string($salario)) echo "Sim";
            else echo "Não";
            echo "<br>";
            
            echo "$gasolina é uma string? ";
            if (is_string($gasolina)) echo "Sim";
            else echo "Não";
            echo "<br>";

            echo "$telefone é uma string? ";
            if (is_string($telefone)) echo "Sim";
            else echo "Não";
            echo "<br><br>";

        ?>
        
        
    </body>
</html>