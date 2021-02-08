<div class="titulo">Include VS Require</div>

<?php 
	ini_set('display_errors', 1);

	echo "Usando include com arquivo inexistente...<br>";
	include('arquivo_inxistente.php');

	echo "Usando require com arquivo inexistente...<br>";
	require('arquivo_inxistente.php');

	echo "Não achou mesmo...<br>";
 ?>