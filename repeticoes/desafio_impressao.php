<div class="titulo">Desafio Impressão</div>

<!-- 
Enunciado:
- Imprima apenas os valores do array que contem indice par
- Desafio adicional: Resolver com for e foreach
- Valores esperados: AAA, CCC, EEE 
-->

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for ($i=0; $i < count($array); $i++) { 
    if ($i % 2 === 0) {
        echo "{$array[$i]} ";
    }
}

echo "<br>";

echo "<hr>";

foreach ($array as $indice => $value) {
    if ($indice % 2 === 0) {
        echo "$value ";
    }
}




