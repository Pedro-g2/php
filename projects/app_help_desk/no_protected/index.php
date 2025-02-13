<?php

    include "../protected/usuario.php";

    $usr01 = new Usuario("Pedro", "pedro@email.com", "123", 1);

    echo $usr01->__get('nome');

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->