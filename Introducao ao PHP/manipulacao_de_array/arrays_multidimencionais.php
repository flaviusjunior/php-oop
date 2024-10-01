<?php

$carros = array('Palio' => array('cor' => 'Azul',
                                'Potencia' => '1.0',
                                'Opcional' => 'Ar cond'),
               'Corsa' => array('cor' => 'Cinza',
                                'Potencia' => '1.3',
                                'Opcional' => 'MP3'),
               'Gol' => array('cor' => 'Branco',
                                'Potencia' => '1.0',
                                'Opcional' => 'Metalica'),
              );
echo $carros['Palio']['Opcional'] . PHP_EOL;
print_r($carros);
?>

<?php

//Outra forma de criar um arrei multidimensional é simplismente atribuindo valores.

$carros = array();

$carros['Palio']['Cor'] = 'Azul';
$carros['Palio']['Potencia'] = '1.0';
$carros['Palio']['Opcionais'] = 'Ar cond';

$carros['Corsa']['Cor'] = 'Cinza';
$carros['Corsa']['Potencia'] = '1.3';
$carros['Corsa']['Opcionais'] = 'MP3';

$carros['Gol']['Cor'] = 'Branco';
$carros['Gol']['Potencia'] = '1.0';
$carros['Gol']['Opcionais'] = 'Metalica';

echo $carros['Palio']['Potencia'];

//Para realizar interações com o array multidimensional, é preciso observar quantos níveis ele tem.
//No exemplo a seguir, realizamos uma interação para oprimeiro nivel do array(veiculos) e,
//para cada interação uma nova interação para imprimir suas caracteristicas.

foreach ($carros as $modelos => $caracteristicas) {
    echo "=> modelo $modelos\n";
    foreach ($caracteristicas as $caracteristicas => $valor) {
        echo " - caracteristicas $caracteristicas => $valor\n";
    }
}
?>
