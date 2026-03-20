<?php

$conn = null;

$BD = 'dekko_db';
$user = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=' . $BD, $user, $password);
} catch (PDOException $error) {
    echo 'Ошибка подключения! ' . $error->getMessage();
}
