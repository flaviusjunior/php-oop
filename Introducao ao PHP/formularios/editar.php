<?php
// Supondo que você já tenha uma função para buscar os dados do usuário
include_once "./servico.php";

$dados = [];
$id = $_GET['id'] ?? null; // ID do usuário a ser atualizado

if ($id) {
    $conn = conectar();
    $dados = atualizar($conn, $id); // Função para buscar os dados do usuário
    desconectar($conn);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Dados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 50px;
        }
        h1 {
            text-align: center;
            color: #4682b4;
        }
        form {
            max-width: 500px;
            margin: auto;
            background-color: #b0e0e6;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        input[type="text"],
        input[type="password"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        button {
            padding: 10px;
            margin-top: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Atualização de Dados</h1>
<form id="formulario" name="myforme" method="POST" action="gravar.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $dados['id'] ?? '' ?>"> <!-- ID do usuário -->

    <label for="nome">Nome:</label>
    <input name="caixa" id="nome" placeholder="Digite seu nome aqui" type="text" maxlength="40" autofocus value="<?= $dados['nome'] ?? '' ?>">

    <label for="senha">Senha:</label>
    <input name="senha" id="senha" placeholder="Digite sua senha" type="password" maxlength="40">

    <label for="sexo">Sexo:</label>
    <input name="sexo" id="sexo_m" value="Masculino" type="radio" <?= isset($dados['sexo']) && $dados['sexo'] == 'Masculino' ? 'checked' : '' ?>>Masculino
    <input name="sexo" id="sexo_f" value="Feminino" type="radio" <?= isset($dados['sexo']) && $dados['sexo'] == 'Feminino' ? 'checked' : '' ?>>Feminino<br><br>

    <label for="religiao">Religião:</label>
    <select name="religiao" id="religiao">
        <option value="" disabled <?= !isset($dados['religiao']) ? 'selected' : '' ?>>Selecione</option>
        <option value="Catolica" <?= isset($dados['religiao']) && $dados['religiao'] == 'Catolica' ? 'selected' : '' ?>>Católica</option>
        <option value="Evangelica" <?= isset($dados['religiao']) && $dados['religiao'] == 'Evangelica' ? 'selected' : '' ?>>Evangélica</option>
        <option value="Universal" <?= isset($dados['religiao']) && $dados['religiao'] == 'Universal' ? 'selected' : '' ?>>Universal</option>
    </select>

    <label>Idiomas:</label>
    <input name="idiomas[]" value="Inglês" type="checkbox" <?= isset($dados['idiomas']) && in_array('Inglês', $dados['idiomas']) ? 'checked' : '' ?>>Inglês
    <input name="idiomas[]" value="Francês" type="checkbox" <?= isset($dados['idiomas']) && in_array('Francês', $dados['idiomas']) ? 'checked' : '' ?>>Francês
    <input name="idiomas[]" value="Português" type="checkbox" <?= isset($dados['idiomas']) && in_array('Português', $dados['idiomas']) ? 'checked' : '' ?>>Português<br><br>

    <label for="estilo">Estilo:</label>
    <select name="estilo[]" id="estilo" multiple>
        <option value="Classico" <?= isset($dados['estilo']) && in_array('Classico', $dados['estilo']) ? 'selected' : '' ?>>Clássico</option>
        <option value="Contemporaneo" <?= isset($dados['estilo']) && in_array('Contemporaneo', $dados['estilo']) ? 'selected' : '' ?>>Contemporâneo</option>
        <option value="Elegante" <?= isset($dados['estilo']) && in_array('Elegante', $dados['estilo']) ? 'selected' : '' ?>>Elegante</option>
        <option value="Despojado" <?= isset($dados['estilo']) && in_array('Despojado', $dados['estilo']) ? 'selected' : '' ?>>Despojado</option>
        <option value="Tranquilo" <?= isset($dados['estilo']) && in_array('Tranquilo', $dados['estilo']) ? 'selected' : '' ?>>Tranquilo</option>
    </select>

    <label for="fotografia">Fotografia:</label>
    <input name="fotografia" id="fotografia" type="file"><br><br>

    <label for="curriculo">Currículo:</label>
    <textarea name="curriculo" id="curriculo" placeholder="Digite aqui" rows="4"><?= $dados['curriculo'] ?? '' ?></textarea>

    <div class="button-group">
        <button type="submit">Atualizar</button>
        <button type="reset">Limpar</button>
</form>
</body>
</html>
