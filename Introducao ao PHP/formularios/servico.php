<?php

function conectar() {
    return pg_connect("host=localhost port=5432 dbname=myforme user=postgres password=root");
}

function pesquisar($conn, $nome) {
    $busca = pg_escape_string($conn, trim($nome));

    $pgResult = pg_query($conn, "SELECT * FROM formulario WHERE nome ILIKE '%$busca%'");

    $result = [];

    while ($row = pg_fetch_assoc($pgResult)) $result[] = $row;

    return $result;
}

function getTodos($conn) {
    $pgResult = pg_query($conn, "SELECT * FROM formulario");

    $result = [];

    while ($row = pg_fetch_assoc($pgResult)) $result[] = $row;

    return $result;
}


function atualizar($conn, $dados) {
    // Prepare a instrução SQL para atualizar os dados
    $sql = "UPDATE sua_tabela SET
                sexo = $1,
                religiao = $2,
                idiomas = $3,
                estilo = $4,
                curriculo = $5
            WHERE nome = $6"; // Altere "nome" para um identificador único como "id" se necessário

    // Prepare a declaração
    $stmt = pg_prepare($conn, "atualizar_query", $sql);

    // Execute a declaração com os parâmetros
    $result = pg_execute($conn, "atualizar_query", [
        $dados['sexo'],
        $dados['religiao'],
        $dados['idiomas'],
        $dados['estilo'],
        $dados['curriculo'],
        $dados['nome'] // Aqui está o critério para identificar qual registro atualizar
    ]);

    // Verifica se a atualização foi bem-sucedida
    if ($result) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o registro: " . pg_last_error($conn);
    }
}



function desconectar($conn) {
    pg_close($conn);
}
