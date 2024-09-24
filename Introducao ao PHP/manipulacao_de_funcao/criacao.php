<?php

function calcula_imc($peso, $altura){
    return $peso / ($altura * $altura);
}
    echo calcula_imc(75, 1.85);
?>
