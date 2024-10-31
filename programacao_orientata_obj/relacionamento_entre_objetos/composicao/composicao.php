<?php

require_once 'classes_produto.php';
require_once 'classes_caracteristicas.php';

//criaçao dos objetos
$produto_2 = new Produto('Chocolate', 10, 7);

//composição
$produto_2->addCaracteristitas('Cor:', 'Branco');
$produto_2->addCaracteristitas('Peso:', '2kg');
$produto_2->addCaracteristitas('Potencia:', '20 Watts');

print "Produto: " . $produto_2->getDescricao() . "<br>\n";
foreach ($produto_2->getCaracteristicas() as $c) {
    print 'Caracteristicas: ' .$c->getNome() . ' - ' . $c->getValor() . "<br>\n";
}

?>
