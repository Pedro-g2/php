<?php

    require_once 'valida_acesso.php';
    require_once 'classes.php';

    if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $bd = new Conexao();
        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];
        $idUsuario = $_SESSION['id_usuario'];

        $select = "insert into chamados(titulo, categoria, descricao, id_usuario) values('$titulo', '$categoria', '$descricao', $idUsuario)";
        
        try {
            $result = mysqli_query($bd->getConexao(), $select);
        } catch (Exception $e) {
            gravaErro('/.log_erro.txt', $e);
            echo 'Erro no banco de dados.';
        }

        if(isset($result)) {
            header('Location: ../no_protected/abrir_chamado.php?sucesso=yes');
        }

    }

    