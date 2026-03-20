<?php
    setcookie("login", "", time()-3600);
    setcookie("isAdmin", "", time()-3600);
    setcookie("id", "", time()-3600);

    header('Location: ./index.php');