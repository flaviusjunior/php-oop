<?php
$host = 'localhost'; // Host do banco de dados
$dbname = 'livro'; // Nome do banco de dados
$username = 'root'; // Seu usuário PostgreSQL
$password = 'root'; // Sua senha PostgreSQL

try {
    // Cria uma nova conexão PDO
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    // Configura para lançar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    // Captura e exibe erros de conexão
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>
