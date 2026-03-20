<?php

if (isset($_POST['login']) && isset($_POST['password'])) {
    $dbh = $conn->prepare
    ("SELECT * FROM users WHERE login = :login");

    $dbh->execute
    (['login'=>htmlentities($_POST['login'])]);
    // Проверка на наличие пользователя
    if ($dbh->rowCount() > 0) {
        $error_reg = "<p style='color: red;'>Пользователь уже существует!</p>";
    } else {
        
        $dbh = $conn->prepare("INSERT INTO users (login, password, name, mail, phone)
                                    VALUES (:login, :password, :name, :mail, :phone)
                                ") ;
        
        $dbh->execute([
            "login" => ($_POST['login']),
            "password" => ($_POST['password']),
            "name" => ($_POST['name']),
            "mail" => ($_POST['mail']),
            "phone" => ($_POST['phone']),
        ]);

        setcookie("login", htmlentities($_POST["login"]));
        setcookie("isAdmin", 0);

        header("Location: ../../../index.php");
    }
} else {
    $error_auth = '';
}