<?php

    if ($_COOKIE['usuario']) {
        $_SESSION['usuario'] = $_COOKIE['usuario'];
    }

    if (!$_SESSION['usuario']) {
        header('Location: login.php');
    }

?>