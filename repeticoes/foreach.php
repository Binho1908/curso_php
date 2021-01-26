<div class="titulo">foreach</div>

<?php 
	$array = [1 =>'Domingo', 'Segundao', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

	foreach ($array as $valor) {
		echo "$valor <br>";
	}

	foreach ($array as $indice => $value) {
		echo "$indice => $valor <br>";
	}

	$matrix = [
		['a', 'b', 'c', 'd', 'e'],
		['b', 'c', 'd']
	];

	foreach ($matrix as $linha) {
		// echo "$linha <br>";
		foreach ($linha as $letra) {
			echo "$letra";
		}
		echo "<br>";
	}

	$numeros = [1, 2, 3, 4, 5];
	foreach ($numeros as &$dobrar) {
		$dobrar += 2;
		echo "$dobrar <br>";
	}
	print_r($numeros);
 ?>