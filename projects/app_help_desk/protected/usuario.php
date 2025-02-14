<?php

    class Usuario {
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $perfil_id;

        public function __construct($nome='NULL', $email='NULL', $senha='NULL', $perfil_id=-1)
        {
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->perfil_id = $perfil_id;
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }

        // INSERE UM USUÁRIO NO BANCO DE DADOS
        public function save_user() {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                require_once "../protected/conexao.php";
        
                if(isset($_POST['nome']))
                    $this->__set('nome', $_POST['nome']);
                if(isset($_POST['email']))
                    $this->__set('email', $_POST['email']);
                if(isset($_POST['senha']))
                    $this->__set('senha', $_POST['senha']);
        
                $insert = "insert into usuarios(nome, email, senha, id_perfil) 
                        values('" . $this->__get('nome') . "', '" . $this->__get('email') . 
                        "', '" . $this->__get('senha') . "', " . 2 . ")";
                
                mysqli_query($link, $insert);
                mysqli_close($link);
            } else {
                echo 'Erro';
            }
        }

        // CRIA UM USUÁRIO A PARTIR DO BANCO DE DADOS
        public function search_user() {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                require_once "../protected/conexao.php";

                $select = "select * from usuarios where id = " . $id;
                $resultado = mysqli_query($link, $select);
                $registro = mysqli_fetch_assoc($resultado);
                mysqli_close($link);

                $this->__set('id', $registro['id']);
                $this->__set('nome', $registro['nome']);
                $this->__set('email', $registro['email']);
                $this->__set('senha', $registro['senha']);
                $this->__set('perfil_id', $registro['perfil_id']);

            } else {
                echo "Erro";
            }

        }
    }