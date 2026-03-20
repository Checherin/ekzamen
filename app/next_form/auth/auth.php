<?php
//Если заполнены данные, то делается условие, если одна из данных отсутсвует, то выдает ошибку @errorauth
if (isset($_POST['login']) && isset($_POST['password'])) {

    $dbh = $conn->prepare
    ("SELECT * FROM users WHERE login = :login and password = :password");  //Подключение к таблице users(если точнее к столбцам с логином и паролем)

    $dbh->execute([  
        'login'     =>htmlentities($_POST['login']), 
        "password"  =>htmlentities($_POST['password'])
    ]);
    // Проверка существует пользователь или нет. Если да, то выдает "1" то есть такая запись уже есть. Если "0", то такой записи нет.
    if ($dbh->rowCount() > 0) {
        $m = $dbh->fetch(PDO::FETCH_ASSOC);
        
        setcookie("login",   $m["login"]);
        setcookie("isAdmin", $m["isAdmin"]);
        setcookie("id",      $m["id"]);

        header("Location: ../../../index.php");
    } else {
        $error_auth = "<p style='color: red;'>Неправильный логин или пароль!</p>";
    }
} else {
    $error_auth = '';
}