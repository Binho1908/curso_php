<div class="titulo">Tipo String</div>

<?php 
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu tambem");
echo '<br>';

// concatenação
echo "Nós também" . ' somos';
echo '<br>', "Também aceito", "virgula";

echo '<br>';
echo "'Teste' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\"". "\\"; 

print("<br>Também existe a função print");
print"<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtOupper('maximizando');
echo '<br>' . strtolower('MINIMIZANDO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7,6);
echo '<br>' . srt_replace('isso', 'aquilo', 'Trocar isso');

 ?>