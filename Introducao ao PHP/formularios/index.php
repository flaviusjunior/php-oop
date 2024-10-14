<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aquisição de Dados</title>
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
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }
        button {
            padding: 10px;
            margin: 10px 5px;
            cursor: pointer;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        .mensagem {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    <script>
        function validateForm() {
            const nome = document.getElementById('nome').value.trim();
            const senha = document.getElementById('senha').value.trim();
            const sexoM = document.getElementById('sexo_m').checked;
            const sexoF = document.getElementById('sexo_f').checked;
            const religiao = document.getElementById('religiao').value;

            // Validações simples
            if (!nome) {
                alert("Por favor, preencha o campo Nome.");
                return false;
            }
            if (!senha) {
                alert("Por favor, preencha o campo Senha.");
                return false;
            }
            if (!sexoM && !sexoF) {
                alert("Por favor, selecione o sexo.");
                return false;
            }
            if (!religiao) {
                alert("Por favor, selecione uma religião.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

    <h1>Aquisição de Dados</h1>
    <form id="formulario" name="myforme" method="POST" action="gravar.php" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <label for="nome">Nome:</label>
            <input name="caixa" id="nome" value="<?= $_GET['nome'] ?>" placeholder="Digite seu nome aqui" type="text" maxlength="40" autofocus>

        <label for="senha">Senha:</label>
            <input name="senha" id="senha" value="<?= $_GET['senha'] ?>" placeholder="Digite sua senha" type="password" maxlength="40">

        <label for="sexo">Sexo:</label>
            <input name="sexo" id="sexo_m" value="Masculino" type="radio">Masculino
            <input name="sexo" id="sexo_f" value="Feminino" type="radio">Feminino<br><br>

        <label for="religiao">Religião:</label>
            <select name="religiao" id="religiao">
                <option value="" disabled selected>Selecione</option>
                <option value="Catolica">Católica</option>
                <option value="Evangelica">Evangélica</option>
                <option value="Universal">Universal</option>
            </select>

        <label>Idiomas:</label>
            <input name="idiomas[]" value="Inglês" type="checkbox">Inglês
            <input name="idiomas[]" value="Francês" type="checkbox">Francês
            <input name="idiomas[]" value="Português" type="checkbox">Português<br><br>

        <label for="estilo">Estilo:</label>
            <select name="estilo[]" id="estilo" multiple>
                <option value="Classico">Clássico</option>
                <option value="Contemporaneo">Contemporâneo</option>
                <option value="Elegante">Elegante</option>
                <option value="Despojado">Despojado</option>
                <option value="Tranquilo">Tranquilo</option>
            </select>

        <label for="fotografia">Fotografia:</label>
        <input name="fotografia" id="fotografia" type="file">

        <label for="curriculo">Currículo:</label>
        <textarea name="curriculo" id="curriculo" value="<?= $_GET['curriculo'] ?>" placeholder="Digite aqui" rows="4"></textarea>

        <div class="button-group">

            <button type="submit">
                <?= $_GET['id'] ? 'Atualizar' : 'Cadastrar' ?>
            </button>

            <button type="reset">Limpar</button>
            <button type="button" onclick="window.location.href='form_pesquisa.php'">Pesquisar</button>
            <button type="button" onclick="window.location.href='listar.php'">Listar</button>

        </div>
    </form>
    <?php
        // Verifique se há uma mensagem de sucesso e exibe
        if (isset($_SESSION['mensagem'])) {
            echo "<p text-aling='center' class='mensagem' style='color: green;'>" . $_SESSION['mensagem'] . "</p>";
            // Após exibir a mensagem, remova-a da sessão
            unset($_SESSION['mensagem']);
        }
    ?>
    <script>
        setTimeout(function () {
            const items = document.getElementsByClassName('mensagem')
            if (items[0]) {
                items[0].remove()
            }
        }, 2000)
    </script>
</body>
</html>
