<?php

$a = 2;
$b = 4;

print $a+3*4+5*$b .''; // resultado 34.
print ($a + 3)* 4 + (5 * $b) .''; //resultado 40.

// O php reconhece automaticamente a conversão de tipos em operações.

$a = '10';
echo $a + 5;
?>
