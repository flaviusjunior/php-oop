<?php

$produto = new StdClass;
$produto-> descricao = 'Chocolate Amargo';
$produto-> estoque = '100';
$produto-> preco = '7';

$vetor1 =(array) $produto;
print $vetor1['descricao'] . "\n";

$vetor2 = ['descricao' => 'café', 'estoque' => '100', 'preco' => '7'];
$produto2 = (object) $vetor2;
print $produto2-> descricao . "\n";

?>
