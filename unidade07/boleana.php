<?php
    $_fumante = true;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <?php
        echo "É fumante? ";
        echo ($_fumante)?"Sim":"Não";
        echo "<br>";

        echo "\$_fumante é boolena? ";
        echo (is_bool($_fumante)?"Sim":"Não");
    ?>
    <body>
    </body>
</html>