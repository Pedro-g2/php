<?php

	namespace A;
	class Cliente implements \B\CadastroInterface{
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

	namespace B;
	class Cliente implements CadastroInterface{
		public $nome = "André";

		public function __construct() {
			echo '<pre>';
			print_r(get_class_methods($this));
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function remover() {
			echo "Remover";
		}
	}

	interface CadastroInterface {
		public function remover();
	}


	$c = new \A\Cliente();
	print_r($c);
	echo $c->__get('nome');