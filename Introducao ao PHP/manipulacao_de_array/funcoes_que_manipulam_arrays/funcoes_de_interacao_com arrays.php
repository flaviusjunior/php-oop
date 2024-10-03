<?php

$a = array("Verde", "Azul", "Vermelho");
print_r($a);

//Adiciona elemento no inicio de um array.
array_unshift($a, "Ciano");

//Adiciona elemento no final de um array.
array_push($a, "Amarelo");

print_r($a);

//Remove um elemento do inicio de inicio de uma array.
array_shift($a);

//Remove um elemento do final de uma array.
array_pop($a);

print_r($a);

//Recebe uma array e entrega na ordem inversa.
$b = array_reverse($a, true);

print_r($b);

$c = array("Loiro", "Marron", "Branco");
//Mescla does ou mais arrays, um array é adicionado ao final do outro.
$d = array_merge($a, $c);

print_r($d);

/////////////////////////////////////////////////////////////////////////////////////

$teste = ['cor' => 'vermenho', 'Valor' => '50', 'Animal' => 'pato'];

//Retorna somente as chaves (índices) de um array, ingnorando seus valores.
$i = array_keys($teste);

print_r($i);

//Retorna somente os valores da array ingnorando suas chaves.
$valor = array_values($teste);

print_r($valor);

//   (in_array)  Verifica se na array existe aquele deterninado valor.
if(in_array('pato', $teste)){
    echo 'Existe esse valor aqui!!!';
}else{
    echo 'Não!!!';
}

//Verifica e ordena em ordem alfabetica.
sort($teste);
print_r($teste);

//Ordena pelo seu valor mantendo a associação do índice.
asort($d);
print_r($d);

//Assim é o reverso.
arsort($d);
print_r($d);

//Ordena um array pelos seus índices.
$carro['modelo'] = 'gol';
$carro['cor'] = 'vermelho';
$carro['potencia'] = '1.0';
$carro['opcionais'] = 'MP3';

ksort($carro);
print_r($carro);

//Para ordem reversa.
krsort($carro);
print_r($carro);

//Converte uma e=string em uma array, quebrando seus elementos por meio de um separador (/).
$string = "10/06/24";
print_r(explode("/", $string));
$array = [10, 06, 24];
print implode('/', $array);
?>
