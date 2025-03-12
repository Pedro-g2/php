<?php

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $msg = null;
        if(isset($_GET['email'])) {
            if($_GET['email'] == 1)  $msg = 'E-mail já cadastrado';
            else if($_GET['email'] == 0)  $msg = 'Cadastro realizado com sucesso';
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="user" action="../protected/registra_cadastro.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"  required><br><br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" required><br><br>
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" maxlength="12" size="12" required><br><br>
        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>

    <a href="./index.php">Voltar</a>
    <span>
        <?php echo  $msg; ?>
    </span>

</body>
</html>