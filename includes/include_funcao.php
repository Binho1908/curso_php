<div class="titulo">Include Função</div>

<?php 
	echo "Carregando: include_funcao<br>";

	function carregarArquivo() {
		include('arq.php');

		echo $variavel . '<br>';
		echo soma(2,5) . '!<br>';
	}
	echo "Novamente no arquivo include_funcao<br>";
	// echo soma(1,8) . '!<br>';
	carregarArquivo();

	echo "Variável = ' {$variavel}'.";
	// var_dump($variavel);
	echo '<br>' . soma(3, 8);
 ?>