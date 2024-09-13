<?php

if ($a = 5);
    echo "Essa atribui 5 a variavel $a";

$a = 1234;
$b = '1234';

if ($a == $b){
    echo '$a e $b são iguais';
}
elseif ($a != $b){
    echo '$a e $b são diferentes';
}
?>

<?php
// Comparando os tipos de dados da variavel.

$c = 123;
$d = '123';

if ($c === $d){
    echo '$c e $d são iguais e do mesmo tipo';
}
elseif ($c !== $d){
    echo '$c e $d são de tipos diferentes';
}
?>

<?php

$e = 0;

if ($e == FALSE){
    echo '$e é falso';
}
elseif ($e == TRUE){
    echo '$e é verdadeiro';
}

// Aqui testará se 0 é falso e do tipo boolean.

if ($e === FALSE) {
    echo '$e é FALSE e do tipo boolean';
}

// Aqui testa se $e é iqual a zero e do mesmo tipo boolean.
if ($e === 0) {
    echo '$e é ZERO mesmo';
}
?>
