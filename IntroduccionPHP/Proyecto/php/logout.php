<?php
    session_start();
    session_destroy();
    unset($_SESSION['usr']);
    header('Location: login/autentica.php');
    exit();