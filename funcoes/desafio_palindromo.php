<div class="titulo">Desafio Palindromo</div>

<?php  
	

	$oi = "Natan";
	$tchau = strrev($oi);
	if (strtolower($oi) == strtolower($tchau)) {
		echo "$oi É um Palidromo";
	} else {
		echo "$oi Não é um Palindromo";
	}

