<?php

//acessando array e alterando.

$frutas = array();
$frutas['empresa'] = 'Avante';
$frutas['peso'] = '73';
$frutas['nome'] = 'Dado';

// alterações.

$frutas['empresa'] = 'Pra_frente';
$frutas['peso'] += 2;
$frutas['nome'] = 'Ferreira';

//debug

print_r($frutas);

// -----------------------------

//alterando só um indice

$comida = array();

$comida[] = 'Pizza';
$comida[] = 'Lazanha';
$comida[] = 'Macarrão';

//alteraçães.

$comida[1] = 'Pastel';

print_r($comida);
?>
