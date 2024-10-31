<?php

class Produto {

    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;

    public function __construct($descricao, $estoque, $preco) {
        $this -> descricao = $descricao;
        $this -> estoque = $estoque;
        $this -> preco = $preco;
    }

    public function addCaracteristitas($nome, $valor) {
        $this->caracteristicas[] = new Caracteristicas($nome, $valor);
    }
    public function getCaracteristicas() {
        return $this->caracteristicas;
    }
    public function getDescricao() {
        return $this->descricao;
    }

    public function setFabricante(Fabricante $fabricante) {
        $this->fabricante = $fabricante;
    }

    public function getFabricante() {
        return $this->fabricante;
    }
}
?>
