<?php

    session_start();
    include "classes.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = 0;
        $password = 0;

        if(isset($_POST['email'])) 
            $login = $_POST['email'];
        if(isset($_POST['password']))
            $password = $_POST['password'];

        $bd_usuario = new BancoDeDados();
        try {
            $resultado = $bd_usuario->consultar_assoc("select * from usuarios where email = '$login'");
        } catch (Exception $e) {
            $caminho = '/.log_erro.txt';
            $arquivo = fopen($caminho, 'a+');
            if($arquivo) {
                fwrite($arquivo, $e);
            }
            echo 'Erro no banco de dados.';
        }
        

        $id = null;
        $email = null;
        $senha = null;

        if(isset($resultado)) {
            if($resultado['email'] == $login)
                $email = $resultado['email'];
            if($resultado['senha'] == $password)
                $senha = $resultado['senha'];
            $id = $resultado['id'];
            $perfil_id = $resultado['id_perfil'];
        }

        if(!isset($email)) {
            header('Location: ../no_protected/index.php?erro_email=true');
        } else if(!isset($senha)) {
            header('Location: ../no_protected/index.php?erro_senha=true');
        } else {
            $_SESSION['id_usuario'] = $id;
            $_SESSION['perfil_id'] = $perfil_id;
            $_SESSION['autenticado'] = 'sim';
            header('Location: ../no_protected/home.php');
        }
    }
?>