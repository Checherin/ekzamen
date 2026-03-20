<?php
// include '../../conn/conn.php';
require_once '../../conn/conn.php';

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Адмика</title>
    <link rel="stylesheet" href="../../../styles/styles.css">
</head>
<body>
    <header>
        <h1>Переезд не стресс: Личный кабинет администратора</h1>
    </header>

    <nav>
        <?php 
            require_once '../../../comp/nav/nav.php'; 
        ?>
    </nav>

    <main>
        <h2 style= 'align: center'>
            Добро пожаловать, 
                            <?php echo ($_COOKIE['login']) . '!'; ?>
        </h2>
        <p>Здесь админка.</p>
        <?php
            include '../../yavka_admin/yavka_table.php';
        ?>
    </main>

    <footer>
        <p>its my 2025</p>
    </footer>
</body>
</html>
