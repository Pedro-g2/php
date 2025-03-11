<?php

    include "../protected/classes.php";
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
    if(isset($_POST['nome']))
        $user->__set('nome', $_POST['nome']);
    if(isset($_POST['email']))
        $user->__set('email', $_POST['email']);
    if(isset($_POST['senha']))
        $user->__set('senha', $_POST['senha']);

    $bd = new BancoDeDados("insert into usuarios(nome, email, senha, id_perfil) 
                        values('" . $user->__get('nome') . "', '" . $user->__get('email') . 
                        "', '" . $user->__get('senha') . "', " . 2 . ")");

    // $user_email = $user->__get("email");
    // echo "select * usuarios where email=" . "'";
    // $bd = new BancoDeDados("select * usuarios where email=" . "'" . $user_email . "'");
    
    // $result = $bd->consultar();

    // if(isset($result)) echo 'Usuário cadastrado com sucesso!';

?>

</body>
</html>