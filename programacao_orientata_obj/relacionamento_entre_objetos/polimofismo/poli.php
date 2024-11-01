<?php

require_once 'relacionamento_entre_objetos/heranca/conta.php';
require_once 'relacionamento_entre_objetos/heranca/conta_poupanca.php';
require_once 'relacionamento_entre_objetos/heranca/conta_corrente.php';

//criação de objetos.
$contas = [];

$contas[] = new ContaCorrente(6677, "CC.1234.56", 100, 500);
$contas[] = new ContaPoupanca(6678, "CP.1234.57", 100);

//Percorre as contas.
foreach($contas as $key => $conta) {
    print "Conta: {$conta->getInfo()} \n";
    print "Saldo Atual: {$conta->getSaldo()} \n";
    $conta->depositar(200);
    print "Deposito de 200 \n";
    print "Saldo Atual: {$conta->getSaldo()} \n";

    if ($conta->retirar(700)) {
        print "Retirada de: 700 \n";
    }
    else {
        print "Retirada de: 700 (Não permitida)\n";
    }
    print "Saldo Atual: {$conta->getSaldo()}\n";
}
?>
