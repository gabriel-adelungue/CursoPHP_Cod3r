<div class="titulo">Variáveis Variáveis</div>

<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a {$$a} ${$a}";

echo '<br>';
$epa = 'opa';
$opa = 'vish';
$vish = 'eita!!!!';
echo "$epa {$$epa} {$$$epa}";