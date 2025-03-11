
<?php

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $erro_email = '';
        $erro_senha = '';
        if(isset($_GET['erro_email'])) 
            $erro_email = $_GET['erro_email'];

        if(isset($_GET['erro_senha'])) 
            $erro_senha = $_GET['erro_senha'];

        $erro_sessao = null;
        if(isset($_GET['erro']) && $_GET['erro'] == 'nao_logado')
            $erro_sessao = 'Usuário não logado';
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
    <form action="../protected/valida_login.php" method="post">
        <div>
            <input name="email" type="email" placeholder="E-mail">
            <span name="erro_email">
                <?php echo ($erro_email == 'true') ? "E-mail inválido" : ''; ?>
            </span>
        </div>
        <div>
            <input name="password" type="password" placeholder="Senha">
            <span name="erro_senha">
                <?php echo ($erro_senha == 'true') ? "Senha inválida" : ''; ?>
            </span>
        </div>
        <button type="submit">Entrar</button>
        <span name="err_session">
            <?php if($erro_sessao) echo $erro_sessao; ?>
        </span> <br>
    </form>

    <a href="./cadastro.php">Inserir Usuário</a> <br>
</body>
</html>
