<?php

    include "../protected/classes.php";
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

    $bd = new BancoDeDados();
    $conect = new Conexao();

    if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $consult_bd = $bd->consultar("select id from usuarios where email='$email'");
        if(mysqli_num_rows($consult_bd) > 0) {
            echo "Este e-mail já está cadastrado!";
            exit;
        }else {
            $bd->inserir("insert into usuarios(nome, email, senha, id_perfil) values('$nome', '$email', '$senha', 2);");
            echo 'Usuário cadastrado com sucesso!';
        }
    }

?>

</body>
</html>