<?php

function create($name) {
    $conn = mysqli_connect('localhost:3306', 'root', 'root', 'livro');

    mysqli_query($conn, "INSERT INTO famosos (name) VALUES ('$name')");

    mysqli_close($conn);
}


function read() {
    $conn = mysqli_connect('localhost:3306', 'root', 'root', 'livro');

    $result = mysqli_query($conn, "SELECT * FROM famosos");

    $famosos = [];

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $famosos[] = $row;
        }
    }

    return $famosos;
}

function update($id, $name) {
    $conn = mysqli_connect('localhost:3306', 'root', 'root', 'livro');

    mysqli_query($conn, "UPDATE famosos SET name = '$name' WHERE id = $id ");
}

function delete($id) {
    $conn = mysqli_connect('localhost:3306', 'root', 'root', 'livro');

    $result = mysqli_query($conn, "DELETE FROM famosos WHERE id = $id ");
}
