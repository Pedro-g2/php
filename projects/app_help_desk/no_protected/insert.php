<?php

    include "../protected/usuario.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="user" action="" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" maxlength="30" size="30" required><br><br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" maxlength="14" size="14" required><br><br>
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" maxlength="5" size="5" required><br><br>
        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>

    <a href="./index.php">Voltar</a>

<?php

   $user = new Usuario();

   $user->save_user();

?>

</body>
</html>