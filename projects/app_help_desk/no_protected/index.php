
<?php

    include "../protected/login.php";

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $erro_email = '';
        $erro_senha = '';
        if(isset($_GET['erro_email'])) $erro_email = $_GET['erro_email'];
        else $erro_email = '';

        if(isset($_GET['erro_senha'])) $erro_senha = $_GET['erro_senha'];
        else $erro_senha = '';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login|Help Desk</title>
</head>
<body>

    <div>
        Login
    </div>
    <form action="../protected/login.php" method="post">
        <div>
            <input name="email" type="email" placeholder="E-mail">
            <span name="erro_email">
                <?php echo ($erro_email == true) ? "E-mail inválido" : ''; ?>
            </span>
        </div>
        <div>
            <input name="password" type="password" placeholder="Senha">
            <span name="erro_senha">
                <?php echo ($erro_senha == true) ? "Senha inválida" : ''; ?>
            </span>
        </div>
        <button type="submit">Entrar</button>
        <span name="err_session"></span> <br>
        <button><a href="cadastro.php">Cadastre-se</a></button>
    </form>

    <a href="./insert.php">Inserir Usuário</a> <br>
    <a href="./select.php">Selecionar Usuário</a>
</body>
</html>

<?php

    