<?php
// Форма авторизации
function form_auth() {
    echo '
    <h1>Форма авторизации</h1>
    <form method="post">
        <input type="text"                  name="login"        required    placeholder="Логин">
        <input type="password"              name="password"     required    placeholder="Пароль">
        <button type="submit">Авторизация</button>
    </form>
    ';
}