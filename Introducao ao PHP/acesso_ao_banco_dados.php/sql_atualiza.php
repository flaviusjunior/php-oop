<?php

function atualizaPostgres($codigo, $nome) {
    $conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=root");

    pg_query($conn, "UPDATE famosos SET nome = '$nome' WHERE codigo = $codigo");


    pg_close($conn);
}

function atualizaMysql() {
    $conn = mysqli_connect('localhost:3306', 'root', 'root', 'livro');

    pg_query($conn, "UPDATE famosos SET nome = '$nome' WHERE codigo = $codigo");

    mysqli_close($conn);
}


//atualizaMysql()
atualizaPostgres(8, 'Maria');
?>
