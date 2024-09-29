<?php

//formas de concatenar.

$frutas = 'Maçã';
echo $frutas . ' È a fruta de Adão<br>' . PHP_EOL;
echo "{$frutas} È a fruta de Adão<br>" . PHP_EOL;
?>

<?php

//O PHP realiza altomaticamente a converção entre tipos.

$a = 1234;
echo 'O salario é ' . $a . PHP_EOL;
echo "O salario é $a" . PHP_EOL;
?>