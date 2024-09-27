<?php

$remove_acento = function ($str) {
    $a = array('À', 'Á', 'Ã', 'Â', 'A', 'Ç', 'È', 'É', 'Ê',
               'Í', 'Ì', 'Ò',' Ó', 'Ô', 'Õ', 'Ù', 'Ú', 'à',
               'á', 'ã', 'ã', 'ç', 'è', 'é', 'ê', 'í', 'î',
               'ò', 'ó', 'ô', 'ô', 'ú', 'ù', 'û', 'u');

    $b = array('A', 'A', 'A', 'A', 'A','̣̣̣Ç', 'E', 'E', 'E',
               'I', 'I', 'O',' O', 'O', 'O', 'U', 'U', 'a',
               'a', 'a', 'a', 'c', 'e', 'e', 'e', 'i', 'i',
               'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u');
    return str_replace($a, $b, $str);
};
print $remove_acento('José da Conceição');
print '<br>' . PHP_EOL;

$palavras = array();
$palavras[] = 'José da Conceição';
$palavras[] = 'Jéferson Araújo';
$palavras[] = 'Félix Júnior';
$palavras[] = 'Ênio Muller';
$palavras[] = 'Ângelo Ônio';

$r = array_map( $remove_acento, $palavras );
print_r($r);
?>