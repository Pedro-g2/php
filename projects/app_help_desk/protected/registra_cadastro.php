<?php

    require_once './classes.php';

    $bd = new BancoDeDados();
    $conect = new Conexao();

    if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $consult_bd = $bd->consultar("select id from usuarios where email='$email'");
        if(mysqli_num_rows($consult_bd) > 0) {
            header('Location: ../no_protected/cadastro.php?email=1');
            exit;
        }else {
            $bd->inserir("insert into usuarios(nome, email, senha, id_perfil) values('$nome', '$email', '$senha', 2);");
            header('Location: ../no_protected/cadastro.php?email=0');
        }
    }

?>