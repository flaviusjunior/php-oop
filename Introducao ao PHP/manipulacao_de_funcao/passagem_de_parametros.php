<?php

    //Padrão. by value

    // function incrementa($variavel, $valor) {
    //     $variavel += $valor;
    // }

    // $a = 10;
    // incrementa($a, 20);
    // echo $a;
?>

<?php

    //by reference. transforma a variavel fora da função.

    // function incrementa(&$variavel, $valor) {
    //     $variavel += $valor;
    // }

    // $a = 10;
    // incrementa($a, 20);
    // echo $a;
?>

<?php

    //forma default, se não especificar o paramentro será definido como o valor 40.

    // function incrementa(&$variavel, $valor = 40) {
    //     $variavel += $valor;
    // }

    // $a = 10;
    // incrementa($a);//incrementa($a, "23" <-- Aqui fica o parametro));
    // echo $a;
?>

<?php

    //Também permite permite definir uma função com um número de argumentos.

    function ola() {
        $argumentos = func_get_args();
        $quantidade = func_num_args();

        for ($n=0; $n<$quantidade; $n++){
            echo 'Olá ' . $argumentos[$n] . ', ';
        }
    }
    ola('João', 'Maria', 'Jose');
?>
