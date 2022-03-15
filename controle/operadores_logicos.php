<div class="titulo">Operadores Logicos</div>

<?php
echo "<p class='divisao'>Negação Lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!!true); // not

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && true);
echo '<br>';
var_dump(false && false);
echo '<br><br>';

var_dump(true and true);
echo '<br>';
var_dump(true and false);
echo '<br>';
var_dump(false and true);
echo '<br>';
var_dump(false and false);
echo '<br>';

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
echo '<br>';
var_dump(true || false);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);
echo '<br><br>';

var_dump(true OR true);
echo '<br>';
var_dump(true OR false);
echo '<br>';
var_dump(false OR true);
echo '<br>';
var_dump(false OR false);

echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
var_dump(true XOR true);
echo '<br>';
var_dump(true XOR false);
echo '<br>';
var_dump(false XOR true);
echo '<br>';
var_dump(false XOR false);
echo '<br><br>';

var_dump(true != true);
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';
echo '<br>';

$pagouPrevidencia = true;
$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $criterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";


if ($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} else if($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco...';
}

