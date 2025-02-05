<?php
    class Veiculo {
        public $placa = 'None';
        public $cor  = 'None';

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function acelerar() {
            echo 'Acelerar';
        }
    }
    class Carro extends Veiculo{
        public $teto_solar = 'true';

        function abrirTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição do volante';
        }
    }

    class Moto extends Veiculo{
        public $tcontraPesoGuidao = 'true';

        function empinar() {
            echo 'Abrir teto solar';
        }
    }

    $carro = new Carro('784DR4T', 'Azul Mrinho');
    $moto = new Moto( '45G6T8Y', 'Verde');

    echo "<pre>";
    print_r($carro);
    echo "<pre>";

    echo "<pre>";
    print_r($moto);
    echo "<pre>";

?>