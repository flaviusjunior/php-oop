<?php
//tipos de variaveis.
$nome = "João";
$sobrenome = "Santos";

echo "$sobrenome, $nome \n";

// ou.

$codigo_cliente;
$codigoCliente;

// variavel variante.
$variavel = 'nome';

$$variavel = 'Maria';

echo "$nome \n";

//uma variavele atribuida a outra, mas sem alteração após a atribuição.

$a = 5;
$b = $a;
$b = 10;

echo "$a\n"; //resultado 5.
echo "$b\n"; //resultado 10.$a = 5;

// com alterações pelo "&".
$a = 5;
$b = &$a; //aqui esta a alteração.
$b = 10;

echo "\n$a\n"; //resultado 10.
echo "$b\n"; //resultado 10.

// já objetos são sempre copiados por referencia.

$a = new stdClass; // o objato sendo criado.
$a->nome = "Maria"; //definiu o atributo.
$b = $a; // cria uma replica.
$b->nome = "joana"; //definiu atributo novamente.
print "\n$a->nome\n"; // resultado "Joana".
print "$b->nome\n"; // resultado tmbm "joana.
