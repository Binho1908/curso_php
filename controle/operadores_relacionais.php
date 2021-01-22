	<style>
p {
  margin-bottom: -10px;
}
hr {
	margin-top: 0px;
}
</style>


<div class="titulo">Operadores relacionais</div>

<?php 
	var_dump(1 == 1);
	echo "<br>";
	var_dump(1 > 7);
	echo "<br>";
	var_dump(1 >= 16);
	echo "<br>";
	var_dump(1 != 41);
	echo "<br>";
	var_dump(1 <= 21);
	echo "<br>";
	var_dump(1 < 11);
	echo "<br>";
	var_dump(1 <= 2);
	echo "<br>";

	echo "<p>Relacionais no If/Else</p><hr>";
	$idade= 85;
	if($idade < 18) {
		echo "Menor de idade = $idade anos<br>";
	}elseif($idade <= 65) {
		echo "Adulto = $idade anos";
	}else {
		echo "Terceira idade = $idade anos!";
	}
	echo "<p>SpaceShip</p><hr>";
	var_dump(500 <=> 3);
	var_dump(50 <=> 50);
	var_dump(5 <=> 50);

	echo "<p>Valores pode ser V ou F</p><hr>";
	var_dump(!!5);
	var_dump(!!0);
	var_dump(!!"");
	var_dump(!!" ");
 ?>