<?php

    include "../protected/classes.php";
    require_once '../protected/valida_acesso.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <a href="./home.php">Voltar</a><br>
    <a href="../protected/sair.php">Sair</a><br>

<?php

    $bd = new Conexao();
    $id_usuario = $_SESSION['id_usuario'];

    $select = 'select * from chamados where id_usuario=' . $id_usuario;
    $result = mysqli_query($bd->getConexao(), $select);

    while($registro = mysqli_fetch_assoc($result)) {
        echo 'Id do chamado: ' . $registro['id_chamado'] . '</br>';
        echo 'Título: ' . $registro['titulo'] . '</br>';
        echo 'Categoria: ' . $registro['categoria'] . '</br>';
        echo 'Descrição: ' . $registro['descricao'] . '</br>';
        echo 'Id do usuário: ' . $registro['id_usuario'];
        echo '</br>';
        echo '</br>';
    }
    
?>

</body>
</html>