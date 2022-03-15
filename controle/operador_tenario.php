<div class="titulo">Operador Tenario</div>

<?php

$idade = 70;
$status;

if ($idade >=18) {
    $status = 'Maior de idade';
} else{
    $status = 'Menor de idade';
}

echo "$status<br>";

$status = ($idade >= 18) ? 'Maior de Idade' : 'Menor de idade';
echo "$status<br>";

