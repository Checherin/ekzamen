<?php
require_once './app/conn/conn.php';
require_once './comp/forms/form_auth.php';
require_once './app/next_form/auth/auth.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переезд не стресс: Авторизация</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <header>
        <h1>Переезд не стресс: Авторизация</h1>
    </header>

    <nav>
        <?php include './comp/nav/nav.php'; ?>
    </nav>

    <main>
        <?php
            //выводим форму рега
            form_auth();
            echo $error_auth;
        ?>
    </main>

    <footer>
        <p>its my 2025</p>
    </footer>
</body>
</html>
