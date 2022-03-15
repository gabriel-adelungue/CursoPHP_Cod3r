<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero){
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) { 
        $soma += $i;
    }
    return $soma;
}

echo somaUmAte(150) . '<br>';


function somaRecursividadeUmAte($numero){
    // Condiçao de Parada!!!
    if($numero === 1){
        return 1;
    }else {
        return $numero + somaRecursividadeUmAte($numero - 1);
    }
    
}

echo somaRecursividadeUmAte(150) . '<br>';


function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo somaRecursivaEconomica(150) . '<br>';