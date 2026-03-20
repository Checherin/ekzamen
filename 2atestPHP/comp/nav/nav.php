<?php
if (isset($_COOKIE['login'])) {
    if (isset($_COOKIE['isAdmin']) && $_COOKIE['isAdmin'] == 1) {
        echo '
        <nav>
            <a href="#">Главная</a>
            <a href="#">Админка</a>
            <a href="../../../logout.php">Выход</a>
        </nav>';
    } else {
        echo '
        <nav>
            <a href="#">Главная</a>
            <a href="#">Личный кабинет</a>
            <a href="../../../logout.php">Выход</a>
        </nav>';
    }
} else {
    echo '
    <nav>
        <a href="./page_reg.php">Регистрация</a>
        <a href="./page_auth.php">Авторизация</a>
    </nav>';
}






//Навигация- условие "Если пользователь авторизован, то выполняется код- условие "если пользователь админ, то вот ему навигацию,если пользователь простой смертный, то вот ему навигацию",
//                     Если пользователь не авторизован, то вот ему в навигацию кнопочки с регистрацией и авторизацией, пусть зарегается"

// if (isset($_COOKIE['login'])){
    
//     if ($_COOKIE['isAdmin'] == 1) {
//         echo '
//         <nav>
//             <a href="index.php">Главная</a>
//             <a href="./application/admin/admin_page.php">Админка</a>
//             <a href="./logout.php">Выход</a>
//         </nav>';
//     } else {
//         echo '
//         <nav>
//             <a href="index.php">Главная</a>
//             <a href="./logout.php">Выход</a>
//         </nav>';
//     }

// }else {

//     if (isset($_COOKIE['login'])) {
//         echo '
//         <nav>
//             <a href="index.php">Главная</a>
//             <a href="./logout.php">Выход</a>
//         </nav>';
//     } else {
//         echo '
//         <nav>
//             <a href="./reg_page.php">Регистрация</a>
//             <a href="./auth_page.php">Авторизация</a>
//         </nav>';
//     }

// }