<?php

function distancia_percorrida($quilometros){
    Static $total;
    $total = $total + $quilometros;
    echo "Percorreu mais $quilometros no total de $total\n";
}
    distancia_percorrida(100);
    distancia_percorrida(200);
    distancia_percorrida(50);
?>