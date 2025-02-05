<?php
    
    class Funcionario{
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;
        
        function __set($name, $value){
            $this->$name = $value;
        }

        function __get($name){
            return isset($this->$name) ? $this->$name : null;
        }

        function resumirCadFuucn(){
            return "$this->nome possui $this->numFilhos filhos(s)";
        }

        function modificarNumFilhos($nFilhos){
            $this->numFilhos = $nFilhos;
        }
    }

    $f = new Funcionario();
    $f->__set("nome","Pedro André G. Gonçalves");
    $f->__set("telefone", "61 98745-3654");
    $f->__set("numFilhos", 3);

    echo "<pre>";
    print_r($f);
    echo "</pre>";

    $f->modificarNumFilhos(2);

    echo $f->resumirCadFuucn(). "<br>";

    echo $f->__get("nome") . "<br>";
    echo $f->__get("telefone") . "<br>";
    echo $f->__get("numFilhos") . "<br>";

?>