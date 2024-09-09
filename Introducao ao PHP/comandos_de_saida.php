<?php
echo 'a' . '<br>' . PHP_EOL;
echo 'b' . '<br>' . PHP_EOL;

//comando que imprime uma string no console.

print 'abc';
?>
<?php
//"var_dump" imprime conteudo de forma detalhada, muito comuns para realizar debug.
$vetor = array ('Palio', 'Gol', 'Fiesta', 'Corsa');
var_dump($vetor);

//"print_r" imprime conteudo de forma detalhada, mas deixa o conteudo mais legivel.
$vetor = array ('Palio', 'Gol', 'Fiesta', 'Corsa');
print_r($vetor);

//quebras de linhas no código.
foreach ($vetor as $carro) {
    echo $carro . "<br>";
}
?>
