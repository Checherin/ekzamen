<?php
// Форма создания заявки
function form_yavka() {
    echo '
<h1 align="center">Форма добавления заявки</h1>
<form style="display:flex; flex-direction:column; align-items:center; gap:10px; margin-top:20px;" method="post">
    <input      style="width:63%" type="text"                name="phone"        required   placeholder="телефон">
    <input      style="width:63%" type="text"                name="address"      required   placeholder="Адрес">
    <select  name="type_service" placeholder="Услышь меня ">
        <option value="" disabled selected hidden>Тип переезда</option>
        <option value="Полный">Полный</option>
        <option value="Не полный">Не полный</option>
        <option value="Выборочный">Выборочный</option>
    </select>
    <select  name="type_oplaty">
        <option value="" disabled selected hidden>Тип оплаты</option>
        <option value="Наличными">Наличными</option>
        <option value="СБП">СБП</option>
        <option value="По QR-коду">По QR-коду</option>
    </select>
    <input      style="width:63%" type="datetime-local"      name="time"         required   placeholder="Время получения услуги">
    <textarea   style="width:63%"                            name="comment"                 placeholder="Комментарий (необязательно)"></textarea>
    <button type="submit">Отправить заявку</button>
</form>
    ';
}

    echo '<link rel="stylesheet" href="../../styles/form.css">';
