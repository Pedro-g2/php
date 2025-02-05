<?php
    
    class Funcionario{
        public $nome = "José";
        public $telefone = "11 11111-1111";
        public $numFilhos = 3;

        function resumirCadFuucn(){
            return "$this->nome possui $this->numFilhos filhos(s)";
        }

        function modificarNumFilhos(int $nFilhos){
            $this->numFilhos = $nFilhos;
        }
    }

    $f = new Funcionario();

    $f->modificarNumFilhos(8);

    echo "<pre>";
    print_r($f);
    echo "</pre>";

    echo $f->resumirCadFuucn();

?>