<?php

    include "../protected/usuario.php";
    include "../protected/conexao.php";
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
        <input type="text" name="nome" id="nome"  required><br><br>
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email" required><br><br>
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" maxlength="12" size="12" required><br><br>
        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>

    <a href="./index.php">Voltar</a>

<?php

    $user = new Usuario();
    $user->save_user();

    $user_email = $user->__get("email");
    $select_user = 'select * from usuarios where email = '."'$user_email'";
    $result = mysqli_query($link, $select_user);

    if(isset($result)) echo 'Usuário cadastrado com sucesso!';

?>

</body>
</html>