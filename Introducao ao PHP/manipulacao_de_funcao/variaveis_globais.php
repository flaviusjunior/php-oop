<?php

$total = 0;

function km2_mi($quilometros) {
    global $total;
    $total = $total + $quilometros;
    return $quilometros * 0.6;
}
    echo 'Percorreu ' . km2_mi(100) . " Milhas <br>\n";
    echo 'Percorreu ' . km2_mi(200) . " Milhas <br>\n";

    echo 'Percorreu no Total ' . $total . " Quilometros <br>\n";

    //Variaveis globais não é considerado boas praticas, pois podem ser alteradas na aplicação.
?>
