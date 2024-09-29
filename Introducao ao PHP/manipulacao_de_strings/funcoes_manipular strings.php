<?php

// (strtoupper) e (strtolower)Transforma as strings em maiusculas ou em minusculas.

echo strtoupper ('Convertem para maiusculas') . '<br>' . PHP_EOL;
echo strtolower ('CONVERTEM PARA MINUSCULOS') . '<br>' . PHP_EOL;
?>

<?php

//(substr)Retorna uma parte da string.

print substr("Americana", 1) . '<br>' . PHP_EOL;
print substr("Americana", 1, 5) . '<br>' . PHP_EOL;
print substr("Americana", 0, -1) . '<br>' . PHP_EOL;
print substr("Americana", -2) . '<br>' . PHP_EOL;

?>

<?php

//(strpad) Preencher uma string com outra string dentro de um tamanho específico.

$texto = "The Beatles";
print str_pad($texto, 20, "*", STR_PAD_LEFT) . "<br>\n";
print str_pad($texto, 20, "*", STR_PAD_BOTH) . "<br>\n";
print str_pad($texto, 20, "*") . "<br>\n";

?>

<?php

// (str_repeat) Repete a string certa quantidades de vezes.

$texto = ".oO0Oo.";

print str_repeat($texto, 5) . "\n";

?>

<?php

// (srtlen) Retorna o comprimento da string.

$texto = "O Rato roeu a roupa do rei de roma";

print 'O comprimento é ' . strlen($texto) . "\n";

?>

<?php

// (str_replace) Substitui uma string por outra dentro de um texto.

print str_replace('Rato', 'Leão', 'O Rato roeu a roupa do rei de roma');
?>
