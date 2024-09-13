<?php

$vai_chover = TRUE;
$esta_frio = TRUE;

if ($vai_chover and $esta_frio) {
    echo "Não vou sair de casa!";
}
?>

<?php

$vai_chover = TRUE;
$esta_frio = false;

if ($vai_chover xor $esta_frio) {
    echo "Vou pensar duas vezes antes de sair!";
}
?>
