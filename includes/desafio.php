<div class="titulo">Desafio</div>

<?php
require_once('usuario.php');

$usuario = new Usuario ('Gustavo Mendonça', 21, 'gust_mend');
echo $usuario->apresentar();
unset($usuario);