<?php
include '../../conn/conn.php';
include '../../yavka/create_yavka.php';
include '../../../comp/forms/form_yavka.php';


?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../../../styles/styles.css">
</head>
<body>
    <header>
        <h1>Переезд не стресс: Личный кабинет пользователя</h1>
    </header>

    <nav>
        <?php 
            include '../../../comp/nav/nav.php';
        ?>
    </nav>

    <main>
        <h2 style= 'align: center'>
            Добро пожаловать, 
                            <?php echo ($_COOKIE['login']) . ' !'; ?>
        </h2>
        <?php
        // Вызываем форму для создания заявки
        form_yavka();
        if (isset($error_yavka)) {
            echo $error_yavka; // Выводим ошибку внизу формы
        }
        include '../../yavka/my_yavka.php';
        ?>
    </main>

    <footer>
        <p>its my 2025</p>
    </footer>
</body>
</html>
