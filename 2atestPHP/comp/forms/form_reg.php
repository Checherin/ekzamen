<?php
// Форма регистрации
function form_reg() {
    echo '
    <h1>Форма регистрации</h1>
    <form method="post">
        <input  type="text"                 name="login"            required    placeholder="Логин">
        <input  type="password"             name="password"         required    placeholder="Пароль">
        <input  type="text"                 name="name"             required    placeholder="Имя">
        <input  type="text"                 name="phone"                        placeholder="Телефон">
        <input  type="email"                name="mail"             required    placeholder="Почта">
        <button type="submit">Регистрация</button>
    </form>
    ';
}
