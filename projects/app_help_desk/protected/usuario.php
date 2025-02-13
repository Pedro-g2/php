<?php

    class Usuario {
        private $id;
        private $nome;
        private $email;
        private $senha;
        private $perfil_id;

        public function __construct($nome, $email, $senha, $perfil_id)
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
    }