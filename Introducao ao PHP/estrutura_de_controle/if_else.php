<?php

$a = 1;

if ($a == 5) {
    echo "É igual!";
}
else{
    echo "Difefrente!";
}

$a = "conteudo";

if ($a) {
    echo '$a tem conteudo';
}
if ($b) {
    echo '$a Não tem conteudo';
}
?>

<?php

$salario = 1020;
$tempo_servico = 12;
$tem_reclamacoes = false;

if ($salario > 1000) {
    if ($tempo_servico >= 12) {
        if ($tem_reclamacoes != true) {
            echo "Parabéns vc foi promovido" . PHP_EOL;
        }
    }
}
if (($salario > 1000) and ($tempo_servico >= 12) and ($tem_reclamacoes != true))
    echo "Parabéns vc foi promovido" . PHP_EOL;
?>

<?php
$valor_venda = 99;
// if ($valor_venda > 100) {
//     $resultado = 'MUito caro';
//     echo $resultado;
// }
// else {
//     $resultado = 'Pode comprar!';
//     echo $resultado;
// }

$resultado = ($valor_venda > 100) ? 'Muito caro' : 'Pode comprar';
echo $resultado;
?>


