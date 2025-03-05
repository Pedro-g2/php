<?php

require_once "conexao.php";

    class Chamado {
        private $id;
        private $id_usuario;
        private $titulo;
        private $categoria;
        private $descricao;

        function __construct($id=null, $id_usuario=null, $titulo=null, $categoria=null, $descricao=null)
        {
            $this->titulo = $titulo;
            $this->categoria = $categoria;
            $this->descricao = $descricao;
            $this->id_usuario = -1;
        }

        function __get($nome) {
            return $this->$nome;
        }

        function __set($nome, $valor) {
            $this->$nome = $valor;
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $chamado = new Chamado();
        (isset($_POST['titulo'])) ? $chamado->__set('titulo', $_POST['titulo']) : $chamado->__set('titulo', null);
        (isset($_POST['categoria'])) ? $chamado->__set('categoria', $_POST['categoria']) : $chamado->__set('categoria', null);
        (isset($_POST['descricao'])) ? $chamado->__set('descricao', $_POST['descricao']) : $chamado->__set('descricao', null);

        $select = "insert into chamados(titulo, categoria, descricao, id_usuario) values('" . $chamado->__get('titulo') . "', '" . $chamado->__get('categoria') . "', '" . $chamado->__get('descricao') ."', " . $chamado->__get('id_usuario') . ")";
        $result = mysqli_query($link, $select);
        mysqli_close($link);

        if(isset($result)) {
            header('Location: ../no_protected/abrir_chamado.php?sucesso=yes');
        }

    }

    