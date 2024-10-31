<?php

class ContaPoupanca extends Conta{

    function retirar($quantia) {
        if ($this->saldo >= $quantia) {
            $this->saldo -= $quantia;
        }
        else {
            return false; // entrada não permitida.
        }
        return true; // retirada permitida.
    }
}
?>
