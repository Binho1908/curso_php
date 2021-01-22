<div class="titulo">Desafio PI</div>
<?php 
	echo pi();
	
	$pi = pi();
	$pi = 3.14;
	pi() === 3.14;

	if ($pi == pi()){
		echo "são iguais";
	}else {
		echo "são diferentes";
	}

	//resposta
	echo "<br>". ($pi - pi());

	if ($pi - pi() <= 0.01) {
		echo "São praticamente iguais";
	}else {
		echo "São diferentes";
	}
 ?>