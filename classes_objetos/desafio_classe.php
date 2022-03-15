<div class="titulo">Desafio Classe</div>

<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        return "Data: {$this-> dia}/{$this-> mes}/{$this-> ano}";
    }
}


$aniversario = new Data();
$aniversario->dia = 12;
$aniversario->mes = 12;
$aniversario->ano = 2012;
echo $aniversario->apresentar() . '<br>';

$casamento = new Data();
$casamento->dia = 5;
$casamento->mes = 6;
$casamento->ano = 2017;
echo $casamento->apresentar() . '<br>';