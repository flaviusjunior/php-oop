<?php

class Produto3 {

    private $descricao;
    private $estoque;
    private $preco;

    public function __construct($descricao, $estoque, $preco){
        $this-> descricao = $descricao;
        $this-> estoque = $estoque;
        $this-> preco = $preco;

        print "CONSTRUIDO: Objeto {$descricao}, estoque {$estoque}, preço {$preco}\n";
    }
    public function __destruct() {
        print "DESTRUIDO: Objeto {$this-> descricao}, estoque {$this-> estoque}, preço {$this-> preco}\n";
    }
}
$p1 = new Produto3('Chocolate', 10, 5);
unset($p1);
$p2 = new Produto3('Leite', 100, 7);
unset($p2);

?>
