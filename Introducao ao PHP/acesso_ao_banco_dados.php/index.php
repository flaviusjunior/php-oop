<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Famosos</title>
</head>
<body>
    <?php
        require_once "famosos_crud.php";

        if ($_POST['name']) {
            create($_POST['name']);
        }

        if ($_GET['delete']) {
            delete($_GET['delete']);
            header('Location: .');
        }
        $famosos = read();
    ?>


    <form method="post">
        <label for="name">Nome</label>
        <input name="name" id="name" autofocus>
        <button>Enviar</button>
    </form>

    <ul>
        <?php foreach ($famosos as $famoso): ?>
            <li>
                <?= $famoso['name'] ?>
                <a href="?delete=<?= $famoso['id'] ?>">X</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>