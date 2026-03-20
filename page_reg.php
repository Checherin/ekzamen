<?php
require_once './app/conn/conn.php';
require_once './comp/forms/form_reg.php';
require_once './app/next_form/reg/reg.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Переезд не стресс: Регистрация</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <header>
        <h1>Переезд не стресс: Регистрация</h1>
    </header>

    <nav>
        <?php include './comp/nav/nav.php'; ?>
    </nav>

    <main>
        <?php
            //выводим форму рега
            form_reg();
            echo $error_reg;
        ?>
    </main>

    <footer>
        <p>its my 2025</p>
    </footer>
</body>
</html>
