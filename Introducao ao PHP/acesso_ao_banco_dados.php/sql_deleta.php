<?php

function deletaPostgres() {
    $conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=root");

    pg_query($conn, "DELETE FROM famosos WHERE nome = 'Anita Garibaldi'");
    pg_query($conn, "DELETE FROM famosos WHERE nome = 'Ayrtom Sena'");



    pg_close($conn);
}

function deletaMysql() {
    $conn = mysqli_connect('localhost:3306', 'root', 'root', 'livro');

    mysqli_query($conn, "DELETE FROM famosos WHERE nome = 'Anita Garibaldi'");
    mysqli_query($conn, "DELETE FROM famosos WHERE nome = 'Ayrtom Sena'");

    mysqli_close($conn);
}


//deletaMysql()
deletaPostgres()
?>
