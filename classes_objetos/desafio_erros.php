<div class="titulo">Desafio Erros</div>

<?php

interface Template {
    function metodo1();
    function metodo2($parametro);
    function metodo3();
}

abstract class ClasseAbstrata implements Template {
    public function metodo3() {
        echo "Estou funcionando <br>";
    }

    public function metodo1(){
        
    }
    
}

class Classe extends ClasseAbstrata {
    function __construct($parametro){
        
    }


    public function metodo2($parametro){
        
    }
}

$exemplo = new Classe('...');
$exemplo-> metodo3();