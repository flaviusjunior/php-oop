<?php
include_once "./servico.php";

$editar = false; // Variável para controle de edição
$id = $_GET['id'] ?? null; // ID do usuário a ser editado

$conn = conectar();

$lista = [];

if ($_GET['nome']) {
    $lista = pesquisar($conn, $_GET['nome']);
} else {
    $lista = getTodos($conn);
}
desconectar($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Pesquisa e Edição</title>
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

<h1>Formulário de Pesquisa</h1>
<form id="formulario-pesquisa" name="formPesquisa" method="GET" action="">
    <label for="nome">Nome:</label>
    <input name="nome" id="nome" placeholder="Digite o nome para pesquisa" type="text" value="<?= $_GET['nome'] ?? '' ?>" autofocus>

    <div class="button-group">
        <button type="submit">Pesquisar</button>
        <button type="reset">Limpar</button>
    </div>
</form>

<?php if (!empty($lista)): ?>
    <h2>Resultados da pesquisa por: <?= $_GET['nome'] ?></h2>
    <table border="1" style="width: 100%; border-collapse: collapse;">
        <tr>
            <th style='padding: 10px; background-color: #4682b4; color: white;'>Nome</th>
            <th style='padding: 10px; background-color: #4682b4; color: white;'>Sexo</th>
            <th style='padding: 10px; background-color: #4682b4; color: white;'>Religião</th>
            <th style='padding: 10px; background-color: #4682b4; color: white;'>Idiomas</th>
            <th style='padding: 10px; background-color: #4682b4; color: white;'>Estilo</th>
            <th style='padding: 10px; background-color: #4682b4; color: white;'>Fotografia</th>
            <th style='padding: 10px; background-color: #4682b4; color: white;'>Currículo</th>
            <th style='padding: 10px; background-color: #4682b4; color: white;'>Ação</th>
        </tr>

        <?php foreach ($lista as $item): ?>
            <?php if ($_GET['id'] == $item['id']): ?>
                <tr>
                    <td style='padding: 8px;'>
                        <input name="" id="" value="<?= $item['nome'] ?>">
                    </td>
                    <td style='padding: 8px;'><?= $item['sexo'] ?>.</td>
                    <td style='padding: 8px;'><?= $item['religiao'] ?>.</td>
                    <td style='padding: 8px;'><?= $item['idiomas'] ?>.</td>
                    <td style='padding: 8px;'><?= $item['estilo'] ?>.</td>
                    <td style='padding: 8px;'><img src="<?= $item['fotografia'] ?>" alt='Foto' width='50'></td>
                    <td style='padding: 8px;'><?= $item['curriculo'] ?>.</td>
                    <td style='padding: 8px;'><a href="index.php?id=<?= $item['id']?>&nome=<?= $item['nome']?>">Editar</a></td>
                </tr>
            <?php else: ?>
                <tr>
                    <td style='padding: 8px;'><?= $item['nome'] ?></td>
                    <td style='padding: 8px;'><?= $item['sexo'] ?>.</td>
                    <td style='padding: 8px;'><?= $item['religiao'] ?>.</td>
                    <td style='padding: 8px;'><?= $item['idiomas'] ?>.</td>
                    <td style='padding: 8px;'><?= $item['estilo'] ?>.</td>
                    <td style='padding: 8px;'><img src="<?= $item['fotografia'] ?>" alt='Foto' width='50'></td>
                    <td style='padding: 8px;'><?= $item['curriculo'] ?>.</td>
                    <td style='padding: 8px;'><a href="?nome=<?=$_GET['nome']?>&id=<?= $item['id'] ?>">Editar</a></td>
                </tr>
            <?php endif; ?>

        <?php endforeach; ?>
    </table>
<?php elseif ($_GET['nome']): ?>
    <h2>Nenhum resultado encontrado para a pesquisa: <?= $_GET['nome'] ?></h2>
<?php endif; ?>

</body>
</html>
