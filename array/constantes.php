<div class="titulo">constantes array</div>

<?php 
const FRUTAS = array('Laranja', 'Abacaxi');
//FRUTAS[0] = 'BANANA'; //NAO SE PODE MUDAR UMA CONSTANTE NO PHP
//FRUTAS[] = 'BANANA'; //NAO SE PODE MUDAR UMA CONSTANTE NO PHP
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS ["BMW"] = '3251';
echo "<br>" . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[0] = "Rio de Janeiro";
echo '<br>' . CIDADES[1];
 ?>