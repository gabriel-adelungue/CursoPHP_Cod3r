<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo '<br>E morreu';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atrib){
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params){
        echo "Tentando executar o método '${metodo}'";
        echo ", com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); // __construct
$pessoa->apresentar(); //chamando o __toString
echo $pessoa, '<br>'; //chamando o __toString
$pessoa->nome = 'Reinaldo';

//chamando o método diretamente sem __call
$pessoa->apresentar(); 

$pessoa->nomeCompleto = 'Muito Legal!!!'; // __set
$pessoa->nomeCompleto = 'Muito Legal!!!'; // __get

// acessa o atributo diretamente sem __get
echo $pessoa->nome; 

// __call porque o método não existe no objeto
$pessoa->exec(1, 'teste', true, [1, 2, 3]); 

$pessoa = null; // __destruct