<div class="titulo">Classe</div>

<?php 

class date {
    // atributos
    public $dia = '01';
    public $mes = '01';
    public $ano = '1970';

    public function apresentar() {
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}   

// $c1-> nome = 'Ana silva';
// echo $c1-> nome, '<br>';
$c1 = new date();
echo $c1 -> apresentar(), '<br>';
$c1-> dia = 02;
$c1-> mes = 01;
$c1-> ano = 1970;
echo $c1 -> apresentar();

// $c2 = new Cliente();
// $c2-> nome = 'Gabriel';
// $c2-> idade = 43;

// echo $c1 -> apresentar();
// echo $c2 -> apresentar();
