<div class="titulo">Argumentos e Retorno</div>

<?php 
	function obterMensagem() {
		return 'Seja bem vindo(a)!';
	}
	$m = obterMensagem();
	echo $m;
	echo "<br>", obterMensagem();
	echo "<br>";
	var_dump(obterMensagem());

	function obterMensagemComNome($nome) {
		return "Bem vindo, {$nome}!";
	}
	echo  obterMensagemComNome(fabio);


	function soma($a, $b) {
		return $a + $b;
	}
	echo soma(4,5);
 ?>
