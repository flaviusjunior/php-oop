<?php

class Cesta {

    private $time;
    private $itens;

    public function __construct() {
        $this->time = date('y-m-d H:i:s');
        $this->itens = array();
    }
    public function addItem(Produto $produto) {
        $this->itens[] = $produto;
    }
    public function getItens() {
        return $this->itens;
    }
    public function getTime() {
        return $this->time;
    }
}
?>