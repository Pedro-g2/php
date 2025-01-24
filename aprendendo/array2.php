<?php
    $numbers = array(14, 78, 25, 356, 12, 0, -7, 85);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <pre>
        <?php 
            sort($numbers);
            echo "Crescente<br>";
            print_r($numbers);
        ?>
        </pre>

        <pre>
        <?php 
            rsort($numbers);
            echo "Decrescente<br>";
            print_r($numbers);
        ?>
        </pre>

        <?php
            echo "Maior valor: ".max($numbers)."<br>";
            echo "Menor valor: ".min($numbers)."<br>";
        ?>
    </body>
</html>