<div class="titulo">Laço for</div>

<?php 
	for ($cont=0; $cont <= 5 ; $cont++) { 
		echo "$cont <br>";
	}

	echo "<hr>";

	for (;$cont <= 10;$cont++) { 
		echo "$cont <br>";
	}
	echo "<hr>";

	for (; $cont <= 15; ) { 
		echo "$cont <br>";
		$cont++;
	}
	$array = [1 =>'Domingo', 'Segundao', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

	echo "<hr>";

	print_r($array);
	for ($i = 1; $i < count($array); $i++) {
		echo "{$array[$i]}<br>"; 
	}

	$matrix = [
		['a', 'b', 'c', 'd', 'e'],
		['b', 'c', 'd']
	];
	echo "<br>";

	for($i = 0; $i < count($matrix); $i++) {
		for($j = 0; $j < count($matrix[$i]); $j++) {
			echo "{$matrix[$i][$j]}";
		}
		echo "<br>";
	}
	
 ?>