<?php

// Array junto com o foreacht.

$frutas = array();
$frutas['cor'] = 'vermelha';
$frutas['sabor'] = 'dace';
$frutas['formato'] = 'redondo';
$frutas['nome'] = 'maçã';

foreach ($frutas as $chave => $frutas) {
    echo "$chave => $frutas \n";
}
?>
