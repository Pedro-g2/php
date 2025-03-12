
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

    class BancoDeDados {
        private $link;

        function __construct() {
            $conecta = new Conexao();
            $this->link = $conecta->getConexao('link');
        }

        function inserir($comandoSql) {
            return mysqli_query($this->link, $comandoSql);
        }

        function consultar_assoc($comandoSql) {
            $result = mysqli_query($this->link, $comandoSql);
            return mysqli_fetch_assoc($result);
        }

        function consultar($comandoSql) {
            return mysqli_query($this->link, $comandoSql);
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

    function gravaErro($caminho, $erro) {
        $arquivo = fopen($caminho, 'a+');
        if($arquivo) {
            fwrite($arquivo, $erro);
        }
    }