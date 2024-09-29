<?php

$cores = array('Vermenho' => 'FF0000', 'Azul' => '0000FF', 'Verde' => '00FF00');
print_r($cores);

// Outra forma de criar arrays associativos é simplismente adcionando valores

$pessoa = array();

$pessoa['nome'] = 'Maria';
$pessoa['rua'] = 'De ouro';
$pessoa['barrio'] = 'Dos santos';
$pessoa['cidade'] = 'Celestial';

// Para acessar uma array basta indicar sua chave entre colchetes.

echo $cores['Vermenho']. PHP_EOL;
echo $cores['Verde']. PHP_EOL;
echo $cores['Azul']. PHP_EOL;

echo $pessoa['nome']. PHP_EOL;
echo $pessoa['rua']. PHP_EOL;
echo $pessoa['barrio']. PHP_EOL;
echo $pessoa['cidade']. PHP_EOL;

?>
