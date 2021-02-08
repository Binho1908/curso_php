
<?php 
	echo 'Caregando: include_arquivos<br>';

	$variavel = 'Estou definida';

	if(!function_exists(soma)) {
	function soma($a,$b) {
		return $a + $b;
	}
	}	
 ?>