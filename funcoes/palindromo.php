<div class="titulo">Desafio Palindromo</div>

<?php

function PalindromoFor($palavra) {
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++) {
        if($palavra[$i] !== $palavra[$ultimoIndice - $i]) {
            return 'Não';
        }
    }
    return 'Sim';
}

echo PalindromoFor('arara') . ' ';
echo PalindromoFor('ana') . ' ';
echo PalindromoFor('abccba') . ' ';
echo PalindromoFor('bola') . ' ';
echo '<br>';


function Palindromo($palavra) {
    if(strrev($palavra) === $palavra){
        return 1;
    }else {
        return 0;
    }
}

$plvr = "anilina";
if (Palindromo(strtolower($plvr)) || Palindromo(strtoupper($plvr))) {
    echo "É palindromo";
} else {
    echo "Não é palindromo";
}