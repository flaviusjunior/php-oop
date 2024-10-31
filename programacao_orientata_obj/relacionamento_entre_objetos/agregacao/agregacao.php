<?php

require_once 'relacionamento_entre_objetos/composicao/classes_produto.php';
require_once 'agregacao_cesta.php';

//criaçao da Cesta.
$cesta_1 = new Cesta;

//agregação dos produtos
$cesta_1->addItem($produto_1 = new Produto('Chocolate', 10, 5));
$cesta_1->addItem($produto_2 = new Produto('Café', 100, 7));
$cesta_1->addItem($produto_3 = new Produto('Mostarda', 50, 3));

foreach ($cesta_1->getItens() as $item) {
    print 'item: ' .$item->getDescricao() . "\n";
}

?>
