<?php

require_once './associacao_classes_produto.php';
require_once './associacao_classes_fabricante.php';

//criaçao dos objetos
$produto_1 = new Produto('Chocolate', 10, 7);
$fabricante_1 = new Fabricante('Chocolate Factory', 'Willy', '12345');

//associação
$produto_1->setFabricante($fabricante_1);

print "A descrição: " . $produto_1->getDescricao() . "\n";
print "O fabricante: " . $produto_1->getFabricante()->getNome() . "\n";

?>
