<?php
//Подключаем бд
require_once './app/conn/conn.php';

// Чтобы его куда-нибудь запихнуть нужно чтобы он был авторизован
if (!isset($_COOKIE['login'])) {
    header("Location: ./page_auth.php");
}

// Кто ты? админ? иди в админку! пользователь? иди к юзерам
// if (isset($_COOKIE['isAdmin']) && $_COOKIE['isAdmin'] == 1) {

// }


if (isset($_COOKIE['login'])) {
    if ($_COOKIE['isAdmin'] == 1) {
        header("Location: ./app/index/admin/admin_page.php");
    } else {
        header("Location: ./app/index/user/user_page.php");
    }
}


//     $_COOKIE['isAdmin'] == 1) {
//     header("Location: ./app/index/admin/admin_page.php");
// } else {
//     header("Location: ./app/index/user/user_page.php");
// }
