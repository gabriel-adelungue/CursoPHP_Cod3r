<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metros > Km</option>
        <option value="km-metro">Km > Metros</option>
        <option value="cel-farh">Celsius > Farheint</option>
        <option value="farh-cel">Farheint > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;

    }
</style>

<?php

const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FARH = 1.8;

$param = $_POST['param'] ?? 0;


switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param Km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia Km(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param Metro(s) = $distancia Km(s)";
        break;            
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    case 'cel-farh':
        $temperatura = $param * FATOR_CEL_FARH + 32;
        $mensagem = "{$param}° C = {$temperatura}° F";
        break;
    case 'farh-cel':
        $temperatura = ($param - 32) / FATOR_CEL_FARH ;
        $mensagem = "{$param}° F = {$temperatura}° C";
        break;

    default:
        $mensagem = "Nenhum valor calculado!";
        break;
}

echo "<p>$mensagem</p>";