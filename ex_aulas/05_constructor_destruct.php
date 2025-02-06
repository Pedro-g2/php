<?php
    
    class Pessoa {
        public $nome = null;

        function __construct($nome) {
            echo 'Obejto iniciado.' . "<br>";
            $this->nome = $nome;
        }

        function __destruct() {
            echo 'Objeto removido' . "<br>";
        }

        public function getNome() {
            return $this->nome;
        }
    }

    $pessoa = new Pessoa("Pedro André G. Gonçalves");

    echo 'Nome: ' . $pessoa->getNome() . "<br>";
    // unset($pessoa);

    echo 'Nome: ' . $pessoa->getNome() . "<br>";

?>