<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
	<input type="text" name="param">
	<select name="conversao" id="conversao">
		<option value="km-milha">Km > Milha</option>
		<option value="milha-km">Milha > Km</option>
		<option value="metro-km">Metro > Km</option>
		<option value="km-metro">Km > Metro</option>
		<option value="c-f">Celsius > Fahrenheit</option>
		<option value="f-c">Fahrenheit > Celsius</option>
	</select>
	<button>Calcular</button>
</form>

<style>
	form > * {
		font-size: 1.8rem;
	}
</style>

<?php
	$a = $_POST['conversao']; 
	$b = $_POST['param'];
switch ($a) {
	case 'km-milha':
		echo $b*0.621371. "milha(s)";
		break;
	case 'milha-km':
		echo $b*1.60934. "Kilometro(s)";
		break;
	case 'metro-km':
		echo $b/1000.00. "Kilometro(s)";
		break;
	case 'km-metro':
		echo $b*1000.00. "Metro(s)";
		break;
	case 'c-f':
		echo ($b*1.8)+32 ." Fahrenheit";
		break;
	case 'f-c':
		echo ($b-32)/1.8 ." Celsius";
		break;

/*const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia Km(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    case 'cel-fah':
        $conversao = $param * FATOR_CEL_FAH + 32;
        $mensagem = "{$param}° Celsius = {$conversao}° Fahrenheit";
        break;
    case 'fah-cel':
        $conversao = ($param - 32) / FATOR_CEL_FAH;
        $mensagem = "{$param}° Fahrenheit = {$conversao}° Celsius";
        break;
    default:
        $mensagem = "Nenhum valor calculado!";
}
*/
}
 ?>