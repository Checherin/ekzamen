<?php

// Одобряем
if (isset($_GET['yavka_true'])) {
    $dbh = $conn->prepare("UPDATE yavka SET status = 1 WHERE id = :id");
    $dbh->execute(['id' => htmlentities($_GET['yavka_true'])]);
}

// Отклоняем
if (isset($_GET['yavka_false'])) {
    $dbh = $conn->prepare("UPDATE yavka SET status = 2 WHERE id = :id");
    $dbh->execute(['id' => htmlentities($_GET['yavka_false'])]);
}

// Посылаем
if (isset($_GET['yavka_delete'])) {
    $dbh = $conn->prepare("DELETE FROM yavka WHERE id = :id");
    $dbh->execute(['id' => htmlentities($_GET['yavka_delete'])]);
}