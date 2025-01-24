<?php
    $_nulo = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
    <?php
        echo "\$_nulo tem valor? ";
        echo ($_nulo)?"Sim":"Não";
        echo "<br>";

        echo "\$_nulo é null? ";
        echo (is_null($_nulo)?"Sim":"Não");
    ?>
    <body>
    </body>
</html>