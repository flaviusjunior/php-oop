<?php
include_once "./servico.php";

session_start(); // Inicie a sessão no topo

// Configurações do banco de dados
$host = "localhost"; // ou o endereço do seu servidor
$port = "5432"; // porta padrão do PostgreSQL
$dbname = "myforme"; // nome do seu banco de dados
$user = "postgres"; // seu usuário do PostgreSQL
$password = "root"; // sua senha do PostgreSQL

// Conexão com o banco de dados
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Erro na conexão: " . pg_last_error());
}

if ($_POST['id']) {
    atualizar($conn, $_GET);
}

// Recebendo dados do formulário
else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['caixa']);
    $senha = trim($_POST['senha']);
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : '';
    $religiao = isset($_POST['religiao']) ? $_POST['religiao'] : '';
    $idiomas = isset($_POST['idiomas']) ? implode(", ", $_POST['idiomas']) : ''; // Convertendo array em string
    $estilo = isset($_POST['estilo']) ? implode(", ", $_POST['estilo']) : ''; // Convertendo array em string
    $curriculo = trim($_POST['curriculo']);

    // Verificando se os campos obrigatórios foram preenchidos
    if (empty($nome) || empty($senha) || empty($sexo) || empty($religiao)) {
        $_SESSION['mensagem'] = "Por favor, preencha todos os campos obrigatórios.";
        header("Location: index.php");
        exit();
    }

    // Verificando se uma imagem foi enviada e fazendo o upload
    if (isset($_FILES['fotografia']) && $_FILES['fotografia']['error'] == UPLOAD_ERR_OK) {
        $fotografia = $_FILES['fotografia']['name']; // Nome do arquivo
        $upload_dir = 'uploads/'; // Crie uma pasta chamada "uploads" no mesmo diretório do seu script
        if (!move_uploaded_file($_FILES['fotografia']['tmp_name'], $upload_dir . $fotografia)) {
            $_SESSION['mensagem'] = "Erro ao enviar o arquivo de imagem.";
            header("Location: index.php");
            exit();
        }
    } else {
        $fotografia = ''; // Caso nenhuma foto tenha sido enviada
    }

    // Prevenindo SQL Injection
    $nome = pg_escape_string($conn, $nome);
    $senha = pg_escape_string($conn, $senha);
    $sexo = pg_escape_string($conn, $sexo);
    $religiao = pg_escape_string($conn, $religiao);
    $idiomas = pg_escape_string($conn, $idiomas);
    $estilo = pg_escape_string($conn, $estilo);
    $curriculo = pg_escape_string($conn, $curriculo);

    // Inserindo dados no banco de dados
    $query = "INSERT INTO formulario (nome, senha, sexo, religiao, idiomas, estilo, fotografia, curriculo) 
              VALUES ('$nome', '$senha', '$sexo', '$religiao', '$idiomas', '$estilo', '$fotografia', '$curriculo')";

    $result = pg_query($conn, $query);

    if ($result) {
        // Caso a inserção tenha sucesso
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['mensagem'] = "Erro ao inserir dados: " . pg_last_error();
        header("Location: index.php");
        exit();
    }
}

// Fechando a conexão
pg_close($conn);
?>
