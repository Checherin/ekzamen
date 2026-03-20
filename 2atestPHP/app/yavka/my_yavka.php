<?php
// Вывод заявок пользователя
$dbh = $conn->prepare("SELECT * FROM yavka WHERE name = :name");
$dbh->execute(['name' => htmlentities($_COOKIE['login'])]);

if ($dbh->rowCount() > 0) {
    $applications = $dbh->fetchAll(PDO::FETCH_ASSOC);

    echo '<br>';
    echo '<h2 class="flex">Ваши заявки</h2>';
    echo '<div class="flex">';
    echo '<table>';
    echo '<thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Адрес</th>
                <th>Тип услуги</th>
                <th>Тип оплаты</th>
                <th>Время</th>
                <th>Комментарий</th>
                <th>Статус</th>
            </tr>
          </thead>';
    
    foreach ($applications as $app) {
        echo '<tr>';
        echo '<td>' . $app['id'] . '</td>';
        echo '<td>' . $app['name'] . '</td>';
        echo '<td>' . $app['phone'] . '</td>';
        echo '<td>' . $app['address'] . '</td>';
        echo '<td>' . $app['type_service'] . '</td>';
        echo '<td>' . $app['type_oplaty'] . '</td>';
        echo '<td>' . $app['time'] . '</td>';
        echo '<td>' . $app['comment'] . '</td>';

        // Покрасим статус
        if ($app['status'] == 1) {
            echo '<td style="background:rgba(238, 255, 0, 0.47)">На рассмотрении</td>';
        } else if ($app['status'] == 2) {
            echo '<td style="background:rgba(78, 248, 89, 0.45)">Одобрено</td>';
        } else if ($app['status'] == 3) {
            echo '<td style="background:rgba(252, 120, 120, 0.45)">Отклонено</td>';
        } else {
            echo '<td>Неизвестно</td>';
        }

        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
} else {
    echo '<p style="text-align:center;">У вас пока нет заявок.</p>';
}

echo "<link rel='stylesheet' href='../../../styles/table.css'>";
