<?php

    include "../protected/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <a href="./index.php">Voltar</a>

<?php

    $select = 'select * from chamados';
    $result = mysqli_query($link, $select);
    mysqli_close($link);

    while($registro = mysqli_fetch_assoc($result)) {
        echo '<pre>';
        print_r($registro);
        echo '</pre>';
    }
    
?>

</body>
</html>