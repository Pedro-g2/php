<?php

    require_once './classes.php';

    $bd = new BancoDeDados();
    $conect = new Conexao();

    if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        try {
            $consult_bd = $bd->consultar("select id from usuarios where email='$email'");
        } catch (Exception $e) {
            gravaErro('/.log_erro.txt', $e);
            echo 'Erro no banco de dados.';
        }

        if(mysqli_num_rows($consult_bd) > 0) {
            header('Location: ../no_protected/cadastro.php?email=1');
            exit;
        }else {
            try {
                $bd->inserir("insert into usuarios(nome, email, senha, id_perfil) values('$nome', '$email', '$senha', 2);");
            } catch (Exception $e) {
                gravaErro('/.log_erro.txt', $e);
                echo 'Erro no banco de dados.';
            }
            header('Location: ../no_protected/cadastro.php?email=0');
        }
    }

?>