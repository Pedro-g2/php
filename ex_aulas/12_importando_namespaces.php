<?php

	require "./12_import_namespace/lib1/lib1.php";
	require "./12_import_namespace/lib2/lib2.php";

	use B\Cliente as ClienteB;
	use A\Cliente as ClienteA;

	$c = new ClienteA();
	print_r($c);
	echo $c->__get('nome');

	$c = new ClienteB();
	print_r($c);
	echo $c->__get('nome');