<?php
include '../../../app/yavka_admin/yavka_function.php';

$dbh = $conn->prepare("SELECT * FROM yavka");
$dbh->execute([]);

if ($dbh->rowCount() > 0) {
    $yavki = $dbh->fetchAll(PDO::FETCH_ASSOC);

    echo '<br>';
    echo '<h1 class="flex">Таблица заявок</h1>';
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
                <th>Действия</th>
                <th>Удалить</th>
            </tr>
          </thead>';

    foreach ($yavki as $ya) {
        echo '<tr>';
        echo '<td>' . $ya['id'] . '</td>';
        echo '<td>' . $ya['name'] . '</td>';
        echo '<td>' . $ya['phone'] . '</td>';
        echo '<td>' . $ya['address'] . '</td>';
        echo '<td>' . $ya['type_service'] . '</td>';
        echo '<td>' . $ya['type_oplaty'] . '</td>';
        echo '<td>' . $ya['time'] . '</td>';
        echo '<td>' . $ya['comment'] . '</td>';

        if ($ya['status'] == 0) {
            echo '<td style="background:rgb(238, 255, 0)">На рассмотрении</td>';
        } else if ($ya['status'] == 1) {
            echo '<td style="background:rgb(78, 248, 90)">Одобрено</td>';
        } else if ($ya['status'] == 2) {
            echo '<td style="background:rgb(252, 120, 120)">Отменено</td>';
        } else {
            echo '<td>Неизвестно</td>';
        }

        echo '<td>
                <div class="button-container">
                    <a style="text-decoration:none" href="?yavka_true=' . $ya['id'] . '">
                        <button class="gbutton-container">Одобрить</button>
                    </a>
                    <a style="text-decoration:none" href="?yavka_false=' . $ya['id'] . '">
                        <button class="rbutton-container">Отклонить</button>
                    </a>
                </div>
              </td>';

        echo '<td>
                <a style="text-decoration:none" href="?yavka_delete=' . $ya['id'] . '">
                    <button class="dbutton-container">Удалить</button>
                </a>
              </td>';

        echo '</tr>';
    }

    echo '</table>';
    echo '</div>';
    echo '<br>';
} else {
    echo '<br>';
    echo 'Заявки не найдены';
}

echo "<link rel='stylesheet' href='../../../styles/table.css'>";