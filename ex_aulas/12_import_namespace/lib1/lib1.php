<?php

    namespace A;
        class Cliente implements CadastroInterface{
            public $nome = "Pedro";

            public function __construct() {
                echo '<pre>';
                print_r(get_class_methods($this));
            }

            public function __get($attr) {
                return $this->$attr;
            }

            public function salvar() {
                echo "Salvar";
            }

            public function remover() {
                echo "Remover";
            }
        }

        interface CadastroInterface {
            public function salvar();
        }