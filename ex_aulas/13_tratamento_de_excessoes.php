<?php

	try {
		echo '<h3> ****Try****</h3>';

		// $sql = 'Select * from clientes';
		// mysqli_query($sql);

		// if(!file_exists('require_arquivo_a.php')) {
		// 	throw new Exception('Exception intencional <br>', );
		// }

		if(!file_exists('require_arquivo_a.php')) {
			throw new Error('Exception intencional <br>', );
		}

	} catch(Error $e) {
		echo '<h3> ****Catch****</h3> <br>';
		echo 'ERRO***' . $e . '***ERRO';
	} catch(Exception $e){
		echo '<h3> ****Catch****</h3> <br>';
		echo 'Exception***' . $e . '***Exception';
	} finally {
		echo '<h3> ****Finally****</h3>';
	}