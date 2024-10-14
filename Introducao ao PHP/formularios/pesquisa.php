<?php
session_start();

// Conexão com o banco de dados
$host = "localhost";
$port = "5432";
$dbname = "myforme";
$user = "postgres";
$password = "root";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Erro na conexão: " . pg_last_error());
}

// Variáveis para armazenar os dados do formulário (se existir)
$nome = $senha = $sexo = $religiao = $idiomas = $estilo = $fotografia = $curriculo = '';
$edit_mode = false;

// Verificação se foi feita uma pesquisa
if (isset($_GET['nome']) && !empty(trim($_GET['nome']))) {
    $nome_busca = pg_escape_string($conn, trim($_GET['nome']));

    // Query para pesquisar o nome
    $query_busca = "SELECT * FROM formulario WHERE nome ILIKE '%$nome_busca%'"; // ILIKE para case-insensitive
    $result_busca = pg_query($conn, $query_busca);

    if (!$result_busca) {
        die("Erro na query: " . pg_last_error());
    }

    // Se houver resultados
    if (pg_num_rows($result_busca) > 0) {
        echo "<h2>Resultados da pesquisa por '$nome_busca':</h2>";
        echo "<table border='1' style='width: 100%; border-collapse: collapse;'>
                <tr>
                    <th style='padding: 10px; background-color: #4682b4; color: white;'>Nome</th>
                    <th style='padding: 10px; background-color: #4682b4; color: white;'>Sexo</th>
                    <th style='padding: 10px; background-color: #4682b4; color: white;'>Religião</th>
                    <th style='padding: 10px; background-color: #4682b4; color: white;'>Idiomas</th>
                    <th style='padding: 10px; background-color: #4682b4; color: white;'>Estilo</th>
                    <th style='padding: 10px; background-color: #4682b4; color: white;'>Fotografia</th>
                    <th style='padding: 10px; background-color: #4682b4; color: white;'>Currículo</th>
                    <th style='padding: 10px; background-color: #4682b4; color: white;'>Ação</th>
                </tr>";

        while ($row = pg_fetch_assoc($result_busca)) {
            echo "<tr>
                    <td style='padding: 8px;'>" . htmlspecialchars($row['nome']) . "</td>
                    <td style='padding: 8px;'>" . htmlspecialchars($row['sexo']) . "</td>
                    <td style='padding: 8px;'>" . htmlspecialchars($row['religiao']) . "</td>
                    <td style='padding: 8px;'>" . htmlspecialchars($row['idiomas']) . "</td>
                    <td style='padding: 8px;'>" . htmlspecialchars($row['estilo']) . "</td>
                    <td style='padding: 8px;'><img src='uploads/" . htmlspecialchars($row['fotografia']) . "' alt='Foto' width='50'></td>
                    <td style='padding: 8px;'>" . htmlspecialchars($row['curriculo']) . "</td>
                    <td style='padding: 8px;'><a href='?id=" . htmlspecialchars($row['id']) . "'>Editar</a></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nenhum resultado encontrado para '$nome_busca'.</p>";
    }
} elseif (isset($_GET['id'])) {
    // Edição do registro
    $id = intval($_GET['id']);
    $query_edit = "SELECT * FROM formulario WHERE id = $id";
    $result_edit = pg_query($conn, $query_edit);

    if ($result_edit && pg_num_rows($result_edit) > 0) {
        $row = pg_fetch_assoc($result_edit);
        $nome = $row['nome'];
        $senha = $row['senha'];
        $sexo = $row['sexo'];
        $religiao = $row['religiao'];
        $idiomas = explode(", ", $row['idiomas']);
        $estilo = explode(", ", $row['estilo']);
        $fotografia = $row['fotografia'];
        $curriculo = $row['curriculo'];
        $edit_mode = true; // Ativa o modo de edição
    }
}

// Atualização do registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['caixa']);
    $senha = trim($_POST['senha']);
    $sexo = $_POST['sexo'];
    $religiao = $_POST['religiao'];
    $idiomas = implode(", ", $_POST['idiomas']);
    $estilo = implode(", ", $_POST['estilo']);
    $curriculo = $_POST['curriculo'];

    // Verificação dos campos obrigatórios
    if (empty($nome) || empty($senha) || empty($sexo) || empty($religiao)) {
        $_SESSION['mensagem'] = "Por favor, preencha todos os campos obrigatórios.";
        header("Location: pesquisa.php");
        exit();
    }

    // Verifica se estamos no modo de edição
    if ($edit_mode) {
        // Atualiza o registro
        $query_update = "UPDATE formulario SET
            nome = '$nome',
            senha = '$senha',
            sexo = '$sexo',
            religiao = '$religiao',
            idiomas = '$idiomas',
            estilo = '$estilo',
            curriculo = '$curriculo'
            WHERE id = $id";
        $result_update = pg_query($conn, $query_update);

        if ($result_update) {
            $_SESSION['mensagem'] = "Registro atualizado com sucesso!";
            header("Location: pesquisa.php");
            exit();
        } else {
            echo "Erro ao atualizar dados: " . pg_last_error();
        }
    } else {
        // Inserindo dados no banco de dados
        $query_insert = "INSERT INTO formulario (nome, senha, sexo, religiao, idiomas, estilo, fotografia, curriculo) 
                         VALUES ('$nome', '$senha', '$sexo', '$religiao', '$idiomas', '$estilo', '', '$curriculo')";
        $result_insert = pg_query($conn, $query_insert);

        if ($result_insert) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header("Location: pesquisa.php");
            exit();
        } else {
            echo "Erro ao inserir dados: " . pg_last_error();
        }
    }
}

// Fechando a conexão
pg_close($conn);
?>