<?php

    include "conexao.php";
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = 0;
        $password = 0;

        if(isset($_POST['email'])) 
            $login = $_POST['email'];
        if(isset($_POST['password']))
            $password = $_POST['password'];

        $select_email = 'select email from usuarios where email = '."'$login'";
        $result_email = mysqli_query($link, $select_email);
        $array_email = mysqli_fetch_assoc($result_email);
        ($array_email) ? $login_bd = $array_email['email'] : $login_bd = null;

        $select_senha = 'select senha from usuarios where senha = '."'$password'";
        $result_senha = mysqli_query($link, $select_senha);
        $array_senha = mysqli_fetch_assoc($result_senha);
        ($array_senha) ? $password_bd = $array_senha['senha'] : $password_bd = null;

        mysqli_close($link);

        if(!$login_bd) {
            header('Location: ../no_protected/index.php?erro_email=true');
        } else if(!$password_bd) {
            header('Location: ../no_protected/index.php?erro_senha=true');
        } else {
            $_SESSION['id_usuario'] = 
            header('Location: ../no_protected/home.php');
        }
            
    }
?>