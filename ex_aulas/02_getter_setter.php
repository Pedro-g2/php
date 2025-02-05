<?php
    
    class Funcionario{
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        
        function setNome($nome){
            $this->nome = $nome;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function getNome(){
            return $this->nome;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function getnumFilhos(){
            return $this->numFilhos;
        }

        function resumirCadFuucn(){
            return "$this->nome possui $this->numFilhos filhos(s)";
        }

        function modificarNumFilhos($nFilhos){
            $this->numFilhos = $nFilhos;
        }
    }

    $f = new Funcionario();
    $f->setNome("Pedro André G. Gonçalves");
    $f->setTelefone("61 98745-3654");
    $f->setNumFilhos(3);

    echo "<pre>";
    print_r($f);
    echo "</pre>";

    $f->modificarNumFilhos(2);

    echo $f->resumirCadFuucn(). "<br>";

    echo $f->getNome() . "<br>";
    echo $f->getTelefone() . "<br>";
    echo $f->getnumFilhos() . "<br>";

?>