<?php

    session_start();
    if(!isset($_SESSION['autenticado']) && $_SESSION['autenticado'] != 'sim') {
        header('Location: ../no_protected/index.php?erro=nao_logado');
    }