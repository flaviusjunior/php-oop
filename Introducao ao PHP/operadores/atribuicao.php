<?php

$var = 100;
$var += 5; // Soma 5 em $var.
$var -= 5; // Subtrai 5 em $var.
$var *= 5; // Mutiplica $var por 5;
$var /= 5; // Divide $var por 5.

print $var;

// Decremento e Incremento.

$var = 100;

print $var++ .''; // retorna 100 e entrementa para 101.
print ++$var .''; // incrementa para 102 e retorna.
print $var-- .''; // retorna 102 e decrementa para 101.
print --$var .''; // decrementa para 100 e retorna.
?>