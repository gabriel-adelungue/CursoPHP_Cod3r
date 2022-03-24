<div class="titulo">Inserir Registro #01</div>

<?php

require_once('conexao.php');

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES (
    'Astolpho',
    '1942-07-03',
    'astolpinho@email.com.br',
    'https://astolpho.coder.sites.com.br',
    9,
    7700.50
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso ";
}else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();