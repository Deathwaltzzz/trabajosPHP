<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "users";

$link = mysqli_connect($host,$dbuser,$dbpass,$db);

if(mysqli_connect_error())
    echo "<script>alert('no se pudo conectar con la base de datos')</script>";

mysqli_select_db($link, 'users') or die('No se puede abrir la estructura de BD'.mysqli_connect_error());
?>