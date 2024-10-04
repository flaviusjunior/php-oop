<?php

function inserePostgres() {
    $conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=root");


    pg_query($conn, "INSERT INtO famosos (codigo, nome) VALUES (1, 'Erico verissimo')");
    pg_query($conn, "INSERT INtO famosos (codigo, nome) VALUES (3, 'Ayrtom Sena')");
    pg_query($conn, "INSERT INtO famosos (codigo, nome) VALUES (4, 'Silvio Santos')");
    pg_query($conn, "INSERT INtO famosos (codigo, nome) VALUES (5, 'Anita Garibaldi')");

    pg_close($conn);
}

function insereMysql() {
    $conn = mysqli_connect('localhost:3306', 'root', 'root', 'livro');


    mysqli_query($conn, "INSERT INtO famosos (codigo, nome) VALUES (1, 'Erico verissimo')");
    mysqli_query($conn, "INSERT INtO famosos (codigo, nome) VALUES (3, 'Ayrtom Sena')");
    mysqli_query($conn, "INSERT INtO famosos (codigo, nome) VALUES (4, 'Silvio Santos')");
    mysqli_query($conn, "INSERT INtO famosos (codigo, nome) VALUES (5, 'Anita Garibaldi')");

    mysqli_close($conn);
}


insereMysql()

?>
