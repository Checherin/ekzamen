<?php

if (isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['type_service']) && isset($_POST['time']) && isset($_POST['type_oplaty'])
) {
    $dbh = $conn->prepare("SELECT * FROM yavka WHERE address = :address");

    $dbh->execute([
        'address' => htmlentities($_POST['address'])
    ]);

    if ($dbh->rowCount() > 0) {
        $error_yavka = "<p align='center'>Заявка на этот адрес уже существует. Смените хату и повторите попытку!</p>";
    } else {
        $name = htmlentities($_COOKIE['login']);

        $dbh = $conn->prepare("INSERT INTO yavka (phone, address, time, type_service, type_oplaty, status, comment, name)
                               VALUES (:phone, :address, :time, :type_service, :type_oplaty, :status, :comment, :name)");

        $dbh->execute([
            'phone'        => htmlentities($_POST['phone']),
            'address'      => htmlentities($_POST['address']),
            'time'         => htmlentities($_POST['time']),
            'type_service' => htmlentities($_POST['type_service']),
            'type_oplaty'  => htmlentities($_POST['type_oplaty']),
            'status'       => 1,
            'comment'      => htmlentities($_POST['comment']),
            'name'         => $name,
        ]);

        // header("Location: ./application/index/user/user_page.php");
    }
}

echo "<link rel='stylesheet' href='../../../styles/form.css'>";