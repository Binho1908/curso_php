<div class="titulo">Função & Escopo</div>
<?php 

	function imprimirMensagens() {
		echo "Ola<br>";
		echo "Até a proxima<br>";
	}
	imprimirMensagens();
	imprimirMensagens();

	$variavel = 1;
	function trocaValor() {
		$variavel = 2;
		echo "Durante a função $variavel <br>";
	}

	echo "Antes: $variavel <br>";
	trocaValor();
	echo "Depois: $variavel <br>";

	function trocaValorDeVerdade () {
		global $variavel;
		$variavel = 3;
		echo "Durante a função: $variavel <br>";
	}

	echo "Antes: $variavel <br>";
	trocaValorDeVerdade();
	echo "Depois: $variavel <br>";

	var_dump(trocaValorDeVerdade());
?>