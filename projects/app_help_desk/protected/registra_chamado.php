<?php

    require_once 'valida_acesso.php';
    require_once "conexao.php";
    require_once 'classes.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $chamado = new Chamado();
        (isset($_POST['titulo'])) ? $chamado->__set('titulo', $_POST['titulo']) : $chamado->__set('titulo', null);
        (isset($_POST['categoria'])) ? $chamado->__set('categoria', $_POST['categoria']) : $chamado->__set('categoria', null);
        (isset($_POST['descricao'])) ? $chamado->__set('descricao', $_POST['descricao']) : $chamado->__set('descricao', null);
        $chamado->__set('idUsuario', $_SESSION['id_usuario']);

        $select = "insert into chamados(titulo, categoria, descricao, id_usuario) values('" . $chamado->__get('titulo') . "', '" . $chamado->__get('categoria') . "', '" . $chamado->__get('descricao') ."', " . $chamado->__get('idUsuario') . ")";
        $result = mysqli_query($link, $select);
        mysqli_close($link);

        if(isset($result)) {
            header('Location: ../no_protected/abrir_chamado.php?sucesso=yes');
        }

    }

    