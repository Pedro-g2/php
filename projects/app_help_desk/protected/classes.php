
<?php

    class Conexao {
        private $host = 'localhost';
        private $usuario = 'root';
        private $senha = 'yes';
        private $baseDados = 'app_help_desk';
        private $link;

        function __construct() {
            $this->link = mysqli_connect($this->host, $this->usuario, $this->senha, $this->baseDados);
        }

        function getConexao() {
            return $this->link;
        }
    }

    class Usuario {
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $idPerfil;

        public function __construct($nome='NULL', $email='NULL', $senha='NULL', $idPerfil=null)
        {
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->idPerfil = $idPerfil;
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }
    }

    class Chamado {
        private $id;
        private $idUsuario;
        private $titulo;
        private $categoria;
        private $descricao;

        function __construct($id=null, $idUsuario=null, $titulo=null, $categoria=null, $descricao=null)
        {
            $this->titulo = $titulo;
            $this->categoria = $categoria;
            $this->descricao = $descricao;
            $this->idUsuario = $idUsuario;
        }

        function __get($nome) {
            return $this->$nome;
        }

        function __set($nome, $valor) {
            $this->$nome = $valor;
        }
    }

    class BancoDeDados {
        private $link;
        private $comandoSql;
        private $resultado;

        function __construct($comandoSql) {
            $conecta = new Conexao();
            $this->link = $conecta->getConexao('link');
            $this->comandoSql = $comandoSql;
            $this->resultado = mysqli_query($this->link, $this->comandoSql);
        }

        function consultar() {
            $dados = $this->resultado;
            $arrayDados = mysqli_fetch_assoc($dados);
            return $arrayDados;
        }

        function fecharConexao() {
            if($this->link) 
                mysqli_close($this->link);
        }

        function __destruct()
        {
            $this->fecharConexao();
        }
    }