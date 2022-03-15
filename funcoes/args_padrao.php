<div class="titulo">Argumentos Padrão</div>

<?php

function Saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem vindo, $nome $sobrenome!<br>";
}
echo Saudacao();
echo Saudacao(NULL);
echo Saudacao(NULL, NULL);
echo Saudacao(NULL, NULL);
echo Saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Água'){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// anotarPedido2('Hamburguer');
anotarPedido('Refrigerante', 'Pizza');