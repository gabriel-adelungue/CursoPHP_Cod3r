<div class="titulo">Escrever Arquivos</div>

<?php

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Valor inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, 'Novo conteúdo');
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionados em um segundo momento");
fclose($arquivo);

ini_set('display-errors', 1);
$arquivo = fopen('teste.txt', 'x');
fwrite($arquivo, "Arquivo novo!!!");
fclose($arquivo);