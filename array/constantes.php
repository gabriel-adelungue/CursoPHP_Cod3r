<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('Laranja', 'Abacaxi');
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMw"] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];