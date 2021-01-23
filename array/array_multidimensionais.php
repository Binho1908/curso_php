<div class="titulo">Array Multidimensionais</div>
<?php 
$dados = [
	[
		"nome" => "Roberto",
		"idade" => 26,
		"naturalidade" => "São Paulo"
	],
	[
		"nome" => "Maria",
		"idade" => 25,
		"naturalidade" => "Bahia"
	],
];
print_r($dados);

echo "<br>" . $idade[0]['idade'];
echo "<br>" . $idade[1]['idade'];

$dados[] = [
	"nome" => "Florida",
	"idade" => 30,
	"naturalidade" => "Cidade do Mexico"
];

echo "<br>";
print_r($dados);
echo "<br>" . $dados[2]['idade'];

$dados[3]['vizinho'] = "Chaves";
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo "<br>";
print_r($dados);
