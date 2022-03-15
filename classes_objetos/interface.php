<div class="titulo">Interface</div>

<?php

interface Animal {
    function respirar();
}

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero{
    function latir() : string;
}

interface Felino {
    function correr();
}

class Cachorro implements Canino {
    function respirar() {
        return 'Irei usar oxigenio!';
    }

    function latir(): string {
        return 'au au';
    }

    function mamar(){
        return 'Irei usar leite';
    }

    function correr(){
        return 'correndo';
    }
}

$animal = new Cachorro();
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);

