<?php

switch ($a = 0) {
    case '1':
        print 'Deu 1!';
        break;
    case '2':
        print "Deu 2!";
        break;
    default:
        print 'Opção invalida!';
        break;
}
?>

<?php

$a = 0;

if ($a == 1) {
    echo "igual a 1";
}
elseif ($a == 2) {
    echo "igual a 2";
}
elseif ($a == 3) {
    echo "Igual a 3";
}
else {
    echo "Nao encontrada";
}
?>