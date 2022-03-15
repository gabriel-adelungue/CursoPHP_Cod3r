<div class="titulo">Desafio For</div>

<!--
#
##
###
####
#####
1) Pode usar incremento
2) Não pode usar incremento
-->

<?php

$impressao = '';

for ($cont=0; $cont < 5; $cont++) { 
    $impressao .= '#';
    echo "$impressao <br>";
}

echo "<hr>";

for ($impressao2='#'; $impressao2 !== '######'; $impressao2 .= '#') { 
    echo "$impressao2 <br>";
}