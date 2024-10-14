<?php

function listarPqsl() {
    $conn = pg_connect("host=localhost port=5432 dbname=livro user=postgres password=root");

    $query = 'SELECT codigo, nome FROM famosos';

    $result = pg_query($conn, $query);

    if ($result) {
        while ($row = pg_fetch_assoc($result)) {
            echo $row['codigo'] . ' - ' . $row['nome'] . "\n";
        }
    }
    pg_close($conn);
}

function listarMysql() {
    $conn = mysqli_connect('localhost:3306', 'root', 'root', 'livro');


    $query = 'SELECT codigo, nome FROM famosos';

    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['codigo'] . ' - ' . $row['nome'] . "\n";
        }
    }
    mysqli_close($conn);
}

//listarMysql();
listarPqsl()
?>